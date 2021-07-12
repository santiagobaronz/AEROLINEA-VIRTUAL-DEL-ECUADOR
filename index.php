<?php 

if(isset($_REQUEST['politica-cookies'])) {
    // Calculamos la caducidad, en este caso un año
    $caducidad = time() + (60 * 60 * 24 * 365);
    // Crea una cookie con la caducidad
    setcookie('cookies', '1', $caducidad);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="dist/flexboxgrid.min.css">
    <link rel="shortcut icon" href="assets/favicon.png">
    <title id="page-title">Aerolínea Virtual del Ecuador</title>
</head>
<body>

    <header id="home">
        <nav>
        <div class="container-margin">
            <img src="assets/logo.png" alt="Logo de la Aerolínea Virtual del Ecuador">
            <img src="assets/menu.png" alt="Imagen icono de menú" class="menu-icon" id="icon-menu">
            <ul id="menu-list" class="menu-close">
                <li class="menu-item"><a href="#home" id="menu-item-home">Inicio</a></li>
                <li class="menu-item"><a href="#aboutave" id="menu-item-aboutave">Acerca de</a></li>
                <li class="menu-item"><a href="#pilotos" id="menu-item-pilots">Pilotos</a></li>
                <li class="menu-item"><a href="#flota" id="menu-item-aircrafts">Flota</a></li>
                <li class="menu-item"><a href="#staff" id="menu-item-staff">Staff</a></li>
                <li class="menu-item"><a href="http://aerolineavirtualdelecuador.com/vms/index.php/registration" id="menu-item-register">Registrate</a></li>
                <li class="menu-item"><a href="http://aerolineavirtualdelecuador.com/vms/index.php/login" id="menu-item-login">Iniciar Sesión</a></li>
            </ul>
            </div>
        </nav>
    </header>

    <main>

        <section class="banner-section">
            <div class="info-banner">
                <h1 id="banner-title">Aerolínea Virtual del Ecuador</h1>
                <p id="banner-text">Disfruta de la aviación y cumple tu sueño de volar</p>
                <a href="http://aerolineavirtualdelecuador.com/vms/index.php/registration" class="banner-btn" id="banner-btn-1">Registrate ahora</a>
                <a href="http://aerolineavirtualdelecuador.com/vms/index.php/login" class="banner-btn" id="banner-btn-2">Iniciar sesión</a>
            </div>
            <img src="assets/split-about-01.png" alt="Split-banner para separación de contenido" class="split-banner" id="aboutave">
        </section>

        <section>
            <div class="about-ave">
                <div class="lateral-lines">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </div>
                <div class="container-margin">
                    <div class="info-about-ave">
                        <h2 id="info-title">Acerca de nosotros</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <p id="info-text-1">Somos una aerolínea virtual fundada en el Ecuador que tiene como objetivo generar más tráfico en el espacio aéreo virtual ecuatoriano y que a su vez el nombre de Ecuador suene alrededor del mundo. Teniendo como principal objetivo ofrecer el mejor entrenamiento y la mejor experiencia de vuelo en simulador para los pilotos vinculados que se registran asemejando nuestra operación a la de una aerolínea real.</p>
                                <p id="info-text-2">La aerolínea virtual del Ecuador provee a sus pilotos diversas oportunidades y herramientas para incrementar el realismo en sus operaciones. Desde un servicio premium de planificación de vuelos virtuales hasta un software de montireo para sus vuelos.</p>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="img-div">
                                    <img src="assets/IMG_3444.JPG" alt="Imagenes de las aeronaves de la aerolinea virtual" class="info-about-ave-img" id="img-1">
                                    <img src="assets/IMG_3444.JPG" alt="Imagenes de las aeronaves de la aerolinea virtual" class="info-about-ave-img2" id="img-2">
                                    <img src="assets/IMG_3444.JPG" alt="Imagenes de las aeronaves de la aerolinea virtual" class="info-about-ave-img3" id="img-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/split-about-01.png" alt="Split-banner para separación de contenido" class="split-banner-finish">
        </section>

        <section oncontextmenu='return false'; onmousedown='return false;' onselectstart='return false;'>
            <div class="about-ave-unitary">
                <div class="container-margin">
                    <h2 id="unitary-about-title">Oportunidades para los pilotos de la Aerolínea Virtual del Ecuador</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="box-services-s2">
                                <div class="box-img-services-s2">
                                    <img src="assets/radar.svg" alt="Imagen pendiente" class="img-services-s2">
                                </div>
                                <h3 id="unitary-box-title-software">Software smartCARS</h3>
                                <p id="unitary-box-text-software">El sistema smartCARS es un software de seguimiento de vuelos creado para diversos simuladores de vuelo, con el cual nuestros pilotos podrán monitorear las operaciones de la aerolínea asi como sus vuelos.</p>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="box-services-s2">
                                <div class="box-img-services-s2">
                                    <img src="assets/ruta.svg" alt="Imagen pendiente" class="img-services-s2 pd-fix">
                                </div>
                                <h3 id="unitary-box-title-simbrief">Simbrief Premium</h3>
                                <p id="unitary-box-text-simbrief">El sistema Simbrief es un servicio de planificación de vuelos virtuales. En el encontrará cálculos detallados de combustible para más de 120 tipos de aeronaves, una extensa base de datos de rutas entre muchas cosas más.</p>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="box-services-s2">
                                <div class="box-img-services-s2">
                                    <img src="assets/configuraciones.svg" alt="Imagen pendiente" class="img-services-s2 pd-fix">
                                </div>
                                <h3 id="unitary-box-title-airacs">AIRACS Actualizados</h3>
                                <p id="unitary-box-text-airacs">El AIRAC es una publicación de información aeronáutica editada por las autoridades competentes en aviación civil que contiene información aeronáutica de carácter esencial para la navegación aérea.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="figures-about-ave-unitary" >
                        <div class="figure-sC">
                            <div class="figure-sC-header">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="assets/logo.png" alt="Logo de la aerolinea virtual del Ecuador" class="figure-sC-header-logo"></div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"><p class="figure-sC-header-title">Aerolínea Virtual del Ecuador (smartCARS)</p></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><span class="figure-sC-header-buttons minimize-button">─</span><span class="figure-sC-header-buttons close-button">X</span></div>
                                </div>
                            </div>
                            <div class="figure-sC-content">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="figure-sC-content-menu">
                                            <ul>
                                                <li>PILOT CENTER</li>
                                                <li>FLIGHTS</li>
                                                <li>ACARS</li>
                                                <li>MAP</li>
                                                <li>CHAT</li>
                                                <li>PREMIUM</li>
                                                <li>SETTINGS</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="figure-sC-content-flights">
                                            <div class="figure-sC-content-flights-header">
                                                <h3>FLIGHTS</h3>
                                                <p>Manage bid flights or search for flights to bid on.</p>
                                            </div>
                                            <div class="figure-sC-content-flights-info">
                                                <div class="figure-sC-content-flights-info-cda">
                                                    <table>
                                                        <tr>
                                                            <th>Callsing</th>
                                                            <th>Departure Airport</th>
                                                            <th>Arrival Airport</th>
                                                        </tr>
                                                        <tr>
                                                            <td>VAE1923</td>
                                                            <td>SEQM - Mariscar Sucre Intl. Airport</td>
                                                            <td>SEGU - José Joaquín de Olmedo</td>
                                                        </tr>
                                                        <tr>
                                                            <td>VAE3434</td>
                                                            <td>SEQM - Mariscar Sucre Intl. Airport</td>
                                                            <td>SKBO - El Dorado Intl. Airport</td>
                                                        </tr>
                                                        <tr>
                                                            <td>VAE1673</td>
                                                            <td>SKBO - El Dorado Intl. Airport</td>
                                                            <td>SKRG - José María Cordová Intl. Airport</td>
                                                        <tr>
                                                            <td>VAE5435</td>
                                                            <td>SEQM - Mariscar Sucre Intl. Airport</td>
                                                            <td>SKRG - José María Cordová Intl. Airport</td>
                                                        </tr>
                                                        <tr>
                                                            <td>VAE9823</td>
                                                            <td>SEGU - José Joaquín de Olmedo</td>
                                                            <td>SECU - Mariscal la Mar Airport</td>
                                                        </tr>
                                                        
                                                    </table>
                                                </div>
                                                <div class="figure-sC-content-flights-info-dadd">
                                                    <ul>
                                                        <li>Departure Time</li>
                                                        <li>Arrival Time</li>
                                                        <li>Duration</li>
                                                        <li>Distance</li>
                                                        <li>Aircraft</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="figure-sC-content-flights-buttons">
                                                <button>Refresh</button>
                                                <div class="figure-sC-content-flights-buttons-2">
                                                    <button>Delete</button>
                                                    <button>Create</button>
                                                    <button>New</button>
                                                    <button>Fly</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="figure-sC-footer">
                                <div class="figure-sC-footer-music">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <p>"Californication" - Red Hot Chili Peppers</p>
                                    <p>Help</p>
                                </div>
                            </div>
                        </div>
                        <div class="figure-sC-login">
                            <div class="figure-sC-login-header">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="assets/logo.png" alt="Logo de la Aerolinea Virtual del Ecuador" class="figure-sC-header-logo"></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><p class="figure-sC-login-header-title">Aerolínea Virtual del Ecuador</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><span class="figure-sC-login-header-buttons minimize-button">─</span><span class="figure-sC-header-buttons close-button">X</span></div>
                                </div>
                            </div>
                            <div class="figure-sC-login-content">
                                <img src="assets/logo_smartCARS_login.png" alt="Logo de la Aerolinea Virtual del Ecuador">
                                <div class="figure-sC-login-content-form">
                                    <input type="text" placeholder="Email or pilot ID" class="figure-sC-login-content-form-input" id="figure-input-1">
                                    <input type="text" placeholder="●●●●●●●●" class="figure-sC-login-content-form-input" id="figure-input-2">
                                    <input type="checkbox" name="autolog" id="autolog" class="figure-sC-login-content-form-checklogin">
                                    <label for="autolog" class="figure-sC-login-content-form-checklogin">Log in automatically</label>
                                    <button>Log In</button>
                                </div>
                            </div>
                        </div>
                        <div class="figure-Sb">
                            <div class="figure-phone-content">
                                <div class="figure-Sb-header" id="figure-Sb-header">
                                    <img src="assets/logo-simbrief2.png" alt="Logo de Simbrief">
                                    <p>Virtual Flight Planning</p>
                                </div>
                                <div class="figure-Sb-content" id="figure-Sb-content">
                                    <label for="input-Sb-1">Airline</label>
                                    <input type="text" id="input-Sb-1" placeholder="ZZZ">
                                    <label for="input-Sb-2">Flight-No.</label>
                                    <input type="text" id="input-Sb-2" placeholder="1000">
                                    <label for="input-Sb-3">Departure</label>
                                    <input type="text" id="input-Sb-3" placeholder="ZZZZ">
                                    <label for="input-Sb-4">Arrive</label>
                                    <input type="text" id="input-Sb-4" placeholder="ZZZ">
                                    <label for="input-Sb-5">Aircraft</label>
                                    <select name="" id="">
                                        <option value="">Airbus A320-200</option>
                                        <option value="">B1900D</option>
                                    </select>
                                    <label for="input-Sb-6">Captain Name</label>
                                    <input type="text" id="input-Sb-6" placeholder="Your name">
                                    <button id="btn-Sb-figure">Generate flight plan</button>
                                </div>
                                <div class="figure-Sb-animation-box" id="Pop-animation-Sb">
                                    <img src="assets/success-icon.png" alt="Succesfull">
                                    <p>Successfully generated flight plan!</p>
                                    <p>To consult all the details about your next flight, press the following button:</p>
                                    <button id="btn-Sb-animation">View flight details</button>
                                </div>
                            </div>
                        </div>
                        <div class="figure-airacs" id="bg_airacs_container">
                            <div class="figure-airacs-content">
                                <div class="figure-airacs-content-header">
                                    <img src="assets/cancelar.svg" alt="Imagen de una equis" id="img_airac">
                                </div>
                                <div class="figure-airacs-content-info">
                                    <h3 id="title_airac">AIRACS not updated</h3>
                                </div>
                                <div class="figure-airacs-content-info-secondbox">
                                        <p>AIRACS are fundamental files for correct virtual air navigation. The Virtual Airline of Ecuador has these files for its pilots for free. Remember to update them frequently as this will facilitate virtual procedures.</p>
                                        <button id="btn_airac">Update AIRACS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/split-about-01.png" alt="Split-banner para separación de contenido" class="split-aboutus" id="pilotos">
            <!-- Creditos para los iconos usados:
                <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                <div>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
                <div>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
                <div>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
            -->
        </section>

        <section class="pilot-section" oncontextmenu='return false'; onmousedown='return false;' onselectstart='return false;'>
            <div class="container-margin">
                <div class="pilot-section-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 desc_pilots">
                            <h3 class="subtitle-pilot-desc" id="pilot-subtitle">Preparación altamente calificada</h3>
                            <h2 id="pilot-title">Pilotos de la Aerolínea Virtual del Ecuador</h2>
                            <p class="pilot-sc-p-1" id="pilot-text-1">El constante aprendizaje es la clave para formar a excelentes equipos de pilotos que estén altamente capacitados para enfrentarse a diversas situaciones de vuelo cotidianas de la vida real a las que se pueden enfrentar en el mundo de la simulación áerea.</p>
                            <p class="pilot-sc-p-2" id="pilot-text-2">Registrate y impulsa tu sueño de ser un avidor de corazón a traves de la experiencia en la Aerolínea Virtual del Ecuador:</p>
                            <a href="http://aerolineavirtualdelecuador.com/vms/index.php/registration" class="register-button" id="pilot-btn-register">Quiero registrarme ahora →</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 last_pilots">
                            <h3 id="last-pilots-title" class="last-pilots-title">Ultimos pilotos registrados</h3>


                            <?php
                            
                            require_once 'php/conexion.php';

                            $consulta = "SELECT * FROM phpvms_pilots ORDER BY pilotid DESC LIMIT 5 ";
                            $resultados = mysqli_query($conexion, $consulta);

                            while ($fila = mysqli_fetch_array($resultados)) {
                            ?>

                                <?php 
                                
                                $objFecha = new DateTime($fila['joindate']); 
                                $mes= $objFecha->format('n');
                                $dia= $objFecha->format('d');
                                $año= $objFecha->format('Y');
                                $fecha_registro = $dia.'/'.$mes.'/'.$año;
                                
                                ?>

                            <div class="box-last-registers">
                                <div class="img-box-last-registers">
                                    <img src="assets/pilot_pic.png" alt="Imagen silueta de un piloto">
                                </div>
                                <div class="txt-box-last-registers">
                                    <p><?php echo $fila['firstname'].' '.$fila['lastname']?></p>
                                    <p name="joindate">Registrado el:</p>
                                    <li class="fecha_registro"><?php echo $fecha_registro?></li>
                                </div>
                                <img src="https://flagcdn.com/w80/<?php echo $flag = mb_strtolower($fila['location'])?>.png"
                                        srcset="https://flagcdn.com/w160/<?php echo $flag = mb_strtolower($fila['location'])?>.png 2x"
                                        width="60"
                                        height="40"
                                        alt="Bandera de <?php echo $fila['location']?>"
                                        class="flag-box-last-registers"
                                        name="pilot_flag">
                            </div>


                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <img src="assets/split-about-01.png" alt="Split-banner para separación de contenido" class="split-aboutus2" id="flota">


        <section>
            <div class="container-margin">
                <div class="autor-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="txt-autors-section">
                                <h2 id="aircrafts-title">Nuestra flota de aeronaves</h2>
                                <p class="subtitle2" id="aircrafts-subtitle">Una aeronave pensada para cada tipo de piloto</p>
                                <p id="aircrafts-text">La Aerolínea Virtual del Ecuador tiene un gran catálogo de aeronaves las cuales sus pilotos pueden volar. Contando con aeronaves desde las más básicas para los entrenamientos, hasta las más complejas para trabajos de aerolínea.</p>
                                <a href="http://aerolineavirtualdelecuador.com/vms/index.php/profile"><button class="btn-s2" id="staff">Conocer más sobre la flota →</button></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 column-to-hidden-items">
                            <div class="img-autor-section">
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                                <div class="box-img-aircraft">
                                    <img src="assets/IMG_1415.jpg" alt="Imagen de avion de flota pendiente" class="img-autor">
                                    <p class="box-txt-aircraft">Airbus A320</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-margin">
                <div class="staff-section" oncontextmenu='return false'; onmousedown='return false;' onselectstart='return false;'>
                    <h2 id="staff-title">Staff de la Aerolínea Virtual del Ecuador</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <a href="" target="_blank" class="staff-link">
                                <div class="staff-box">
                                    <div class="img-staff">
                                        <img src="assets/staff/1.jpg" alt="Fotografia de Juan Saltos">
                                    </div>
                                    <div class="txt-staff">
                                        <h3>Juan Saltos</h3>
                                        <p>CEO (Chief Executive Officer)</p>
                                    </div>
                                    <p class="about-staff">+</p>
                                    <img src="assets/waves/waves-01.png" alt="Imagen de onda" class="wave-bg-box-staff">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <a href="https://www.ivao.aero/Member.aspx?Id=439905" target="_blank" class="staff-link">
                                <div class="staff-box">
                                    <div class="img-staff">
                                        <img src="assets/staff/2.jpg" alt="Fotografia de Israel Salas">
                                    </div>
                                    <div class="txt-staff">
                                        <h3>Israel Salas</h3>
                                        <p>COO (Chief Operating Officer)</p>
                                    </div>
                                    <p class="about-staff">+</p>
                                    <img src="assets/waves/waves-02.png" alt="Imagen de onda" class="wave-bg-box-staff">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <a href="https://www.ivao.aero/Member.aspx?Id=257054" target="_blank" class="staff-link">
                                <div class="staff-box">
                                    <div class="img-staff">
                                        <img src="assets/staff/3.jpeg" alt="Fotografia de Eddy Gamboa">
                                    </div>
                                    <div class="txt-staff">
                                        <h3>Eddy Gamboa</h3>
                                        <p>CCO (Chief Communications Officer)</p>
                                    </div>
                                    <p class="about-staff">+</p>
                                    <img src="assets/waves/waves-03.png" alt="Imagen de Onda" class="wave-bg-box-staff">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <a href="https://www.ivao.aero/Member.aspx?Id=625219" target="_blank" class="staff-link">
                                <div class="staff-box">
                                    <div class="img-staff">
                                        <img src="assets/staff/4.jpeg" alt="Fotografia de Santiago Baron">
                                    </div>
                                    <div class="txt-staff">
                                        <h3>Santiago Baron</h3>
                                        <p>CTO (Chief Technology Officer)</p>
                                    </div>
                                    <p class="about-staff">+</p>
                                    <img src="assets/waves/waves-04.png" alt="Imagen de Onda" class="wave-bg-box-staff">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="va-certificate">
                <img src="assets/va.png" alt="Logotipo de Ivao Partner" class="va-img">
            </div>
        </section>
    </main>

    <footer>
        <div class="social-media-footer">
            <div class="container-margin">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 form-section">
                        <p class="social-media-text" id="footer_title">Mantengase informado de las novedades de la Aerolínea</p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 form-section">

                    </div>
                </div>
            </div>
        </div>
        <div class="info-footer-box">
            <div class="container-margin">
                <div class="info-footer">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 form-section">
                            <h3 class="title-footer" id="footer-second-title">Aerolínea Virtual del Ecuador</h3>
                            <li class="line-below-title-footer"></li>
                            <p class="txt-desc-footer" id="footer-description">Somos una aerolínea virtual fundada en el Ecuador que tiene como objetivo generar más tráfico en el espacio aéreo virtual ecuatoriano y que a su vez el nombre de Ecuador suene alrededor del mundo.</p>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 form-section">
                            <h3 class="title-footer" id="footer-services-title">SERVICIOS</h3>
                            <li class="line-below-title-footer"></li>
                            <ul class="item-list-footer">
                                <li><a href="https://tfdidesign.com/smartCARS.php">smartCARS</a></li>
                                <li><a href="https://www.simbrief.com/home/">Simbrief Premium</a></li>
                                <li><a href="#">AIRACS</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12 form-section">
                            <h3 class="title-footer" id="footer-hrefs">ENLACES UTILES</h3>
                            <li class="line-below-title-footer"></li>
                            <div class="row">
                                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-4 form-section">
                                    <ul class="item-list-footer">
                                        <li><a href="http://aerolineavirtualdelecuador.com/vms/index.php/login" id="footer-login">Iniciar sesión</a></li>
                                        <li><a href="http://aerolineavirtualdelecuador.com/vms/index.php/registration" id="footer-register">Registrarse</a></li>
                                        <li><a href="#aboutave" id="footer-aboutus">Acerca de</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-8 col-xs-8 form-section">
                                    <ul class="item-list-footer list-2">
                                        <li><a href="#pilotos" id="footer-pilots">Pilotos</a></li>
                                        <li><a href="#flota" id="footer-fleet">Nuestra flota</a></li>
                                        <li><a href="#staff" id="footer-staff">Staff</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 form-section">
                            <h3 class="title-footer" id="footer-contact">CONTACTO</h3>
                            <li class="line-below-title-footer"></li>
                            <ul class="item-list-footer item-list-contact">
                                <li>staff@aerolineavirtualdelecuador.com</li>
                                <li><a href="">Instagram</a></li>
                                <li><a href="">Whatsapp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="final-info-footer">
            <div class="container-margin">
                <p id="footer-copyright">&copy; Copyright 2021, Aerolínea Virtual del Ecuador, todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <section>
        <div class="flags">
        <img src="https://flagcdn.com/w80/us.png"
            srcset="https://flagcdn.com/w160/us.png 2x"
            width="60"
            height="40"
            alt="Bandera de Estados Unidos"
            class="flag-lang"
            id="ingles">
        <img src="https://flagcdn.com/w80/ec.png"
            srcset="https://flagcdn.com/w160/ec.png 2x"
            width="60"
            height="40"
            alt="Bandera de Ecuador"
            class="flag-lang"
            id="español">
        </div>
    </section>

    



    <section class="cookies" id="cookieid">
        <p class="cookies__texto">Utilizamos cookies para mejorar tu experiencia, para fines comerciales y de estadística. Encuentra más información en nuestra <a href="">política de cookies.</a></p>
        <div class="cookies__botones">
            <button class="cookies__boton cookies__boton--si">ACEPTAR TODO</button>
            <button class="cookies__boton cookies__boton--no">DENEGAR</button>
        </div>
    </section>

    <!-- No borrar, aquí se generarán todas las etiquetas <script> si acepta el usuario 
        oncontextmenu='return false'; onmousedown='return false;' onselectstart='return false;'-->
    <div id="nuevosScripts"></div>

    <script defer>
        

    let cookies = () => {

        const urlsScriptsCookies = ['https://analytics.google.com', 'https://facebook.com'];
        function contenidoScriptsCookies () {
        }
        const seccionCookie = document.querySelector('section.cookies');
        const cookieSi = document.querySelector('.cookies__boton--si');
        const cookieNo = document.querySelector('.cookies__boton--no');
        const nuevosScripts = document.querySelector('#nuevosScripts');

        function ocultarCookie() {
            seccionCookie.remove();
        }

        function aceptarCookies() {
            ocultarCookie();
            localStorage.setItem('cookie', true);
            ejecutarSiAcepta();
        }
        function denegarCookies() {
            ocultarCookie();
            localStorage.setItem('cookie', false);
        }
        function ejecutarSiAcepta() {
            urlsScriptsCookies.forEach((url) => {
                const nuevoScript = document.createElement('script');
                nuevoScript.setAttribute('src', url);
                nuevosScripts.appendChild(nuevoScript);
            });
            contenidoScriptsCookies();
        }
        function iniciar() {
            if (localStorage.getItem('cookie') !== null) {
                if(localStorage.getItem('cookie') === 'true') {
                    aceptarCookies();
                } else {
                    denegarCookies();
                }
            }
        }
        cookieSi.addEventListener('click',aceptarCookies, false);
        cookieNo.addEventListener('click',denegarCookies, false);

        return {
            iniciar: iniciar
        }
    }
    cookies().iniciar();

    </script>

<script src="js/main.js"></script>
<script src="js/lang.js"></script>

</body>
</html>