const sorting_setup = () => {
    const dropDown_cont = document.getElementById('b-m-bot-comments_selectSort');
    if (dropDown_cont) {
        const dropDown_select = document.getElementById('b-m-bot-comments_selectSort-select');
        if (dropDown_select) {
            const dropDown_optionsCont = document.getElementById('b-m-bot-comments_selectSort-options');
            if (dropDown_optionsCont) {
                // Show options
                dropDown_select.addEventListener('click', () => {
                    select_list_display_control(dropDown_optionsCont);
                });
                // select an option
                const dropDown_options = dropDown_optionsCont.children[0].children;
                for (let i = 0; i < dropDown_options.length; i++) {
                    const dropDown_option = dropDown_options[i];
                    dropDown_option.addEventListener('click', (e) => {
                        dropDown_cont.setAttribute('data-slct', e.target.innerText);
                        // 
                        select_list_display_control(dropDown_optionsCont);
                        // Sorting methode
                        sort_that_list();
                    });
                }
            }
        }
        // 
        const dropDown_Sort = document.getElementById('b-m-bot-comments_selectSort-sort');
        if (dropDown_Sort) {
            dropDown_Sort.addEventListener('click', () => {
                let dropDown_Sort_mode = dropDown_cont.getAttribute('data-mode') == 'desc' ? 'asc' : 'desc';
                dropDown_cont.setAttribute('data-mode', dropDown_Sort_mode);
                sort_that_list();
                // if u want ajax >:|
                // dropDown_Sort.children[0].style.display = dropDown_Sort_mode == 'desc' ? 'block' : 'none';
                // dropDown_Sort.children[1].style.display = dropDown_Sort_mode == 'asc' ? 'block' : 'none';
            });
        }
    }
    // 
    function select_list_display_control(list) {
        list.classList.contains('hide_me') ? list.classList.remove('hide_me') : list.classList.add('hide_me');
    }
    // 
    function sort_that_list() {
        const req_data = {
            sort_by: dropDown_cont.getAttribute('data-slct'),
            sort_direction: dropDown_cont.getAttribute('data-mode')
        }
        // 
        document.getElementById('b-m-bot-comments_selectSort-value').value = req_data.sort_by;
        document.getElementById('b-m-bot-comments_selectSort-direction').value = req_data.sort_direction;
        // none ajax
        dropDown_cont.submit();
    }
}
// Execute sorting setup
sorting_setup();
