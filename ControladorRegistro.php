<?php
    include_once('Empresa.php');
    include_once('Particular.php');
    include_once('Mensaje.php');
    include_once('EmpresaModelo.php');
    include_once('PaticularModelo.php');
    include_once('MensajeModelo.php');

    $empresaM = new EmpresaModelo();
    $particularM = new ParticularModelo();
    $mensajeM = new MensajeModelo();

    if(isset($_POST['registrarEmpresa']))
    {
        $lista = $empresaM -> ListarEmpresa();
        $empresa = new Empresa(1, $_POST['txtRutEmpresa'], $_POST['txtNombreEmpresa'], $_POST['txtClaveEmpresa'], $_POST['txtDireccionEmpresa'], 1);

        foreach($lista as $r)
        {
            if($r->getRut_empresa() != $empresa->getRut_empresa())
            {
                $empresaM -> RegistrarEmpresa($empresa);
                echo '
                <!DOCTYPE html>
                <html>
                <title>Empresas</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
                body, html {
                    height: 100%;
                    color: #777;
                    line-height: 1.8;
                }
                
                /* Create a Parallax Effect */
                .bgimg-1, .bgimg-2, .bgimg-3 {
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                
                /* First image (Logo. Full height) */
                .bgimg-1 {
                    background-image: url("https://i.ytimg.com/vi/GZdpzpimFHs/maxresdefault.jpg");
                    min-height: 100%;
                }
                
                /* Second image (Portfolio) */
                .bgimg-2 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                /* Third image (Contact) */
                .bgimg-3 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                .w3-wide {letter-spacing: 10px;}
                .w3-hover-opacity {cursor: pointer;}
                
                /* Turn off parallax scrolling for tablets and phones */
                @media only screen and (max-device-width: 1024px) {
                    .bgimg-1, .bgimg-2, .bgimg-3 {
                        background-attachment: scroll;
                    }
                }
                </style>
                <body>
                
                <!-- Navbar (sit on top) -->
                <div class="w3-top">
                  <div class="w3-bar" id="myNavbar">
                    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                      <i class="fa fa-bars"></i>
                    </a>
                    <a href="index.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i>HOME</a>
                    <a href="loginPersonas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>PERSONAS</a>
                    <a href="loginEmpresas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>EMPRESAS</a>
                    <a href="funcionarios.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-address-card"></i>FUNCIONARIOS</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
                  </div>
                
                  <!-- Navbar on small screens -->
                  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
                    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
                    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
                  </div>
                </div>
                
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                  <div class="w3-display-middle" style="white-space:nowrap;">
                    <img src="ESCUDO.png" >
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                  </div>
                </div>
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                    <div class="w3-display-middle" style="white-space:nowrap;">
                        <img src="ESCUDO.png" >
                        <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                    </div>
                </div>

                <!-- Container (Contact Section) -->
                <div class="w3-container" id="contact">
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">Empresa ingresada exitosamente.<span class="w3-hide-small"></span></span>
                    <a class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity" href="perfilEmpresa.html">Volver</a>
                </div>

                <!-- Footer -->
                <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
                <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Arriba</a>
                <div class="w3-xlarge w3-section">
                    <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i>
                </div>
                <p>Creado por Catalina Vera y Francisco San Juan</p>
                </footer>
                

                </body>
                </html>';
            }
            else
            {
                echo '
                <!DOCTYPE html>
                <html>
                <title>Empresas</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
                body, html {
                    height: 100%;
                    color: #777;
                    line-height: 1.8;
                }
                
                /* Create a Parallax Effect */
                .bgimg-1, .bgimg-2, .bgimg-3 {
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                
                /* First image (Logo. Full height) */
                .bgimg-1 {
                    background-image: url("https://i.ytimg.com/vi/GZdpzpimFHs/maxresdefault.jpg");
                    min-height: 100%;
                }
                
                /* Second image (Portfolio) */
                .bgimg-2 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                /* Third image (Contact) */
                .bgimg-3 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                .w3-wide {letter-spacing: 10px;}
                .w3-hover-opacity {cursor: pointer;}
                
                /* Turn off parallax scrolling for tablets and phones */
                @media only screen and (max-device-width: 1024px) {
                    .bgimg-1, .bgimg-2, .bgimg-3 {
                        background-attachment: scroll;
                    }
                }
                </style>
                <body>
                
                <!-- Navbar (sit on top) -->
                <div class="w3-top">
                  <div class="w3-bar" id="myNavbar">
                    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                      <i class="fa fa-bars"></i>
                    </a>
                    <a href="index.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i>HOME</a>
                    <a href="loginPersonas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>PERSONAS</a>
                    <a href="loginEmpresas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>EMPRESAS</a>
                    <a href="funcionarios.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-address-card"></i>FUNCIONARIOS</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
                  </div>
                
                  <!-- Navbar on small screens -->
                  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
                    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
                    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
                  </div>
                </div>
                
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                  <div class="w3-display-middle" style="white-space:nowrap;">
                    <img src="ESCUDO.png" >
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                  </div>
                </div>
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                    <div class="w3-display-middle" style="white-space:nowrap;">
                        <img src="ESCUDO.png" >
                        <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                    </div>
                </div>

                <!-- Container (Contact Section) -->
                <div class="w3-container" id="contact">
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">No se pudo registrar la empresa.<span class="w3-hide-small"></span></span>
                    <a class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity" href="empresas.html">Volver</a>

                </div>

                <!-- Footer -->
                <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
                <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Arriba</a>
                <div class="w3-xlarge w3-section">
                    <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i>
                </div>
                <p>Creado por Catalina Vera y Francisco San Juan</p>
                </footer>
                

                </body>
                </html>';
            }
        }
    }

    if(isset($_POST['registrarParticular']))
    {
        $lista = $particularM -> ListarParticular();
        $particular = new Particular(1, $_POST['txtRutPersona'], $_POST['txtClavePersona'], $_POST['txtNombrePersona'], $_POST['txtDireccionPersona'], $_POST['txtCorreoPersona'], $_POST['txtTelefonoPersona'], 1);

        foreach ($lista as $r) 
        {
            if($r->getRun_particular() != $particular->getRun_particular())
            {
                $particularM->RegistrarParticular($particular);
                echo '
                <!DOCTYPE html>
                <html>
                <title>Persona</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
                body, html {
                    height: 100%;
                    color: #777;
                    line-height: 1.8;
                }
                
                /* Create a Parallax Effect */
                .bgimg-1, .bgimg-2, .bgimg-3 {
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                
                /* First image (Logo. Full height) */
                .bgimg-1 {
                    background-image: url("https://i.ytimg.com/vi/GZdpzpimFHs/maxresdefault.jpg");
                    min-height: 100%;
                }
                
                /* Second image (Portfolio) */
                .bgimg-2 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                /* Third image (Contact) */
                .bgimg-3 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                .w3-wide {letter-spacing: 10px;}
                .w3-hover-opacity {cursor: pointer;}
                
                /* Turn off parallax scrolling for tablets and phones */
                @media only screen and (max-device-width: 1024px) {
                    .bgimg-1, .bgimg-2, .bgimg-3 {
                        background-attachment: scroll;
                    }
                }
                </style>
                <body>
                
                <!-- Navbar (sit on top) -->
                <div class="w3-top">
                  <div class="w3-bar" id="myNavbar">
                    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                      <i class="fa fa-bars"></i>
                    </a>
                    <a href="index.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i>HOME</a>
                    <a href="loginPersonas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>PERSONAS</a>
                    <a href="loginEmpresas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>EMPRESAS</a>
                    <a href="funcionarios.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-address-card"></i>FUNCIONARIOS</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
                  </div>
                
                  <!-- Navbar on small screens -->
                  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
                    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
                    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
                  </div>
                </div>
                
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                  <div class="w3-display-middle" style="white-space:nowrap;">
                    <img src="ESCUDO.png" >
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                  </div>
                </div>
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                    <div class="w3-display-middle" style="white-space:nowrap;">
                        <img src="ESCUDO.png" >
                        <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                    </div>
                </div>

                <!-- Container (Contact Section) -->
                <div class="w3-container" id="contact">
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">Persona ingresada exitosamente.<span class="w3-hide-small"></span></span>
                    <a class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity" href="perfilPersonas.html">Volver</a>
                </div>

                <!-- Footer -->
                <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
                <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Arriba</a>
                <div class="w3-xlarge w3-section">
                    <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i>
                </div>
                <p>Creado por Catalina Vera y Francisco San Juan</p>
                </footer>
                

                </body>
                </html>';
            }
            else
            {
                echo '
                <!DOCTYPE html>
                <html>
                <title>Empresas</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
                body, html {
                    height: 100%;
                    color: #777;
                    line-height: 1.8;
                }
                
                /* Create a Parallax Effect */
                .bgimg-1, .bgimg-2, .bgimg-3 {
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                
                /* First image (Logo. Full height) */
                .bgimg-1 {
                    background-image: url("https://i.ytimg.com/vi/GZdpzpimFHs/maxresdefault.jpg");
                    min-height: 100%;
                }
                
                /* Second image (Portfolio) */
                .bgimg-2 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                /* Third image (Contact) */
                .bgimg-3 {
                    background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
                    min-height: 400px;
                }
                
                .w3-wide {letter-spacing: 10px;}
                .w3-hover-opacity {cursor: pointer;}
                
                /* Turn off parallax scrolling for tablets and phones */
                @media only screen and (max-device-width: 1024px) {
                    .bgimg-1, .bgimg-2, .bgimg-3 {
                        background-attachment: scroll;
                    }
                }
                </style>
                <body>
                
                <!-- Navbar (sit on top) -->
                <div class="w3-top">
                  <div class="w3-bar" id="myNavbar">
                    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                      <i class="fa fa-bars"></i>
                    </a>
                    <a href="index.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i>HOME</a>
                    <a href="loginPersonas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>PERSONAS</a>
                    <a href="loginEmpresas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>EMPRESAS</a>
                    <a href="funcionarios.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-address-card"></i>FUNCIONARIOS</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
                  </div>
                
                  <!-- Navbar on small screens -->
                  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
                    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
                    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
                    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
                  </div>
                </div>
                
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                  <div class="w3-display-middle" style="white-space:nowrap;">
                    <img src="ESCUDO.png" >
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                  </div>
                </div>
                <!-- First Parallax Image with Logo Text -->
                <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
                    <div class="w3-display-middle" style="white-space:nowrap;">
                        <img src="ESCUDO.png" >
                        <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
                    </div>
                </div>

                <!-- Container (Contact Section) -->
                <div class="w3-container" id="contact">
                    <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">No se pudo registrar la empresa.<span class="w3-hide-small"></span></span>
                    <a class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity" href="personas.html">Volver</a>

                </div>

                <!-- Footer -->
                <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
                <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Arriba</a>
                <div class="w3-xlarge w3-section">
                    <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i>
                </div>
                <p>Creado por Catalina Vera y Francisco San Juan</p>
                </footer>
                

                </body>
                </html>';
            }
        }
    }

    if(isset($_POST['registrarMensaje']))
    {
        $mensaje = new Contacto(1,$_POST['txtNombreMensaje'], $_POST['txtCorreoMensaje'], $_POST['txtMensajeMensaje'], 1);
        $mensajeM ->RegistrarMensaje($mensaje);

        echo 
        '
        <!DOCTYPE html>
        <html>
        <title>I.S.P</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
            height: 100%;
            color: #777;
            line-height: 1.8;
        }

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* First image (Logo. Full height) */
        .bgimg-1 {
            background-image: url("https://i.ytimg.com/vi/GZdpzpimFHs/maxresdefault.jpg");
            min-height: 100%;
        }

        /* Second image (Portfolio) */
        .bgimg-2 {
            background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
            min-height: 400px;
        }

        /* Third image (Contact) */
        .bgimg-3 {
            background-image: url("https://upload.wikimedia.org/wikipedia/commons/0/02/Logotipo_del_Instituto_de_Salud_P%C3%BAblica_de_Chile.png");
            min-height: 400px;
        }

        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
        </style>
        <body>

        <!-- Navbar (sit on top) -->
        <div class="w3-top">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
            </a>
            <a href="index.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i>HOME</a>
            <a href="loginPersonas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>PERSONAS</a>
            <a href="loginEmpresas.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>EMPRESAS</a>
            <a href="funcionarios.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-address-card"></i>FUNCIONARIOS</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTO</a>
            
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
            <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
            <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        </div>
        </div>

        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <img src="ESCUDO.png" >
            <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">INSTITUTO DE <span class="w3-hide-small">SALUD</span> PÚBLICA DE CHILE</span>
        </div>
        </div>

        <!-- About Section -->
        <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">NOSOTROS</h3>
        <p class="w3-center w3-large">El Instituto de Salud Pública de Chile (ISP) es un servicio público, que posee autonomía de gestión y está dotado de personalidad jurídica y de patrimonio propio, dependiendo del Ministerio de Salud para la aprobación de sus políticas, normas y planes generales de actividades, así como en la supervisión de su ejecución.</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
            <i class="fa fa-font-awesome w3-margin-bottom w3-jumbo w3-center"></i>
            <p class="w3-large">MISIÓN</p>
            <p>Contribuir a la salud pública del país, como la Institución Científico-Técnica del Estado,  que desarrolla con calidad las funciones de Referencia, Vigilancia, Autorización y Fiscalización en el ámbito de sus competencias.</p>
            </div>
            <div class="w3-quarter">
            <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">VISIÓN</p>
            <p>En el 2018 seremos la Institución de excelencia Científico-Técnica, de Salud Pública del Estado de Chile, certificada, acreditada y reconocida a nivel nacional e internacional.</p>
            </div>
            <div class="w3-quarter">
            <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">VALORES</p>
            <p>TRADICIÓN: Fuimos pioneros y llegaremos a ser líderes en Salud Pública.

                    VOCACIÓN: Institutanos por una Salud Pública digna y de calidad.

                    COMPROMISO: Funcionarios y funcionarias comprometidos con la misión institucional.

                    LIDERAZGO: Somos personas con visión de futuro en Salud Pública.

                    EXCELENCIA:  A la vanguardia en Salud Pública de calidad.</p>
            </div>
            <div class="w3-quarter">
            <i class="fa fa-file-text w3-margin-bottom w3-jumbo"></i>
            <p class="w3-large">HISTORIA</p>
            <p>El actual Instituto de Salud Pública de Chile (ISP) remonta sus raíces históricas a 1892 cuando, con fecha 15 de septiembre de ese año, fue creado por Ley el Instituto de Higiene, bajo la dirección del Dr. Federico Puga Borne, quien fuera varias veces Ministro de Justicia e Instrucción Pública y de Interior.</p>
            </div>
        </div>
        <!-- Container (Contact Section) -->
        <div class="w3-container" id="contact">
        <span class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity">Mensaje ingresado exitosamente.<span class="w3-hide-small"></span></span>
        <a class="w3-center w3-padding-large w3-red w3-xlarge w3-wide w3-animate-opacity" href="index.html">Volver</a>
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Arriba</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Creado por Catalina Vera y Francisco San Juan</p>
        </footer>
        

        </body>
        </html>
        ';
    }
?>