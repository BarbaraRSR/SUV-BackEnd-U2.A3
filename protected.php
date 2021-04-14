<?php
  session_start();
  $_SESSION['Nombre'] = isset($_POST['Nombre'])? $_POST['Nombre'] : null;
  $_SESSION['Mail'] = isset($_POST['Mail'])? $_POST['Mail'] : null;
  $_SESSION['Fecha'] = isset($_POST['Fecha'])? $_POST['Fecha'] : '';
  $_SESSION['Semana'] = isset($_POST['Semana'])? $_POST['Semana'] : '';
  $Nombre = $_SESSION['Nombre'];
  $Mail = $_SESSION['Mail'];
  $Fecha = $_SESSION['Fecha'];
  $Semana = $_SESSION['Semana'];
 ?>

<?php
  if(isset($_COOKIE['contador']))
  { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 60*15 ); // Duración de 5 minutos.
    $cuenta = 'Número de visitas: ' . $_COOKIE['contador']; 
  } 
  else 
  { 
    // Caduca en un año 
    setcookie('contador', 1, time() + (60*15)); 
    $cuenta = 'Esta es tu primera visita a la página.'; 
  } 
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
    <meta charset="utf-8">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>
<BODY>
<DIV class="cont">


<h1>Lenguajes de programación Back End</h1>
<p><b>Unidad 2.</b> Estructura de datos</p>

    <DIV class="actividad">
        <h3>Actividad 3. Archivos desde formularios web.</h3>
        
        <?php
          echo "<p>Hola, $Nombre</p>";
        ?>
        

        <p><a href="upload.php">Subir un archivo.</a></p>
        <p><a href="datos.php">Consultar datos de registro.</a></p>
        <p>Tu inicio de sesión actual es: <?php echo date('d/M/Y H:i:s', $_SESSION['time']); ?></p>

        <p><?php echo $cuenta; ?> </p>
        
        
        
        <p><img src="https://cgestiona.com/files/1/page-contents/ingresar%20informaci%C3%B3n%20a%20T-Registro.jpg" alt="candado"></p>
        <!-- Verificar la existencia de cookies -->
        <?php
        if(count($_COOKIE) > 0) {
          echo "Las cookies están activadas.";
        } else {
          echo "No se encontraron cookies.";
        }
        ?>

        <p>Te encuentras en una página protegida.</p>
        
        <a href="logout.php"><input name="Submit" type="submit" value="CERRAR SESIÓN" class="button"></a>
        
        <br>


    </DIV>

    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
    <b>Código: </b>394485606<br/>
    <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
    <b>Fecha: </b>16 de abril 2021</p>

    <p><b>Fuentes de consulta</b>
    <ul>
        <li>Admin (2018). <i>11. Guardar variables (II): 11.2 Sesiones</i> [en línea]. En Aprende web [Consulta: 26-mar-2021].<br>
        Recuperado de: <a href="https://aprende-web.net/php/php11_2.php">https://aprende-web.net/php/php11_2.php</a></li>
    </ul>
    </p>



</DIV>

</BODY>
</HTML>