//
//
//REGEX
// let name_regex = /^[A-Z][A-Za-z]{2,30}$/;
// let name_regex= /^[A-Z][A-Za-z]{2,30}\s?[A-Z][A-Za-z]{0,30}$/;
let name_regex = /^([A-Z][A-Za-z]{1,30}\s?)+$/;
let email_regex = /^[\w.]+@\w+\.[a-z]+$/;
// let phone_regex = /^\+[\d]{1,3}\s[\d]{3}-[\d]{3}-[\d]+$/;
// let phone_regex = /^[^A-Za-z]$/;
let phone_regex = /^\+?\s?[0-9\s\-]+$/;
var pass_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

//-------------------------------------------------------------

//DISPLAY ERROR FUNCT
function sb1_inputError(input, regex, errorSel, errorTxt, _errorBool) {
    if (!regex.test($(input).val())) {
        $(input).addClass("sb1-error-border");
        $(errorSel).text(errorTxt);
        _errorBool = true;
        // console.log(_errorBool);
    } else {
        $(input).removeClass("sb1-error-border");
        $(errorSel).text("");
        _errorBool = false;
        // console.log(_errorBool);
    }
    return _errorBool;
}

//SIGNUPBRIKOLEUL_1-----------------------------------------------------------------
//SURNAME VERIFICATION

let sb1_surname_error = false;
$("#sb1-surname").keyup(() => {
    sb1_inputError(
        "#sb1-surname",
        name_regex,
        "#sb1-surname-error",
        "Veuillez entrer votre nom réel (premières lettres en majuscule).",
        sb1_surname_error
    );
});

//NAME VERIFICATION

let sb1_name_error = false;
$("#sb1-name").keyup(() => {
    sb1_inputError(
        "#sb1-name",
        name_regex,
        "#sb1-name-error",
        "Veuillez entrer votre prénom réel (premières lettres en majuscule).",
        sb1_name_error
    );
});

//PHONE VERIFICATION

let sb1_tel_error = false;
$("#sb1-tel").keyup(() => {
    sb1_inputError(
        "#sb1-tel",
        phone_regex,
        "#sb1-tel-error",
        "Veuillez entrer un numéro de téléphone valide.",
        sb1_tel_error
    );
});

//GENDER VERIFICATION
let sb1_gender_error = false;

//PASS VERIFICATION

let sb1_pass_error = false;
$("#sb1-pass").keyup(() => {
    sb1_inputError(
        "#sb1-pass",
        pass_regex,
        "#sb1-pass-error",
        "Mot de passe doit contenir au moins 8 caractères incluant au moins une majuscule, une minuscule un chiffre et un caractère spécial (!@#$%^&*).",
        sb1_pass_error
    );
});

//CONFIRM PASS VERIFICATION
let sb1_confirm_error = false;
function sb1_confirm_fct() {
    if ($("#sb1-pass").val() != $("#sb1-confirm-pass").val()) {
        $("#sb1-confirm-pass").addClass("sb1-error-border");
        $("#sb1-confirm-error").text("Mot de pass incorrect");
        sb1_confirm_error = true;
        // console.log(sb1_confirm_error);
    } else {
        $("#sb1-confirm-pass").removeClass("sb1-error-border");
        $("#sb1-confirm-error").text("");
        sb1_confirm_error = false;
        // console.log(sb1_confirm_error);
    }
    return sb1_confirm_error;
}
$("#sb1-confirm-pass").keyup(() => {
    sb1_confirm_fct();
});
//
//CHOOSE CITY + VERIFICATION

// FILTER FUNCTION

function filterCities() {
    $(".sb1-city-select")
        .toArray()
        .forEach((city) => {
            if (
                $(city)
                    .text()
                    .trim()
                    .toUpperCase()
                    .includes($("#sb1-city").val().toUpperCase())
            ) {
                $(city).css("display", "flex");
            } else $(city).css("display", "none");
        });
}

// CITIES ERROR
let sb1_city_error = false;
function sb1_errorCities() {
    let citiesArray = $(".sb1-city-select").toArray();
    for (let i = 0; i < citiesArray.length; i++) {
        if (
            $(citiesArray[i]).text().trim().toUpperCase() ==
            $("#sb1-city").val().toUpperCase()
        ) {
            $("#sb1-city").removeClass("sb1-error-border");
            $("#sb1-city-error").text("");
            sb1_city_error = false;
            // console.log(sb1_city_error);
            break;
        } else {
            $("#sb1-city").addClass("sb1-error-border");
            $("#sb1-city-error").text(
                "Veuillez choisir une ville depuis la liste"
            );
            sb1_city_error = true;
            // console.log(sb1_city_error);
        }
    }
}

//FILL INPUT WITH CHOSEN VAL

$(".sb1-city-select").keyup((e) => {
    $("#sb1-city").val($(e.currentTarget).text().trim());
    sb1_errorCities();
});

$(".sb1-city-select").keypress((e) => {
    $("#sb1-city").val($(e.currentTarget).text().trim());
    $(".sb1-cities-list").css("display", "none");
    sb1_errorCities();
});

$(".sb1-city-select").click((e) => {
    $("#sb1-city").val($(e.currentTarget).text().trim());
    $(".sb1-cities-list").css("display", "none");
    sb1_errorCities();
});

//CONTROLE DISPLAY

$(window).click((e) => {
    if (
        $(e.target).closest(".sb1-cities-list").length == 0 &&
        $(e.target).closest("#sb1-city").length == 0
    ) {
        $(".sb1-cities-list").css("display", "none");
    }
});

$("#sb1-city").focus(() => {
    $(".sb1-cities-list").css("display", "block");
    filterCities();
    // sb1_errorCities();
});

//FILTER

$("#sb1-city").keyup(() => {
    filterCities();
    sb1_errorCities();
});

//ERROR DISPLAY ON SUBMIT

$("#sb1-continue").click(() => {
    //-------------------------------------------
    //city error

    sb1_errorCities();

    //-------------------------------------------
    //surname error
    let sb1_testsurname = sb1_inputError(
        "#sb1-surname",
        name_regex,
        "#sb1-surname-error",
        "Veuillez entrer votre nom réel (premières lettres en majuscule)",
        sb1_surname_error
    );

    //-------------------------------------------
    //name error
    let sb1_testname = sb1_inputError(
        "#sb1-name",
        name_regex,
        "#sb1-name-error",
        "Veuillez entrer votre prénom réel (premières lettres en majuscule)",
        sb1_name_error
    );

    //-------------------------------------------
    //phone error
    let sb1_testphone = sb1_inputError(
        "#sb1-tel",
        phone_regex,
        "#sb1-tel-error",
        "Veuillez entrer un numéro de téléphone valide",
        sb1_tel_error
    );

    //-------------------------------------------
    //gender error
    if (!$("#sb1-gender").val()) {
        $("#sb1-gender").addClass("sb1-error-border");
        sb1_gender_error = true;
    } else {
        $("#sb1-gender").removeClass("sb1-error-border");
        sb1_gender_error = false;
    }

    //-------------------------------------------
    //pass error
    let sb1_testpass = sb1_inputError(
        "#sb1-pass",
        pass_regex,
        "#sb1-pass-error",
        "Mot de passe doit contenir au moins 8 caractères incluant au moins une majuscule, une minuscule un chiffre et un caractère spécial (!@#$%^&*).",
        sb1_pass_error
    );

    //-------------------------------------------
    //confirm pass error
    let sb1_testconfirm = sb1_confirm_fct();

    // TREATMENT
    // console.log(
    //     sb1_testsurname,
    //     sb1_testname,
    //     sb1_testphone,
    //     sb1_gender_error,
    //     sb1_city_error,
    //     sb1_testpass,
    //     sb1_testconfirm
    // );
    if (
        !sb1_testsurname &&
        !sb1_testname &&
        !sb1_testphone &&
        !sb1_gender_error &&
        !sb1_city_error &&
        !sb1_testpass &&
        !sb1_testconfirm
    ) {
        //YOUR METHODE HERE-------------
        //------------------------------
        $("#formname").submit();

        // window.location.href = "signupBrikoleur_2.html";

        console.log("all good!!");
    } else console.log("ERROR!");
});

//-----------------------------------------------------------------------------
//SIGNUPCLIENT-----------------------------------------------------------------
//SURNAME VERIFICATION

let sc_surname_error = false;
$("#sc-surname").keyup(() => {
    sb1_inputError(
        "#sc-surname",
        name_regex,
        "#sc-surname-error",
        "Veuillez entrer votre nom réel complet (premières lettres en majuscule).",
        sb1_surname_error
    );
});

//EMAIL VERIFICATION

let sc_email_error = false;
$("#sc-email").keyup(() => {
    sb1_inputError(
        "#sc-email",
        email_regex,
        "#sc-email-error",
        "Veuillez entrer une adresse email valide.",
        sc_email_error
    );
});

//PASS VERIFICATION

let sc_pass_error = false;
$("#sc-pass").keyup(() => {
    sb1_inputError(
        "#sc-pass",
        pass_regex,
        "#sc-pass-error",
        "Mot de passe doit contenir au moins 8 caractères incluant au moins une majuscule, une minuscule un chiffre et un caractère spécial (!@#$%^&*).",
        sc_pass_error
    );
});

//CONFIRM PASS VERIFICATION
let sc_confirm_error = false;
function sc_confirm_fct() {
    if ($("#sc-pass").val() != $("#sc-confirm-pass").val()) {
        $("#sc-confirm-pass").addClass("sb1-error-border");
        $("#sc-confirm-error").text("Mot de pass incorrect");
        sc_confirm_error = true;
        // console.log(sc_confirm_error);
    } else {
        $("#sc-confirm-pass").removeClass("sb1-error-border");
        $("#sc-confirm-error").text("");
        sc_confirm_error = false;
        // console.log(sc_confirm_error);
    }
    return sc_confirm_error;
}
$("#sc-confirm-pass").keyup(() => {
    sc_confirm_fct();
});
//
//CHOOSE CITY + VERIFICATION

// FILTER FUNCTION

function sc_filterCities() {
    $(".sc-city-select")
        .toArray()
        .forEach((city) => {
            if (
                $(city)
                    .text()
                    .trim()
                    .toUpperCase()
                    .includes($("#sc-city").val().toUpperCase())
            ) {
                $(city).css("display", "flex");
            } else $(city).css("display", "none");
        });
}

// CITIES ERROR
let sc_city_error = false;
function sc_errorCities() {
    let citiesArray = $(".sc-city-select").toArray();
    for (let i = 0; i < citiesArray.length; i++) {
        if (
            $(citiesArray[i]).text().trim().toUpperCase() ==
            $("#sc-city").val().toUpperCase()
        ) {
            $("#sc-city").removeClass("sb1-error-border");
            $("#sc-city-error").text("");
            sc_city_error = false;
            // console.log(sc_city_error);
            break;
        } else {
            $("#sc-city").addClass("sb1-error-border");
            $("#sc-city-error").text(
                "Veuillez choisir une ville depuis la liste"
            );
            sc_city_error = true;
            // console.log(sc_city_error);
        }
    }
}

//FILL INPUT WITH CHOSEN VAL

$(".sc-city-select").keyup((e) => {
    $("#sc-city").val($(e.currentTarget).text().trim());
    sc_errorCities();
});

$(".sc-city-select").keypress((e) => {
    $("#sc-city").val($(e.currentTarget).text().trim());
    $(".sc-cities-list").css("display", "none");
    sc_errorCities();
});

$(".sc-city-select").click((e) => {
    $("#sc-city").val($(e.currentTarget).text().trim());
    $(".sc-cities-list").css("display", "none");
    sc_errorCities();
});

//CONTROLE DISPLAY

$(window).click((e) => {
    if (
        $(e.target).closest(".sc-cities-list").length == 0 &&
        $(e.target).closest("#sc-city").length == 0
    ) {
        $(".sc-cities-list").css("display", "none");
    }
});

$("#sc-city").focus(() => {
    $(".sc-cities-list").css("display", "block");
    sc_filterCities();
});

//FILTER

$("#sc-city").keyup(() => {
    sc_filterCities();
    sc_errorCities();
});

//ERROR DISPLAY ON SUBMIT

$("#sc-signup").click(() => {
    //-------------------------------------------
    //city error

    sc_errorCities();

    //-------------------------------------------
    //surname error
    let sc_testsurname = sb1_inputError(
        "#sc-surname",
        name_regex,
        "#sc-surname-error",
        "Veuillez entrer votre nom réel (premières lettres en majuscule)",
        sc_surname_error
    );

    //-------------------------------------------
    //email error
    let sc_testmail = sb1_inputError(
        "#sc-email",
        email_regex,
        "#sc-email-error",
        "Veuillez entrer une adresse email valide.",
        sc_email_error
    );

    //-------------------------------------------
    //pass error
    let sc_testpass = sb1_inputError(
        "#sc-pass",
        pass_regex,
        "#sc-pass-error",
        "Mot de passe doit contenir au moins 8 caractères incluant au moins une majuscule, une minuscule un chiffre et un caractère spécial (!@#$%^&*).",
        sc_pass_error
    );

    //-------------------------------------------
    //confirm pass error
    let sc_testconfirm = sc_confirm_fct();

    // TREATMENT

    if (
        !sc_testsurname &&
        !sc_testmail &&
        !sc_city_error &&
        !sc_testpass &&
        !sc_testconfirm
    ) {
        //YOUR METHODE HERE-------------
        //------------------------------
        $("#formname").submit();

        // window.location.href = "signupBrikoleur_2.html";
        console.log("all good!!");
    } else console.log("ERROR!");
});


$("#btn_clientsignup").click(() => {
    $("#form_clientsignup").submit();
});


