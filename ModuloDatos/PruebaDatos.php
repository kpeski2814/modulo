<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

include("ModuloDatos.php");
$datos=new ModuloDatos();

$tabla=$datos->Listar("Select*from clientes");
while ($fila=mysql_fetch_array($tabla)) {
	
echo "<br>".$fila[0]."".$fila[1];

}

$rs=$datos->Ejecutar("delete from vendedor where idven=192");

echo "se afecto".$rs."Colunmas";

  ?>

</body>
</html>