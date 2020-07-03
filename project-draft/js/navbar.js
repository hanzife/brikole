/*
-
-
*/
// console.log("js is working");

// $(window).resize(() => {
//   if ($(window).width() <= 992) {
//     $("#logo").attr("src", "images/logos/logo2.svg");
//     console.log("992");
//   } else $("#logo").attr("src", "images/logos/logo.svg");
// });

// CHANGE LOGO ON 991 SCREEN SIZE

// src http://www.javascriptkit.com/javatutors/matchmediamultiple.shtml
// mql1 = window.matchMedia("(max-width: 991px)");

// function maxWidth1(mqls) {
//   if (mqls.matches) {
//     $("#logo").attr("src", "images/logos/logo2.svg");
//   } else $("#logo").attr("src", "images/logos/logo.svg");
// }
// maxWidth1(mql1);
// mql1.addListener(maxWidth1); // to work on scroll

// MENU SM ICON BACKGROUND COLOR

$(".nv-menuIcon_xs").click(() => {
    if ($(".nv-menu-xs").css("display") == "none") {
        $(".nv-menu-xs").show(400);
        // $(".nv-menu-xs").css("display", "block");
        $(".nv-menuIcon_xs").css("background-color", "#f1f1f2");
        //
        $(".nv-menuIcon_xs").hover(() => {
            $(".nv-menuIcon_xs").css("background-color", "#f1f1f2");
        });
    } else {
        // $(".nv-menu-xs").css("display", "none");
        $(".nv-menu-xs").hide(400);
        $(".nv-menuIcon_xs").css("background-color", "unset");
        //
        $(".nv-menuIcon_xs").hover(
            () => {
                $(".nv-menuIcon_xs").css("background-color", "#f1f1f2");
            },
            () => {
                $(".nv-menuIcon_xs").css("background-color", "unset");
            }
        );
    }
});
