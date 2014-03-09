<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Get the information of an ad from InmoDir
// -----------------------------------------
/*
 * Using file_get_contents() and decoding the JSON file.
 * The information of the rent ads will be saved in the variable called 'inmodata_array'.
 * 
 * See at the next script: vars '$inmodirLabUrl' and '$inmodirIcode' 
 * was assigned at 'includes/config/basic.php'
 */
//
//
//
// var 'acode' was get by POST or GET...
$inmoscript_url=$inmodirLabUrl."/json/adsdata/?icode=".$inmodirIcode."&acode=".$acode;
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
 $inmodata_array = json_decode(trim($inmodata), true);//Decode (JSON->PHP)
}
?>