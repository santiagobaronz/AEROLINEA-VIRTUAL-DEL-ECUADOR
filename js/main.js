'use strict'

// Variables de cookies

setTimeout(MostrarCookie, 6000);

function MostrarCookie(){
    if (localStorage.getItem('cookie') == null) {
        document.getElementById("cookieid").style.display = "block";
    }
    
}


var info_img_1 = document.getElementById("img-1"), 
    info_img_2 = document.getElementById("img-2"),
    info_img_3 = document.getElementById("img-3");

setTimeout(CambiarImagenAbout, 6000);

function CambiarImagenAbout(imagen){

    if(window.screen.width > 1024){

    switch (imagen){
        case info_img_1:
            info_img_1.style.zIndex = 3;
            info_img_1.style.opacity = 1;
            info_img_2.style.zIndex = 2;
            info_img_2.style.opacity = 0.8;
            info_img_3.style.zIndex = 1;
            info_img_3.style.opacity = 0.6;
            break;
        case info_img_2:
            info_img_1.style.zIndex = 2;
            info_img_1.style.opacity = 0.8;
            info_img_2.style.zIndex = 3;
            info_img_2.style.opacity = 1;
            info_img_3.style.zIndex = 1;
            info_img_3.style.opacity = 0.6;
            break;
        case info_img_3:
            info_img_1.style.zIndex = 1;
            info_img_1.style.opacity = 0.6;
            info_img_2.style.zIndex = 2;
            info_img_2.style.opacity = 0.8;
            info_img_3.style.zIndex = 3;
            info_img_3.style.opacity = 1;
            break;
    }
    
}

}

info_img_1.addEventListener("click",function(){CambiarImagenAbout(info_img_1)},false);
info_img_2.addEventListener("click",function(){CambiarImagenAbout(info_img_2)},false);
info_img_3.addEventListener("click",function(){CambiarImagenAbout(info_img_3)},false);

// Cambio de animación Figure Log-in


setTimeout(EscribirEnInput, 5000);

let writeimput = str =>{
    let ArrInput1 = str.split('');
    let i = 0;
    let IntervaloWrite = setInterval(function(){
        document.getElementById("figure-input-1").value += ArrInput1[i];
        i++;
        if(i === ArrInput1.length){
            clearInterval(IntervaloWrite);
            setTimeout(EscribirClave, 1000);
        }
    }, 400);
};

let writepassword = str =>{
    let ArrInput1 = str.split('');
    let i = 0;
    let IntervaloWrite = setInterval(function(){
        document.getElementById("figure-input-2").value += ArrInput1[i];
        i++;
        if(i === ArrInput1.length){
            document.getElementById("autolog").checked = 1;
            clearInterval(IntervaloWrite);
            setTimeout(EliminarInput, 3500);
        }
    }, 400);
};

function EscribirClave(){
    writepassword("●●●●●●●●")
}

function EscribirEnInput(){
    var txt_random_input = ['VAE0001', 'VAE2345' , 'skylover@gmail.com' , 'boeinglover@outlook.com'];
    var txt_input = Math.floor((Math.random() * 4) + 0);
    writeimput(txt_random_input[txt_input]);
}

function EliminarInput(){
    document.getElementById("autolog").checked = 0;
    document.getElementById("figure-input-1").value = '';
    document.getElementById("figure-input-2").value = '';
    setTimeout(EscribirEnInput, 2000);
}



/* Animation Simbrief */



setTimeout(EscribirEnSbAirline, 2000);

let write_airlane = str =>{
    let ArrInput1 = str.split('');
    let i = 0;
    let IntervaloWrite = setInterval(function(){
        document.getElementById("input-Sb-1").value += ArrInput1[i];
        i++;
        if(i === ArrInput1.length){
            clearInterval(IntervaloWrite);
            setTimeout(EscribirEnSbFlight, 1000);
        }
    }, 400);
};

let write_flightno = str =>{
    let ArrInput1 = str.split('');
    let i = 0;
    let IntervaloWrite = setInterval(function(){
        document.getElementById("input-Sb-2").value += ArrInput1[i];
        i++;
        if(i === ArrInput1.length){
            clearInterval(IntervaloWrite);
            setTimeout(EscribirEnSbDeparture, 1000);
        }
    }, 400);
};

let write_departure = str =>{
    let ArrInput1 = str.split('');
    let i = 0;
    let IntervaloWrite = setInterval(function(){
        document.getElementById("input-Sb-3").value += ArrInput1[i];
        i++;
        if(i === ArrInput1.length){
            clearInterval(IntervaloWrite);
            setTimeout(EscribirEnSbArrive, 1000);
        }
    }, 400);
};

let write_arrive = str =>{
    let ArrInput1 = str.split('');
    let i = 0;
    let IntervaloWrite = setInterval(function(){
        document.getElementById("input-Sb-4").value += ArrInput1[i];
        i++;
        if(i === ArrInput1.length){
            clearInterval(IntervaloWrite);
            setTimeout(EscribirEnSbCapname, 1000);
        }
    }, 400);
};

let write_capname = str =>{
    let ArrInput1 = str.split('');
    let i = 0;
    let IntervaloWrite = setInterval(function(){
        document.getElementById("input-Sb-6").value += ArrInput1[i];
        i++;
        if(i === ArrInput1.length){
            clearInterval(IntervaloWrite);
            setTimeout(AnimationSbFigure, 1000);
        }
    }, 400);
};

/* Variables de funciones */

var boton_sb = document.getElementById("btn-Sb-figure");
var boton_animation_sb = document.getElementById("btn-Sb-animation");
var header_sb = document.getElementById("figure-Sb-header");
var content_sb = document.getElementById("figure-Sb-content");
var Pop_up_sb = document.getElementById("Pop-animation-Sb");

function EscribirEnSbAirline(){
    write_airlane("VAE");
}
function EscribirEnSbFlight(){
    write_flightno("0034");
}
function EscribirEnSbDeparture(){
    write_departure("SEQM");
}
function EscribirEnSbArrive(){
    write_arrive("SEGU");
}
function EscribirEnSbCapname(){
    write_capname("Fernando Álvarez");
}

function AnimationSbFigure(){
    boton_sb.style.backgroundColor = "#1e8a22";
    setTimeout(function(){
        header_sb.style.filter = "blur(1.5px)";
        header_sb.style.transition = "all 2s";
        content_sb.style.filter = "blur(1.5px)";
        content_sb.style.transition = "all 2s";
    }, 1000);
    setTimeout(function(){
        Pop_up_sb.style.animationTimingFunction = "ease-out";
        Pop_up_sb.style.animationName = "Pop_Up_Sb_Figure";
    },2000);
    setTimeout(function(){
        boton_animation_sb.style.backgroundColor = "#1e8a22";
    },6000);
    setTimeout(function(){
        Pop_up_sb.style.animationTimingFunction = "ease-in";
        Pop_up_sb.style.animationName = "Pop_Down_Sb_Figure";
        header_sb.style.filter = "blur(0)";
        content_sb.style.filter = "blur(0)";
        EliminarSbInputs();
    },8000)
}

function EliminarSbInputs(){
    document.getElementById("input-Sb-1").value = '';
    document.getElementById("input-Sb-2").value = '';
    document.getElementById("input-Sb-3").value = '';
    document.getElementById("input-Sb-4").value = '';
    document.getElementById("input-Sb-6").value = '';
    setTimeout(EscribirEnSbAirline, 3000);
}

/* Airacs animation */

var btn_airac = document.getElementById("btn_airac"),
    title_airac = document.getElementById("title_airac"),
    img_airac = document.getElementById("img_airac"),
    bg_airac = document.getElementById("bg_airacs_container");

    
    function AiracUpdate(){
        img_airac.setAttribute("src","assets/correcto.svg");
        title_airac.innerHTML = "AIRACS Updated";
        btn_airac.innerHTML = "AIRACS is Updated now";
        bg_airac.style.backgroundColor = "#2471A3";
        btn_airac.style.backgroundColor = "#2471A3";
    }

    btn_airac.addEventListener("click",AiracUpdate,false)


    /* Deplegar menu */

    var menu = document.getElementById("menu-list"), icon_menu = document.getElementById("icon-menu");

    function ToggleMenu(){
        if(menu.classList.contains("menu-close")){
            menu.classList.toggle("menu-close");
        }else{
            menu.classList.toggle("menu-close");
        }
    }

    icon_menu.addEventListener("click",ToggleMenu,false);

    /* Ajustar tamaño de banderas */

    var pilot_flag = document.getElementsByName("pilot_flag");

    if(window.screen.width <= 375){
        for(var i = 0; i < pilot_flag.length; i++){
            pilot_flag[i].setAttribute("width", "30")
            pilot_flag[i].setAttribute("height", "20")
            pilot_flag[i].style.bottom = "25px"
        }
    }