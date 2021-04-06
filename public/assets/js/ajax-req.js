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
      console.log(data);
      res = data;
      let message = res.message ? res.message : "Done";
      showToast(message, "", "info");
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      console.log(XMLHttpRequest);
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
      console.log(textStatus);
      openAlert("error", "Error", "Cannot delete items having data");
    },
  });
}

function getNotifications() {
  let fullUrl = HOST_URL + "/notifications";
  let res = null;
  let suburl = "/profiles?tab=inbox";
  localStorage.setItem("notification", JSON.stringify([]));
  $.ajax({
    url: fullUrl,
    type: "GET",
    async: false,
    dataType: "json",
    contentType: "application/json",
    success: function (result) {
      localStorage.setItem("notification", JSON.stringify(result));
      let result2 = JSON.parse(localStorage.getItem("notification"));
      let result1 = result.filter((o1) => result2.some((o2) => o1.id != o2.id));
      console.log('new notificatio',result1)
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
                  <div class="font-weight-bold">` +
            o.message +
            `</div>
                  <div class="text-muted"> Rejected
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
  console.log("proilde data called");
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
      setEprofile(result);
      setDocs(result);
      const mappedArray = result.timeline.map((obj, i) => {
        console.log("object", obj);
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

function setEprofile(profile) {
  console.log('profile',profile);
  let heading = document.getElementById("exampleModalLabel");
  heading.innerHTML = profile.name;
  let name = document.getElementById("name").innerHTML = profile.name;
  let nationality = document.getElementById("nationality").innerHTML = profile.nationality;
  let gender = document.getElementById("gender").innerHTML = profile.gender;
  let dob = document.getElementById("dob").innerHTML = profile.dob;
  let citizen_status = document.getElementById("citizen_status").innerHTML = profile.citizen_status;
  let citizen_location = document.getElementById("citizen_location").innerHTML = profile.citizen_location;
  let citizen_id = document.getElementById("citizen_id").innerHTML = profile.citizen_id;
  let citizen_uid = document.getElementById("citizen_uid").innerHTML = profile.citizen_uid;
  let passport_no = document.getElementById("passport_no").innerHTML = profile.passport_no;
  let passport_type = document.getElementById("passport_type").innerHTML = profile.passport_type;
  let doentered_byb = document.getElementById("entered_by").innerHTML = profile.entered_by;
  let bought_by = document.getElementById("bought_by").innerHTML = profile.bought_by;
  let entity = document.getElementById("entity").innerHTML = profile.entity;
  let entry_date = document.getElementById("entry_date").innerHTML = profile.entry_date;
  let entity_location = document.getElementById("entity_location").innerHTML = profile.entity_location;
  let shipping_no = document.getElementById("shipping_no").innerHTML = profile.shipping_no;
  let coming_from = document.getElementById("coming_from").innerHTML = profile.coming_from;
  let going_to = document.getElementById("going_to").innerHTML = profile.going_to;
  let final_destination = document.getElementById("final_destination").innerHTML = profile.final_destination;
  let note = document.getElementById("note").innerHTML = profile.note;
  document.getElementById("profile_image").src = profile.profile_image;
  document.getElementById("product_image").src = profile.product_image;
  document.getElementById("doc_image").src = profile.doc_image;
  let record_status = document.getElementById("record_status").innerHTML = profile.record_status;
  let record_dep_transfer = document.getElementById("record_dep_transfer").innerHTML = profile.record_dep_transfer;
   document.getElementById("depart").innerHTML = profile.department.name;
   document.getElementById("section").innerHTML = profile.section.name;
  
}

function setDocs(result) {
  console.log(result);
  document.getElementById("doc_1").src = result.doc_image;
  document.getElementById("doc_2").src = result.product_image;
  document.getElementById("doc_3").src = result.profile_image;
}

function setTrack(trackings) {
  let filteredTrackings = trackings.filter((res) => {
    return res.type == "rejected" || res.type == "approved";
  });
  console.log(filteredTrackings);
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

function setDecision(data) {}

function setNotes(notes) {
  console.log("notes", notes);
  let notesString = "";
  // let filteredNotes = notes.filter((res) => {
  //   return res.type == "note";
  // });
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
  let note = document.getElementById("approve_note");
  if (note.value == "") {
    openAlert("error", "Required Empty", "A valid Note is required");
    return false;
  }
  console.log(action);
  const payLoad = {};
  payLoad.note = note.value;
  payLoad.profile_id = profile_id.value;
  payLoad.action = action;
  const res = saveOrUpdateOrGet("profile/sign/or/reject", "POST", payLoad);
  note.value = "";
  reject_button.disabled = true;
  approve_button.disabled = true;
  location.reload();
  return res;
}
