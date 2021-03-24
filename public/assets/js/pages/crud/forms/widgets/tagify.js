// Class definition
var userPermissionTags = (function () {
  // Private functions
  let gdTagify = null;
  let directorTagify = null;
  let departHeadTagify = null;
  let supervisorTagify = null;

  // ------------------------------------------------- General Directors Tags Starts Here ------------------------------------
  let initGeneralDirector = function () {
    const generalDirector = document.querySelector('input[name="gd"]');
    gdTagify = createTagfyInstance(generalDirector);

    gdTagify
      .on("input", getGDTagUsers("gd", generalDirector))
      .on("add", (e) => {
        if (gdTagify.listeners.dropdown) {
          const dep_id = $("#per_dep_id").val();
          saveOrUpdateOrGet(
            "user/permission/gd",
            "POST",
            e.detail.data,
            dep_id
          );
        }
      })
      .on("remove", (e) => {
        const dep_id = $("#per_dep_id").val();
        destroyItem("user/permission/gd/" + e.detail.data.user_id, dep_id);
      });
  };

  let getGDTagUsers = async (role, textbox) => {
    gdTagify.settings.whitelist.length = 0;
    var userList = await getUserList(role);
    mappedArray = userList.map((res) => {
      return {
        value: res.name,
        email: res.email,
        user_id: res.id,
        role: role,
        initialsState: "warning",
        pic: HOST_URL + "/" + res.image,
        class: "tagify__tag tagify__tag-light--danger",
      };
    });
    gdTagify.settings.whitelist = mappedArray;
  };

  let loadGDTags = function (id, role) {
    gdTagify.removeAllTags();
    if (typeof id != "undefined") {
      const remoteTags = getOrGetById("user/permissions/" + role, id);
      if (remoteTags.length > 0) {
        gdTagify.addTags(remoteTags);
      }
    }
  };

  // ---------------------------------------------------Director tags starts here----------------------------------------
  let initDirector = function () {
    const Director = document.querySelector('input[name="director"]');
    directorTagify = createTagfyInstance(Director);

    directorTagify
      .on("input", getDirectorTagUsers("director", Director))
      .on("add", (e) => {
        if (directorTagify.listeners.dropdown) {
          const dep_id = $("#per_dep_id").val();
          saveOrUpdateOrGet(
            "user/permission/director",
            "POST",
            e.detail.data,
            dep_id
          );
        }
      })
      .on("remove", (e) => {
        console.log("director/remove", e.detail);
        const dep_id = $("#per_dep_id").val();
        alert("userID" + e.detail.data.user_id);
        alert("dep_id" + dep_id);
        destroyItem(
          "user/permission/director/" + e.detail.data.user_id,
          dep_id
        );
      });
  };

  let getDirectorTagUsers = async (role, textbox) => {
    directorTagify.settings.whitelist.length = 0;
    var result = await getUserList(role);
    mappedArray = result.map((res) => {
      return {
        value: res.name,
        email: res.email,
        user_id: res.id,
        role: role,
        initialsState: "warning",
        pic: HOST_URL + "/" + res.image,
        class: "tagify__tag tagify__tag-light--warning",
      };
    });
    directorTagify.settings.whitelist = mappedArray;
  };

  let loadDirectorTags = function (id, role) {
    directorTagify.removeAllTags();
    if (typeof id != "undefined") {
      const remoteTags = getOrGetById("user/permissions/" + role, id);
      if (remoteTags.length > 0) {
        directorTagify.addTags(remoteTags);
      }
    }
  };

  //  ------------------------------------------Department Head Tags starts Here--------------------------------------------------
  let initDH = function () {
    var departmentHead = document.querySelector('input[name="departhead"]');
    departHeadTagify = createTagfyInstance(departmentHead);

    departHeadTagify
      .on("input", getDepartHeadTagUsers("dh", departmentHead))
      .on("add", (e) => {
        if (departHeadTagify.listeners.dropdown) {
          const dep_id = $("#per_dep_id").val();
          saveOrUpdateOrGet(
            "user/permission/dh",
            "POST",
            e.detail.data,
            dep_id
          );
        }
      })
      .on("remove", (e) => {
        console.log("director/remove", e.detail);
        const dep_id = $("#per_dep_id").val();
        destroyItem("user/permission/dh/" + e.detail.data.user_id, dep_id);
      });
  };

  let getDepartHeadTagUsers = async (role, textbox) => {
    departHeadTagify.settings.whitelist.length = 0;
    var result = await getUserList(role);
    mappedArray = result.map((res) => {
      return {
        value: res.name,
        email: res.email,
        user_id: res.id,
        role: role,
        initialsState: "warning",
        pic: HOST_URL + "/" + res.image,
        class: "tagify__tag tagify__tag-light--warning",
      };
    });
    departHeadTagify.settings.whitelist = mappedArray;
  };

  let loadDhTags = function (id, role) {
    departHeadTagify.removeAllTags();
    if (typeof id != "undefined") {
      const remoteTags = getOrGetById("user/permissions/" + role, id);
      if (remoteTags.length > 0) {
        departHeadTagify.addTags(remoteTags);
      }
    }
  };

  // ----------------------------- Supervisors Tags Starts Here ------------------------------------------------------------------
  let initSupervisor = function () {
    const supervisor = document.querySelector('input[name="supervisor"]');
    supervisorTagify = createTagfyInstance(supervisor);

    supervisorTagify
      .on("input", getSuperTagUsers("supervisor", supervisor))
      .on("add", (e) => {
        if (supervisorTagify.listeners.dropdown) {
          const dep_id = $("#per_dep_id").val();
          saveOrUpdateOrGet(
            "user/permission/super",
            "POST",
            e.detail.data,
            dep_id
          );
        }
      })
      .on("remove", (e) => {
        const dep_id = $("#per_dep_id").val();
        destroyItem("user/permission/super/" + e.detail.data.user_id, dep_id);
      });
  };

  let getSuperTagUsers = async (role, textbox) => {
    supervisorTagify.settings.whitelist.length = 0;
    var userList = await getUserList(role);
    mappedArray = userList.map((res) => {
      return {
        value: res.name,
        email: res.email,
        user_id: res.id,
        role: role,
        initialsState: "warning",
        pic: HOST_URL + "/" + res.image,
        class: "tagify__tag tagify__tag-light--danger",
      };
    });
    supervisorTagify.settings.whitelist = mappedArray;
  };

  let loadSuperTags = function (id, role) {
    supervisorTagify.removeAllTags();
    if (typeof id != "undefined") {
      const remoteTags = getOrGetById("user/permissions/" + role, id);
      if (remoteTags.length > 0) {
        supervisorTagify.addTags(remoteTags);
      }
    }
  };

// ---------------------------------------- Create new Instance for tag Textboxes -----------------------------------------------
  let createTagfyInstance = (input) => {
    return new Tagify(input, {
      delimiters: ", ", // add new tags when a comma or a space character is entered
      maxTags: 10,
      enforceWhitelist: true,
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
        tagData.class = tagData.class;
      },
      dropdown: {
        classname: "color-blue",
        enabled: 1,
        maxItems: 5,
      },
    });
  };

  return {
    init: function () {
      initGeneralDirector();
      initDirector();
      initDH();
      initSupervisor();
    },
    getTags: function (id) {
      loadGDTags(id, "gd");
      loadDirectorTags(id, "director");
      loadDhTags(id, "dh");
      loadSuperTags(id, "supervisor");
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
  userPermissionTags.init();
});

function setDepartment(id, name) {
  $("#per_dep_id").val(id);
  $("#user_p_head").text("User permision of " + name);
  userPermissionTags.getTags(id);
}
