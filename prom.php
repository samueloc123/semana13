<html>
  <head>
    <title></title>
  </head>
  <body>

<?php

$nombre=$_POST['nprom'];


$conexion=new mysqli("localhost","root","","semana13");
$sqln="SELECT * FROM actividad WHERE nombre='$nombre'";
$ejecutar1=mysqli_query($conexion, $sqln);
$dato=$ejecutar1->fetch_assoc();
$pro1=$dato['nota1']+$dato['nota2']+$dato['nota3'];
$promedio=$pro1/3;
$sql="UPDATE actividad SET promedio='$promedio' WHERE nombre='$nombre'";
$ejecutar=mysqli_query($conexion, $sql);


if($ejecutar){
	header("location:index13.html");
}
?>

   </body>
    </html>