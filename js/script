$(document).ready(function () {
    fullCover();
    $('.parallax').parallax();
    $("#btnCommander").click(function () {
        $('ul.tabs').tabs('select_tab', 'livraison');
    });
});
window.onresize = resize;
function resize() {
    fullCover();
}
function fullCover() {

    var elmnt = document.getElementById("nav-container");
    var height = window.innerHeight - elmnt.offsetHeight,
        width = window.innerWidth;
    document.getElementById("cover").style.height = height + "px";

    var _taille = Math.min(height, width) / 2;

    console.log("hauteur -> ", height, "\nlargeur -> ", width, "\nTaille -> ", _taille);


    document.getElementById("logo").style.width = _taille + "px";
}
