"use strict";

function topFunction() {
    document.body.scrollTop = 0, document.documentElement.scrollTop = 0
}

let backToTopButton = qSel(".back-to-top");

function scrollFunction() {
    document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 ? backToTopButton.style.display = "block" : backToTopButton.style.display = "none"
}

window.onscroll = function () {
    scrollFunction();
};