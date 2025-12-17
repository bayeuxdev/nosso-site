


visitorCookie = document.cookie.split("; ")
    .find((row) => row.startsWith("visitor_experience="))
    ?.split("=")[1];


    document.getElementById("container").style = "height:100vh !important;";

    document.getElementById("welcome").style = "display:flex !important";

    document.getElementById("flagEs").style = "display:block !important";
    document.getElementById("flagBr").style = "display:block !important";
    document.getElementById("flagEn").style = "display:block !important";

    document.getElementById("langOpt").children[4].style = "display:block !important";
    document.getElementById("langOpt").children[5].style = "display:block !important";


    i = 0;
    rollWelcomes(i)

    link = document.querySelectorAll(".link");

        link.forEach((el) => {




            el.addEventListener("mousemove", () => {
                siblings = getSiblings(el)
                siblings.forEach((e) => {
                    e.style = "transition:all .4s; opacity:0.5 !important;";
                })
            })
            el.addEventListener("mouseleave", () => {
                siblings = getSiblings(el)
                siblings.forEach((e) => {
                    e.style = "transition:all .4s; opacity:1 !important;";
                })
            })

        })

function rollWelcomes(show) {


    langs = ['Es', 'Pt', 'En'];

    currEl = document.getElementById("w" + langs[show]);





    currEl.style = "display:block;";
    currEl.children[0].media = "";




    if (show < 2) {
        show++
    } else {
        show = 0;
    }




    setTimeout(() => {
        currEl.style = "transition:1s; opacity:0;";
        setTimeout(() => {

            currEl.style = "display:none;";
            currEl.children[0].media = "max-width:1px";


            rollWelcomes(show);

        }, 700)
    }, 3000);

}


function setLang(lang) {

    if (lang == 0) {
        //Auto-select visually
        if (navigator.language.split("-")[0] == 'en') {
             lang = 1;
        } else if (navigator.language.split("-")[0] == 'es') {
            lang = 2;
        } else if (navigator.language.split("-")[0] == 'pt') {
            lang = 3;
        }

    }

    document.cookie = "visitor_experience =" + lang + "-UserAgent_" + navigator.userAgent.replace(/ /g, '%20');
window.location = "/"
}
     


function closeLangOpt(lang) {

    document.getElementById("welcome").style = "display: none !important;";
    document.querySelectorAll(".services").forEach((el) => {
        el.style = "visibility:hidden; font-size:0px !important;"
    });

    /*
    switch (parseInt(lang)) {
        case 1://Spanish
            document.querySelectorAll(".es").forEach(el => {
                el.style = "display: none !important;";
            });
            break;

        case 2://Portuguese
            document.querySelectorAll(".pt").forEach(el => {
                el.style = "display: none !important;";
            });
            break;

        case 3://English
            document.querySelectorAll(".en").forEach(el => {
                el.style = "display: none !important;";
            });
            break;

    }
*/


    consultingOverlay = document.getElementById("consultingOverlay");
    developmentOverlay = document.getElementById("developmentOverlay");

    document.getElementById("flagEs").style = "display:none !important";
    document.getElementById("flagBr").style = "display:none !important";
    document.getElementById("flagEn").style = "display:none !important";

    document.getElementById("logoContainer").style = "display:flex !important";



    consultingDiv = document.getElementById("consulting");
    developmentDiv = document.getElementById("development");
    container = document.getElementById("container");

    consultingDiv.classList.add("closing");
    developmentDiv.classList.add("closing");
    container.classList.add("closing");
    
    //While closing, add display block, so the mouse at language options wont click there
   
    document.getElementById("consultingContent").style = "display:block; opacity:0;";
    document.getElementById("developmentContent").style = "display:block; opacity:0;";

    setTimeout(() => {

        //Appear, transition 1s
        document.getElementById("consultingContent").style = "opacity:1; ";
        document.getElementById("developmentContent").style = "opacity:1;";



        consultingDiv.classList.remove("closing");
        developmentDiv.classList.remove("closing");
        container.classList.remove("closing");

        consultingDiv.style.margin = 0;
        consultingDiv.style.opacity = 1;

        developmentDiv.style.margin = 0;
        developmentDiv.style.opacity = 1;

        container.style.margin = 0;
        container.style.opacity = 1;

      
        if (window.matchMedia("(min-width:900px)").matches !== null && 1==0) {
        //So either putting mouse over the content or the div itself
        consultingContent.addEventListener('mousemove', (e) => moveConsulting(e))
        consultingDiv.addEventListener('mousemove', (e) => moveConsulting(e))

        function moveConsulting(e) {


            amountToMoveGrabbed = ((e.screenX * 0.5) / consultingDiv.offsetWidth) * 20;
            amountToMove = ((e.screenX * 0.5) / developmentDiv.offsetWidth) * 10;
            ;


            consultingDiv.style = "margin-left:-" + amountToMove + "% !important; opacity:1; margin:0;";
            developmentDiv.style = " z-index:9998; margin-right:-" + amountToMoveGrabbed + "% !important; opacity:1; margin:0;";
            if (window.matchMedia("(min-width:500px)").matches) {
                developmentOverlay.style = "opacity:1";
               
            }
        }
    
        //So either putting mouse over the content or the div itself
        developmentContent.addEventListener('mousemove', (e) => moveDevelopment(e))
        developmentDiv.addEventListener('mousemove', (e) => moveDevelopment(e))

        function moveDevelopment(e) {
            amountToMoveGrabbed = ((e.screenX * 0.5) / developmentDiv.offsetWidth) * 10;
            amountToMove = ((e.screenX * 0.5) / consultingDiv.offsetWidth) * 20;


            consultingDiv.style = "margin-left:-" + amountToMove + "% !important; opacity:1; margin:0;";
            developmentDiv.style = "z-index:9998; margin-right:-" + amountToMoveGrabbed + "% !important; opacity:1; margin:0;";

            if (window.matchMedia("(min-width:500px)").matches) {
                developmentOverlay.style = `     opacity:1`;
                consultingOverlay.style = "";
            }
        }}

    }, 2900);

};
