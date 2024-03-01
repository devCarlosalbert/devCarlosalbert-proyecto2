<html><head>
‹link rel-"stylesheet" href="w3.css">
‹style>
*{margin:5px; }
 body (width:80%; margin:auto; }
  h2,h3 { color: #557788;) 
  .marca {color:blue;}
</style>
<meta http-equiv="Content-Type" content-"text/html;charset-utf-8",
<title>Practica: SimpleXML</title>
</head>
‹body>
‹div class="w3-container w3-light-blue">
<?php
echo " chi>ITGAM <br>Programación Web </h1>";
echo "‹h2›Práctica: Leer archivo XML</h2>";
echo "‹/div>";
$archivoXML="equipoComputo.xml";
if (file_exists ($archivoXML))
{ 
echo "‹h3>El archivo: $archivoXML no existe‹/h3>";
return;
 } 
$computo - simplexmi_load_file(SarchivoXML); //print_r($computo)
echo "<h3›Listado Equipo de Computo‹/h3>";
echo "‹select class-'w3-input">";
for ($x=0;$x‹count ($computo); $x++) {
echo "<option>";
$marca - $computo-›equipo [$x]-›marca;
$modelo - $computo-›equipo[$x]-›modelo;
Sserie $computo-›equipo[$x]-›numserie;
$procesador-$computo-›equipo[$×]-›procesador;
echo $marca." $modelo; 
$serie-$computo-›equipo[$x]-›numserie; $procesador_-$computo-›equipo[$×]-›procesador;
echo $marca."$modelo;
echo " ($serie) ";
echo
" [$procesador]"
echo "‹/option›";}
echo "</select> echo "‹hr›";
echo "‹h3›Tabla Listado Equipo de Computo‹/h3›";
echo
"<table class='W3-table w3-striped'›"
echo
"<th›Marca‹/th›"
echo
"<th›Modelo‹/th›"
echo
"‹th›Num. Serie‹/th›"
echo
"<th›Procesador‹/th›'
echo "‹th›Tipo‹/th›"
for ($x=0;$x<count ($computo); $x++) {
$marca = $computo-›equipo[$x]->marca; $modelo= $computo->equipo[$x]-›modelo; $serie $computo-›equipo[$x]-›numserie; $proc-$computo-›equipo[$x]-›procesador; $tipo -$computo-›equipo[$×]-›tipo;
echo "‹tr>";
echo "‹td class='marca"›".$marca. "‹/td›"
echo "‹td›".$modelo."</td›";
echo "<td›" $serie."‹/td›";
echo "‹td›" $proc. "‹/td>";
echo "‹td›" $tipo."‹/td›" echo "‹/tr›";1 echo
"‹brs";echo "‹/table›" echo "‹div class='w3-container W3-pale-green'›" echo
"<h4> Nombre del Alumno(a):‹/h4>"
echo "</div>";
?>
</body></html>

