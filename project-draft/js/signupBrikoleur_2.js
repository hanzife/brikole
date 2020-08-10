// console.log("js !!");

//ADD PROFESSION CARDS

// LIST OF PROFESSIONS & SUB PROFESSIONS

let listProfessions = [
    "Plâtrier1",
    "carreleur1",
    "electricien1",
    "default profession card1",
    "Plombier1",
    "Jardinier1",
    "default profession card2",
    "default profession card3",
    "Plâtrier2",
    "carreleur2",
    "electricien2",
    "default profession card4",
    "Plombier2",
    "Jardinier2",
    "electricien3",
    "default profession card5",
    "Plombier3",
    "Jardinier3",
    "default profession card6",
    "default profession card7",
    "Jardinier4",
    "Plombier4",
    "default profession card8",
];


let listSubProfessions = [
    // "Plâtrier",
    "carreleur1",
    "electricien1",
    "card for sous profession1",
    "Plombier1",
    "Jardinier1",
    "card for sous profession2",
    "card for sous profession3",
    "Plâtrier1",
    "carreleur2",
    "electricien2",
    "card for sous profession4",
    "Plombier2",
    "Jardinier2",
    "electricien3",
    "card for sous profession5",
    "Plombier3",
    "Jardinier3",
    "card for sous profession6",
    "card for sous profession7",
    "Jardinier4",
    "Plombier4",
    "card for sous profession8",
];

//-------------------------

//DELETE ELEMENT FROM AN ARRAY

function delArray(array, elmnt) {
    let elmntIndex = array.indexOf(elmnt);
    array.splice(elmntIndex, 1);
}

//KEEP GREEN AFTER RESIZE

function keepGreen(selectedElmnt) {
    $(".sb2-profession-card")
        .toArray()
        .forEach((card) => {
            if ($(card).contents().text().trim() == selectedElmnt) {
                $(card).addClass("sb2-profession-card-click");
            }
        });
}

function keepGreenList(selectedElmnts) {
    $(".sb3-profession-card")
        .toArray()
        .forEach((card) => {
            selectedElmnts.forEach((element) => {
                if ($(card).contents().text().trim() == element) {
                    $(card).addClass("sb2-profession-card-click");
                }
            });
        });
}

//GREEN ON CLICK

let selectedPrefession;

function greenOnClick() {
    $(".sb2-profession-card").click((e) => {
        $(".sb2-profession-card").removeClass("sb2-profession-card-click");
        $(e.currentTarget).addClass("sb2-profession-card-click");
        selectedPrefession = $(e.currentTarget).contents().text().trim();
        console.log(selectedPrefession);
    });
}

//GREEN LIST ON CLICK

let selectedSubPrefessions = [];

function greenListOnClick() {
    $(".sb3-profession-card").click((e) => {
        if ($(e.currentTarget).hasClass("sb2-profession-card-click")) {
            $(e.currentTarget).removeClass("sb2-profession-card-click");
            delArray(
                selectedSubPrefessions,
                $(e.currentTarget).contents().text().trim()
            );
            console.log(selectedSubPrefessions);
        } else {
            $(e.currentTarget).addClass("sb2-profession-card-click");
            selectedSubPrefessions.push(
                $(e.currentTarget).contents().text().trim()
            );
            console.log(selectedSubPrefessions);
        }
    });
}

//INITIALIZE VARIABLES
function initializeVar() {
    selectedPrefession = undefined;
    selectedSubPrefessions = [];
}

//---------------------------

//SEARCH/FILTER

function filterCardsInside(cardClass, searchId, containerClass = null) {
    $("." + cardClass)
        .toArray()
        .forEach((card) => {
            if (
                $(card)
                .contents()
                .text()
                .trim()
                .toUpperCase()
                .includes(
                    $("#" + searchId)
                    .val()
                    .toUpperCase()
                )
            ) {
                card.setAttribute('data-display', 'show');
                $(card).css("display", "none");
                // // 
            } else {
                $(card).css("display", "none");
                card.setAttribute('data-display', 'hide');
            }

        });
    // 
    let loopCount = 0;
    $(`.${cardClass}[data-display=show]`).each((card_pos, card_show) => {
        let currentContainer = document.getElementsByClassName(containerClass)[loopCount];
        currentContainer.appendChild(card_show);
        currentContainer.children[currentContainer.children.length - 1].style.display = 'flex';

        // 
        if (loopCount == document.getElementsByClassName(containerClass).length - 1)
            loopCount = 0;
        else
            loopCount++;
    });

}

//filter profession cards

function filterCards(laVarDeAli) {
    $("#sb2-search").keyup(() => {
        filterCardsInside("sb2-profession-card", "sb2-search", laVarDeAli);
    });
    if ($("#sb2-search").val()) {
        filterCardsInside("sb2-profession-card", "sb2-search", laVarDeAli);
    }
}

//filter sub profession cards

function filterCardsSub(laVarDeAli) {
    $("#sb3-search").keyup(() => {
        filterCardsInside("sb3-profession-card", "sb3-search", laVarDeAli);
    });
    if ($("#sb3-search").val()) {
        filterCardsInside("sb3-profession-card", "sb3-search", laVarDeAli);
    }
}

//---------------------------

//ADD HTML OF CARD
function singleCard(selector, index, newClass, profession) {
    $("." + selector + ":eq(" + index + ")").append(`<div class="${newClass}" data-cont-index="${index}">
    <div class="sb2-profession-name">${profession}</div>
    <div>
        <svg
            width="36"
            height="36"
            viewBox="0 0 36 36"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <rect width="36" height="36" rx="18" fill="#FDF6B2" />
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M14 14V13C14 12.2044 14.3161 11.4413 14.8787 10.8787C15.4413 10.3161 16.2044 10 17 10H19C19.7956 10 20.5587 10.3161 21.1213 10.8787C21.6839 11.4413 22 12.2044 22 13V14H24C24.5304 14 25.0391 14.2107 25.4142 14.5858C25.7893 14.9609 26 15.4696 26 16V19.57C23.4396 20.5187 20.7305 21.003 18 21C15.2695 21.003 12.5604 20.5188 10 19.57V16C10 15.4696 10.2107 14.9609 10.5858 14.5858C10.9609 14.2107 11.4696 14 12 14H14ZM16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12H19C19.2652 12 19.5196 12.1054 19.7071 12.2929C19.8946 12.4804 20 12.7348 20 13V14H16V13ZM17 18C17 17.7348 17.1054 17.4804 17.2929 17.2929C17.4804 17.1054 17.7348 17 18 17H18.01C18.2752 17 18.5296 17.1054 18.7171 17.2929C18.9046 17.4804 19.01 17.7348 19.01 18C19.01 18.2652 18.9046 18.5196 18.7171 18.7071C18.5296 18.8946 18.2752 19 18.01 19H18C17.7348 19 17.4804 18.8946 17.2929 18.7071C17.1054 18.5196 17 18.2652 17 18Z"
                fill="#FFC000"
            />
            <path
                d="M10 21.6919V23.9999C10 24.5303 10.2107 25.039 10.5858 25.4141C10.9609 25.7892 11.4696 25.9999 12 25.9999H24C24.5304 25.9999 25.0391 25.7892 25.4142 25.4141C25.7893 25.039 26 24.5303 26 23.9999V21.6919C23.4224 22.5607 20.7201 23.0025 18 22.9999C15.204 22.9999 12.513 22.5399 10 21.6919Z"
                fill="#FFC000"
            />
        </svg>
    </div>
</div>`);
}

// PLACE HTML OF CARD
function addSingleCard(selector, newClass, profession) {
    let card_cntr1 = $("." + selector + ":eq(0)").children().length;
    let card_cntr2 = $("." + selector + ":eq(1)").children().length;
    let card_cntr3 = $("." + selector + ":eq(2)").children().length;
    // console.log(card_cntr1, card_cntr2, card_cntr3);

    if (card_cntr1 == card_cntr2 && card_cntr1 == card_cntr3) {
        singleCard(selector, 0, newClass, profession);
    } else if (card_cntr1 > card_cntr2 && card_cntr2 == card_cntr3) {
        singleCard(selector, 1, newClass, profession);
        // if (card_cntr2 > card_cntr3 && card_cntr2 == card_cntr1)
    } else {
        singleCard(selector, 2, newClass, profession);
    }
}
// PLACE HTML OF CARD XS
function addSingleCard_xs(selector, newClass, profession) {
    let card_cntr1 = $("." + selector + ":eq(0)").children().length;
    let card_cntr2 = $("." + selector + ":eq(1)").children().length;

    // console.log(card_cntr1, card_cntr2);

    if (card_cntr1 == card_cntr2) {
        singleCard(selector, 0, newClass, profession);
    } else {
        singleCard(selector, 1, newClass, profession);
    }
}
//CHOOSE WHICH PLACEMENT BASED ON SCREEN SIZE
function cardPlacement(
    mqls,
    selectorParent,
    selector,
    newClass,
    professionsList
) {
    if (mqls.matches) {
        $("." + selectorParent).html("");
        $("." + selectorParent).append(
            `<div class="${selector}"></div>
             <div class="${selector}"></div>
             <div class="${selector}"></div>`
        );
        let count = $("." + selectorParent).children();
        // console.log(count.length);
        professionsList.forEach((singleProfession) => {
            addSingleCard(selector, newClass, singleProfession);
        });
        keepGreen(selectedPrefession);
        keepGreenList(selectedSubPrefessions);
    } else {
        $("." + selectorParent).html("");
        $("." + selectorParent).append(
            `<div class="${selector}"></div>
             <div class="${selector}"></div>`
        );
        let count = $("." + selectorParent).children();
        // console.log(count.length);
        professionsList.forEach((singleProfession) => {
            addSingleCard_xs(selector, newClass, singleProfession);
        });
        keepGreen(selectedPrefession);
        keepGreenList(selectedSubPrefessions);
    }
}

//ADD PROFESSION CARDS
let sb2_mql1 = window.matchMedia("(min-width: 576px)");

function addProfessionCard() {
    cardPlacement(
        sb2_mql1,
        "sb2-professions",
        "sb2-profession-cards-container",
        "sb2-profession-card",
        listProfessions
    );
    greenOnClick();
    filterCards('sb2-profession-cards-container');
}

//ADD SUB PROFESSION CARDS
function addSubProfessionCard() {
    cardPlacement(
        sb2_mql1,
        "sb3-professions",
        "sb3-profession-cards-container",
        "sb3-profession-card",
        listSubProfessions
    );
    greenListOnClick();
    filterCardsSub('sb3-profession-cards-container');
}

addProfessionCard();
sb2_mql1.addListener(addProfessionCard);
addSubProfessionCard();
sb2_mql1.addListener(addSubProfessionCard);
