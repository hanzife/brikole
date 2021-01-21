// console.log("js is working");

// // CHECKBOX STYLE
// function checkBoxCss(selector, index) {
//     if ($("#" + selector).prop("checked")) {
//         $(".sr-checkmark:eq(" + index + ")").css({
//             "background-color": "#ffc000",
//             border: "1px solid #ffc000",
//         });
//     } else
//         $(".sr-checkmark:eq(" + index + ")").css({
//             "background-color": "white",
//             border: "1px solid #d2d6db",
//         });
// }

// checkBoxCss("sr-BrikoleurCheck", 0);
// $("#sr-BrikoleurCheck").change(() => {
//     checkBoxCss("sr-BrikoleurCheck", 0);
// });

// checkBoxCss("sr-AgenceCheck", 1);
// $("#sr-AgenceCheck").change(() => {
//     checkBoxCss("sr-AgenceCheck", 1);
// });

// // BRIKOLEUR PORTFOLIO FIXES
// function fixes() {
//     let count = $(".sr-portfolio-img").length;
//     // $(".sr-portfolio-img").children("img").length;

//     for (i = 0; i < count; i++) {
//         console.log(
//             $(".sr-portfolio-img:eq(" + i + ")").children("img").length
//         );
//         let numImg = $(".sr-portfolio-img:eq(" + i + ")").children("img")
//             .length;
//         let widthImg = numImg * 250;
//         $(".sr-portfolio-img:eq(" + i + ")").css("width", widthImg + "px");
//     }
// }
// fixes();

// // BRIKOLEUR PORTFOLIO ARROWS
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

//SEARCH BRIKOLUERS
$('#btn_searchBrikoluer').on("click", function () {
    var profession = document.getElementById("Select_profession").value;
    // var sousprofession = document.getElementsByName().value;
    var ville = document.getElementById("Select_Ville").value;
    window.location.href = "../../Search/" + profession + "/" + ville
});
//Click Brikoleur for profile
$('.sr-profileInfo').on("click", function () {
    var id_brikoleur = $(this).find('.selectedBrikoleur').val();
    // alert(id_brikoleur);
    window.location.href = "../../search/" + id_brikoleur;
});




// New JS



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
        // console.log(
        //     $(".sr-portfolio-img:eq(" + i + ")").children("img").length
        // );
        let numImg = $(".sr-portfolio-img:eq(" + i + ")").children("img")
            .length;
        let widthImg = numImg * 250;
        $(".sr-portfolio-img:eq(" + i + ")").css("width", widthImg + "px");
    }
}
fixes();

// BRIKOLEUR PORTFOLIO ARROWS
// LEGACY CODE
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
// 
// Fav button


$('.btn_like').on("click", function (e) {
    var id_brikoleur = $(this).find('.BrikoleurAddFav').val();
    //#region Replace this code with a request to check wether this profile is liked or not
    profile_liked = $(e.currentTarget).hasClass('sr-profile-fav-liked');

    //get profile_liked condition
    var profile_liked = profile_liked.toString()

    $.ajax({
        url: '/search/' + id_brikoleur + '/BrikoleurAddFav',
        type: 'GET',
        data: { profile_liked: profile_liked },
        success: function (data) {
            // send a request to update DB data based on profile_liked status, upon success execute the code below
            $(e.currentTarget).toggleClass('sr-profile-fav-liked');

        }

    });

});

//Load More Data 
$('.sr-showMore').on("click", function () {
    var profession = document.getElementById("Select_profession").value;
    var ville = document.getElementById("Select_Ville").value;



    $.ajax({
        url: "/sr_loadmore",
        type: 'GET',
        data: { profession: profession, ville: ville },
        success: function (data) {
            // $('.sr-showMore').remove();
            // $('.sr-records').append(data);


        }

    });

    // return view('searchresults');
});

// working on resize behaviour
// ---
// Beacause i'm lazy, mafiyach li ybdl f'html o nzid les attributes manualy, soooo
// JS to automate that
// // add Sousprofession value as a attribute to it's prespective tag (language 100)
load_attribs_data();

function load_attribs_data() {
    // let sizes = [];
    // if (window.innerWidth <= 575) {
    //     $('.sr-profileInfo').each((i_s, cont) => {
    //         const sub_cont = cont.children[1];
    //         // In small sizes the element of whoch i get the size data is display none
    //         // which means getting size values will result in 0
    //         // so the trick is to redesplay it, hide it, position absllute it to not interfare with the layout
    //         sub_cont.style.visibility = 'hidden';
    //         sub_cont.style.display = 'flex';
    //         sub_cont.style.position = 'absolute';
    //         $(sub_cont.children).each((i_e, sp) => {
    //             sp.style.fontSize = '14px';
    //             // 
    //             sizes.push(sp.clientWidth);
    //         });
    //     });
    //     // console.log(sizes);
    // }
    // //
    // let sizes_pos = 0;
    $('.sr-SousProf').each((i, e) => {
        // Extra :: just to beautify the text
        $(e).text($(e).text().trim());
        // Set attributes
        $(e).attr('data-value', $(e).text());
        // if (window.innerWidth <= 575) {
        //     if ($(e).parent().hasClass('sr-SousProf-all-resp')) {
        //         // console.log(e, sizes[sizes_pos]);
        //         $(e).attr('data-size', sizes[sizes_pos]);
        //         sizes_pos++;
        //     }
        // } else
        $(e).attr('data-size', e.clientWidth);
    });
    // 
    // if (window.innerWidth <= 575) {
    //     $('.sr-profileInfo').each((i_s, cont) => {
    //         const sub_cont = cont.children[1];
    //         // Reset style
    //         sub_cont.style.visibility = 'visible';
    //         sub_cont.style.display = 'none';
    //         sub_cont.style.position = 'unset';
    //         $(sub_cont.children).each((i_e, sp) => {
    //             sp.style.fontSize = '12px';
    //         });
    //     });
    // }

}
// handling sous-profession display
adaptive_sps();
window.addEventListener("resize", adaptive_sps);

function adaptive_sps() {
    const windowSize = window.innerWidth;
    $('.sr-SousProf-all').each((i, sp_cont) => {
        const is_mini_sp = $(sp_cont).hasClass('sr-SousProf-all-resp');
        let func_continue = false;
        if (windowSize <= 575) {
            if (is_mini_sp) {
                func_continue = true
            }
        } else {
            if (!is_mini_sp) {
                func_continue = true;
            }
        }
        // 
        if (func_continue) {
            const cont_width = sp_cont.clientWidth;
            let cont_inner_width = 0;
            let last_sp_child = sp_cont.children.length - 1;
            // 
            for (let j = 0; j < sp_cont.children.length; j++) {
                const sous_profession = sp_cont.children[j];
                var sp_style = window.getComputedStyle(sous_profession);
                cont_inner_width += sous_profession.clientWidth + parseFloat(sp_style.marginRight.substr(0, sp_style.marginRight.length - 2));
            }
            // 
            while (cont_inner_width > cont_width) {
                cont_inner_width -= sp_cont.children[last_sp_child].clientWidth;
                sp_cont.children[last_sp_child].innerText = '...';
                sp_cont.children[last_sp_child].style.marginRight = "0px";
                // 
                if (cont_inner_width > cont_width)
                    sp_cont.children[last_sp_child].style.visibility = 'hidden';
                last_sp_child--;
            }
            // 
            if (cont_inner_width < cont_width && windowSize > 575) {
                let dots_pos = -1;
                for (let j = 0; j < sp_cont.children.length; j++) {
                    if (sp_cont.children[j].innerText == '...') {
                        dots_pos = j;
                        j = sp_cont.children.length;
                    }
                }
                if (dots_pos != -1) {
                    for (let j = dots_pos; j < sp_cont.children.length; j++) {
                        const sp_child = sp_cont.children[j];
                        const sp_child_width = sp_child.clientWidth;
                        const sp_child_orig_width = parseFloat(sp_child.getAttribute('data-size'));
                        // 
                        let marginValue = windowSize <= 575 ? 1 : 5;
                        // 
                        let next_block = j < sp_cont.children.length - 1 ? sp_cont.children[j + 1].clientWidth : 0;
                        // 
                        // if (i == 0)
                        // console.log((cont_inner_width - sp_child_width) + marginValue + sp_child_orig_width + next_block, {
                        //     minus: cont_inner_width - sp_child_width,
                        //     marginValue,
                        //     sp_child_orig_width,
                        //     next_block
                        // }, cont_width)
                        if ((cont_inner_width - sp_child_width) + marginValue + sp_child_orig_width + next_block <= cont_width) {
                            sp_child.innerText = sp_child.getAttribute('data-value');
                            if (sp_cont.children[j + 1]) {
                                cont_inner_width += marginValue;
                                // 
                                sp_cont.children[j].style.marginRight = `${marginValue}px`;
                                sp_cont.children[j + 1].style.visibility = 'visible';
                            }
                            cont_inner_width = (cont_inner_width - sp_child_width) + sp_child_orig_width;
                        }
                    }
                }
            }
        }
    });
    if (windowSize <= 575) {

    } else if (windowSize <= 767) {

    } else if (windowSize <= 991) {

    } else if (windowSize <= 1199) {

    } else {

    }
}
