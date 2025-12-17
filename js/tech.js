function scroll() {
    divBy4 = (window.scrollY / 4) + 50;
    divBy2 = (window.scrollY / 2);
    fullScroll = (window.scrollY);

        document.getElementById("scrollFixed").style.marginTop = fullScroll + "px";
        document.getElementById("scrollTop1").style.marginTop = "-"+divBy4 + "px";
        document.getElementById("scrollTop2").style.marginTop = "-"+divBy4 + "px";
        
        document.getElementById("scrollTop3").style.marginTop = "-"+divBy4 + "px";
        
        document.getElementById("scrollRight").style.marginRight ="-" + divBy4 + "px";
        document.getElementById("scrollLeft").style.marginLeft ="-" + divBy4 + "px";
    
}



function mouseBox(){

}