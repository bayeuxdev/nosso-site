
/* TRANSLATOR */

document.documentElement.style.overflowY = "hidden";
window.addEventListener('load', () => {
    document.getElementById('container').style = 'visibility:visible !important';

    if (document.getElementById('menu') !== null) {
        document.getElementById('menu').style = 'display:flex !important;';
    }
setTimeout(()=>{
    document.getElementById('loader').style = 'display:none !important;';
},500)


    document.documentElement.style.overflowY = "scroll";


})
function backToStart() {
    document.cookie = 'userDivision=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/';

    window.location = '/'
}

function backToStart2() {
    document.cookie = 'visitor_experience=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/';

    window.location = '/front?changeLang'
}
visitorCookie = document.cookie.split("; ")
    .find((row) => row.startsWith("visitor_experience="))
    ?.split("=")[1];


if (visitorCookie == '' || visitorCookie == undefined) {
   
    if (navigator.language.split("-")[0] == 'es') {
        lang = 1;
    } else if (navigator.language.split("-")[0] == 'pt') {
        lang = 2;
    } else if (navigator.language.split("-")[0] == 'en') {
        lang = 3;
    }

    
    if (window.location.search.substring(1).split("=")[0] == 'changeLang') {
        document.cookie = "visitor_experience =" +
        lang + "-UserAgent_" + navigator.userAgent.replace(/ /g, '%20');
    } else {
       
        document.cookie = "visitor_experience =" +
        lang + "-UserAgent_" + navigator.userAgent.replace(/ /g, '%20');
    }




} else {
    lang = visitorCookie.split("-")[0];
}
switch (parseInt(lang)) {
    case 1://Spanish
        console.log("Idioma: español")
        document.querySelectorAll(".pt").forEach(el => {
            el.remove();
        });
        document.querySelectorAll(".en").forEach(el => {
            el.remove();
        });
        break;

    case 2://Portuguese
        console.log("Idioma: Português brasileiro")
        document.querySelectorAll(".es").forEach(el => {
            el.remove();
        });
        document.querySelectorAll(".en").forEach(el => {
            el.remove();

        });
             break;

    case 3://English
        console.log("Language: English")
        document.querySelectorAll(".es").forEach(el => {
            el.remove();
        });
        document.querySelectorAll(".pt").forEach(el => {
            el.remove();
        });
        break;
    default:
        document.querySelectorAll(".es").forEach(el => {
            el.remove();
        });
        document.querySelectorAll(".pt").forEach(el => {
            el.remove();
        });
        break;

}



function getSiblings(e) {
    // for collecting siblings
    let siblings = [];
    // if no parent, return no sibling
    if (!e.parentNode) {
        return siblings;
    }
    // first child of the parent node
    let sibling = e.parentNode.firstChild;

    // collecting siblings
    while (sibling) {
        if (sibling.nodeType === 1 && sibling !== e) {
            siblings.push(sibling);
        }
        sibling = sibling.nextSibling;
    }
    return siblings;
};
a = false;

function elToggle(el, toggleClass1, toggleClass2, onlyClass) {


    el = document.getElementById(el);
    if (el.classList.contains("dropdown")) {
        el.style.height = "fit-content !important"
    }
    if (onlyClass) {
        el.classList.remove();
        el.classList.add(toggleClass1);
        return;
    }
    if (a) {

        el.classList.remove(toggleClass1);
        el.classList.add(toggleClass2);
        a = false;
    } else {
        el.classList.add(toggleClass1);
        el.classList.remove(toggleClass2);

        a = true;
    }


}



deactivateScrollIterator = false;
function disableScroll() {
    if (deactivateScrollIterator) {
        document.getElementsByTagName("body")[0].style.overflowY = "visible"
        document.getElementsByTagName("html")[0].style.overflowY = "visible"
        deactivateScrollIterator = false;
    } else {
        document.getElementsByTagName("body")[0].style.overflowY = "hidden"
        document.getElementsByTagName("html")[0].style.overflowY = "hidden"
        deactivateScrollIterator = true;
    }

}

//ANIMATIONS: Use any animation as a class


document.querySelectorAll('a[href="' + document.URL + '"]').forEach(link => link.className += ' current-link');

setTimeout(//AWAIT FOR ELEMENTS TO LOAD
    () => {


        observerOptions = {
            rootMargin: '0% 0% -20% 0%',
            threshold: 0.6
        }
        observerOptions2 = {
            rootMargin: '0% 0% -20% 0%',
            threshold: 0.01
        }
        var observer = new IntersectionObserver(observerCallback, observerOptions);


        var observer2 = new IntersectionObserver(observerCallback, observerOptions2);
        var animation = 0;//Vai dizer qual animação será adicionada


        document.querySelectorAll('.animationLetter').forEach((i) => {
            //Adiciona um observador pra cada ocorrência da classe playAnimation1	

            observer.observe(i);
        });

        document.querySelectorAll('.appearScroll').forEach((i) => {
            //Adiciona um observador pra cada ocorrência da classe playAnimation1	

            observer2.observe(i);
        });
        document.querySelectorAll('.widthScroll').forEach((i) => {
            //Adiciona um observador pra cada ocorrência da classe playAnimation1	

            observer2.observe(i);
        });
        document.querySelectorAll('.processStep1').forEach((i) => {
            //Adiciona um observador pra cada ocorrência da classe playAnimation1	

            observer.observe(i);
        });

        document.querySelectorAll('.processStep3').forEach((i) => {
            //Adiciona um observador pra cada ocorrência da classe playAnimation1	

            observer.observe(i);
        });




        function observerCallback(entries, observer) {

            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('animationLetter')) {
                        entry.target.classList.add('animationLetterPlay');
                    }
                    if (entry.target.classList.contains('appearScroll')) {
                        entry.target.classList.add('appearScrollPlay');
                    }
                    if (entry.target.classList.contains('widthScroll')) {
                        entry.target.classList.add('widthScrollPlay');
                    }
                    if (entry.target.classList.contains('processStep')) {
                        entry.target.style.background = "#009a67";
                        entry.target.style.fill = "#3B54BD";
                    }


                } else {

                    if (entry.target.classList.contains('appearScrollPlay')) {
                        entry.target.classList.remove('appearScrollPlay');
                    }
                    if (entry.target.classList.contains('widthScrollPlay')) {
                        entry.target.classList.remove('widthScrollPlay');
                    }
                    if (entry.target.classList.contains('processStep')) {

                        entry.target.style.background = "#363636";
                    }
                }
            });
        };



    }, 1000
)
/*
TOKEN
BOTÃO QUE ENVIA O FORMULÁRIO
DIV QUE EXIBE
MENSAGEM NO ÊXITO
MENSAGEM NO ERRO
*/
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) { return parts.pop().split(';').shift() }
    else {
        return false;
    }
}

function sendForm(token, el, statusEl, msgok, msgerror) {
    if (token == null || token === undefined) {
        tokenUse = 'empty';
    } else {
        tokenUse = token;
    }
    if (getCookie('sended') !== false) { //GATE

        if (getCookie('sended').split('&').includes(token) && token !== 'empty') {
            return false;
        }
    }
    if (msgok === undefined || msgerror === undefined) {
        msgok = '';
        msgerror = '';
        timer = 0;
    } else {
        timer = 2500;
    }


    var request = new XMLHttpRequest();//PREPARE XML
    var answer = document.getElementById(statusEl);
    var formEl = el.form;
    var form = new FormData(formEl, el);
    request.open('POST', '../../forms.php');
    request.onreadystatechange = function () {
        answer.style.opacity = '1';
        if (request.status === 200) {
            if (getCookie('sended') !== false) {
                sendedForms = getCookie('sended').split('&');
                sendedForms.push(token);
                backToCookie = sendedForms.join('&');
            } else {
            }
            answer.classList.toggle('formSuccess');
            answer.innerHTML = msgok;
        } else {
            answer.classList.toggle('formFailure');
            answer.innerHTML = msgerror;
        }
    }
    el.style.opacity = '0';
    if (timer !== 0) {
        setTimeout(() => {
            el.style.opacity = '1';
            answer.innerHTML = '';
        }, timer);
    } else {
        el.style.opacity = '1';
        answer.innerHTML = '';

    }

    request.send(form);

}
