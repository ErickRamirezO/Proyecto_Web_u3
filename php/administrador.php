<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['tipo_usuario'])) {
    // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
    header('Location: ../index.php');
    exit();
}
$tipo_usuario = $_SESSION['tipo_usuario'];
$nombre_usuario = $_SESSION['nombre_usuario'];
if ($tipo_usuario == 'bodeguero') {
     //Si es administrador, redirigir a la página de administrador
    header('Location: bodeguero.php');
    exit();
}elseif ($tipo_usuario == 'producción') {
    header('Location: produccion.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="../css/estilo_administrador.css" rel="stylesheet" type="text/css" />
  <link href="../css/sidenav.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- SweetAlert 2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css"
        />
</head>
<body>

    <?php
    include "sidenav_admin_module.php"
  ?>

    <div class="principal">
      <main id="main">
    <div class="encabezado">
        <div class="logo"><img src="../img/logo_alternativo.png"></div>
        <div class="informacion">
            <div class="nombre"><p><?php echo $nombre_usuario?></p></div>
            <div class="user-logo"><i class="fa-solid fa-user fa-2xl"></i></div>
            <div class="cerrar" id="cerrar_sesion"><p>Cerrar Sesión</p> </div>
        </div>
    </div>
      
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <div class="portada-usuarios">
        <img src="../img/portada_administrador1.jpg" alt="">
    </div> 
    <div class="contenido">
        <div class="primer-contenido">
            <div id="agregar"><p>Agregar Usario</p></div>
            <div id="reporte"><p>Ver reporte</p></div>
            <div id="usuario"><p>Ver usuario</p></div>
            <div id="actividad_usuario"><p>Ver actividad de<br>usuario</p></div>
        </div>
        <div class="segundo-contenido">
            <div id="editar_orden"> <p>Editar Orden de<br>produccion</p></div>
            <div id="editar_compra"><p>Editar Compra</p></div>
            
        </div>
    </div> </main>  
    </div>
    <script src="../js/sidenav.js"></script>
  <script src="../js/cerrarSesion.js"></script>
</body>
</html>


