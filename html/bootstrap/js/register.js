window.onload = function() {
    document.getElementsById('email').onfocus = show("email-tooltip");
}

function show(element) {
    document.getElementById(element).style.display = "inline";
}