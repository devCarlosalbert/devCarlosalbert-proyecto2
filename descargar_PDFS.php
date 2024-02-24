<!DOCTYPE html>
<html>
    <head>
        <title>Descargar PDF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  rel="stylesheet" href="w3.css">
        <style>
        body {font-family: "Montserrat", sans-serif;}
        div {width:90%;margin:auto;border:2px solid blue;padding:10px;}
        </style>
    </head>
    <body class="w3-content">
        <div class='w3-text-green'>
            <center><h3>ITGAM</h3>
            <h3>Pogramacion de servicios web</h3>
            <h2 class='w3-text-light-green'>Descargar PDF </h2></center>
            <h4 class='w3-text-blue'>Inventario</h4>
        </div>
        <br>
        <div class="w3-pale-blue" style='width:70%;margin:auto;padding:15px'>
        <form action="descargar_pdf_open.php" method="POST">
            <?php
            $carpetaPDF=".\documentos";
            if (!is_dir($carpetaPDF))
            {echo "Error en".$carpetaPDF;}
            else
            {echo "Si existe: ".$carpetaPDF;}
            $dir = opendir($carpetaPDF);
            echo "<select name='nombrePDF' class='w3-input'>";
            while ($elemento = readdir($dir)){
                if( $elemento != "." && $elemento !=".."){
                    // si es una carpeta
                    if ( !is_dir($carpetaPDF.$elemento)){
                        echo "<option value='$elemento'>";
                        echo $elemento;
                        echo "</option>";
                    }
                }
            }
       echo "</select>";
            ?>
       <br><center>
        <button type="submit" class="w3-buttpn w3-blue" 
        name="descargar">Descargat PDF</button>
        </center>
        <div>
        </form></div></body>
