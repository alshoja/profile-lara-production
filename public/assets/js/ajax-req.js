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
      // console.log(data);
      res = data;
      showToast("Item added", "", "info");
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      console.log(XMLHttpRequest);
      if (XMLHttpRequest.status != 400) {
        openAlert("error", "Error", "Oops! Server Error !");
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
  $.ajax({
    url: fullUrl,
    type: "GET",
    async: false,
    dataType: "json",
    contentType: "application/json",
    success: function (result) {
      let data = result.approved;
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
            o.name +
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
        let payload = {};
        (payload.name = obj.name), (payload.note = obj.note);
        if (obj.is_approved == 0) {
          payload.class = "danger";
          payload.icon =
            HOST_URL + "/assets/media/svg/icons/Code/Error-circle.svg";
        } else {
          payload.class = "primary";
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
  let heading = document.getElementById("exampleModalLabel");
  heading.innerHTML = profile.name;
}

function setDocs(result) {
  document.getElementById("doc_1").src = result.doc_image;
  document.getElementById("doc_2").src = result.product_image;
  document.getElementById("doc_3").src = result.profile_image;
}

function setTrack(trackings) {
  let contentStr = "";
  if (trackings.length > 0) {
    trackings.forEach(function (o) {
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
  let note = document.getElementById("approve_note");

  const payLoad = {};
  payLoad.value = note.value;
  payLoad.profile_id = profile_id.value;
  payLoad.action = action;
  const res = saveOrUpdateOrGet("profile/sign/", "POST", payLoad);
  // getProfileData(res.profile_id);
  note.value = "";
  return res;
}
