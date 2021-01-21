//

//****************************************************** */
// NOT FOUND PAGE
function cf_notFoundPage() {
    let elmnts = $(".cf-results-profil").length;
    if (elmnts == 0) {
        $(".cf-notFoundPage").css("display", "flex");
    } else $(".cf-notFoundPage").css("display", "none");

    // console.log(elmnts);
}
cf_notFoundPage();

//****************************************************** */
//DROPDOWN

//DROPDOWN ICON
function cf_ddIconUp() {
    $(".cf-filter-2-2")
        .html(`<svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.98755 0C1.72233 0 1.46798 0.105357 1.28044 0.292893C1.09291 0.48043 0.987549 0.734784 0.987549 1C0.987549 1.26522 1.09291 1.51957 1.28044 1.70711C1.46798 1.89464 1.72233 2 1.98755 2H12.9875C13.2528 2 13.5071 1.89464 13.6947 1.70711C13.8822 1.51957 13.9875 1.26522 13.9875 1C13.9875 0.734784 13.8822 0.48043 13.6947 0.292893C13.5071 0.105357 13.2528 0 12.9875 0H1.98755ZM1.98755 4C1.72233 4 1.46798 4.10536 1.28044 4.29289C1.09291 4.48043 0.987549 4.73478 0.987549 5C0.987549 5.26522 1.09291 5.51957 1.28044 5.70711C1.46798 5.89464 1.72233 6 1.98755 6H6.98755C7.25277 6 7.50712 5.89464 7.69466 5.70711C7.88219 5.51957 7.98755 5.26522 7.98755 5C7.98755 4.73478 7.88219 4.48043 7.69466 4.29289C7.50712 4.10536 7.25277 4 6.98755 4H1.98755ZM1.98755 8C1.72233 8 1.46798 8.10536 1.28044 8.29289C1.09291 8.48043 0.987549 8.73478 0.987549 9C0.987549 9.26522 1.09291 9.51957 1.28044 9.70711C1.46798 9.89464 1.72233 10 1.98755 10H5.98755C6.25277 10 6.50712 9.89464 6.69466 9.70711C6.88219 9.51957 6.98755 9.26522 6.98755 9C6.98755 8.73478 6.88219 8.48043 6.69466 8.29289C6.50712 8.10536 6.25277 8 5.98755 8H1.98755ZM11.9875 13C11.9875 13.2652 12.0929 13.5196 12.2804 13.7071C12.468 13.8946 12.7223 14 12.9875 14C13.2528 14 13.5071 13.8946 13.6947 13.7071C13.8822 13.5196 13.9875 13.2652 13.9875 13V7.414L15.2805 8.707C15.4692 8.88916 15.7218 8.98995 15.9839 8.98767C16.2461 8.9854 16.497 8.88023 16.6824 8.69482C16.8678 8.50941 16.9729 8.2586 16.9752 7.9964C16.9775 7.7342 16.8767 7.4816 16.6945 7.293L13.6945 4.293C13.507 4.10553 13.2527 4.00021 12.9875 4.00021C12.7224 4.00021 12.4681 4.10553 12.2805 4.293L9.28055 7.293C9.18504 7.38525 9.10886 7.49559 9.05645 7.6176C9.00404 7.7396 8.97645 7.87082 8.9753 8.0036C8.97414 8.13638 8.99945 8.26806 9.04973 8.39095C9.10001 8.51385 9.17426 8.6255 9.26815 8.71939C9.36205 8.81329 9.4737 8.88754 9.59659 8.93782C9.71949 8.9881 9.85117 9.0134 9.98395 9.01225C10.1167 9.0111 10.2479 8.98351 10.37 8.9311C10.492 8.87869 10.6023 8.80251 10.6945 8.707L11.9875 7.414V13Z" fill="#585863"/>
</svg>`);
}

//TOGGLE DROPDOWN
$(".cf-filter-2").click(() => {
    if ($(".cf-filter-dd").css("display") == "none") {
        $(".cf-filter-dd").css("display", "block");
        $(".cf-filter-dd").focus();
        $(".cf-filter-2-2")
            .html(`<svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.98755 0C1.72233 0 1.46798 0.105357 1.28044 0.292893C1.09291 0.48043 0.987549 0.734784 0.987549 1C0.987549 1.26522 1.09291 1.51957 1.28044 1.70711C1.46798 1.89464 1.72233 2 1.98755 2H12.9875C13.2528 2 13.5071 1.89464 13.6947 1.70711C13.8822 1.51957 13.9875 1.26522 13.9875 1C13.9875 0.734784 13.8822 0.48043 13.6947 0.292893C13.5071 0.105357 13.2528 0 12.9875 0H1.98755ZM1.98755 4C1.72233 4 1.46798 4.10536 1.28044 4.29289C1.09291 4.48043 0.987549 4.73478 0.987549 5C0.987549 5.26522 1.09291 5.51957 1.28044 5.70711C1.46798 5.89464 1.72233 6 1.98755 6H8.98755C9.25277 6 9.50712 5.89464 9.69466 5.70711C9.88219 5.51957 9.98755 5.26522 9.98755 5C9.98755 4.73478 9.88219 4.48043 9.69466 4.29289C9.50712 4.10536 9.25277 4 8.98755 4H1.98755ZM1.98755 8C1.72233 8 1.46798 8.10536 1.28044 8.29289C1.09291 8.48043 0.987549 8.73478 0.987549 9C0.987549 9.26522 1.09291 9.51957 1.28044 9.70711C1.46798 9.89464 1.72233 10 1.98755 10H5.98755C6.25277 10 6.50712 9.89464 6.69466 9.70711C6.88219 9.51957 6.98755 9.26522 6.98755 9C6.98755 8.73478 6.88219 8.48043 6.69466 8.29289C6.50712 8.10536 6.25277 8 5.98755 8H1.98755ZM13.9875 5C13.9875 4.73478 13.8822 4.48043 13.6947 4.29289C13.5071 4.10536 13.2528 4 12.9875 4C12.7223 4 12.468 4.10536 12.2804 4.29289C12.0929 4.48043 11.9875 4.73478 11.9875 5V10.586L10.6945 9.293C10.5059 9.11084 10.2533 9.01005 9.99115 9.01233C9.72895 9.0146 9.47814 9.11977 9.29273 9.30518C9.10732 9.49059 9.00215 9.7414 8.99988 10.0036C8.9976 10.2658 9.09839 10.5184 9.28055 10.707L12.2805 13.707C12.4681 13.8945 12.7224 13.9998 12.9875 13.9998C13.2527 13.9998 13.507 13.8945 13.6945 13.707L16.6945 10.707C16.8767 10.5184 16.9775 10.2658 16.9752 10.0036C16.9729 9.7414 16.8678 9.49059 16.6824 9.30518C16.497 9.11977 16.2461 9.0146 15.9839 9.01233C15.7218 9.01005 15.4692 9.11084 15.2805 9.293L13.9875 10.586V5Z" fill="#585863"/>
                </svg>
                `);
    } else {
        {
            $(".cf-filter-dd").css("display", "none");
            cf_ddIconUp();
        }
    }
});
// $(".cf-filter-dd").blur((e) => {
//     $(".cf-filter-dd").css("display", "none");
// });

//HIDE DROPDOWN ON CLICK OUTSIDE
$(window).click((e) => {
    if (
        $(e.target).closest(".cf-filter-dd").length == 0 &&
        $(e.target).closest(".cf-filter-2").length == 0
    ) {
        $(".cf-filter-dd").css("display", "none");
        cf_ddIconUp();
    }
});

//FILL WITH SELECTED FILTER
$(".cf-filter-dd_opt").click((e) => {
    $("#cf-filter-selected").text($(e.currentTarget).text().trim());
    $(".cf-filter-dd_opt").removeClass("cf-filter-dd_opt-selected");
    $(e.currentTarget).addClass("cf-filter-dd_opt-selected");
    $(".cf-filter-dd").css("display", "none");
    cf_ddIconUp();

    //work here => value is 'e.currentTarget).text().trim()'
});

//****************************************************** */

//FIX 'SOUS PROFESSION' STYLE

function cf_cropSubProf(threshold, width) {
    if ($(".cf-results-top-info").css("max-width") == width + "px") {
        $(".cf-results-top-info-prof")
            .toArray()
            .forEach((profCntr) => {
                if ($(profCntr).children("div").length > threshold) {
                    $(profCntr).children("div").slice(threshold).remove();
                    $(profCntr).append(
                        `<div class="cf-results-top-info-prof-dots">...</div>`
                    );
                }
            });
    }
}

//FOR XL -> SM
cf_cropSubProf(2, 272.28);

//FOR XS
cf_cropSubProf(1, 152.11);

//FIX DESCRIPTION STYLE

function cf_cropDesc(selector, maxChar) {
    let text = $(selector)
        .text()
        .replace(/\n/g, " ")
        .replace(/ +/g, " ")
        .trim();
    if (text.length >= maxChar) {
        textRes = text.slice(0, maxChar) + " ...";
        $(selector).text(textRes);
    }
}

//FIX DESCRIPTION STYLE DEPENDING ON WIDTH

function cf_cropDesc_size() {
    //FOR XL - LG
    if ($(".cf-results-profil").css("width") == "920px") {
        cf_cropDesc(".cf-results-desc", 285);
    }

    //FOR MD
    if ($(".cf-results-profil").css("width") == "720px") {
        cf_cropDesc(".cf-results-desc", 214);
    }

    //FOR SM
    if ($(".cf-results-profil").css("width") == "540px") {
        cf_cropDesc(".cf-results-desc", 159);
    }

    //FOR XS
    if ($(".cf-results-profil").css("width") == "320px") {
        cf_cropDesc(".cf-results-desc", 80);
    }
}
cf_cropDesc_size();

//****************************************************** */

//DELETE FAV

// console.log($(".cf-results-profil").attr("idProfil"));

//REMOVE FAV ON HEART CLICK

$(".cf-results-top-heart").click((e) => {
    let index = $(e.currentTarget).index(".cf-results-top-heart");
    $(".cf-results-profil:eq(" + index + ")").css("display", "none");

    let idProfil = $(".cf-results-profil:eq(" + index + ")").attr("idProfil"); // use idProfil to delete from DB

    //if no profils left => display page not faund
    cf_notFoundPage();
});

//****************************************************** */

//ADD THAT MF* STROKE IF NUM EXISTS >:(

// console.log($(".cf-results-top-phone").children(".cf-phone-XL").length);

$(".cf-results-top-phone")
    .toArray()
    .forEach((phoneCntr) => {
        if ($(phoneCntr).children(".cf-phone-XL").length > 0) {
            $(phoneCntr).addClass("cf-results-top-phone-stroke");
        } else $(phoneCntr).removeClass("cf-results-top-phone-stroke");
    });

//****************************************************** */

//RECALL FUNCTIONS ON RESIZE
$(window).resize(() => {
    //FOR XL -> SM
    cf_cropSubProf(2, 272.28);

    //FOR XS
    cf_cropSubProf(1, 152.11);

    // cf_cropDesc_size();
});

//****************************************************** */
//****************************************************** */
//'CLIENT HISTORIQUE' PAGE

//DELETE HISTIRY

$(".ch-X-btn").click(() => {});

$(".ch-X-btn").click((e) => {
    let index = $(e.currentTarget).index(".ch-X-btn");
    $(".cf-results-profil:eq(" + index + ")").css("display", "none");

    let idHistory = $(".cf-results-profil:eq(" + index + ")").attr("idHistory"); // use idHistory to delete from DB

    //if no profils left => display page not faund
    cf_notFoundPage();
});

//****************************************************** */
//****************************************************** */
// LINKS

$(".cf-choice:eq(0)").click(() => {
    location.href = "clientFavoris.html";
});
$(".cf-choice:eq(1)").click(() => {
    location.href = "clientHistorique.html";
});
$(".cf-choice:eq(2)").click(() => {
    location.href = "clientComments.html";
});
