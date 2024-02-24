<?php

$carpetaPDF=getcwd()."\documentos\\";
$mensajeError="";
$nombrePDF="";

if (isset($_POST["nombrePDF"])) {
    $nombrePDF=$_POST["nombrePDF"];}
if (!file_exists($carpetaPDF.$nombrePDF))
    { $mensajeError= "No existe". $carpetaPDF.$nombrePDF;
      }
if (!is_readable($carpetaPDF.$nombrePDF))
    { $mensajeError= "No es leible ".$carpetaPDF.$nombrePDF;
      }
if (!preg_match('/\.pdf$/',$carpetaPDF.$nombrePDF))
    { $mensajeError="No es un pdf ".$carpetaPDF.$nombre;
      }
 
if($mensajeError!="")
{  echo $mensajeError; return;


}
else {
    header('Content-Type: application/pdf');
    header("Content-Disposition: attachment: filename=\"$nombrePDF\"");
    readfile($nombrePDF);
    return;
}
?>