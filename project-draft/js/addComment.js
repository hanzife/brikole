const ratingSwitch = () => {
    const ratingBtns = document.getElementsByClassName('b-m-bot-comments-add-extra-rating-btn');
    // 
    if (ratingBtns) {
        try {
            // i will either have 0 or 1
            for (let i = 0; i < ratingBtns.length; i++) {
                const ratingBtn = ratingBtns[i];
                ratingBtn.addEventListener('click', () => {
                    // if i=0 value will be 1 || if i=1 value will be 0
                    let otherBtnIndex = +!Boolean(i);
                    let activeBtnToggle = 'b-m-bot-comments-add-extra-rating-btn-active';
                    // 
                    if (!ratingBtn.classList.contains(activeBtnToggle)) {
                        ratingBtn.classList.add(activeBtnToggle);
                        ratingBtns[otherBtnIndex].classList.remove(activeBtnToggle);
                    }
                    // 
                    document.getElementById('b-m-bot-comments-add-extra-rating-value').value = i == 0 ? true : false;
                });
            }
        } catch (error) {
            console.error(error);
        }
    }
}
// 
ratingSwitch();
