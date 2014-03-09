<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Get the list of pictures of an ad from InmoDir
// -----------------------------------------
/*
 * Using file_get_contents() and decoding the JSON file.
 * The information of the rent ads will be saved in the variable called 'inmopic_array'.
 * 
 * See at the next script: vars '$inmodirLabUrl' and '$inmodirIcode' 
 * was assigned at 'includes/config/basic.php'
 */
//
//
//
$inmoscript_url=$inmodirLabUrl."/json/adspics/?icode=".$inmodirIcode."&acode=".$_GET['acode'];
$inmoscript_url.="&acode=".$_GET['acode'];//Defined at 'includes/sections/ads.php'
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
 $inmopic_array = json_decode(trim($inmodata), true);//Decode (JSON->PHP)
}
?>