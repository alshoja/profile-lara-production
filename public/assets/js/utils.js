$(document).ready(function () {
  const timeout = 900000;  // 900000 ms = 15 minutes
  var idleTimer = null;
  $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
      clearTimeout(idleTimer);

      idleTimer = setTimeout(function () {
          document.getElementById('logout-form').submit();
      }, timeout);
  });
  $("body").trigger("mousemove");
});

function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    // alert("Please enter only Numbers.");
    return false;
  }

  return true;
}

function limitText(limitField, limitNum) {
  if (limitField.value.length > limitNum) {
      limitField.value = limitField.value.substring(0, limitNum);
  }
}