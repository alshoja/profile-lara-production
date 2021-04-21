// Common function for Post and Put
"use strict";

function saveOrUpdateOrGet(url, method, formData, id) {
  if (typeof id != "undefined") {
    formData.id = id;
  }
  formData._token = $("#csrf-token")[0].content;
  let fullUrl = HOST_URL + "/" + url;
  let res = null;
  $.ajax({
    url: fullUrl,
    method: method,
    data: formData,
    id,
    async: false,
    dataType: "json",
    success: (data) => {
      res = data;
      let message = res.message ? res.message : "Done";
      showToast(message, "", "info");
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      if (XMLHttpRequest.status != 400) {
        openAlert("error", "Error", "An Error occured while sending request!");
      }
    },
  });
  return res;
}

function getOrGetById(url, id = 0) {
  let fullUrl = HOST_URL + "/" + url + "/" + id;
  let res = null;
  $.ajax({
    url: fullUrl,
    type: "GET",
    async: false,
    dataType: "json",
    // data: { some_query_var: id },
    contentType: "application/json",
    success: function (result) {
      res = result;
    },
  });
  return res;
}

function destroyItem(url, id = 0) {
  let fullUrl = HOST_URL + "/" + url + "/" + id;
  $.ajax({
    url: fullUrl,
    type: "Delete",
    dataType: "json",
    contentType: "application/json",
    success: function (result) {
      showToast(result.message, "", "danger");
      reloadData();
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      openAlert("error", "Error", "Cannot delete items having data");
    },
  });
}

function getNotifications() {
  console.info("Checking for new notification.....");
  let res = null;
  let suburl = "/profiles?tab=inbox";
  let storageName = "notification_" + localStorage.getItem("session_id");
  if (localStorage.getItem(storageName) == null) {
    let obj = {};
    obj.id = 0;
    localStorage.setItem(storageName, JSON.stringify([obj]));
  }
  $.ajax({
    url: HOST_URL + "/notifications",
    type: "GET",
    async: true,
    dataType: "json",
    timeout: 10000,
    contentType: "application/json",
    success: function (result) {
      let localStorageObj = JSON.parse(localStorage.getItem(storageName));
      const newNotification = result.filter(
        ({ id: id1 }) => !localStorageObj.some(({ id: id2 }) => id2 === id1)
      );
      if (newNotification.length > 0) {
        newNotification.forEach((res) => {
          showToast(res.message, "Notification", "warning");
        });
      }
      localStorage.setItem(storageName, JSON.stringify(result));

      let data = result;
      let contentStr = "";
      let span = document.getElementById("count-span");
      if (data.length > 0) {
        span.innerHTML = data.length;
      } else {
        span.innerHTML = 0;
      }
      if (data.length > 0) {
        data.forEach(function (o) {
          contentStr +=
            `<a href="#" class="navi-item">
          <div class="navi-link">
              <div class="navi-icon mr-2">
                  <i class="flaticon2-paper-plane  text-danger"></i>
              </div>
              <div class="navi-text">
                  <div class="font-weight-bold"> <a href=` +
            HOST_URL +
            `/profiles?tab=inbox>` +
            o.message +
            `</div>
                  <div class="text-muted">  
                  ` +
            converMysqlToJsTime(o.created_at.toString()) +
            `
            </div>
              </div>
          </div>
      </a>`;
        });
      } else if (data.length <= 0) {
        contentStr += ` <div class="d-flex flex-center text-center text-muted min-h-200px">All
        caught up!
        <br />No new notifications.
    </div>`;
      }
      contentStr +=
        `<div class="d-flex flex-center pt-7">
  <a href=` +
        HOST_URL +
        suburl +
        `
      class="btn btn-light-primary font-weight-bold text-center">See
      All</a>
</div>`;

      document.getElementById(
        "topbar_notifications_notifications"
      ).innerHTML = contentStr;
    },
  });
  return res;
}

function getProfileData(id) {
  document.getElementById("profile_id").value = id;
  let fullUrl = HOST_URL + "/profile/details/" + id;
  let res = null;
  $.ajax({
    url: fullUrl,
    type: "GET",
    async: false,
    dataType: "json",
    contentType: "application/json",
    success: function (result) {
      console.log("profile", result);
      setEprofile(result);
      setDocs(result);
      setProducts(result.products);
      setVerifiedNote(result.trackings);
      const mappedArray = result.timeline.map((obj, i) => {
        let payload = {};
        (payload.name = obj.name), (payload.note = obj.note);
        if (obj.type == "rejected") {
          payload.class = "danger";
          payload.icon =
            HOST_URL + "/assets/media/svg/icons/Code/Error-circle.svg";
        } else if (obj.type == "approved") {
          payload.class = "success";
          payload.icon =
            HOST_URL + "/assets/media/svg/icons/Navigation/Down-2.svg";
        } else {
          payload.class = "secondary";
          payload.icon =
            HOST_URL + "/assets/media/svg/icons/Navigation/Down-2.svg";
        }
        if (i % 2 == 0) {
          payload.position = "left";
        } else {
          payload.position = "right";
        }
        (payload.is_approved = obj.is_approved),
          (payload.user_id = obj.user_id);
        payload.type = obj.type;
        payload.created_at = getTimeWithAmPm(new Date(obj.created_at));
        return payload;
      });
      setNotes(mappedArray);
      setTrack(mappedArray);
    },
  });
  return res;
}
function setVerifiedNote(profile) {
  if (profile.length > 0) {
    const session_id = localStorage.getItem("session_id");
    let signed = profile.some((e) => {
      console.log(e);
      return e.owned_by == session_id;
    });
    let title = document.getElementById("title");
    let verified = document.getElementById("verfied");
    if (title != null) {
      if (signed == true) {
        title.setAttribute("data-original-title", "Verified by You");
        verified.classList.add("text-success");
        verified.innerHTML = "  Verfied ✓";
      } else {
        title.setAttribute("data-original-title", "Not Verified");
        verified.classList.add("text-danger");
        verified.innerHTML = " Not Verfied ✗";
      }
    }
  }
}
function setEprofile(profile) {
  let scannedDocument1 = getExtension(profile.scanned_document1);
  let scannedDocument2 = getExtension(profile.scanned_document2);
  let scannedDocument3 = getExtension(profile.scanned_document3);

  console.log("here is the extension of doc1", scannedDocument1);

  let heading = document.getElementById("exampleModalLabel");
  heading.innerHTML = profile.name;
  document.getElementById("name_arabic").innerHTML = profile.name_arabic;
  document.getElementById("name").innerHTML = profile.name;
  document.getElementById("nationality").innerHTML = profile.nationality;
  document.getElementById("gender").innerHTML = profile.gender;
  document.getElementById("dob").innerHTML = profile.dob;
  document.getElementById("place_birth").innerHTML = profile.place_birth;
  document.getElementById("address").innerHTML = profile.address;

  document.getElementById("referal_name").innerHTML = profile.referal_name;
  document.getElementById("product_type").innerHTML = profile.product_type;
  document.getElementById("passport_no").innerHTML = profile.passport_no;
  document.getElementById("passport_issue").innerHTML = profile.passport_issue;
  document.getElementById("date_issue").innerHTML = profile.date_issue;
  document.getElementById("residency").innerHTML = profile.residency;

  document.getElementById("location").innerHTML = profile.location;
  document.getElementById("date_expiry").innerHTML = profile.date_expiry;
  document.getElementById("uid").innerHTML = profile.uid;
  document.getElementById("proffession").innerHTML = profile.proffession;

  document.getElementById("inventory_name").innerHTML = profile.inventory_name;
  document.getElementById("inventory_codes").innerHTML =
    profile.inventory_codes;
  document.getElementById("note").innerHTML = profile.note;
  document.getElementById("inventory_detials").innerHTML =
    profile.inventory_detials;

  alert(profile.scanned_document1);

  let extention1 = profile.scanned_document1.split(".").pop();

  if (extention1 == "pdf") {
    document.getElementById("scanned_document1").href =
      HOST_URL + "/" + profile.scanned_document1;
  }

  document.getElementById("scanned_document2").src = profile.scanned_document2;
  document.getElementById("scanned_document3").src = profile.scanned_document3;
}

function setDocs(result) {
  document.getElementById("doc_1").src = result.doc_image;
  document.getElementById("doc_2").src = result.product_image;
  document.getElementById("doc_3").src = result.profile_image;
}

function setTrack(trackings) {
  let filteredTrackings = trackings.filter((res) => {
    return (
      res.type == "rejected" || res.type == "approved" || res.type == "pending"
    );
  });
  let contentStr = "";
  if (filteredTrackings.length > 0) {
    filteredTrackings.forEach(function (o) {
      contentStr +=
        ` <div class="timeline-item">
      <!--begin::Icon-->
      <div
          class="timeline-media bg-light-` +
        o.class +
        `">
          <span
              class="svg-icon svg-icon-` +
        o.class +
        ` svg-icon-md">
              <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Down-2.svg-->
              <img  src="` +
        o.icon +
        `">
              <!--end::Svg Icon-->
          </span>
      </div>
      <!--end::Icon-->

      <!--begin::Info-->
      <div
          class="timeline-desc timeline-desc-light-` +
        o.class +
        `">
          <span
              class="font-weight-bolder text-` +
        o.class +
        `">` +
        o.name +
        "&nbsp" +
        o.created_at +
        `</span>
          <p
              class="font-weight-normal text-dark-50 pb-2">
             ` +
        o.note +
        `
          </p>
      </div>
      <!--end::Info-->
  </div>`;
    });
  } else if (trackings.length <= 0) {
    contentStr += ` <br><br><div>No Track Data to Display </div>`;
  }
  document.getElementById("track_timeline").innerHTML = contentStr;
}

function setProducts(data) {
  let contentStr = "";
  if (data.length > 0) {
    data.forEach(function (o) {
      contentStr +=
        ` <tr
        class="">
        <td
            class="pl-0 pt-7">
            ` +
        o.manufacture_type +
        `
          </td>
        <td
            class="pl-0 pt-7">
            ` +
        o.product_type +
        `
           </td>
        <td
            class="pl-0 pt-7">
            ` +
        o.quantity_digit +
        `
            </td>
        <td
            class="pl-0 pt-7">
            ` +
        o.quantity_g +
        `
          </td>
        <td
            class="pl-0 pt-7">
            ` +
        o.quantity_kg +
        `
           </td>
        <td
            class="pl-0 pt-7">
            ` +
        o.quantity_ml +
        `
           </td>
        <td
            class="pl-0 pt-7">
            ` +
        o.shipped_type +
        `
          </td>

      </tr>`;
    });
  } else if (data.length <= 0) {
    contentStr += ` <tr><td>No  Products to Display </td></tr>`;
  }
  document.getElementById("product_table").innerHTML = contentStr;
}

function setNotes(notes) {
  let notesString = "";

  if (notes.length > 0) {
    notes.forEach(function (o) {
      notesString +=
        `
      <div class="timeline-items">
      <div
          class="timeline-item timeline-item-` +
        o.position +
        `">
          <div class="timeline-badge">
              <div class="bg-` +
        o.class +
        `">
              </div>
          </div>

          <div class="timeline-label">
              <span
                  class="text-success font-weight-bold">` +
        o.name +
        `
                  "&nbsp"` +
        o.created_at +
        `</span>
          </div>

          <div class="timeline-content">
              ` +
        o.note +
        `
          </div>
      </div>`;
    });
  } else if (notes.length <= 0) {
    notesString += `  <br><br><div>No Track notes to display </div>`;
  }
  document.getElementById("note_chat_timeline").innerHTML = notesString;
}

function replyNote() {
  let profile_id = document.getElementById("profile_id");
  let note = document.getElementById("replynote");

  const payLoad = {};
  payLoad.note = note.value;
  payLoad.profile_id = profile_id.value;
  payLoad.is_note = 1;
  const res = saveOrUpdateOrGet("timeline/reply/note", "POST", payLoad);
  getProfileData(res.profile_id);
  note.value = "";
  return res;
}

function AproveOrReject(action) {
  let profile_id = document.getElementById("profile_id");
  let reject_button = document.getElementById("reject");
  let approve_button = document.getElementById("approve");
  let note = null;
  console.log(action);
  if (action == "signed") {
    note = "Approved";
  } else {
    note = "Rejected";
  }
  const payLoad = {};
  payLoad.note = note;
  payLoad.profile_id = profile_id.value;
  payLoad.action = action;
  const res = saveOrUpdateOrGet("profile/sign/or/reject", "POST", payLoad);
  note = null;
  reject_button.disabled = true;
  approve_button.disabled = true;
  location.reload();
  return res;
}

function converMysqlToJsTime(timestamp) {
  let mysqlTs = new Date(Date.parse(timestamp));
  return timeDifference(new Date(), mysqlTs);
}

function timeDifference(current, previous) {
  var msPerMinute = 60 * 1000;
  var msPerHour = msPerMinute * 60;
  var msPerDay = msPerHour * 24;
  var msPerMonth = msPerDay * 30;
  var msPerYear = msPerDay * 365;

  var elapsed = current - previous;

  if (elapsed < msPerMinute) {
    return Math.round(elapsed / 1000) + " seconds ago";
  } else if (elapsed < msPerHour) {
    return Math.round(elapsed / msPerMinute) + " minutes ago";
  } else if (elapsed < msPerDay) {
    return Math.round(elapsed / msPerHour) + " hours ago";
  } else if (elapsed < msPerMonth) {
    return Math.round(elapsed / msPerDay) + " days ago";
  } else if (elapsed < msPerYear) {
    return Math.round(elapsed / msPerMonth) + " months ago";
  } else {
    return Math.round(elapsed / msPerYear) + " years ago";
  }
}

function perPageItems() {
  var currentPage = document.getElementById("perpage").value;
  const urlParams = new URLSearchParams(window.location.search);
  urlParams.set("perPage", currentPage);
  window.location.search = urlParams;
}

function getSections(val, url) {
  const data = getOrGetById(url, val);
  var html = "";
  var i;
  for (i = 0; i < data.sections.length; i++) {
    html +=
      "<option value=" +
      data.sections[i].id +
      ">" +
      data.sections[i].name +
      "</option>";
  }
  document.getElementById("section_id").innerHTML = html;
  return false;
}

function getExtension(file) {
  return file.split(".").pop();
}
