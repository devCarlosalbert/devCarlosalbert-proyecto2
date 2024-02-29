<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=decive-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>
<div style="padding:10px;width:80%;margin:auto" class="w3-border">
<div class=w3-container ">
<h2 class="w3-text-blue">Instituto Tecnologico de Gustavo A Madero</h2>
<h2 class="w3-text-blue">Ingenieria de Sotfware</h2>
<center><h1 class="w3-text-purple">Forumulario POST</h1></center>
<h3 class="w3-text-light-blue">Alumno:Jimenez Ornelas Jose de Jesus</h3>
</div>
<?php
//var_dump($_POST);
$usuario=$_POST["usuario"];
$paterno=$_POST["paterno"];
$materno=$_POST["materno"];
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$perfil=$_POST["perfil"];
$activo=$_POST["activo"];
$genero=$_POST["genero"];
$comentario=$_POST["comentario"];

if($usuario=="")
{echo "<h3>Error. Usuario Invalido <h3>";
return;}

if($paterno=="" || $materno== "" || $nombre=="")
{echo "<h3>Error. Nombre completo del usuario incompleto <h3>";
return;}

if($email =="")
{echo "<h3>Error. Correo electronico incompleto<h3>";
return;}

if($perfil=="")
{echo "<h3>Error. Perfil de usuario error<h3>";
return;}
$consulta="insert into usuarios(";
$consulta.=" usuario,paterno,materno,nombre,email,perfil,genero,comentario,activo) ";
$consulta.=" values (";
$consulta.=" '$usuario','$paterno','$materno','$nombre','$email','$perfil','$genero','$comentario','$activo' ";
$consulta.=" ) ";

echo " <h2>Consulta: ";
echo $consulta;
echo "<br>";
ejecutarSQL($consulta);
$slq_mostrar="Select * from usuarios order by usuario";
$result=ejecutarSQL($slq_mostrar);
//var_dump($result;);
if ($result->num_rows > 0){
	//output data of each row
	while($row=$result->fetch_assoc()){
	  echo $row["usuario"]." - ".$row["nombre"]. " " . $row["paterno"]." ".$row["materno"];
	  echo " - ".$row["email"]." - ".$row["perfil"]. " " . $row["genero"]. "<br>";
	}
}else{
	echo "0 results";
}
echo "<hr><a href='./index.html'>volver</a>";


/************** ejecutarSQL************************/
	function ejecutarSQL($sql){

//$sql=consulta

$servername= "localhost";
$username = "root";
$password = "";
$dbname = "talleringsw";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// check connection
if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
$result =$conn->query($sql);
if($result===TRUE) {
	//echo "<br>Operacion ejecutada correctamente,";
} else{
	// echo "Error": .$sql . "<br>" .$conn->error;
}

return $result;
$conn->close();
}
 ?> </div></body> 

