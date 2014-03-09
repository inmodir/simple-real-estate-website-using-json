<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Ads' - Case: show message of an ad
// -----------------------------------------
echo"  <div id=\"content\">\n";
echo"   <div class=\"wrap\">\n";
echo"    <h2>Oops an error occurred</h2>\n";
echo"    <p>".$adsinfo_errorName."</p>\n";
echo"   </div>\n";//wrap
echo"  </div>\n";//content
// var 'adsinfo_errorName' defined at 'includes/sections/ads.php'
?>