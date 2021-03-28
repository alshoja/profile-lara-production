// Common function for Post and Put
"use strict";

function saveOrUpdateOrGet(url, method, formData, id) {
  if (typeof id != "undefined") {
    formData.id = id;
  }
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
  let suburl = "/profiles";
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
  let fullUrl = HOST_URL + "/profile/details/" + id;
  let res = null;
  $.ajax({
    url: fullUrl,
    type: "GET",
    async: false,
    dataType: "json",
    contentType: "application/json",
    success: function (result) {
      let data = result.timeline;
      let contentStr = "";
      if (data.length > 0) {
        data.forEach(function (o) {
          contentStr += ` <div class="timeline-item">
          <!--begin::Icon-->
          <div
              class="timeline-media bg-light-primary">
              <span
                  class="svg-icon svg-icon-primary svg-icon-md">
                  <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-02-01-052524/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Down-2.svg--><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="24px"
                      height="24px"
                      viewBox="0 0 24 24"
                      version="1.1">
                      <g stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd">
                          <polygon
                              points="0 0 24 0 24 24 0 24" />
                          <path
                              d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z"
                              fill="#000000"
                              fill-rule="nonzero"
                              transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) " />
                      </g>
                  </svg>
                  <!--end::Svg Icon-->
              </span>
          </div>
          <!--end::Icon-->

          <!--begin::Info-->
          <div
              class="timeline-desc timeline-desc-light-primary">
              <span
                  class="font-weight-bolder text-primary">`+o.name+`
                  09:30 AM</span>
              <p
                  class="font-weight-normal text-dark-50 pb-2">
                 `+o.note+`
              </p>
          </div>
          <!--end::Info-->
      </div>`;
        });
      } else if (data.length <= 0) {
        contentStr += ` <p>No Track Data to Display </p>`;
      }

      document.getElementById("track_timeline").innerHTML = contentStr;
    },
  });
  return res;
}
