<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Config: Property names according to InmoDir list
// -----------------------------------------
//
// Section mainmenu
$propertyNames=array(
	'1'=>'casa/chalet', 
	'2'=>'estudio', 
	'3'=>'piso', 
	'4'=>'loft', 
	'5'=>'ático', 
	'6'=>'bajo/oficina', 
	'7'=>'garaje/trastero', 
	'8'=>'nave', 
	'9'=>'adosado', 
	'10'=>'solar/parcela');
?>