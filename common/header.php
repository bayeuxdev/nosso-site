<!--
 Made by Gustavo Bayeux Franco
 -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="author" content="Gustavo Bayeux Franco">
    <meta name="viewport" content="width=device-width, height=device-height,initial-scale=1.0, user-scalable=0">
    <meta name="keywords" content="site,saas,uiux,marketing,websites,apps,pdv,cms">
    <meta name="description" content="Desenvolvedor Criativo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+
Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>
       BAYEUX TECH
    </title>
    <script src="../js/main.js"></script>
    <link rel="stylesheet" href="../css/mainDEV.css">
    <link rel="icon" type="image/ico" href="/img/favicons/favicon.ico" sizes="32x32" />
</head>

<body onscroll="scroll()">
    <div style=" width: 100vw; height: 100vh;
display: flex; font-family:trispace; font-size:2rem; color:#00EFA9; justify-content: center; align-items: center;" id="loader">



    </div>

    <div id="menuWrapper">
        <div class="fixed  lg:hidden block justify-center
 text-white text-right h-full animation-disappearRight 
   bg-[#000] 
    " id="menuContent">




            <ul class="min-w-[300px] font-[trispace] whitespace-nowrap text-white
     pr-3 sm:leading-14  
     sm:text-3xl 
     text-2xl "> <br>
                <li class="en leading-relaxed 
     border border-[#616161] border-solid text-center  w-full" onclick="backToStart()">Home
                </li>
                <li class="es leading-relaxed 
     border border-[#616161] border-solid text-center  w-full" onclick="backToStart()">Início </li>
                <li class="pt leading-relaxed border border-[#616161] border-solid text-center  w-full" onclick="backToStart()">Início
                </li>
                <br>
                <li class="pt link border text-center  border-[#616161] border-solid  w-full leading-relaxed pt" onclick=" elToggle('dp1','animation-disappearSize','animation-appearSize')
            ">Soluções

                    <svg xmlns="http://www.w3.org/2000/svg" class="text-left googleIcon" viewBox="0 -960 960 960">
                        <path fill="#616161" d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                    </svg>
                </li>
                <li class="en link border text-center
          border-[#616161] border-solid  w-full leading-relaxed " onclick=" elToggle('dp1','animation-disappearSize','animation-appearSize')
            ">Solutions
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-left googleIcon" viewBox="0 -960 960 960">
                        <path fill="#616161" d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                    </svg>
                </li>
                <li class="es link border text-center  border-[#616161] border-solid 
         w-full leading-relaxed " onclick=" elToggle('dp1','animation-disappearSize','animation-appearSize')
            ">Soluciones
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-left googleIcon" viewBox="0 -960 960 960">
                        <path fill="#616161" d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                    </svg>
                </li>

                <div id="dp1" class="text-center w-full dropdown animation-disappearSize sm:text-1xl text-base  flex flex-col leading-relaxed ">
                    <div class="p-3">
                        <p class=" text-[1.1rem]  font-bold text-[var(--darkblue)] pt">POSICIONAMENTO DE MARCA<br></p>
                        <p class=" text-[1.15rem]  font-bold text-[var(--darkblue)] es">POSICIONAMIENTO EMPRESARIAL<br></p>
                        <p class=" text-[1.18rem]  font-bold text-[var(--darkblue)] en">BRAND POSITIONING<br></p><br>

                        <a href="/marketing" class="pt !border-none">
                            <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                                MARKETING DIGITAL<br>

                                <span class="text-[#666] whitespace-normal  normal-case">
                                    Soluções interconectadas para impulsionamento 
                                    <br>e presença digital no seu ramo.
                                </span>


                            </div>
                        </a>
                        <a href="/marketing" class="en !border-none">
                            <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                                DIGITAL MARKETING <br>

                                <span class="text-[#666] whitespace-normal  normal-case ">

                                    Interconnected solutions for boosting your industry's digital presence.


                                </span>


                            </div>
                        </a>
                        <a href="/marketing" class="es !border-none">
                            <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                                MARKETING DIGITAL<br>

                                <span class="text-[#666] whitespace-normal  normal-case">
                                    Soluciones interconectadas para impulsar la presencia digital de su sector.
                                </span>


                            </div>
                        </a>
                    </div>

                    <div class="p-3">
                        <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] pt">ASSESSORIA TECNOLÓGICA<br></p>
                        <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] es">ASESORÍA TECNOLÓGICA<br></p>
                        <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] en">TECHNOLOGICAL ADVISORY<br></p><br>
                        
                            <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                            <a href="/sistemas" class="!border-none"><span class="whitespace-nowrap pt">SISTEMAS CUSTOMIZADOS</span>
                            <span class="whitespace-nowrap es">SISTEMAS CUSTOMIZADOS</span></a>

                             <a href="/systems" class="!border-none"><span class="whitespace-nowrap en">CUSTOM SYSTEMS</span></a><br>

                                <span class="text-[#666] whitespace-normal pt normal-case">
                                    Sistemas desenvolvidos para atender às mais diversas demandas, desde CRMs até SAASs
                                </span>
                                <span class="text-[#666] whitespace-normal en normal-case">

                                    Systems developed to meet the most diverse demands, from CRMs to SAASs



                                </span>
                                <span class="text-[#666] whitespace-normal es normal-case">

                                    Ferramenta avançada de BI para análise e integração de dados



                                </span>

                            </div>
                        
                        <br>

                        <a class="!border-none">
                            <div class="text-[1rem] duration-300 bg-[#121212] min-w-[250] hover:bg-[#333] hover:!text-[#fff] p-2">
                                <a href="/integracoes" class="!border-none"><span class="whitespace-nowrap pt">INTEGRAÇÕES</span>
                                <a href="/integraciones" class="!border-none"><span class="whitespace-nowrap es">INTEGRACIONES</span>
                                <a href="/integrations" class="!border-none"><span class="whitespace-nowrap en">INTEGRATIONS</span></a><br>

                                <span class="text-[#666] whitespace-normal pt normal-case">
                                    Desenvolvimento de interfaces para integração entre sistemas e manutenção de APIs
                                </span>
                                <span class="text-[#666] whitespace-normal es normal-case">


                                    Elaboracíon de interfaces para la integración entre sistemas y mantenimiento de API



                                </span>
                                <span class="text-[#666] whitespace-normal en normal-case">


                                    Development of interfaces for integration between systems and maintenance of APIs




                                </span>

                            </div>
                        </a>
                        <br>
                    </div>


                </div>
                <br>
         



                <br>
                <li class="pt leading-relaxed  border  
        text-center border-[#616161] border-solid  w-full" onclick="window.location='sobre'">
                    Quem somos</li>
                <li class="en leading-relaxed  border  text-center 
        border-[#616161] border-solid  w-full" onclick="window.location='about'">Who we are
                </li>
                <li class="es leading-relaxed  border  text-center 
        border-[#616161] border-solid  w-full" onclick="window.location='sobre'">Quiénes somos
                </li>
                <br>

                <li class="border border-[#616161] 
         text-center border-solid  w-full leading-relaxed ">
                    <a href="/projects" class="pt">
                        Projetos
                    </a>
                    <a href="/projects" class="en">
                        Projects
                    </a>
                    <a href="/projectos" class="es">
                        Projectos
                    </a>
                </li>
                <br><br>
                <li  onclick=" elToggle('dp6','animation-appearSize','animation-disappearSize')
        " class=" p-2 
            text-1xl border border-[#fff]
             hover:border-[var(--darkblue)] 
             border-solid w-full text-left
              z-50 text-white hover:text-[var(--darkblue)] link">
                    <span onclick="window.location='/contato'" class="pt">
                        Falar comigo
                    </span>
                    <span onclick="window.location='/quote'" class="en">
                        Let's have  <br> a talk
                    </span>
                    <span onclick="window.location='/contacto'" class="es">
                        Hable <br>comigo
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-left fill-[#fff] googleIcon" viewBox="0 -960 960 960">
                        <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                    </svg>

                </li>
                <br>
                <li onclick="backToStart2()" onclick=" elToggle('dp6','animation-appearSize','animation-disappearSize')
            " class=" flex flex-between items-center w-full text-1xl  z-50
                 overflow-x-visible
                 font-light
                 hover:border-[var(--darkblue)]
                 border text-[#fff]
                 btn1 border-[#fff] text-[0.9rem]">

                    <svg class="googleIcon h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                        <path fill="#fff" d="m476-80 182-480h84L924-80h-84l-43-122H603L560-80h-84ZM160-200l-56-56 202-202q-35-35-63.5-80T190-640h84q20 39 40 68t48 58q33-33 68.5-92.5T484-720H40v-80h280v-80h80v80h280v80H564q-21 72-63 148t-83 116l96 98-30 82-122-125-202 201Zm468-72h144l-72-204-72 204Z" />
                    </svg>
                    <div style="border-left:1px solid #fff" class="p-1">
                        <span class="pt">
                            Mudar
                            Idioma
                        </span>
                        <span class="en">
                            Change
                            Language
                        </span>
                        <span class="es">
                            Cambíar
                            Idioma
                        </span>
                    </div>
                </li>

            </ul>
        </div>

        <menu id="menu" class="whitespace-nowrap 
        text-1xl
        uppercase
        font-[trispace]
flex w-screen items-center fixed
     z-50 justify-around p-[2vw] lg:justify-start bg-[#000] " style="display: none;
     ">

            <button onclick="backToStart()" class="lg:hidden">

                <svg fill="#fff" height="28" width="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                    <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
                </svg>
            </button>
<svg version="1.0" onclick="backToStart()" class="
sitelogo block max-h-[6vh] sm:min-h-[50px] py-2"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7242.000000 1345.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,1345.000000) scale(0.100000,-0.100000)"
fill="#fff" stroke="none">
<path d="M14380 13443 c0 -5 -20 -96 -45 -203 -25 -107 -45 -198 -45 -202 0
-4 1162 -8 2581 -8 2453 0 2581 1 2577 18 -3 9 -24 104 -49 210 l-43 192
-2488 0 c-1368 0 -2488 -3 -2488 -7z"/>
<path d="M23700 13443 c0 -5 40 -98 88 -208 l87 -200 1613 -3 c886 -1 1612 0
1612 2 0 4 -130 361 -145 399 -7 16 -94 17 -1631 17 -893 0 -1624 -3 -1624 -7z"/>
<path d="M31515 13438 c-3 -7 -36 -98 -75 -202 -38 -104 -70 -193 -70 -198 0
-4 725 -7 1612 -6 l1612 3 88 204 c48 112 88 205 88 207 0 2 -731 4 -1625 4
-1291 0 -1627 -3 -1630 -12z"/>
<path d="M49200 13240 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 13240 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M61052 13253 c44 -109 82 -204 85 -210 4 -10 357 -13 1719 -13 943 0
1714 3 1714 7 0 4 -34 98 -76 210 l-77 203 -1723 0 -1723 0 81 -197z"/>
<path d="M68959 13423 c-6 -16 -39 -102 -74 -193 -35 -91 -66 -173 -70 -182
-7 -17 79 -18 1711 -18 l1719 0 77 193 c43 105 80 200 84 210 6 16 -80 17
-1715 17 l-1721 0 -11 -27z"/>
<path d="M0 6825 l0 -6615 3213 3 c2970 3 3223 4 3362 20 1176 136 2050 573
2658 1330 415 516 646 1111 733 1882 22 194 30 704 14 903 -42 546 -175 977
-433 1407 -267 446 -656 815 -1141 1084 -320 177 -770 326 -1111 367 l-59 7
114 23 c348 70 756 279 1065 545 376 324 699 826 849 1321 117 387 163 771
153 1272 -14 701 -148 1172 -467 1646 -256 381 -597 675 -1072 924 -407 214
-984 392 -1493 462 -158 21 -1464 31 -4312 33 l-2073 1 0 -6615z m4795 4405
c601 -41 975 -166 1224 -412 268 -263 388 -667 352 -1181 -30 -432 -142 -708
-386 -953 -195 -196 -445 -320 -795 -397 -301 -67 -480 -77 -1357 -77 l-693 0
0 1515 0 1515 753 0 c413 0 820 -5 902 -10z m175 -5299 c353 -47 586 -108 763
-198 207 -104 416 -311 516 -511 146 -290 193 -828 110 -1247 -56 -281 -166
-485 -362 -673 -189 -180 -420 -291 -757 -365 -270 -60 -290 -61 -1232 -65
l-868 -3 0 1541 0 1541 873 -4 c578 -3 901 -8 957 -16z"/>
<path d="M37370 13230 l0 -200 4560 0 4560 0 0 200 0 200 -4560 0 -4560 0 0
-200z"/>
<path d="M14190 12607 c0 -1 -20 -90 -45 -197 -25 -107 -45 -201 -45 -207 0
-10 561 -13 2770 -13 1524 0 2770 4 2770 8 0 4 -20 96 -45 204 -25 108 -45
199 -45 202 0 3 -1206 6 -2680 6 -1474 0 -2680 -1 -2680 -3z"/>
<path d="M24074 12578 c7 -18 48 -113 91 -210 l77 -178 1584 0 c871 0 1584 2
1584 3 0 2 -34 96 -75 208 -41 112 -75 205 -75 206 0 2 -720 3 -1600 3 l-1600
0 14 -32z"/>
<path d="M31205 12598 c-2 -7 -36 -99 -75 -204 -38 -105 -70 -194 -70 -198 0
-3 713 -6 1584 -6 l1583 0 58 133 c32 72 73 167 91 210 l33 77 -1600 0 c-1271
0 -1601 -3 -1604 -12z"/>
<path d="M37370 12400 l0 -210 4560 0 4560 0 0 210 0 210 -4560 0 -4560 0 0
-210z"/>
<path d="M49200 12400 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 12400 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M61395 12403 l83 -208 1706 -3 1705 -2 -20 52 c-11 29 -46 123 -78
208 l-58 155 -1711 3 -1710 2 83 -207z"/>
<path d="M68639 12583 c-53 -138 -124 -325 -135 -356 l-13 -37 1705 2 1706 3
84 205 c46 112 84 206 84 207 0 2 -770 3 -1710 3 l-1710 0 -11 -27z"/>
<path d="M13996 11753 c-3 -10 -25 -105 -49 -210 l-44 -193 2963 0 c2482 0
2964 2 2964 14 0 7 -18 91 -40 187 -22 96 -42 184 -45 197 l-5 22 -2870 0
c-2723 0 -2869 -1 -2874 -17z"/>
<path d="M24434 11753 c4 -10 44 -105 89 -210 l82 -192 1559 -1 c1480 0 1558
1 1551 18 -4 9 -38 104 -77 210 l-71 192 -1570 0 c-1490 0 -1569 -1 -1563 -17z"/>
<path d="M30895 11753 c-19 -48 -145 -395 -145 -399 0 -2 701 -4 1558 -4
l1557 0 82 193 c45 105 85 200 89 210 6 16 -73 17 -1564 17 -1486 0 -1570 -1
-1577 -17z"/>
<path d="M37370 11560 l0 -210 4560 0 4560 0 0 210 0 210 -4560 0 -4560 0 0
-210z"/>
<path d="M49200 11560 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 11560 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M61660 11748 c5 -13 42 -106 83 -208 l75 -185 1692 -3 c1352 -2 1691
0 1687 10 -2 7 -37 102 -78 211 l-74 197 -1697 0 -1698 0 10 -22z"/>
<path d="M68325 11758 c-3 -7 -38 -101 -79 -208 l-74 -195 1691 -3 c929 -1
1692 -1 1693 1 2 2 42 96 88 210 l85 207 -1700 0 c-1351 0 -1701 -3 -1704 -12z"/>
<path d="M13805 10918 c-2 -7 -23 -94 -45 -193 -22 -99 -43 -188 -46 -197 -5
-17 70 -18 1485 -18 1410 0 1490 1 1495 18 3 9 19 82 36 162 17 80 34 148 39
153 4 4 52 6 107 5 l99 -3 36 -165 35 -165 1491 -3 1490 -2 -44 192 c-24 106
-46 201 -49 211 -5 16 -160 17 -3065 17 -2439 0 -3061 -3 -3064 -12z"/>
<path d="M24804 10898 c7 -18 48 -113 91 -210 l77 -178 1529 0 1529 0 -36 98
c-20 53 -54 148 -76 210 l-41 112 -1543 0 -1544 0 14 -32z"/>
<path d="M30590 10927 c0 -2 -34 -95 -75 -207 -41 -112 -75 -205 -75 -207 0
-2 689 -2 1531 -1 l1531 3 89 205 c49 113 89 206 89 207 0 2 -695 3 -1545 3
-850 0 -1545 -2 -1545 -3z"/>
<path d="M37370 10720 l0 -210 4560 0 4560 0 0 210 0 210 -4560 0 -4560 0 0
-210z"/>
<path d="M49200 10720 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 10720 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M62007 10888 c9 -24 47 -117 84 -208 l68 -165 1675 -3 c930 -1 1676
2 1676 7 0 4 -25 75 -56 157 -31 82 -65 173 -76 202 l-19 52 -1685 0 -1684 0
17 -42z"/>
<path d="M68005 10918 c-2 -7 -28 -74 -56 -148 -28 -74 -62 -163 -75 -197
l-23 -63 1682 0 1682 0 80 197 c44 108 81 203 83 210 5 19 -3366 19 -3373 1z"/>
<path d="M13572 9903 c-23 -104 -45 -198 -48 -210 l-6 -23 1496 0 1496 0 5 23
c3 12 21 96 40 187 19 91 37 175 40 188 l5 22 -1493 0 -1493 0 -42 -187z"/>
<path d="M17140 10086 c0 -7 81 -381 86 -398 5 -17 85 -18 1500 -18 l1494 0
-6 24 c-3 13 -24 107 -47 207 l-42 184 -1493 3 c-820 1 -1492 0 -1492 -2z"/>
<path d="M25164 10073 c4 -10 44 -105 89 -210 l82 -192 1502 -1 1503 0 -25 65
c-13 35 -48 130 -77 210 l-52 145 -1514 0 c-1438 0 -1514 -1 -1508 -17z"/>
<path d="M30212 9898 c-39 -106 -73 -201 -77 -210 -7 -17 69 -18 1497 -18
l1504 0 91 210 91 210 -1517 0 -1518 0 -71 -192z"/>
<path d="M37370 9880 l0 -210 1580 0 1580 0 0 210 0 210 -1580 0 -1580 0 0
-210z"/>
<path d="M49200 9880 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 9880 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M62351 10038 c61 -155 143 -354 148 -361 4 -4 754 -6 1668 -5 l1661
3 -77 205 -77 205 -1672 3 -1672 2 21 -52z"/>
<path d="M67656 9998 c-19 -51 -55 -145 -79 -208 l-44 -115 1665 -3 c916 -1
1669 1 1673 5 5 6 123 290 166 401 4 9 -334 12 -1670 12 l-1675 0 -36 -92z"/>
<path d="M13381 9063 c-24 -104 -45 -198 -48 -210 l-5 -23 1501 0 c826 0 1501
2 1501 4 0 7 81 381 86 399 5 16 -71 17 -1494 17 l-1499 0 -42 -187z"/>
<path d="M17325 9228 c3 -13 21 -97 40 -187 20 -91 38 -175 41 -188 l6 -23
1500 0 c1424 0 1500 1 1496 18 -3 9 -24 104 -49 210 l-43 192 -1498 0 -1498 0
5 -22z"/>
<path d="M25534 9218 c7 -18 48 -113 91 -210 l77 -178 1474 0 1473 0 -24 63
c-13 34 -47 128 -77 210 l-53 147 -1488 0 -1487 0 14 -32z"/>
<path d="M29931 9133 c-24 -65 -58 -160 -77 -211 l-34 -92 1478 2 1477 3 87
200 c48 110 87 203 88 208 0 4 -670 7 -1488 7 l-1488 0 -43 -117z"/>
<path d="M37370 9040 l0 -210 1580 0 1580 0 0 210 0 210 -1580 0 -1580 0 0
-210z"/>
<path d="M49200 9040 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 9040 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M62687 9208 c9 -24 47 -117 83 -208 l66 -165 1653 -3 c1321 -2 1652
0 1649 10 -3 7 -38 102 -78 211 l-73 197 -1659 0 -1658 0 17 -42z"/>
<path d="M67344 9178 c-15 -40 -51 -135 -80 -210 l-52 -138 1658 0 1658 0 70
173 c39 94 78 189 87 210 l15 37 -1664 0 -1664 0 -28 -72z"/>
<path d="M13226 8384 c-18 -72 -86 -375 -86 -384 0 -7 478 -10 1504 -10 l1503
0 33 153 c17 83 38 178 45 210 l13 57 -1503 0 -1503 0 -6 -26z"/>
<path d="M17504 8393 c5 -18 86 -392 86 -399 0 -2 677 -4 1505 -4 828 0 1505
4 1505 8 0 4 -20 96 -45 204 -25 108 -45 199 -45 202 0 3 -678 6 -1506 6
-1429 0 -1505 -1 -1500 -17z"/>
<path d="M25894 8393 c4 -10 44 -105 89 -210 l82 -192 1446 -1 1446 0 -76 208
-77 207 -1458 3 c-1386 2 -1458 1 -1452 -15z"/>
<path d="M29611 8262 c-30 -81 -64 -175 -77 -210 l-24 -62 1451 2 1450 3 83
190 c45 105 85 198 89 208 6 16 -67 17 -1456 17 l-1462 0 -54 -148z"/>
<path d="M37370 8200 l0 -210 1580 0 1580 0 0 210 0 210 -1580 0 -1580 0 0
-210z"/>
<path d="M49200 8200 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 8200 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M63010 8408 c0 -2 38 -95 83 -208 l84 -205 1640 -3 1641 -2 -78 207
-78 208 -1646 3 c-905 1 -1646 1 -1646 0z"/>
<path d="M67010 8298 c-24 -62 -60 -157 -81 -210 l-37 -98 1647 0 1647 0 82
203 c45 111 82 206 82 210 0 4 -742 7 -1649 7 l-1648 0 -43 -112z"/>
<path d="M13036 7553 c-3 -10 -23 -99 -46 -198 -22 -99 -43 -186 -45 -192 -3
-10 302 -13 1508 -13 l1512 0 43 198 c23 108 42 203 42 210 0 9 -308 12 -1504
12 -1424 0 -1505 -1 -1510 -17z"/>
<path d="M17706 7463 c13 -60 33 -154 45 -210 l22 -103 1509 0 c1100 0 1508 3
1508 11 0 9 -54 255 -85 387 l-5 22 -1509 0 -1508 0 23 -107z"/>
<path d="M26259 7548 c5 -13 44 -102 86 -198 42 -96 79 -181 82 -187 4 -10
576 -13 2812 -13 l2807 0 87 203 c48 111 87 205 87 210 0 4 -645 7 -1432 7
l-1433 0 -60 -165 c-32 -90 -60 -163 -61 -162 -2 1 -29 74 -62 162 l-59 160
-1431 3 -1432 2 9 -22z"/>
<path d="M37370 7360 l0 -210 4560 0 4560 0 0 210 0 210 -4560 0 -4560 0 0
-210z"/>
<path d="M49200 7360 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M56230 7360 l0 -210 1585 0 1585 0 0 210 0 210 -1585 0 -1585 0 0
-210z"/>
<path d="M63350 7567 c0 -2 38 -95 83 -208 l84 -204 3163 0 3163 0 79 190 c43
105 81 198 84 208 5 16 -158 17 -3325 17 -1832 0 -3331 -1 -3331 -3z"/>
<path d="M12845 6718 c-2 -7 -347 -1511 -765 -3343 -418 -1831 -763 -3338
-766 -3347 -5 -17 76 -18 1599 -18 l1604 0 288 1440 288 1440 1776 -2 1776 -3
287 -1434 c158 -789 289 -1436 291 -1438 2 -1 724 -2 1603 -1 l1600 3 -761
3330 c-419 1832 -765 3342 -768 3358 l-7 27 -1510 0 c-1274 0 -1510 -2 -1510
-14 0 -7 72 -347 160 -754 88 -407 160 -745 160 -751 0 -8 -373 -11 -1320 -11
-1136 0 -1320 2 -1320 14 0 8 72 348 160 755 88 407 160 745 160 751 0 16
-3019 14 -3025 -2z"/>
<path d="M26620 6724 c0 -4 237 -552 526 -1218 l526 -1211 -7 -2143 -8 -2142
1587 0 1586 0 0 2167 0 2167 511 1180 c281 650 514 1187 516 1194 4 9 -523 12
-2616 12 -1442 0 -2621 -3 -2621 -6z"/>
<path d="M37370 3370 l0 -3360 4560 0 4560 0 0 1430 0 1430 -2980 0 -2980 0 0
1250 0 1250 2980 0 2980 0 0 680 0 680 -4560 0 -4560 0 0 -3360z"/>
<path d="M49200 5743 c0 -544 3 -2051 7 -3349 l6 -2361 1226 -7 c674 -3 2966
-9 5094 -12 l3867 -7 0 3362 0 3361 -1587 0 -1586 0 6 -1935 7 -1935 -1807 0
c-995 0 -1865 3 -1935 7 l-128 6 0 1929 0 1928 -1585 0 -1585 0 0 -987z"/>
<path d="M63690 6726 c0 -2 8 -24 19 -48 l18 -44 -1376 -3309 -1376 -3310
1719 -3 c946 -1 1721 0 1724 2 2 3 480 1239 1062 2748 l1058 2743 140 3 140 3
51 -133 c29 -73 512 -1310 1074 -2748 l1023 -2615 1722 -3 c947 -1 1722 0
1722 2 0 3 -625 1493 -1389 3311 l-1390 3307 19 49 20 49 -2990 0 c-1645 0
-2990 -2 -2990 -4z"/>
</g>
</svg>

            <ul class="h-full items-center hidden lg:flex text-[0.9rem] w-8/12">
           
                <li onclick=" elToggle('dp4','animation-appearSize','animation-disappearSize')
       " class="currentLink  text-[1rem]   w-fit text-white overflow-x-visible hover:text-[var(--darkblue)] link">

                    <span class="pt ">Soluções</span>
                    <span class="es">Soluciones</span>
                    <span class="en">Solutions</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-left googleIcon" viewBox="0 -960 960 960">
                        <path fill="#fff" d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                    </svg>
                    <div id="dp4" class=" w-screen left-0 absolute bg-[#000] dropdown mt-3 z-[48] h-fit animation-disappearSize text-sm flex flex-between leading-relaxed text-[#fff] ">



                        <div style="border-right:1px solid #fff;" class="  whitespace-normal p-4  w-[520px]"><br>
                            <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] pt">POSICIONAMENTO DE MARCA<br></p>
                            <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] es">POSICIONAMIENTO EMPRESARIAL<br></p>
                            <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] en">BRAND POSITIONING<br></p>

                            <hr class="mt-[0.2em]  max-w-[80px] border-[var(--darkblue)]    widthScroll bg-[var(--darkblue)] my-2 ">

                            <br>
                            <div class="flex gap-6">
                                <div>
                                    <a href="/marketing" class="pt !border-none">
                                        <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                                            MARKETING DIGITAL<br>

                                            <span class="text-[#666] whitespace-normal  normal-case">
                                                Soluções interconectadas para impulsionamento e presença digital no seu ramo.
                                            </span>


                                        </div>
                                    </a>
                                    <a href="/marketing" class="en !border-none">
                                        <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                                            DIGITAL MARKETING <br>

                                            <span class="text-[#666] whitespace-normal  normal-case">

                                                Interconnected solutions for boosting <br>your industry's digital presence.


                                            </span>


                                        </div>
                                    </a>
                                    <a href="/marketing" class="es !border-none">
                                        <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                                            MARKETING DIGITAL<br>

                                            <span class="text-[#666] whitespace-normal  normal-case">
                                                Soluciones interconectadas para impulsar la presencia digital de su sector.
                                            </span>


                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="  whitespace-normal p-4  w-[820px]"><br>
                            <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] pt">ASSESSORIA TECNOLÓGICA<br></p>
                            <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] es">ASESORÍA TECNOLÓGICA<br></p>
                            <p class=" text-[1.2rem]  font-bold text-[var(--darkblue)] en">TECHNOLOGICAL ADVISORY<br></p>

                            <hr class="mt-[0.2em]  max-w-[80px] border-[var(--darkblue)]    widthScroll bg-[var(--darkblue)] my-2 ">

                            <br>
                            <div class="flex gap-6">
                                    <a href="/systems" class="!border-none">
                                        <div class=" text-[1rem] duration-300 bg-[#121212]  hover:bg-[#333] hover:!text-[#fff] p-2">
                                            <span class="whitespace-nowrap pt">SISTEMAS CUSTOMIZADOS</span>
                                            <span class="whitespace-nowrap es">SISTEMAS CUSTOMIZADOS</span>
                                            <span class="whitespace-nowrap en">CUSTOM SYSTEMS</span><br>

                                            <span class="text-[#666] whitespace-normal pt normal-case">
                                                Sistemas desenvolvidos para atender às mais diversas demandas, desde CRMs até SAASs
                                            </span>
                                            <span class="text-[#666] whitespace-normal en normal-case">

                                                Systems developed to meet the most diverse demands, from CRMs to SAASs



                                            </span>
                                            <span class="text-[#666] whitespace-normal es normal-case">

                                                Ferramenta avançada de BI para análise e integração de dados



                                            </span>

                                        </div>
                                    </a>


                                <a  class="!border-none">
                                        <div class="text-[1rem] duration-300 bg-[#121212] min-w-[250] hover:bg-[#333] hover:!text-[#fff] p-2">
                                            <a href="/integracoes" class="!border-none"><span class="whitespace-nowrap pt">INTEGRAÇÕES</span></a>
                                            <a href="/integraciones" class="!border-none"><span class="whitespace-nowrap es">INTEGRACIONES</span></a>
                                            <a href="/integrations" class="!border-none"><span class="whitespace-nowrap en">INTEGRATIONS</span></a><br>

                                            <span class="text-[#666] whitespace-normal pt normal-case">
                                                Desenvolvimento de interfaces para integração entre sistemas e manutenção de APIs
                                            </span>
                                            <span class="text-[#666] whitespace-normal es normal-case">


                                                Elaboracíon de interfaces para la integración entre sistemas y mantenimiento de API



                                            </span>
                                            <span class="text-[#666] whitespace-normal en normal-case">


                                                Development of interfaces for integration between systems and maintenance of APIs




                                            </span>

                                        </div>
                                    </a>

                            </div>
                            <br>
                        </div>



                    </div>
                </li>

           
                <li class="currentLink w-fit text-white overflow-x-visible hover:text-[var(--darkblue)] link">
                    <a href="/sobre" class="pt">SOBRE MIM</a>
                    <a href="/sobre" class="es">SOBRE MIM</a>
                    <a href="/about" class="en">ABOUT ME</a>
                </li>


                <li class=" currentLink w-fit  text-white overflow-x-visible hover:text-[var(--darkblue)] link">
                    <a href="/projetos" class="pt">
                        Projetos
                    </a>
                    <a href="/projects" class="en">
                        Projects
                    </a>
                    <a href="/projectos" class="es">
                        Projectos
                    </a>
                </li>


            </ul>
            <ul class="hidden text-[0.9rem] lg:flex flex flex-between items-center 
     rounded-md  md:visible  absolute " style="right:0;">
                <li  onclick=" elToggle('dp6','animation-appearSize','animation-disappearSize')
        " class=" mr-4 m-2 text-1xl w-fit z-50
             overflow-x-visible
             font-light
             border
             text-[0.9rem]
             btn1 ">
                    <span onclick="window.location='/contato'" class=" pt">
                        ENTRAR EM CONTATO
                    </span>
                    <span onclick="window.location='/quote'" class="en">
                        CONTACT US
                    </span>
                    <span onclick="window.location='/contacto'" class="es">
                        CONTÁCTENOS
                    </span>

                </li>
                <li onclick="backToStart2()" onclick=" elToggle('dp6','animation-appearSize','animation-disappearSize')
        " class=" flex flex-between items-center mr-4 m-2  w-fit z-50
             overflow-x-visible
             font-light
             hover:border-[var(--darkblue)]
             border text-[#999]
             btn1 border-[#999] text-[0.9rem]">

                    <svg class="googleIcon h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                        <path fill="#999" d="m476-80 182-480h84L924-80h-84l-43-122H603L560-80h-84ZM160-200l-56-56 202-202q-35-35-63.5-80T190-640h84q20 39 40 68t48 58q33-33 68.5-92.5T484-720H40v-80h280v-80h80v80h280v80H564q-21 72-63 148t-83 116l96 98-30 82-122-125-202 201Zm468-72h144l-72-204-72 204Z" />
                    </svg>
                    <div style="border-left:1px solid #999" class="px-1">
                        <span class="pt">
                            Idioma
                        </span>
                        <span class="en">
                            Language
                        </span>
                        <span class="es">
                            Idioma
                        </span>
                    </div>
                </li>
            </ul>
            <label onclick="elToggle('menuContent', 'animation-appearRight', 'animation-disappearRight')
    ;" class=" lg:hidden link h-fit text-[white] text-base cursor-pointer hover:underline">
                MENU
            </label>

        </menu>
    </div>
    <main style="visibility:hidden;" id="container">