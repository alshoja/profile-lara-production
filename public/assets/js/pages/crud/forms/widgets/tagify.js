// Class definition
var KTTagifyDemos = (function () {
  // Private functions
  console.log(dep_id);
  var tagGeneralDirector = function () {
    // Init autocompletes
    var toEl = document.querySelector('input[name="gd"]');
    var tagify = new Tagify(toEl, {
      delimiters: ", ", // add new tags when a comma or a space character is entered
      maxTags: 10,
      blacklist: ["fuck", "shit", "pussy"],
      keepInvalidTags: false, // do not remove invalid tags (but keep them marked as invalid)
      whitelist: [],
      duplicates: false,
      templates: {
        dropdownItem: function (tagData) {
          try {
            var html = "";

            html += '<div class="tagify__dropdown__item">';
            html += '   <div class="d-flex align-items-center">';
            html +=
              '       <span class="symbol sumbol-' +
              (tagData.initialsState ? tagData.initialsState : "") +
              ' mr-2">';
            html +=
              '           <span class="symbol-label" style="background-image: url(\'' +
              (tagData.pic ? tagData.pic : "") +
              "')\">" +
              (tagData.initials ? tagData.initials : "") +
              "</span>";
            html += "       </span>";
            html += '       <div class="d-flex flex-column">';
            html +=
              '           <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">' +
              (tagData.value ? tagData.value : "") +
              "</a>";
            html +=
              '           <span class="text-muted font-weight-bold">' +
              (tagData.email ? tagData.email : "") +
              "</span>";
            html += "       </div>";
            html += "   </div>";
            html += "</div>";

            return html;
          } catch (err) {}
        },
      },
      transformTag: function (tagData) {
        tagData.class = "tagify__tag tagify__tag-light--danger";
      },
      dropdown: {
        classname: "color-blue",
        enabled: 1,
        maxItems: 5,
      },
    });

    tagify
      .on("input", getGD())
      .on("add", (e) => {
        console.log(e.type, e.detail);
        const dep_id = $("#per_dep_id").val();
        console.log(dep_id);
        saveOrUpdateOrGet("user/permission", "POST", e.detail.data, dep_id);
      })
      .on("remove", (e) => console.log(e.type, e.detail));

    async function getGD() {
      tagify.settings.whitelist.length = 0;
      var result = await getUserList("gd");
      mappedArray = result.map((res) => {
        return {
          value: res.name,
          email: res.email,
          user_id: res.id,
          role:'gd',
          initialsState: "warning",
          pic: HOST_URL + "/" + res.image,
          class: "tagify__tag--primary",
        };
      });
      tagify.settings.whitelist = mappedArray;
    }
  };
  var tagDirector = function () {
    // Init autocompletes
    var toE2 = document.getElementById("director");
    var tagifyTo = new Tagify(toE2, {
      delimiters: ", ", // add new tags when a comma or a space character is entered
      maxTags: 10,
      blacklist: ["fuck", "shit", "pussy"],
      keepInvalidTags: true, // do not remove invalid tags (but keep them marked as invalid)
      whitelist: [
        {
          value: "Chris Muller",
          email: "chris.muller@wix.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_11.jpg",
          class: "tagify__tag--primary",
        },
        {
          value: "Nick Bold",
          email: "nick.seo@gmail.com",
          initials: "SS",
          initialsState: "warning",
          pic: "",
        },
        {
          value: "Alon Silko",
          email: "alon@keenthemes.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_6.jpg",
        },
        {
          value: "Sam Seanic",
          email: "sam.senic@loop.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_8.jpg",
        },
        {
          value: "Sara Loran",
          email: "sara.loran@tilda.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_9.jpg",
        },
        {
          value: "Eric Davok",
          email: "davok@mix.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_13.jpg",
        },
        {
          value: "Sam Seanic",
          email: "sam.senic@loop.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_13.jpg",
        },
        {
          value: "Lina Nilson",
          email: "lina.nilson@loop.com",
          initials: "LN",
          initialsState: "danger",
          pic: "./assets/media/users/100_15.jpg",
        },
      ],
      templates: {
        dropdownItem: function (tagData) {
          try {
            var html = "";

            html += '<div class="tagify__dropdown__item">';
            html += '   <div class="d-flex align-items-center">';
            html +=
              '       <span class="symbol sumbol-' +
              (tagData.initialsState ? tagData.initialsState : "") +
              ' mr-2">';
            html +=
              '           <span class="symbol-label" style="background-image: url(\'' +
              (tagData.pic ? tagData.pic : "") +
              "')\">" +
              (tagData.initials ? tagData.initials : "") +
              "</span>";
            html += "       </span>";
            html += '       <div class="d-flex flex-column">';
            html +=
              '           <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">' +
              (tagData.value ? tagData.value : "") +
              "</a>";
            html +=
              '           <span class="text-muted font-weight-bold">' +
              (tagData.email ? tagData.email : "") +
              "</span>";
            html += "       </div>";
            html += "   </div>";
            html += "</div>";

            return html;
          } catch (err) {}
        },
      },
      transformTag: function (tagData) {
        tagData.class = "tagify__tag tagify__tag-light--warning";
      },
      dropdown: {
        classname: "color-blue",
        enabled: 1,
        maxItems: 5,
      },
    });
  };
  var tagDH = function () {
    // Init autocompletes
    var toE3 = document.getElementById("departhead");
    var tagifyTo = new Tagify(toE3, {
      delimiters: ", ", // add new tags when a comma or a space character is entered
      maxTags: 10,
      blacklist: ["fuck", "shit", "pussy"],
      keepInvalidTags: true, // do not remove invalid tags (but keep them marked as invalid)
      whitelist: [
        {
          value: "Chris Muller",
          email: "chris.muller@wix.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_11.jpg",
          class: "tagify__tag--primary",
        },
        {
          value: "Nick Bold",
          email: "nick.seo@gmail.com",
          initials: "SS",
          initialsState: "warning",
          pic: "",
        },
        {
          value: "Alon Silko",
          email: "alon@keenthemes.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_6.jpg",
        },
        {
          value: "Sam Seanic",
          email: "sam.senic@loop.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_8.jpg",
        },
        {
          value: "Sara Loran",
          email: "sara.loran@tilda.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_9.jpg",
        },
        {
          value: "Eric Davok",
          email: "davok@mix.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_13.jpg",
        },
        {
          value: "Sam Seanic",
          email: "sam.senic@loop.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_13.jpg",
        },
        {
          value: "Lina Nilson",
          email: "lina.nilson@loop.com",
          initials: "LN",
          initialsState: "danger",
          pic: "./assets/media/users/100_15.jpg",
        },
      ],
      templates: {
        dropdownItem: function (tagData) {
          try {
            var html = "";

            html += '<div class="tagify__dropdown__item">';
            html += '   <div class="d-flex align-items-center">';
            html +=
              '       <span class="symbol sumbol-' +
              (tagData.initialsState ? tagData.initialsState : "") +
              ' mr-2">';
            html +=
              '           <span class="symbol-label" style="background-image: url(\'' +
              (tagData.pic ? tagData.pic : "") +
              "')\">" +
              (tagData.initials ? tagData.initials : "") +
              "</span>";
            html += "       </span>";
            html += '       <div class="d-flex flex-column">';
            html +=
              '           <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">' +
              (tagData.value ? tagData.value : "") +
              "</a>";
            html +=
              '           <span class="text-muted font-weight-bold">' +
              (tagData.email ? tagData.email : "") +
              "</span>";
            html += "       </div>";
            html += "   </div>";
            html += "</div>";

            return html;
          } catch (err) {}
        },
      },
      transformTag: function (tagData) {
        tagData.class = "tagify__tag tagify__tag-light--success";
      },
      dropdown: {
        classname: "color-blue",
        enabled: 1,
        maxItems: 5,
      },
    });
  };

  var tagSuper = function () {
    // Init autocompletes
    var toE4 = document.getElementById("super");
    var tagifyTo = new Tagify(toE4, {
      delimiters: ", ", // add new tags when a comma or a space character is entered
      maxTags: 10,
      blacklist: ["fuck", "shit", "pussy"],
      keepInvalidTags: true, // do not remove invalid tags (but keep them marked as invalid)
      whitelist: [
        {
          value: "Chris Muller",
          email: "chris.muller@wix.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_11.jpg",
          class: "tagify__tag--primary",
        },
        {
          value: "Nick Bold",
          email: "nick.seo@gmail.com",
          initials: "SS",
          initialsState: "warning",
          pic: "",
        },
        {
          value: "Alon Silko",
          email: "alon@keenthemes.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_6.jpg",
        },
        {
          value: "Sam Seanic",
          email: "sam.senic@loop.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_8.jpg",
        },
        {
          value: "Sara Loran",
          email: "sara.loran@tilda.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_9.jpg",
        },
        {
          value: "Eric Davok",
          email: "davok@mix.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_13.jpg",
        },
        {
          value: "Sam Seanic",
          email: "sam.senic@loop.com",
          initials: "",
          initialsState: "",
          pic: "./assets/media/users/100_13.jpg",
        },
        {
          value: "Lina Nilson",
          email: "lina.nilson@loop.com",
          initials: "LN",
          initialsState: "danger",
          pic: "./assets/media/users/100_15.jpg",
        },
      ],
      templates: {
        dropdownItem: function (tagData) {
          try {
            var html = "";

            html += '<div class="tagify__dropdown__item">';
            html += '   <div class="d-flex align-items-center">';
            html +=
              '       <span class="symbol sumbol-' +
              (tagData.initialsState ? tagData.initialsState : "") +
              ' mr-2">';
            html +=
              '           <span class="symbol-label" style="background-image: url(\'' +
              (tagData.pic ? tagData.pic : "") +
              "')\">" +
              (tagData.initials ? tagData.initials : "") +
              "</span>";
            html += "       </span>";
            html += '       <div class="d-flex flex-column">';
            html +=
              '           <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">' +
              (tagData.value ? tagData.value : "") +
              "</a>";
            html +=
              '           <span class="text-muted font-weight-bold">' +
              (tagData.email ? tagData.email : "") +
              "</span>";
            html += "       </div>";
            html += "   </div>";
            html += "</div>";

            return html;
          } catch (err) {}
        },
      },
      transformTag: function (tagData) {
        tagData.class = "tagify__tag tagify__tag-light--primary";
      },
      dropdown: {
        classname: "color-blue",
        enabled: 1,
        maxItems: 5,
      },
    });
  };

  return {
    // public functions
    init: function () {
      tagGeneralDirector();
      tagDirector();
      tagDH();
      tagSuper();
    },
  };

  async function getUserList(role) {
    let fullUrl = HOST_URL + "/user/permissions";
    return await $.ajax({
      type: "POST",
      dataType: "json",
      url: fullUrl,
      data: { role: role },
    });
  }
})();

jQuery(document).ready(function () {
  KTTagifyDemos.init();
});

function setDepartment(id) {
  $("#per_dep_id").val(id);
}
