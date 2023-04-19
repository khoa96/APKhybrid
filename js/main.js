$(function () {
  // =======CONTROLS LINEUPS TABS ========
  $("#line-up-tabs").tabs({
    active: 0,
  });

  // =======HANDLE DATEPICKER FOR PC ========
  $("#datepicker").datepicker({
    firstDay: 1,
    showOtherMonths: true,
    selectOtherMonths: true,
    dateFormat: "dd-mm-yy",
    onSelect: function (date, datepicker) {
      if (date) {
        // handle select datetime here
        alert("Selected Date: " + date);
      }
    },
  });
  // =======HANDLE DATEPICKER FOR PC ========

  // =======HANDLE DATEPICKER FOR MOBILE ========
  $("#datepicker-mobile").hide();
  // handle datepicker for mobile
  function padTo2Digits(num) {
    return num.toString().padStart(2, "0");
  }

  function formatDate(date = new Date()) {
    return [
      padTo2Digits(date.getDate()),
      padTo2Digits(date.getMonth() + 1),
      date.getFullYear(),
    ].join("/");
  }
  const date = new Date();
  $("#time-calender").text(formatDate());
  $("#btn-show-calender").on("click", function (event) {
    $("#datepicker-mobile").show();
    $(".list-league-dropdown").hide();
    $("#datepicker-mobile").datepicker({
      firstDay: 1,
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: "dd/mm/yy",
      onSelect: function (date, datepicker) {
        if (date) {
          // handle select datetime here
          $("#time-calender").text(date);
          $("#datepicker-mobile").hide();
        }
      },
    });
  });
  $("#all-league-tabs").tabs({
    active: 1,
  });
  $("#champions-league-tabs").tabs({
    active: 1,
  });
});

// =======HANDLE DATEPICKER FOR MOBILE ========

// ===========HANDLE CLICK TAB LEFT SIDEBAR FOR PC =======
function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
const nodeDefault = document.getElementById("defaultOpen");
if (nodeDefault) {
  nodeDefault.click();
}

// ===========HANDLE CLICK TAB LEFT SIDEBAR FOR PC =======

// ===========HANDLE OPEN TAB LEFT SIDEBAR FOR MOBILE (select league)=======
$(".list-league-dropdown").hide();
$("#btn-league-dropdown").on("click", function () {
  $("#datepicker-mobile").hide();
  $(".list-league-dropdown").toggle();
});

// handle click league for mobile
$(".league-dropdown-item").on("click", function () {
  const imgElement = $(this).children("img");
  const spanElement = $(this).children("span");
  if (imgElement.length && spanElement.length) {
    const src = imgElement.attr("src");
    const leagueName = spanElement.text();
    $("#league-image-mobile").attr("src", src);
    $("#league-name-mobile").text(leagueName);
  }
  $(".list-league-dropdown").hide();
  //code something here .....
});

// =================== HANDLE SELECT LEAGUE RANKING ===================

// hidden list league ranking when init
$(".list-league-ranking-dropdown").hide();

// toggle show list league ranking when click.
$("#btn-league-ranking-dropdown").on("click", function () {
  $(".list-league-ranking-dropdown").toggle();
});

// handle click league for mobile
$(".league-ranking-item").on("click", function () {
  const imgElement = $(this).children("img");
  const spanElement = $(this).children("span");
  if (imgElement.length && spanElement.length) {
    const src = imgElement.attr("src");
    const leagueName = spanElement.text();
    $("#league-ranking-image").attr("src", src);
    $("#league-ranking-name").text(leagueName);
  }
  $(".list-league-ranking-dropdown").hide();
  // code something here .....
});
// =================== HANDLE SELECT LEAGUE RANKING ===================

$(function () {
  function checkFlexGap() {
    // create flex container with row-gap set
    var flex = document.createElement("div");
    flex.style.display = "flex";
    flex.style.flexDirection = "column";
    flex.style.rowGap = "1px";

    // create two, elements inside it
    flex.appendChild(document.createElement("div"));
    flex.appendChild(document.createElement("div"));

    // append to the DOM (needed to obtain scrollHeight)
    document.body.appendChild(flex);
    var isSupported = flex.scrollHeight === 1; // flex container should be 1px high from the row-gap
    flex.parentNode.removeChild(flex);

    return isSupported;
  }

  const isSupportGap = checkFlexGap();
  function detectBrowser() {
    if (
      (navigator.userAgent.indexOf("Opera") ||
        navigator.userAgent.indexOf("OPR")) != -1
    ) {
      return "Opera";
    } else if (navigator.userAgent.indexOf("Chrome") != -1) {
      return "Chrome";
    } else if (navigator.userAgent.indexOf("Safari") != -1) {
      return "Safari";
    } else if (navigator.userAgent.indexOf("Firefox") != -1) {
      return "Firefox";
    } else if (
      navigator.userAgent.indexOf("MSIE") != -1 ||
      !!document.documentMode == true
    ) {
      return "IE"; //crap
    } else {
      return "Unknown";
    }
  }
  const browerName = detectBrowser();
  if (!isSupportGap || browerName === "Safari") {
    // support safari cannot support gap css property
    $("*").each(function () {
      const displayPro = $(this).css("display");
      const rowGap = $(this).css("row-gap");
      const columnGap = $(this).css("column-gap");
      const directionPro = $(this).css("flexDirection");
      if (
        displayPro === "flex" &&
        (rowGap !== "normal" || columnGap !== "normal")
      ) {
        const parent = $(this);
        parent.children().each(function (index) {
          if (directionPro === "row") {
            $(this).css("margin-right", columnGap);
          } else if (directionPro === "column") {
            $(this).css("margin-bottom", rowGap);
          }
        });
      }
    });
  }
});

//handle show popup
$(".popup").addClass("popup--show");
// function - Hide popup & body scroll off
const hidePopup = () => {
  $(".popup").removeClass("popup--show");
};
// Hide popup on click close button
$(".popup__close").on("click", hidePopup);

// Hide popup on click outside of popup
$(".popup").on("click", function (event) {
  if (event.target.classList.contains("popup")) {
    hidePopup();
  }
});
