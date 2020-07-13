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
$(".sr-arrowLeft").click((e) => {
    let i = $(e.currentTarget).index(".sr-arrowLeft");
    document.getElementsByClassName("sr-portfolio")[i].scrollBy(-250, 0);
    console.log(i);
});
$(".sr-arrowRight").click((e) => {
    let i = $(e.currentTarget).index(".sr-arrowRight");
    document.getElementsByClassName("sr-portfolio")[i].scrollBy(250, 0);
    console.log(i);
});

//SEARCH BRIKOLUERS
$('#btn_searchBrikoluer').on("click", function () {
    var profession = document.getElementById("Select_profession").value;
    // var sousprofession = document.getElementsByName().value;
    var ville = document.getElementById("Select_Ville").value;
    window.location.href = "../../Search/" + profession + "/" + ville
});