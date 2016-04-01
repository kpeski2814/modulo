<?php
class ModuloDatos{
var $conexion;

function ModuloDatos(){

$this->conexion=mysql_connect("localhost","root","123")or die("error en la consulta".mysql_error());
mysql_select_db("ventas",$this->conexion)or die("error al seleccionar la base de  datos".mysql_error());

}

function Listar($SqlCadena){

$rs=mysql_query($SqlCadena,$this->conexion)or die("error al consultar".mysql_error());

	return $rs;
}

function Ejecutar($SqlCadena){
$mensaje="";

$rs=mysql_query($SqlCadena,$this->conexion)or die("error al consultar".mysql_error());

if ($rs>0) {
	$mensaje="se completo la operacion";
}else{
$mensaje="no se completo la operacion";


}
	return $mensaje;





	return;
}

}





 ?>