"use strict";
// console.log(chartSettings);
// Class definition
var KTDateWidgets = (function () {
  // Private properties

  // General Controls
  var _initDaterangepicker = function () {
    if ($("#kt_dashboard_daterangepicker").length == 0) {
      return;
    }

    var picker = $("#kt_dashboard_daterangepicker");
    var start = moment();
    var end = moment();

    function cb(start, end, label) {
      var title = "";
      var range = "";
      var searchDate = "";
      var from = "";
      var to = "";
      const urlParams = new URLSearchParams(window.location.search);

      if (end - start < 100 || label == "Today") {
        title = "All";
        range = start.format("MMM D");
        searchDate = start.format("Y-MM-D");
      } else if (label == "Yesterday") {
        title = "Yesterday:";
        range = start.format("MMM D");
        searchDate = start.format("Y-MM-D");
      } else {
        range = start.format("MMM D") + " - " + end.format("MMM D");
        from = start.format("Y-MM-D");
        to = end.format("Y-MM-DD");
      }

      if (searchDate) {
        urlParams.set("search_date", searchDate);
        urlParams.set("from", from);
        urlParams.set("to", to);
        urlParams.set("title", title);
        urlParams.set("range", range);
        urlParams.set("date_range", from + "-" + to);
      } else {
        urlParams.set("from", from);
        urlParams.set("to", to);
        urlParams.set("title", title);
        urlParams.set("range", range);
        urlParams.set("date_range", from + "/" + to);
      }

      if (title != "All") {
        // location.href = window.location.href + searchUrl;
        window.location.search = urlParams;
        // location.reload();
      }
    }

    picker.daterangepicker(
      {
        direction: KTUtil.isRTL(),
        startDate: start,
        endDate: end,
        opens: "left",
        applyClass: "btn-primary",
        cancelClass: "btn-light-primary",
        ranges: {
          // Today: [moment(), moment()],
          Yesterday: [
            moment().subtract(1, "days"),
            moment().subtract(1, "days"),
          ],
          "Last 7 Days": [moment().subtract(6, "days"), moment()],
          "Last 30 Days": [moment().subtract(29, "days"), moment()],
          "This Month": [moment().startOf("month"), moment().endOf("month")],
          "Last Month": [
            moment().subtract(1, "month").startOf("month"),
            moment().subtract(1, "month").endOf("month"),
          ],
        },
      },
      cb
    );

    cb(start, end, "");
  };

  // Public methods
  return {
    init: function () {
      // General Controls
      _initDaterangepicker();
    },
  };
})();

// Webpack support
if (typeof module !== "undefined") {
  module.exports = KTWidgets;
}

jQuery(document).ready(function () {
  KTDateWidgets.init();
});
