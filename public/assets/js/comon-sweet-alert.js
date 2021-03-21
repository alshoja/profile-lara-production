function destroy(url, id) {
  Swal.fire({
    title: "Confirm",
    text: "Are you sure you want to delete ?",
    icon: "success",
    buttonsStyling: false,
    confirmButtonText: "<i class='la la-trash'></i> Delete",
    showCancelButton: true,
    cancelButtonText: "<i class='la la-thumbs-down'></i> Cancel ",
    customClass: {
      confirmButton: "btn btn-danger",
      cancelButton: "btn btn-default",
    },
  }).then((result) => {
    if (result.value) {
      destroyItem(url, id);
      //   Swal.fire("Deleted!", "Your item has been deleted.", "success");
    }
  });
}

function openAlert(type, tittle, message) {
  Swal.fire(tittle, message, type);
}
