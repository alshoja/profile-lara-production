// Common function for Post and Put
"use strict";

function saveOrUpdateOrGet(url, method, formData, id) {
  let fullUrl = HOST_URL + "/" + url;
  let res = null;
  $.ajax({
    url: fullUrl,
    method: method,
    data: {
      id: id,
      formData: formData,
    },
    async: false,
    dataType: "json",
    success: (data) => {
      // console.log(data);
      res = data;
      showTaost("Item added", 'Success');
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      openAlert("error", "Error", "Something went wrong");
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
    data: { some_query_var: id },
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
      openAlert("success", "Success", result.message);
      reloadData();
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      console.log(textStatus);
      openAlert("error", "Error", "Cannot delete items having data");
    },
  });
}
