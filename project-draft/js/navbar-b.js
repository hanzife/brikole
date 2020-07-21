// Onload // Append an attribute to use later on menu click filter
let menuElements = document.getElementById('nv-b-profile-menu').querySelectorAll('*');
menuElements.forEach(element => {
    element.setAttribute('data-menu-element', 'true');
});
// men click
let profile = document.getElementById('nv-b-profile');
if (profile) {
    document.addEventListener('click', (e) => {
        let menu = document.getElementById('nv-b-profile-menu');
        if (menu) {
            if (e.target == profile || e.target.parentElement == profile) {
                // JSON.parse to transform 'true' to true => string to boolean
                let menuVisb = JSON.parse(profile.getAttribute('data-visible'));
                if (!menuVisb)
                    menu.style.display = "flex";
                else
                    menu.style.display = "none";
                profile.setAttribute('data-visible', !menuVisb);
            } else {
                if (e.target != menu && e.target.getAttribute('data-menu-element') != 'true') {
                    profile.setAttribute('data-visible', false);
                    menu.style.display = "none";
                }
            }
        }
    });
}
// 
$(".nv-b-menuIcon_xs").click(() => {
    if ($(".nv-b-menu-xs").css("display") == "none") {
        $(".nv-b-menu-xs").show(400);
        // $(".nv-menu-xs").css("display", "block");
        $(".nv-b-menuIcon_xs").css("background-color", "#f1f1f2");
        //
        $(".nv-b-menuIcon_xs").hover(() => {
            $(".nv-b-menuIcon_xs").css("background-color", "#f1f1f2");
        });
    } else {
        // $(".nv-menu-xs").css("display", "none");
        $(".nv-b-menu-xs").hide(400);
        $(".nv-b-menuIcon_xs").css("background-color", "unset");
        //
        $(".nv-b-menuIcon_xs").hover(
            () => {
                $(".nv-b-menuIcon_xs").css("background-color", "#f1f1f2");
            },
            () => {
                $(".nv-b-menuIcon_xs").css("background-color", "unset");
            }
        );
    }
});
