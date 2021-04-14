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
        <h3>Subir archivos</h3>

        <?php
        $nombre = $_FILES['archivo']['name'];
        $guardado = $_FILES['archivo']['tmp_name'];
        
        if(!file_exists('uploads')){
           mkdir('uploads',0777,true);
           if(file_exists('archivos')){
              if(move_uploaded_file($guardado, 'uploads/' . $nombre)){
                echo "Guardado";
             }else{
                echo "NO";
             }
           }
        }else{
           if(move_uploaded_file($guardado, 'uploads/' . $nombre)){
                echo "Guardado";
           }else{
                echo "NO";
             }
           }
        ?>
        
    </DIV>
    
    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>

</DIV>

</BODY>
</HTML>