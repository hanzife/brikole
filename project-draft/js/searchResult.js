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
$(".sr-profile-fav").click((e) => {

    let profile_liked = false;
    //#region Replace this code with a request to check wether this profile is liked or not
    profile_liked = $(e.currentTarget).hasClass('sr-profile-fav-liked');
    //#endregion
    // send a request to update DB data based on profile_liked status, upon success execute the code below
    $(e.currentTarget).toggleClass('sr-profile-fav-liked');
});
// working on resize behaviour
// ---
// Beacause i'm lazy, mafiyach li ybdl f'html o nzid les attributes manualy, soooo
// JS to automate that
// // add Sousprofession value as a attribute to it's prespective tag (language 100)
$('.sr-SousProf').each((i, e) => {
    // Extra :: just to beautify the text
    $(e).text($(e).text().trim());
    // Set attributes
    $(e).attr('data-value', $(e).text());
    $(e).attr('data-size', e.clientWidth);
});
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
            // console.group();
            // let phase_done = false;
            while (cont_inner_width > cont_width) {
                // console.group();
                // console.log({
                //     cont_inner_width,
                //     cont_width,
                //     last_sp_child
                // });
                cont_inner_width -= sp_cont.children[last_sp_child].clientWidth;
                sp_cont.children[last_sp_child].innerText = '...';
                sp_cont.children[last_sp_child].style.marginRight = "0px";
                // 
                if (cont_inner_width > cont_width) {
                    sp_cont.children[last_sp_child].style.visibility = 'hidden';
                    // 
                }
                // else
                // backwards();
                last_sp_child--;
                // console.log({
                //     cont_inner_width,
                //     cont_width,
                //     last_sp_child
                // });
                // console.groupEnd();
            }
            let ttt_data = {
                pos: i,
                cont_inner_width,
                cont_width
            }
            if (cont_inner_width < cont_width) {
                let dots_pos = -1;
                for (let j = 0; j < sp_cont.children.length; j++) {
                    if (sp_cont.children[j].innerText == '...') {
                        dots_pos = j;
                        j = sp_cont.children.length;
                    }
                }
                // 
                ttt_data.dot_pos = dots_pos;
                ttt_data.child_length = sp_cont.children.length - 1;
                // 
                if (dots_pos != -1) {
                    ttt_data.childs = [];
                    for (let j = dots_pos; j < sp_cont.children.length; j++) {
                        const sp_child = sp_cont.children[j];
                        const sp_child_width = sp_child.clientWidth;
                        const sp_child_orig_width = parseFloat(sp_child.getAttribute('data-size'));
                        // const sp_child_style = window.getComputedStyle(sp_child);
                        // const sp_child_marginRight = parseFloat(sp_child_style.marginRight.substr(0, sp_child_style.marginRight.length - 2));
                        // 
                        ttt_data.childs.push({
                            j,
                            sp_child_width,
                            // sp_child_marginRight,
                            sp_child_orig_width
                        });
                        // 
                        let marginValue = windowSize <= 575 ? 1 : 5;
                        // 
                        let next_block = j < sp_cont.children.length - 1 ? sp_cont.children[j + 1].clientWidth : 0;
                        // 
                        console.log((cont_inner_width - sp_child_width) + marginValue + sp_child_orig_width + next_block, cont_width);
                        console.log({
                            minus: cont_inner_width - sp_child_width,
                            marginValue,
                            sp_child_orig_width,
                            next_block
                        }, cont_width)
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
                        // console.log(true);
                        // console.log({
                        //     i,
                        //     sp_child_width,
                        //     sp_child_marginRight
                        // });
                    }
                    // console.log(ttt_data);
                }
                // 
                // if (i == 0)
                // console.log(ttt_data);
            }
            // 
            /*if (cont_inner_width < cont_width) {
                // while (cont_inner_width < cont_width) {
                let dots_pos = -1;
                for (let j = 0; j < sp_cont.children.length; j++) {
                    if (sp_cont.children[j].innerText == '...') {
                        dots_pos = j;
                        j = sp_cont.children.length;
                    }
                }
                if (dots_pos > -1) {
                    for (let x = dots_pos; x < sp_cont.children.length; x++) {
                        const element = sp_cont.children[x];
                        let element_old_size = element.clientWidth;
                        // 
                        let next_elem_size = sp_cont.children[x + 1] != undefined ? $(sp_cont.children[x + 1]).innerWidth() : 0;
                        var element_style = window.getComputedStyle(element);
                        // 
                        let testData = {
                            pos: i,
                            size: (cont_inner_width - element_old_size) + parseFloat(element.getAttribute('data-size')) + next_elem_size - parseFloat(element_style.marginRight.substr(0, element_style.marginRight.length - 2)),
                            cont: cont_width,
                            old: element_old_size
                        }
                        console.log(testData);
                        // console.log(i, , cont_width);
                        if ((cont_inner_width - element_old_size) + parseFloat(element.getAttribute('data-size')) + next_elem_size < cont_width) {
                            // console.log('in');
                            element.innerText = element.getAttribute('data-value');
                            if (sp_cont.children[x + 1])
                                sp_cont.children[x + 1].style.display = 'block';
                            cont_inner_width = (cont_inner_width - element_old_size) + parseFloat(element.getAttribute('data-size'));
                            // console.log(cont_inner_width, cont_width, dots_pos);
                        }
                    }
                }

            }*/
            // console.groupEnd();
        }
        // console.log(sp_cont);
    });
    if (windowSize <= 575) {

    } else if (windowSize <= 767) {

    } else if (windowSize <= 991) {

    } else if (windowSize <= 1199) {

    } else {

    }
}
