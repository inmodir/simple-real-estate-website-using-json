<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Config: Error codes according to InmoDir list
// -----------------------------------------
//
// Section mainmenu
$errorTexts=array(
	'201'=>'Unexpected error.', 
	'202'=>'Unexpected error.', 
	'203'=>'Unexpected error.', 
	'204'=>'The ad code is incorrect.', 
	'205'=>'The ad code is nonexistent.', 
	'206'=>'Nonexistent or incorrect ad code.', 
	'207'=>'The ad you are trying to view has expired.', 
	'208'=>'The requested ad does not belong to this agent.');
//
// Complete list at: http://www.inmodir.com/es-es/desarrolladores/documentacion/?opt=errormessagesjson
?>