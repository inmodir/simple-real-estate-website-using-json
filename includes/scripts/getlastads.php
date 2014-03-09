<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Get the last 3 rent ads and the last 3 sale ads from InmoDir
// -----------------------------------------
/*
 * Using file_get_contents() and decoding the JSON file.
 * The information of the rent ads will be saved in the variable called 'inmodir_rentads', 
 * and at 'inmodir_saleads' the nformation of the sale ads.
 * 
 * See at the next 2 scripts: vars '$inmodirLabUrl' and '$inmodirIcode' 
 * was assigned at 'includes/config/basic.php'
 */
//
//
//
// For rent
$inmoscript_url=$inmodirLabUrl."/json/adslist/?icode=".$inmodirIcode."&opertype=1&order=desc&limit=0.3";//opertype=1(rent)
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
 $inmodir_rentads = json_decode(trim($inmodata), true);//Decode (JSON->PHP)
}
//
//
//
// For sale
$inmoscript_url=$inmodirLabUrl."/json/adslist/?icode=".$inmodirIcode."&opertype=2&order=desc&limit=0.3";//opertype=2(sale)
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
 $inmodir_saleads = json_decode(trim($inmodata), true);//Decode (JSON->PHP) 
}
?>