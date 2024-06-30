<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <LINK REL="STYLESHEET" TYPE="TEXT/CSS" href="estilo.php">
    <LINK REL="STYLESHEET" TYPE="TEXT/CSS" href="negocio1.css">
</head>
<body>
    <div class="php">
    <div class="h1">
<h1>ORDEN</h1></div>
<br>
<br>
<center>
<p>Nelly Arellano Garcia</p>
<p>4AVP</p>
<p>Programacion</p>
<p>Mon Amour</p>
</center>
<?php

$nombre = $_GET['nombre'];
$Apellido = $_GET['Apellido'];
$telefono = $_GET['Telefono'];
$areatext = $_GET['msg'];
echo "<center>";
echo date("Y-m-d"). "<br>". "<br>". "<br>";
echo "</center>";
echo '<div class="com">';
echo "DATOS DEL USUARIO". "<br>". "<br>";
echo '</div>';
echo "Nombre: ". $nombre. "<br>". "<br>";
echo "Apellido: ". $Apellido. "<br>". "<br>";
echo "Telefono: ". $telefono. "<br>". "<br>". "<br>";
echo '<div class="com">';
echo "COMPRAS". "<br>". "<br>";
echo '</div>';
if(isset($_GET['chk1']))
{
     echo $cortador =$_GET['chk1']. "<br>". "<br>". "<br>";
}
else{
  echo $cortador ="";
}
if(isset($_GET['chk2']))
{
     echo $chispas =$_GET['chk2']. "<br>". "<br>". "<br>";
}
else{
  echo $chispas ="";
}
if(isset($_GET['chk3']))
{
     echo $sprink =$_GET['chk3']. "<br>". "<br>". "<br>";
}
else{
  echo $sprink ="";
}
if(isset($_GET['chk4']))
{
     echo $semi =$_GET['chk4']. "<br>". "<br>". "<br>";
}
else{
  echo $semi ="";
}
if(isset($_GET['chk6']))
{
     echo $spray =$_GET['chk6']. "<br>". "<br>". "<br>";
}
else{
  echo $spray ="";
}
if(isset($_GET['chk7']))
{
     echo $plumon =$_GET['chk7']. "<br>". "<br>". "<br>";
}
else{
  echo $plumon ="";
}
if(isset($_GET['chk8']))
{
     echo $blanco =$_GET['chk8']. "<br>". "<br>". "<br>";
}
else{
  echo $blanco ="";
}
if(isset($_GET['chk9']))
{
     echo $moldes =$_GET['chk9']. "<br>". "<br>". "<br>";
}
else{
  echo $moldes ="";
}
if(isset($_GET['chk10']))
{
     echo $vela =$_GET['chk10']. "<br>". "<br>". "<br>";
}
else{
  echo $vela ="";
}
if(isset($_GET['chk11']))
{
     echo $diamantina =$_GET['chk11']. "<br>". "<br>". "<br>";
}
else{
  echo $diamantina ="";
}
if(isset($_GET['chk12']))
{
     echo $duyas =$_GET['chk12']. "<br>". "<br>". "<br>";
}
else{
  echo $duyas ="";
}
if(isset($_GET['chk12']))
{
     echo $gel =$_GET['chk13']. "<br>". "<br>". "<br>";
}
else{
  echo $gel ="";
}
echo '<div class="co">';
echo "COMENTARIOS". "<br>". "<br>";
echo '</div>';
echo $areatext. "<br>". "<br>". "<br>";
echo '<div class="or">';
echo "Esta es su orden". "<br>". "<br>";
echo '</div>';
?>

<button type="button" onclick="location.href='index.html'">VOLVER</button>
</div>
</body>
</html>