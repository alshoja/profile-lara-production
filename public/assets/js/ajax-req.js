// Common function for Post and Put
"use strict";

function saveOrUpdate(url, method, formData = 0, id = 0) {
  let fullUrl = HOST_URL + "/" + url;
  $.ajax({
    url: fullUrl,
    method: method,
    data: {
      id: id,
      formData: formData,
    },
    async: true,
    dataType: "json",
    success: (data) => {
      console.log(data);
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      alert("some error");
    },
  });
  return false;
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
