const btn = document.getElementById('b-m-bot-portfolio-preview-dlt');
if (btn) {
    btn.addEventListener('click', () => {
        const image = Array.from(document.getElementsByClassName('b-m-bot-portfolio-catalogue-img')).filter((block) => {
            return block.classList[1].split('-').includes('active');
        })[0];
        if (image) {
            // Use this id to "remove" img from db 
            const imageId = image.getAttribute('data-id');
            console.log(imageId);
        }
    });
}
