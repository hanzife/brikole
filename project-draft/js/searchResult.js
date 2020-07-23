console.log("js is working");

// CHECKBOX STYLE
function checkBoxCss(selector, index) {
    if ($("#" + selector).prop("checked")) {
        $(".sr-checkmark:eq(" + index + ")").css({
            "background-color": "#ffc000",
            border: "1px solid #ffc000",
        });
    } else
        $(".sr-checkmark:eq(" + index + ")").css({
            "background-color": "white",
            border: "1px solid #d2d6db",
        });
}

checkBoxCss("sr-BrikoleurCheck", 0);
$("#sr-BrikoleurCheck").change(() => {
    checkBoxCss("sr-BrikoleurCheck", 0);
});

checkBoxCss("sr-AgenceCheck", 1);
$("#sr-AgenceCheck").change(() => {
    checkBoxCss("sr-AgenceCheck", 1);
});

// BRIKOLEUR PORTFOLIO FIXES
function fixes() {
    let count = $(".sr-portfolio-img").length;
    // $(".sr-portfolio-img").children("img").length;

    for (i = 0; i < count; i++) {
        console.log(
            $(".sr-portfolio-img:eq(" + i + ")").children("img").length
        );
        let numImg = $(".sr-portfolio-img:eq(" + i + ")").children("img")
            .length;
        let widthImg = numImg * 250;
        $(".sr-portfolio-img:eq(" + i + ")").css("width", widthImg + "px");
    }
}
fixes();

// BRIKOLEUR PORTFOLIO ARROWS
// LEGACY CODE ~~salma
// $(".sr-arrowLeft").click((e) => {
//     let i = $(e.currentTarget).index(".sr-arrowLeft");
//     document.getElementsByClassName("sr-portfolio")[i].scrollBy(-250, 0);
//     console.log(i);
// });
// $(".sr-arrowRight").click((e) => {
//     let i = $(e.currentTarget).index(".sr-arrowRight");
//     document.getElementsByClassName("sr-portfolio")[i].scrollBy(250, 0);
//     console.log(i);
// });
// 
$(".sr-arrowLeft").click((e) => {
    sr_scroll($(e.currentTarget).index(".sr-arrowLeft"), 'L');
});
$(".sr-arrowRight").click((e) => {
    sr_scroll($(e.currentTarget).index(".sr-arrowRight"), 'R');
});
// 
function sr_scroll(pos, direction) {
    const container = document.getElementsByClassName("sr-portfolio")[pos];
    const scrollData = {
        width: container.scrollWidth,
        imgs: container.children[0].children.length,
        current: container.scrollLeft,
        scrollValue: 0
    }
    scrollData.scrollValue = scrollData.width / scrollData.imgs;
    // 
    if (scrollData.current == 0 && direction == 'L')
        container.scrollBy(scrollData.width, 0);
    else if ((scrollData.current + scrollData.scrollValue) == scrollData.width && direction == 'R')
        container.scrollBy(-scrollData.width, 0);
    else {
        if (direction == 'L')
            container.scrollBy(-scrollData.scrollValue, 0);
        else
            container.scrollBy(scrollData.scrollValue, 0);
    }
}
