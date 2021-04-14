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
           
           
            <h4>Ingresa los siguientes datos para iniciar sesión</h4>

            <!-- FORMULARIO -->
            <form method="POST" name="Homework" action="">
                <p>Usuario:<br>
                    <input name="Mail" type="email" placeholder="Ingresa tu correo electrónico" class="form"></p>
                <p>Constraseña:<br>
                    <input name="Password" type="password" placeholder="Ingresa la contraseña: pst... es abc123" class="form"></p>
                <input name="Submit" type="submit" value="INICIAR SESIÓN" class="button">
            </form>
            
            <p>¿Usuario nuevo? da <a href="registro.php">clic aquí</a> para crear una cuenta.</p>

            <!-- VALIDACIÓN -->
            <?php session_start(); /* Para generar los datos de la sesión */
            if(isset($_POST['Submit'])){ /* Verificar que se ingresaron los datos */
                $logins = array('jfjafet@gmail.com' => 'abc123','user@mail.com' => '123'); /* Array con la asociación user - correo */
                
                $Mail = isset($_POST['Mail']) ? $_POST['Mail'] : ''; /* Asigna usuario y contraseña a una variable */
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
            
                if (isset($logins[$Mail]) && $logins[$Mail] == $Password){ /* Validar la existencia de datos */
                $_SESSION['Homework']['Mail']=$logins[$Mail]; /* Conceder acceso  */
                header("location:protected.php");
                exit;
                } else {
                    $msg="<span style='color:red'>Error: Por favor, verifique sus datos.</span>"; /* Mensaje de error */
                    }
            }
            $_SESSION['time'] = time(); /* Registrar el momento de inicio de sesión */
            ?>
            
            <!-- Arroja mensaje de error en caso de ingresar datos incorrectos -->
            <p><b><?php if(isset($msg)){?>
                   <?php echo $msg;?>
                <?php } ?>
            </b></p>

            
    </DIV>
    
    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
    <b>Código: </b>394485606<br/>
    <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
    <b>Fecha: </b>16 de abril 2021</p>

</DIV>

</BODY>
</HTML>