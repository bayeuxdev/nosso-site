

if(document.getElementById("typeScroll") !== null){
    startTyping(document.getElementById("typeScroll"),0);

}

if(document.getElementById("typeScroll2") !== null){
    startTyping2(document.getElementById("typeScroll2"),0);

}

if(document.getElementById("typeScroll3") !== null){
    startTyping3(document.getElementById("typeScroll3"),0);

}
function startTyping(el,i){
    if(el !== null){
        txt = 'MINHA TRAJETÓRIA'; /* The text */

        if (i < txt.length) {
            el.innerHTML += txt.charAt(i);
            i++
            setTimeout(()=>{startTyping(el,i)}, 50);
        }

    }
}

function startTyping2(el,i){
    if(el !== null){
        txt = 'WELCOME TO 5050'; /* The text */

        if (i < txt.length) {
            el.innerHTML += txt.charAt(i);
            i++
            setTimeout(()=>{startTyping2(el,i)}, 50);
        }

    }

}

function startTyping3(el,i){
    if(el !== null){
        txt = 'BIENVENIDO A 5050'; /* The text */

        if (i < txt.length) {
            el.innerHTML += txt.charAt(i);
            i++
            setTimeout(()=>{startTyping3(el,i)}, 50);
        }

    }


}