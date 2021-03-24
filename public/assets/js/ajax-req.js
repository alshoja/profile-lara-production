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
      showToast("Item added",'','info');
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
