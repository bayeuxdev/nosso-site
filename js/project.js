function scroll() {
    divBy4 = (window.scrollY / 4) + 20;
    divBy2 = (window.scrollY / 2);
    divBy8= (window.scrollY / 8) + 20;
    fullScroll = (window.scrollY);
    if (document.getElementById("viewportFixed") !== null) {
        document.getElementById("viewportFixed").style.marginBottom = "-" + divBy2 + "px";
    }
    if (document.getElementById("scrollFixed") !== null) {

        document.getElementById("scrollFixed").style.marginTop = "-" + divBy2 + "px";
    }
    
    if (document.getElementById("scrollRight") !== null) {
        document.getElementById("scrollRight").style.marginRight =  divBy4 + "px";
    }
    if (document.getElementById("scrollLeft") !== null) {
        document.getElementById("scrollLeft").style.marginLeft =   divBy4 + "px";
    }
    if (document.getElementById("scrollLetter") !== null && divBy8 < 50 && window.matchMedia("(min-width:700px)").matches) {
        document.getElementById("scrollLetter").style.letterSpacing =  0 + divBy8 + "px";
    }
    
}



function mouseBox() {

}
