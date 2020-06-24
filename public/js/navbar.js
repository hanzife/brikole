/*
-
-
*/
console.log("js is working");

// $(window).resize(() => {
//   if ($(window).width() <= 992) {
//     $("#logo").attr("src", "../images/logos/logo2.svg");
//     console.log("992");
//   } else $("#logo").attr("src", "../images/logos/logo.svg");
// });

// CHANGE LOGO ON 991 SCREEN SIZE

// src http://www.javascriptkit.com/javatutors/matchmediamultiple.shtml
mql1 = window.matchMedia("(max-width: 991px)");

function maxWidth1(mqls) {
    if (mqls.matches) {
        $("#logo").attr("src", "../images/logos/logo2.svg");
    } else $("#logo").attr("src", "../images/logos/logo.svg");
}
maxWidth1(mql1);
mql1.addListener(maxWidth1); // to work on scroll

// MENU SM ICON BACKGROUND COLOR

$(".menuIcon_sm").click(() => {
    if ($(".menuIcon_sm").css("background-color") == "rgba(0, 0, 0, 0)") {
        $(".menuIcon_sm").css({
            "background-color": "#f1f1f2",
            transition: "0.5s",
        });
        console.log($(".menuIcon_sm").css("background-color"));
    } else
        $(".menuIcon_sm").css({
            "background-color": "rgba(0, 0, 0, 0)",
            transition: "0.5s",
        });
});
