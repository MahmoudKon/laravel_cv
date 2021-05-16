var container = document.getElementById("content");

window.addEventListener("load", (event) => { container.style.display = "none"; });

$(function() {
    var loader = $('#load-content');
    var body   = $('#content');

    loader.fadeOut(100);
    setTimeout(function () { body.fadeIn(1500); }, 300);
});
