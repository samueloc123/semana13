 <html>
  <head>
    <title>MODIFICAR</title>
  </head>
  <body bgcolor="black">

<form action="modificar.php" method="POST">

<div class="titulo"><center>VISUALIZACIÓN Y MODIFICACIÓN</center></div>

<div class="texto" id="texto" ><center><br>Por favor, introduzca el ID de la persona que desea consultar<br><br>

<input type="text" name="name" value="" id="name" placeholder="Introduzca el nombre">

<input type="submit" Value="Enviar" id="ver" name="ver">
<a href="index13.html"><input type="button" value="Ir al inicio" name="volver" id="volver"></a>



</center>
</div>
</center>

<div class="nuevo" id="nuevo"><center><br><label>Inserte los datos que desee actualizar</label>
&nbsp;
  <input type="text" name="aide" value="" id="aide" placeholder="Ingrese el ID"><br><br>
<input type="text" name="nnombre" value="" id="nnombre" placeholder="Ingrese el nuevo nombre">
<input type="text" name="nn1" value="" id="nn1" placeholder="Ingrese la nueva nota 1">
<input type="text" name="nn2" value="" id="nn1" placeholder="Ingrese la nueva nota 2">
<input type="text" name="nn3" value="" id="nn1" placeholder="Ingrese la nueva nota 3">
<br><br>
<input type="submit" name="modifi" value="Guardar cambios" id="modifi">
<a href="index13.html"><input type="button" value="Ir al inicio" name="volver" id="volver"></a>
</center></div>
</form>


<?php

if(isset($_POST['ver'])){

$nombre=$_POST['name'];

$conexion=new mysqli("localhost","root","","semana13");
$sqln="SELECT * FROM actividad WHERE ID='$nombre'";
$ejecutar1=mysqli_query($conexion, $sqln);
$dato=$ejecutar1->fetch_assoc();

$neim=$dato['nombre'];
$n1=$dato['nota1'];
$n2=$dato['nota2'];
$n3=$dato['nota3'];
$promedio=$dato['promedio'];

?>

<form>
<div class="info" id="info"><center>
<input type="hidden" name="n" id="n" value="<?php echo $neim ?>">
<input type="hidden" name="no1" id="no1" value="<?php echo $n1 ?>">
<input type="hidden" name="no2" id="no2" value="<?php echo $n2 ?>">
<input type="hidden" name="no3" id="no3" value="<?php echo $n3 ?>">
<input type="hidden" name="pr" id="pr" value="<?php echo $promedio ?>">
</center></div>
</form>

<script>

  var uno=document.getElementById('n').value;
    var dos=document.getElementById('no1').value;
      var tres=document.getElementById('no2').value;
        var cuatro=document.getElementById('no3').value;
          var cinco=document.getElementById('pr').value;
          var cuadro=document.getElementById('info');

          cuadro.innerHTML='<center>'+'<br>'+"Hola, el nombre del usuario es: "+uno+'<br>'+"Sus calificaciones son:"+'<br>'+"Nota 1: "+dos+'<br>'+"Nota 2: "+tres+'<br>'+"Nota 3: "+cuatro+'<br>'+"Su promedio es: "+cinco+'</center>';

</script>

<?php 
}

if(isset($_POST['modifi'])){
  

  $nombrea=$_POST['nnombre'];
  $nota1a=$_POST['nn1'];
  $nota2a=$_POST['nn2'];
  $nota3a=$_POST['nn3'];
$ide=$_POST['aide'];

  $conexion=new mysqli("localhost","root","","semana13");
$sqlm="UPDATE actividad SET nombre='$nombrea', nota1='$nota1a', nota2='$nota2a', nota3='$nota3a' WHERE ID='$ide' ";
$ejecutar2=mysqli_query($conexion, $sqlm);

}


?>

   </body>
    </html>

    <style type="text/css">
      
      .titulo{
        position: absolute;
        width:60% ;
        height: 12%;
        left: 20%;
        top: 2%;
        font-family: Fantasy;
        border: solid white 5px;
           text-shadow:-4px -2px 1px #000;
        font-size:390%;
        color:white;
        background-color: #0B5345;
      }

      .texto{
        color:white;
        position: absolute;
        width: 60%;
        height:20%;
        top:18%;
        left:20%;
        border:solid white 5px;
        background-color: #5B2C6F;
        font-style:italic ;
        font-family: courrier new;
        font-size:150% ;
      }

        .info{
        color:white;
        position: absolute;
        width: 60%;
        height:25%;
        top:42%;
        left:20%;
        border:solid white 5px;
        background-color: #2ECC71;
        font-family: courier;
        font-size:120% ;
      }
    
    .nuevo{
              color:white;
        position: absolute;
        width: 60%;
        height:26%;
        top:71%;
        left:20%;
        border:solid white 5px;
        background-color: #EC7063 ;
        font-family: courrier new;
        font-size:150% ;
          font-style:italic ;
    }