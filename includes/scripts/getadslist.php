<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Get all ads of an specific operation type ($opertype) from InmoDir
// -----------------------------------------
/*
 * Using file_get_contents() and decoding the JSON file.
 * The information of the rent ads will be saved in the variable called 'inmodir_array', 
 * and at 'inmodir_saleads' the nformation of the sale ads.
 * 
 * See at the next 2 scripts: vars '$inmodirLabUrl' and '$inmodirIcode' 
 * was assigned at 'includes/config/basic.php'
 */
//
//
//
$inmoscript_url=$inmodirLabUrl."/json/adslist/?icode=".$inmodirIcode;
$inmoscript_url.="&opertype=".$opertype."&order=desc";
$opts = array(
  'http'=>array(
   'method'=>"GET",
   'header'=>implode("\r\n", array('Content-type: text/plain; charset=utf-8'))
  )
);
$context = stream_context_create($opts);
$inmodata = file_get_contents($inmoscript_url,false, $context);
if (isset($inmodata) && $inmodata!="")
{
 $inmodir_array = json_decode(trim($inmodata), true);//Decode (JSON->PHP)
}
?>