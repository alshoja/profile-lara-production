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