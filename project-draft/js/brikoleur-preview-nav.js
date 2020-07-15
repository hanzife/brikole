let btn_left = document.getElementById('b-m-bot-portfolio-preview-nav-btn-left');
let btn_right = document.getElementById('b-m-bot-portfolio-preview-nav-btn-right');
// 
const imgsBlock = document.getElementsByClassName('b-m-bot-portfolio-catalogue-img');
// NAV BUTTONS
if (btn_left && btn_right) {
    btn_left.onclick = portfolio_nav('l');
    // 
    btn_right.onclick = portfolio_nav('r');
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
                // Remove class from the active img
                img_class_switcher(selected_block);
                // 
                // Add class to the clicked img
                img_class_switcher(imgBlock);
                // 
                nav_goto(imgPos);
            }
        }
    });
});
// 
function portfolio_nav(direction) {

}
// 
function nav_goto(pos) {
    const preview_img = Array.from(document.getElementsByClassName('b-m-bot-portfolio-preview-img')).filter((img) => img.getAttribute('data-pos') == pos)[0];
    // 
    const imgWidth = preview_img.scrollWidth;
    document.getElementById('b-m-bot-portfolio-preview-imgs-cont').scrollTo(parseInt(imgWidth * pos), 0);
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
