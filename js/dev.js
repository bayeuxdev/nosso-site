function scroll() {
    divBy3 = (window.scrollY / 4) + 6;
    divBy2 = (window.scrollY / 2);
    fullScroll = (window.scrollY);

    if (window.matchMedia("(max-width:700px)").matches) {
        document.getElementById("mainTitle").style.letterSpacing = divBy3 + "px";
    }




    if ((window.scrollY / 8) < 45) {
        document.getElementById("steamContainer").style.rotate = (window.scrollY / 8) + "deg";
        document.getElementById("steamMiddle").style.rotate = "-" + (window.scrollY / 8) + "deg";
    }



    //    document.getElementById("imgSide1").style.marginTop = "-"+fullScroll+"px";
    //    document.getElementById("imgSide2").style.marginTop = "-"+fullScroll+"px";
}
