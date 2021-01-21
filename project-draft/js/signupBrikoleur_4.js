//
$("#sb4-imageUploadButton").change(() => {
    let sb4_file = $("#sb4-imageUploadButton")[0].files;
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
            $(".sb4-imageSize")
                .text("Taille maximale d'image est 512 Ko")
                .removeClass("errorStyle");

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
                $(".sb4-imageSize")
                    .text(errors.TYPEERROR)
                    .addClass("errorStyle");
            } else if (errors.SIZEERROR) {
                $(".sb4-imageSize")
                    .text(errors.SIZEERROR)
                    .addClass("errorStyle");
            } else
                $(".sb4-imageSize").text("Taille maximale d'image est 512 Ko");
        }
    }
});
