if (document.readyState === "complete") {
    //Already loaded!
} else {
    //Add onload or DOMContentLoaded event listeners here: for example,
    /* window.addEventListener("onload", function () {
        // accordions now contains an array of all Accordion instances
        var accordions = bulmaAccordion.attach();
    }, false); */
    //or
    document.addEventListener("DOMContentLoaded", function () {
        // accordions now contains an array of all Accordion instances
        var accordions = bulmaAccordion.attach();
    }, false);
}

function fuckingTest() {
    var test = accordions;
};