const share_ref = () => {
    const share_btn = document.getElementById('refBtn_share');
    if (share_btn) {
        share_btn.addEventListener('click', () => {
            // if (navigator.share) {
            // Implement Later
            // } else {
            // }
            // 
            const ref_code = document.getElementById('refCode');
            // 
            ref_code.focus();
            ref_code.select();
            let successful = document.execCommand('copy');
            if (success) {
                ref_code.blur();
                success();
            }

        });
    }
    // 
    function success() {
        const old_content = share_btn.innerHTML;
        share_btn.innerHTML = "&#10004;";
        setTimeout(() => {
            share_btn.innerHTML = old_content;
        }, 3000);
    }
}
// 
share_ref();
