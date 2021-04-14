<?php
    session_start();
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
        <h3>Crear una nueva cuenta.</h3>
         
         <!-- FORMULARIO -->
          <form method="POST" action="protected.php">
           <p>Nombre:<br>
            <input name="Nombre" type="text" placeholder="Ingresa tu nombre o un alias" class="form"></p>
           <p>Correo electrónico:<br>
            <input name="Mail" type="email" placeholder="Es el que usarás para iniciar sesión" class="form"></p>
           <p>Fecha de nacimiento:<br>
            <input name="Fecha" type="date" placeholder="Ingresa tu fecha de nacimiento" class="form"></p>
           <p>Día favorito de la semana:<br>
            <select name="Semana" class="form">
             <option></option>
             <option>Lunes</option>
             <option>Martes</option>
             <option>Miércoles</option>
             <option>Jueves</option>
             <option>Viernes</option>
             <option>Sábado</option>
             <option>Domingo</option>
            </select></p>
           <p>Constraseña:<br>
            <input name="Password" type="password" placeholder="Elige una contraseña" class="form"></p>
            <input name="submit" type="submit" value="ENVIAR" class="button">
          </form>
    </DIV>
    
    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>


</DIV>

</BODY>
</HTML>