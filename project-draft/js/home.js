// console.log("js is working!");

//PROGRESS BAR FOR RECENT RESEARCH
function progressBarLength() {
    let scrollLeft = $(".recRechSlide").scrollLeft();
    let scrollWidth = $(".recRechSlide").get(0).scrollWidth;
    let clientWidth = $(".recRechSlide").get(0).clientWidth;
    //   let maxScrollVal = scrollWidth - clientWidth;
    let actualWidth = clientWidth + scrollLeft;
    let barLength = (actualWidth / scrollWidth) * 100;
    $(".progress-bar-cstm").css({ width: barLength + "%", transition: "0s" });
}
// $(".recRechSlide").scroll(() => {
//   progressBarLength();
// });
// $(window).resize(() => {
//   progressBarLength();
// });
// progressBarLength();

function scrollAnimation() {
    setInterval(() => {
        let scrollLeft = $(".recRechSlide").scrollLeft();
        let scrollWidth = $(".recRechSlide").get(0).scrollWidth;
        let clientWidth = $(".recRechSlide").get(0).clientWidth;
        let maxScrollVal = scrollWidth - clientWidth;
        // console.log(scrollLeft + "from " + maxScrollVal);

        // $(".recRechSlide").css("scroll-behavior", "smooth");

        document.getElementsByClassName("recRechSlide")[0].scrollBy(233, 0);
        if (scrollLeft == maxScrollVal) {
            $(".recRechSlide").scrollLeft(0);
        }
    }, 3000);
}
scrollAnimation();

mql1 = window.matchMedia("(max-width: 1199px)");

function maxWidth1(mqls) {
    if (mqls.matches) {
        $(".recRechSlide").scroll(() => {
            progressBarLength();
        });
        $(window).resize(() => {
            progressBarLength();
        });
        progressBarLength();
        scrollAnimation();
    }
}
maxWidth1(mql1);
mql1.addListener(maxWidth1);

//SLIDE FOR 'EXPLORER'
function slideIndicator() {
    let scrollLeft = $(".explorer").scrollLeft();
    let scrollWidth = $(".explorer").get(0).scrollWidth;
    let clientWidth = $(".explorer").get(0).clientWidth;
    //   let maxScrollVal = scrollWidth - clientWidth;
    // let actualWidth = clientWidth + scrollLeft;
    indicatorNum = Math.ceil(scrollWidth / clientWidth);

    //initialize container
    $(".slideIndicator-ctnr").html("");

    // add circles depending on content
    for (let i = 0; i < indicatorNum; i++) {
        $(".slideIndicator-ctnr").append(`<div class="slideIndicator"></div>`);
    }
    //container width depending on content
    // console.log($(".slideIndicator").length);
    let width_ctnr =
        ($(".slideIndicator").length + 1) * 10 +
        ($(".slideIndicator").length - 1) * 5;
    $(".slideIndicator-ctnr").css("width", width_ctnr + "px");
    //-------------------
    //first indicator css
    $(".slideIndicator").first().css({
        width: "20px",
        "background-color": "#676878",
    });
    //-------------------
    //scroll on click
    $(".slideIndicator").click((e) => {
        // console.log($(e.currentTarget).index());
        //scroll on click
        let width = $(e.currentTarget).index() * clientWidth;
        // console.log($(e.currentTarget).index());
        $(".explorer").scrollLeft(width);
        //------------
        // change circle css
        $(e.currentTarget).animate({
            width: "20px",
        });
        $(e.currentTarget).css("background-color", "#676878");

        $(".slideIndicator").not($(e.currentTarget)).animate({
            width: "10px",
        });
        $(".slideIndicator")
            .not($(e.currentTarget))
            .css("background-color", "#EBEBEC");
    });
}
$(window).resize(() => {
    slideIndicator();
});
slideIndicator();

//update indicator css on scroll
function dynamicIndicator() {
    let scrollLeft = $(".explorer").scrollLeft();
    let scrollWidth = $(".explorer").get(0).scrollWidth;
    let clientWidth = $(".explorer").get(0).clientWidth;
    let maxScrollVal = scrollWidth - clientWidth;
    let currentIndexF = scrollLeft / clientWidth;
    let currentIndex = Math.ceil(currentIndexF);

    $(".slideIndicator:eq(" + currentIndex + ")").css({
        "background-color": "#676878",
        width: "20px",
    });

    $(".slideIndicator")
        .not($(".slideIndicator:eq(" + currentIndex + ")"))
        .css({ "background-color": "#EBEBEC", width: "10px" });
}

// dynamicIndicator();
$(".explorer").scroll(dynamicIndicator);

function scrollAnimationExplorer() {
    setInterval(() => {
        let scrollLeft = $(".explorer").scrollLeft();
        let scrollWidth = $(".explorer").get(0).scrollWidth;
        let clientWidth = $(".explorer").get(0).clientWidth;
        let maxScrollVal = scrollWidth - clientWidth;
        // console.log(scrollLeft + "from " + maxScrollVal);

        // $(".recRechSlide").css("scroll-behavior", "smooth");

        document.getElementsByClassName("explorer")[0].scrollBy(332, 0);
        if (scrollLeft == maxScrollVal) {
            $(".explorer").scrollLeft(0);
        }
    }, 3000);
}
scrollAnimationExplorer();
