'use strict';

/* Botones para de pagina */

var btn_en = document.getElementById("ingles");
var btn_es = document.getElementById("español");

/* Variables de las id's de cada elemento del DOM que tiene que ser traducido */

var page_title = document.getElementById("page-title"),// Titulo de pagina,
    menu_item_home = document.getElementById("menu-item-home"), // Menú de navegación,
    menu_item_aboutave = document.getElementById("menu-item-aboutave"),
    menu_item_pilots = document.getElementById("menu-item-pilots"),
    menu_item_aircrafts = document.getElementById("menu-item-aircrafts"),
    menu_item_staff = document.getElementById("menu-item-staff"),
    menu_item_register = document.getElementById("menu-item-register"),
    menu_item_login = document.getElementById("menu-item-login"),
    banner_title = document.getElementById("banner-title"), // Sección del banner
    banner_text = document.getElementById("banner-text"),
    banner_button_1 = document.getElementById("banner-btn-1"),
    banner_button_2 = document.getElementById("banner-btn-2"),
    info_title = document.getElementById("info-title"), // Sección de Acerca de nosotros
    info_text_1 = document.getElementById("info-text-1"),
    info_text_2 = document.getElementById("info-text-2"),
    unitary_about_title = document.getElementById("unitary-about-title"), // Sección de cuadros de Oportunidades
    unitary_box_title_software = document.getElementById("unitary-box-title-software"),
    unitary_box_text_software = document.getElementById("unitary-box-text-software"),
    unitary_box_title_simbrief = document.getElementById("unitary-box-title-simbrief"),
    unitary_box_text_simbrief = document.getElementById("unitary-box-text-simbrief"),
    unitary_box_title_airacs = document.getElementById("unitary-box-title-airacs"),
    unitary_box_text_airacs = document.getElementById("unitary-box-text-airacs"),
    pilot_subtitle = document.getElementById("pilot-subtitle"), // Sección de los pilotos
    pilot_title = document.getElementById("pilot-title"),
    pilot_text_1 = document.getElementById("pilot-text-1"),
    pilot_text_2 = document.getElementById("pilot-text-2"),
    pilot_btn_register = document.getElementById("pilot-btn-register"),
    last_pilots_title = document.getElementById("last-pilots-title"),
    join_date_pilot = document.getElementsByName("joindate"),
    aircrafts_title = document.getElementById("aircrafts-title"), // Sección de las aeronaves
    aircrafts_subtitle = document.getElementById("aircrafts-subtitle"),
    aircrafts_text = document.getElementById("aircrafts-text"),
    aircrafts_btn = document.getElementById("staff"),
    staff_title = document.getElementById("staff-title"), // Titutlo de la sección Staff
    footer_title = document.getElementById("footer_title"), // Footer
    footer_second_title = document.getElementById("footer-second-title"),
    footer_description = document.getElementById("footer-description"),
    footer_services_title = document.getElementById("footer-services-title"),
    footer_hrefs_title = document.getElementById("footer-hrefs"),
    footer_login = document.getElementById("footer-login"),
    footer_register = document.getElementById("footer-register"),
    footer_aboutus = document.getElementById("footer-aboutus"),
    footer_pilots = document.getElementById("footer-pilots"),
    footer_fleet = document.getElementById("footer-fleet"),
    footer_staff = document.getElementById("footer-staff"),
    footer_contact = document.getElementById("footer-contact"),
    footer_copyright = document.getElementById("footer-copyright");



    

/* Funciones para cambiar las palabras de idioma */

function SpanishPage(){

    // Titulo de la pagina
    page_title.innerHTML = "Aerolínea Virtual del Ecuador";
    // Elementos del menú de navegación 
    menu_item_home.innerHTML = "Inicio",
    menu_item_aboutave.innerHTML = "Acerca de";
    menu_item_pilots.innerHTML = " Pilotos";
    menu_item_aircrafts.innerHTML = "Flota";
    menu_item_staff.innerHTML = "Staff";
    menu_item_register.innerHTML = "Registrate";
    menu_item_login.innerHTML = "Iniciar Sesión";
    // Elementos del Banner
    banner_title.innerHTML = "Aerolínea Virtual del Ecuador";
    banner_text.innerHTML = "Disfruta de la aviación y cumple tu sueño de volar";
    banner_button_1.innerHTML = "Registrate ahora";
    banner_button_2.innerHTML = "Iniciar sesión";
    // Sección Acerca de nosotros
    info_title.innerHTML = "Acerca de nosotros";
    info_text_1.innerHTML = "Somos una aerolínea virtual fundada en el Ecuador que tiene como objetivo generar más tráfico en el espacio aéreo virtual ecuatoriano y que a su vez el nombre de Ecuador suene alrededor del mundo. Teniendo como principal objetivo ofrecer el mejor entrenamiento y la mejor experiencia de vuelo en simulador para los pilotos vinculados que se registran asemejando nuestra operación a la de una aerolínea real.";
    info_text_2.innerHTML = "La aerolínea virtual del Ecuador provee a sus pilotos diversas oportunidades y herramientas para incrementar el realismo en sus operaciones. Desde un servicio premium de planificación de vuelos virtuales hasta un software de montireo para sus vuelos.";
    // Cajas de texto de las oportunidades para pilotos
    unitary_about_title.innerHTML = "Oportunidades para los pilotos de la Aerolínea Virtual del Ecuador";
    unitary_box_title_software.innerHTML = "Software smartCARS";
    unitary_box_text_software.innerHTML = "El sistema smartCARS es un software de seguimiento de vuelos creado para diversos simuladores de vuelo, con el cual nuestros pilotos podrán monitorear las operaciones de la aerolínea asi como sus vuelos.";
    unitary_box_title_simbrief.innerHTML = "Simbrief Premium";
    unitary_box_text_simbrief.innerHTML = "El sistema Simbrief es un servicio de planificación de vuelos virtuales. En el encontrará cálculos detallados de combustible para más de 120 tipos de aeronaves, una extensa base de datos de rutas entre muchas cosas más.";
    unitary_box_title_airacs.innerHTML = "AIRACS Actualizados";
    unitary_box_text_airacs.innerHTML = "El AIRAC es una publicación de información aeronáutica editada por las autoridades competentes en aviación civil que contiene información aeronáutica de carácter esencial para la navegación aérea.";
    // Seccion de los pilotos
    pilot_subtitle.innerHTML = "Preparación altamente calificada";
    pilot_title.innerHTML = "Pilotos de la Aerolínea Virtual del Ecuador";
    pilot_text_1.innerHTML = "El constante aprendizaje es la clave para formar a excelentes equipos de pilotos que estén altamente capacitados para enfrentarse a diversas situaciones de vuelo cotidianas de la vida real a las que se pueden enfrentar en el mundo de la simulación áerea.";
    pilot_text_2.innerHTML = "Registrate y impulsa tu sueño de ser un avidor de corazón a traves de la experiencia en la Aerolínea Virtual del Ecuador:";
    pilot_btn_register.innerHTML = "Quiero registrarme ahora →";
    last_pilots_title.innerHTML = "Ultimos pilotos registrados";
    for(var i = 0; i < join_date_pilot.length; i++){
        join_date_pilot[i].innerHTML = "Registrado el:";
    };
    // Sección de la aeronaves
    aircrafts_title.innerHTML = "Nuestra flota de aeronaves";
    aircrafts_subtitle.innerHTML = "Una aeronave pensada para cada tipo de piloto";
    aircrafts_text.innerHTML = "La Aerolínea Virtual del Ecuador tiene un gran catálogo de aeronaves las cuales sus pilotos pueden volar. Contando con aeronaves desde las más básicas para los entrenamientos, hasta las más complejas para trabajos de aerolínea.";
    aircrafts_btn.innerHTML = "Conocer más sobre la flota →";
    //Sección Staff
    staff_title.innerHTML = "Staff de la Aerolínea Virtual del Ecuador";
    // Sección del footer
    footer_title.innerHTML = "Mantengase informado de las novedades de la Aerolínea";
    footer_second_title.innerHTML = "Aerolínea Virtual del Ecuador";
    footer_description.innerHTML = "Somos una aerolínea virtual fundada en el Ecuador que tiene como objetivo generar más tráfico en el espacio aéreo virtual ecuatoriano y que a su vez el nombre de Ecuador suene alrededor del mundo.";
    footer_services_title.innerHTML = "SERVICIOS";
    footer_hrefs_title.innerHTML = "ENLACES UTILES";
    footer_login.innerHTML = "Iniciar sesión";
    footer_register.innerHTML = "Registrarse";
    footer_aboutus.innerHTML = "Acerca de";
    footer_pilots.innerHTML = "Pilotos";
    footer_fleet.innerHTML = "Nuestra flota";
    footer_staff.innerHTML = "Staff";
    footer_contact.innerHTML = "CONTACTO";
    // Sección Footer Copyright
    footer_copyright.innerHTML = "&copy; Copyright 2021, Aerolínea Virtual del Ecuador, todos los derechos reservados."
}

function EnglishPage(){

    /*
        Eddy, estas son las traducciones que debes hacerm lo que esta en Mayuscula, dejalo en mayuscula.
        Recuerda que todo debe quedar dentro de las comillas y al final de cada linea debe quedar el ;
        Gracias por la ayuda!
     */

    // Titulo de la pagina
    page_title.innerHTML = "Virtual Airline of Ecuador";
    // Elementos del menú de navegación
    menu_item_home.innerHTML = "Home",
    menu_item_aboutave.innerHTML = "About us";
    menu_item_pilots.innerHTML = "Pilots";
    menu_item_aircrafts.innerHTML = "Aircrafts";
    menu_item_staff.innerHTML = "Staff";
    menu_item_register.innerHTML = "Sign in";
    menu_item_login.innerHTML = "Log in";
    // Elementos del Banner
    banner_title.innerHTML = "Virtual Airline of Ecuador";
    banner_text.innerHTML = "Enjoy aviation and fulfill your dream of flying";
    banner_button_1.innerHTML = "Register now";
    banner_button_2.innerHTML = "Log in";
    // Sección Acerca de nosotros
    info_title.innerHTML = "About Us";
    info_text_1.innerHTML = "We are an Ecuadorian virtual airline that aims to generate more traffic locally in the Ecuador virtual airspace but also around the world. Our main objective is to bring to our registered pilots the best training support and the best flight experience, simulationg our operations like a real airline.";
    info_text_2.innerHTML = "Aerolinea Virtual del Ecuador provides to its pilots various opportunities and tools to increase realism in their operations. From a premium virtual flight planning service to a monitoring software for your flights.";
    // Cajas de texto de las oportunidades para pilotos
    unitary_about_title.innerHTML = "Opportunities for the pilots of Aerolinea Virtual del Ecuador";
    unitary_box_title_software.innerHTML = "SmartCARS software";
    unitary_box_text_software.innerHTML = "The smartCARS system is flight tracking software created for almost all flight simulators, with which our pilots will be able to monitor the operations of the airline as well as its flights.";
    unitary_box_title_simbrief.innerHTML = "Simbrief Premium";
    unitary_box_text_simbrief.innerHTML = "The Simbrief system is a virtual flight planning service. In it you will find detailed fuel calculations for more than 120 types of aircraft, an extensive route database among many other things.";
    unitary_box_title_airacs.innerHTML = "AIRACS Updated";
    unitary_box_text_airacs.innerHTML = "AIRAC is an aeronautical information publication edited by the competent civil aviation authorities that contains aeronautical information of an essential nature for air navigation.";
    // Seccion de los pilotos
    pilot_subtitle.innerHTML = "Highly qualified preparation";
    pilot_title.innerHTML = "Pilots of Aerolinea Virtual del Ecuador";
    pilot_text_1.innerHTML = "Constant learning is the key of forming excellent teams of pilots who are highly trained to face any flight situations in the world of aerial simulation.";
    pilot_text_2.innerHTML = "Register and make a step forward through the virtual flight experience in Aerolinea Virtual del Ecuador:";
    pilot_btn_register.innerHTML = "I want to register now →";
    last_pilots_title.innerHTML = "Last registered pilots";
    for(var i = 0; i < join_date_pilot.length; i++){
        join_date_pilot[i].innerHTML = "Registered on:";
    };
    // Sección de la aeronaves
    aircrafts_title.innerHTML = "Our aircraft fleet";
    aircrafts_subtitle.innerHTML = "An aircraft designed for every type of pilot";
    aircrafts_text.innerHTML = "Aerolinea Virtual del Ecuador has a large catalog of aircrafts which can be flown by its pilots. From the most basic for training, to the most complex for airline flights.";
    aircrafts_btn.innerHTML = "Learn more about the fleet →";
    //Sección Staff
    staff_title.innerHTML = "Staff of Aerolinea Virtual del Ecuador";
    // Sección del footer
    footer_title.innerHTML = "Stay informed of the news of the Airline";
    footer_second_title.innerHTML = "Aerolinea Virtual del Ecuador";
    footer_description.innerHTML = "We are an Ecuadorian virtual airline that aims to generate more traffic locally in the Ecuador virtual airspace but also around the world.";
    footer_services_title.innerHTML = "SERVICES";
    footer_hrefs_title.innerHTML = "HELPFUL LINKS";
    footer_login.innerHTML = "Log in";
    footer_register.innerHTML = "Sign up";
    footer_aboutus.innerHTML = "About us";
    footer_pilots.innerHTML = "Pilots";
    footer_fleet.innerHTML = "Our fleet";
    footer_staff.innerHTML = "Staff";
    footer_contact.innerHTML = "CONTACT US";
    // Sección Footer Copyright
    footer_copyright.innerHTML = "&copy; Copyright 2021, Aerolínea Virtual del Ecuador, all rights reserved."
}

/* Eventos de la traducción */

btn_es.addEventListener("click",SpanishPage,false);
btn_en.addEventListener("click",EnglishPage,false);

