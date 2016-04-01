<?php 
include_once("ModuloDatos/Vendedor.php");
$ven=new Vendedor();
?>

<!DOCTYPE html>
<html>
<head>
	<title>prueba de datos</title>
</head>
<body>

<?php

if (isset($_GET["txtcod"])) {

	$ven->ven_cod=$_GET["txtcod"];
	$ven->ven_nom=$_GET["txtnom"];
	$ven->ven_fig=$_GET["txtfig"];
	$rs=$ven->Grabar();
	return $rs;
}else{
 ?>

<form name="miformulario" method="get" action="">
<input type="text" name="txtcod" id="txtcod">
<p><input type="text" name="txtnom" id="txtnom"></p>
<p><input type="text" name="txtfig" id="txtfig"></p>
<p><input type="submit" name="btngrabar" id="btngrabar"></p>
	
</form>

<?php 
}
?>
</body>
</html>