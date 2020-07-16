let btn_left = document.getElementById('b-m-bot-portfolio-preview-nav-btn-left');
let btn_right = document.getElementById('b-m-bot-portfolio-preview-nav-btn-right');
// 
const imgsBlock = document.getElementsByClassName('b-m-bot-portfolio-catalogue-img');
// NAV BUTTONS
if (btn_left && btn_right) {
    btn_left.onclick = () => portfolio_nav('l');
    // 
    btn_right.onclick = () => portfolio_nav('r');
}
// NAV USING THE CATALOGUE
Array.from(imgsBlock).forEach((imgBlock, imgPos) => {
    imgBlock.addEventListener('click', () => {
        let block_state = imgBlock.classList;
        let block_selected = !block_state[1].split('-').includes('inactive');
        if (!block_selected) {
            let selected_block = Array.from(imgsBlock).filter((block) => {
                if (block.classList[1].split('-').includes('active'))
                    return true;
            })[0];
            // 
            if (selected_block) {
                setTimeout(() => {
                    // Remove class from the active img
                    img_class_switcher(selected_block);
                    // 
                    // Add class to the clicked img
                    img_class_switcher(imgBlock);
                    // 
                    last_dot_scroll_pos = imgPos;
                }, 150);
                // 
                nav_goto(imgPos);
            }
        }
    });
    // NAV INDICATORS
    // SETUP
    make_dot(imgPos);
});
// Listen for scroll event
let last_dot_scroll_pos = 0;
document.getElementById('b-m-bot-portfolio-preview-imgs-cont').addEventListener('scroll', (e) => {
    let scrollData = {
        value: e.target.scrollLeft / e.target.scrollWidth,
        coefficient: 1 / imgsBlock.length,
    }
    let scroll_img_pos = Math.round(scrollData.value / scrollData.coefficient);
    if (last_dot_scroll_pos != scroll_img_pos) {
        img_class_switcher(imgsBlock[scroll_img_pos]);
        img_class_switcher(imgsBlock[last_dot_scroll_pos]);
        last_dot_scroll_pos = scroll_img_pos;
        update_nav(scroll_img_pos);
    }
});
//  

function portfolio_nav(direction) {
    const preview_imgs = document.getElementsByClassName('b-m-bot-portfolio-preview-img');
    let selected_img_pos = -1;
    Array.from(imgsBlock).forEach((block, i) => {
        if (block.classList[1].split('-').includes('active'))
            selected_img_pos = i;
    });
    // 

    if (selected_img_pos > -1) {
        let target_pos = 0;
        if (direction == 'l') {
            if (selected_img_pos <= 0)
                target_pos = preview_imgs.length - 1;
            else
                target_pos = selected_img_pos - 1;
        } else {
            if (selected_img_pos >= preview_imgs.length - 1)
                target_pos = 0;
            else
                target_pos = selected_img_pos + 1;
        }
        // 
        nav_goto(target_pos);
        setTimeout(() => {
            img_class_switcher(imgsBlock[selected_img_pos]);
            img_class_switcher(imgsBlock[target_pos]);
            last_dot_scroll_pos = target_pos;
        }, 150);
    }
}
// 
function nav_goto(pos) {
    const preview_img = Array.from(document.getElementsByClassName('b-m-bot-portfolio-preview-img')).filter((img) => img.getAttribute('data-pos') == pos)[0];
    // 
    const imgWidth = preview_img.scrollWidth;
    document.getElementById('b-m-bot-portfolio-preview-imgs-cont').scrollTo(parseInt(imgWidth * pos), 0);
    // update nav dots
    update_nav(pos);
}
// 
function img_class_switcher(element) {
    element.classList.add((element.classList[1].split('-').reduce((a, c) => {
        if (c == 'active')
            c = 'inactive';
        else if (c == 'inactive')
            c = 'active';
        return [...a, c];
    })).join('-'));
    element.classList.remove(element.classList[1]);
}
// 
// 
function make_dot(pos = 999999) {
    let dot_className = 'b-m-bot-portfolio-preview-nav-progress-dot';
    if (pos == 0)
        dot_className += " b-m-bot-portfolio-preview-nav-progress-dot-active";
    let nav_dot = document.createElement('div');
    nav_dot.setAttribute('class', dot_className);
    // 
    document.getElementById('b-m-bot-portfolio-preview-nav-progress').appendChild(nav_dot);
}

function update_nav(pos) {
    let nav_dots = document.getElementsByClassName('b-m-bot-portfolio-preview-nav-progress-dot');
    let selected_nav_dot = document.getElementsByClassName('b-m-bot-portfolio-preview-nav-progress-dot-active')[0];
    // 
    nav_dots[pos].classList.add(selected_nav_dot.classList[1]);
    selected_nav_dot.classList.remove(selected_nav_dot.classList[1]);
}
