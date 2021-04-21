<html>
  <head>
    <title></title>
  </head>
  <body bgcolor="black">



  	<div class="di" id="di"><center><br>Su nombre fue ingresado<br> con exito</center>
<a href="index13.html"><div class="volver" id="volver"><center>VOLVER A LA PANTALLA DE INICIO</center></div></a></div>

<?php

$nombre=$_POST['name'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

$conexion=new mysqli("localhost","root","","semana13");
$sql="INSERT INTO actividad (ID,nombre,nota1,nota2,nota3,promedio) VALUES (NULL,'$nombre','$n1','$n2','$n3','0')";
$ejecutar=mysqli_query($conexion, $sql);








$conexion=new mysqli("localhost","root","","semana13");
$sqln="SELECT * FROM actividad WHERE nombre='$nombre'";
$ejecutar1=mysqli_query($conexion, $sqln);
$dato=$ejecutar1->fetch_assoc();

$aidi=$dato['ID'];

?>
<form>
<input type="hidden" name="id" id="id" value="<?php echo $aidi ?>">
</form>

<script>
	
var iden=document.getElementById('id').value;

alert("Su ID es: "+iden);



</script>

   </body>
    </html>

    <style>
    	
.di{
	width: 90%;
	height:90%;
	position: absolute;
	background-color:#3498DB ;
	left: 5%;
	top:5% ;
	font-size: 500%;
	font-family:fantasy ;
	color:white;
	border:solid white 10px;
}

.volver{
	width: 60%;
	height:10%;
	position: absolute;
	background-color:gray ;
	left: 20%;
	top:60% ;
	font-size: 60%;
	font-family:fantasy ;
	color:white;
	border:solid black 2px;
	text-decoration: none;
}

    </style>


