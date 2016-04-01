<?
include_once("ModuloDatos.php");


class Vendedor{

	var $ven_cod;
	var $ven_nom;
	var $ven_fig;


function Grabar(){
	$datos=new ModuloDatos();
	$rs=$datos->Ejecutar("insert into vendedor values(".$this->ven_cod.",'".$this->ven_nom."','".$this->ven_fig."')")
return $rs;
}


}

?>