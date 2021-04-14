<?php
  session_start();
  $Nombre = $_SESSION['Nombre'];
  $Mail = $_SESSION['Mail'];
  $Fecha = $_SESSION['Fecha'];
  $Semana = $_SESSION['Semana'];
 ?>

<?php // Lista de valores ya registrados.
 $user = array();
 $user[1] = array("Nombre" => "Bárbara", "Mail" => "user@mail.com", "Cumpleaños" => "26/abril", "Semana" => "Viernes");
 $user[2] = array("Nombre" => "José Francisco", "Mail" => "jfjafet@gmail.com", "Cumpleaños" => " ", "Semana" => " ");
 $user[3] = array("Nombre" => $Nombre, "Mail" => $Mail, "Cumpleaños" => $Fecha, "Semana" => $Semana);
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
      <h3>Datos guardados</h3>
      
      <?php
       foreach($user[1] as $clave => $valor) {
        echo $clave . ": " . $valor. "<br>";
       }
      ?>
      <br>
      <?php
       foreach($user[2] as $clave => $valor) {
        echo $clave . ": " . $valor. "<br>";
       }
      ?>
      <br>
      <?php
       foreach($user[3] as $clave => $valor) {
        echo $clave . ": " . $valor. "<br>";
       }
      ?>
      <br>

      
      <p>Te encuentras en una página protegida.</p>
      
      <a href="logout.php"><input name="Submit" type="submit" value="CERRAR SESIÓN" class="button"></a>
      <br>
    </DIV>

    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>



</DIV>

</BODY>
</HTML>