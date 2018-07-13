<?php
    include_once('/empresaModelo.php');
    include_once('/empresa.php');
    include_once('/contactoModelo.php');
    include_once('/contacto.php');
    


    $modeloEmpresa = new empresaModelo();
    $lista = $modeloEmpresa -> ListarEmpresa();

    $modeloContacto = new contactoModelo();
    $listaContacto = $modeloContacto -> ListarContacto();

    session_start();

    $username = $_SESSION['username'];

    $empresa = $modeloEmpresa -> ObtenerEmpresaRut($username);

    echo $username;
   //$lista = $modeloEmpresa -> ListarEmpresa();

?>
<!DOCTYPE html>
<html>
<title>Perfil Empresa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="http://www.consulting-isp.com/wp-content/uploads/2014/09/ISPBannerStep31.png" />
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<form class="w3-container" action="controladorAdminPage.php" method="post">
    <input class="w3-button w3-block w3-red w3-section w3-padding" type="submit" name="Cerrar" value="CERRAR SESIÓN">
</form>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Mi Perfil</h4>
         <p class="w3-center"><img src="img_avatar4.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i><?php echo $empresa->getRut_empresa(); ?></br>
         <i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i><?php echo $empresa->getNombre_empresa(); ?></br>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-address-card fa-fw w3-margin-right"></i> Contactos</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>
              <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-plus-square fa-fw w3-margin-right"></i>Agregar Contacto</button>
              <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class=" fa fa-list fa-fw w3-margin-right"></i>Contactos Activos</button>
            </p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Muestras</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>
              <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-list fa-fw w3-margin-right"></i>Resultados</button>
              <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-list fa-fw w3-margin-right"></i>Muestras Pendientes</button>
            </p>
          </div>
        </div>      
      </div>
      <br>
      
  
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="controladorEmpresaPage.php" method="post">
        <div class="w3-section">
          <label><b>Run</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese Run" name="txtRun" required>
          <label><b>Nombre</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Ingrese Nombre" name="txtNombre" required></br>
          <label><b>Correo</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Ingrese Correo" name="txtCorreo" required></br>
          <label><b>Telefono</b></label>
          <input class="w3-input w3-border" type="number" placeholder="(981559324)" name="txtTelefono" required></br>
          <label><b>Id Empresa</b></label>
          <select name="txtCategoria">
            <option value="Encargado de Recibir"><?php echo $empresa->getId_empresa(); ?></option>
          </select></br></br>
          <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="Registrar" value="Registrar">
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="controladorAdminPage.php" method="post">
        <table class="w3-table">
        <tr>
          <th>Run</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Teléfono</th>
        </tr>
        <?php 
        foreach($listaContacto as $r)
        {
        ?>
          <tr>
            <td>
              <?php
               echo $r->getRun_contacto()
              ?>
            </td>
            <td>
              <?php echo $r->getNombre_contacto()?>
            </td>
            <td>
              <?php echo $r->getCorreo_contacto()?>
            </td>
            <td>
              <?php echo $r->getTelefono_contacto()?>
            </td>
          </tr>
        <?php 
        }
        ?>
        </table> 
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
    <div class="w3-col m7">
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        
        <h4>Nombre </h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="w3-row-padding" style="margin:0 -16px">
           
        </div>
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Contestar</button> 
      </div>

    <!-- End Middle Column -->
    </div>
    
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">

  <p>Creado por Catalina Vera y Francisco San Juan</p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
