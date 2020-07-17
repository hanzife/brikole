const show_nb = () => {
    const btn_show = document.getElementById('b-m-top-showNb');
    if (btn_show) {
        btn_show.addEventListener('click', () => {
            if (btn_show.classList.contains('b-m-top-infos-phone-disabled')) {
                // Get phone nb from DB
                // After that display it
                const phone_nb = '0601020304';
                btn_show.children[1].innerText = phone_nb;
                btn_show.classList.remove('b-m-top-infos-phone-disabled');
            }
        });
    }
}
// 
const proifle_fav = () => {
    const btn_fav = document.getElementById('b-m-top-profile-fav');
    if (btn_fav) {
        btn_fav.addEventListener('click', () => {
            let profile_liked = false;
            //#region Replace this code with a request to check wether this profile is liked or not
            profile_liked = btn_fav.classList.contains('b-m-top-profile-liked') ? true : false;
            //#endregion
            // send a request to update DB data based on profile_liked status, upon success execute the code below
            profile_liked ? btn_fav.classList.remove('b-m-top-profile-liked') : btn_fav.classList.add('b-m-top-profile-liked');
        });
    }
}
// 
show_nb();
proifle_fav();
