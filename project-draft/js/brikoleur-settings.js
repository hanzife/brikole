let phone_regex = /^\+?\s?[1-9\s\-]+$/;
var pass_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

//-------------------------------------------------------------
$("#b-p-imageUploadButton").change(() => {
    let sb4_file = $("#b-p-imageUploadButton")[0].files;
    // console.log(sb4_file);

    //conditions

    let sizeLimitKB = 512;
    let sizeLimit = sizeLimitKB * 1024;
    let validExtensions = ["png", "jpeg", "jpg"];
    let errors = {
        TYPEERROR: "",
        SIZEERROR: "",
    };

    if (sb4_file.length == 1) {
        let sb4_imgName = Date.now() + "_" + sb4_file[0].name;
        // console.log(sb4_imgName);
        let sb4_imgType = sb4_file[0].type.split("/");
        let sb4_imgSize = sb4_file[0].size;
        let sb4_imgType_test = true;
        let sb4_imgSize_test = true;

        if (
            !(
                sb4_imgType[0] == "image" &&
                validExtensions.includes(sb4_imgType[1])
            )
        ) {
            errors.TYPEERROR = "Veuillez choisir une IMAGE (png, jpg, jpeg)";
            sb4_imgType_test = false;
        }
        if (sb4_imgSize > sizeLimit) {
            errors.SIZEERROR = "La taille maximale de l'image est 512 Ko";
            sb4_imgSize_test = false;
        }
        if (sb4_imgType_test && sb4_imgSize_test) {
            $(".b-p-imageSize")
                .text("Taille maximale d'image est 512 Ko")
                .removeClass("errorStyle");
            // document.getElementsByClassName('b-p-imageProfile')[0].style.backgroundImage = window.URL.createObjectURL(sb4_file[0]);
            document.getElementsByClassName('b-p-imageProfile')[0].children[0].setAttribute('src', window.URL.createObjectURL(sb4_file[0]));
            // --------------------------------
            //ajax
            // $(".sb4-imageProfile img").attr({
            //     src: "",
            //     alt: "",
            // });
            // --------------------------------
        } else {
            // console.log("image not valid");
            if (errors.TYPEERROR) {
                $(".b-p-imageSize")
                    .text(errors.TYPEERROR)
                    .addClass("errorStyle");
            } else if (errors.SIZEERROR) {
                $(".b-p-imageSize")
                    .text(errors.SIZEERROR)
                    .addClass("errorStyle");
            } else
                $(".b-p-imageSize").text("Taille maximale d'image est 512 Ko");
        }
    }
});

//DISPLAY ERROR FUNCT
function sb1_inputError(input, regex, errorSel, errorTxt, _errorBool) {
    if (!regex.test($(input).val())) {
        $(input).addClass("b-p-error-border");
        $(errorSel).text(errorTxt);
        _errorBool = true;
        // console.log(_errorBool);
    } else {
        $(input).removeClass("b-p-error-border");
        $(errorSel).text("");
        _errorBool = false;
        // console.log(_errorBool);
    }
    return _errorBool;
}
// 
// 
//PHONE VERIFICATION

let sb1_tel_error = false;
$("#b-p-tel").keyup(() => {
    sb1_inputError(
        "#b-p-tel",
        phone_regex,
        "#b-p-tel-error",
        "Veuillez entrer un numéro de téléphone valide.",
        sb1_tel_error
    );
});



let sb1_pass_error = false;
$("#b-p-pass").keyup(() => {
    sb1_inputError(
        "#b-p-pass",
        pass_regex,
        "#b-p-pass-error",
        "Mot de passe doit contenir au moins 8 caractères incluant au moins une majuscule, une minuscule un chiffre et un caractère spécial (!@#$%^&*).",
        sb1_pass_error
    );
});

//CONFIRM PASS VERIFICATION
let sb1_confirm_error = false;

function sb1_confirm_fct() {
    if ($("#b-p-pass").val() != $("#b-p-confirm-pass").val()) {
        $("#b-p-confirm-pass").addClass("b-p-error-border");
        $("#b-p-confirm-error").text("Mot de pass incorrect");
        sb1_confirm_error = true;
        // console.log(sb1_confirm_error);
    } else {
        $("#b-p-confirm-pass").removeClass("sb1-error-border");
        $("#b-p-confirm-error").text("");
        sb1_confirm_error = false;
        // console.log(sb1_confirm_error);
    }
    return sb1_confirm_error;
}
$("#b-p-confirm-pass").keyup(() => {
    sb1_confirm_fct();
});



function filterCities() {
    $(".b-p-city-select")
        .toArray()
        .forEach((city) => {
            if (
                $(city)
                .text()
                .trim()
                .toUpperCase()
                .includes($("#b-p-city").val().toUpperCase())
            ) {
                $(city).css("display", "flex");
            } else $(city).css("display", "none");
        });
}

// CITIES ERROR
let sb1_city_error = false;

function sb1_errorCities() {
    let citiesArray = $(".b-p-city-select").toArray();
    for (let i = 0; i < citiesArray.length; i++) {
        if (
            $(citiesArray[i]).text().trim().toUpperCase() ==
            $("#b-p-city").val().toUpperCase()
        ) {
            $("#b-p-city").removeClass("b-p-error-border");
            $("#b-p-city-error").text("");
            sb1_city_error = false;
            // console.log(sb1_city_error);
            break;
        } else {
            $("#b-p-city").addClass("b-p-error-border");
            $("#b-p-city-error").text(
                "Veuillez choisir une ville depuis la liste"
            );
            sb1_city_error = true;
            // console.log(sb1_city_error);
        }
    }
}

//FILL INPUT WITH CHOSEN VAL

$(".b-p-city-select").keyup((e) => {
    $("#b-p-city").val($(e.currentTarget).text().trim());
    sb1_errorCities();
});

$(".b-p-city-select").keypress((e) => {
    $("#b-p-city").val($(e.currentTarget).text().trim());
    $(".b-p-cities-list").css("display", "none");
    sb1_errorCities();
});

$(".b-p-city-select").click((e) => {
    $("#b-p-city").val($(e.currentTarget).text().trim());
    $(".b-p-cities-list").css("display", "none");
    sb1_errorCities();
});

//CONTROLE DISPLAY

$(window).click((e) => {
    if (
        $(e.target).closest(".b-p-cities-list").length == 0 &&
        $(e.target).closest("#b-p-city").length == 0
    ) {
        $(".b-p-cities-list").css("display", "none");
    }
});

$("#b-p-city").focus(() => {
    $(".b-p-cities-list").css("display", "block");
    filterCities();
    // sb1_errorCities();
});

//FILTER

$("#b-p-city").keyup(() => {
    filterCities();
    sb1_errorCities();
});



$("#b-p-submit").click(() => {
    //-------------------------------------------
    //city error

    sb1_errorCities();

    //-------------------------------------------
    //phone error
    let sb1_testphone = sb1_inputError(
        "#b-p-tel",
        phone_regex,
        "#b-p-tel-error",
        "Veuillez entrer un numéro de téléphone valide",
        sb1_tel_error
    );
    //-------------------------------------------
    //pass error
    let sb1_testpass = sb1_inputError(
        "#b-p-pass",
        pass_regex,
        "#b-p-pass-error",
        "Mot de passe doit contenir au moins 8 caractères incluant au moins une majuscule, une minuscule un chiffre et un caractère spécial (!@#$%^&*).",
        sb1_pass_error
    );

    //-------------------------------------------
    //confirm pass error
    let sb1_testconfirm = sb1_confirm_fct();

    // TREATMENT
    // console.log(
    //     sb1_testphone,
    //     sb1_city_error,
    //     sb1_testpass,
    //     sb1_testconfirm
    // );
    if (
        !sb1_testphone &&
        !sb1_city_error &&
        !sb1_testpass &&
        !sb1_testconfirm
    ) {
        //YOUR METHODE HERE-------------
        //------------------------------

        window.location.href = "/";
        console.log("all good!!");
    } else console.log("ERROR!");
});
