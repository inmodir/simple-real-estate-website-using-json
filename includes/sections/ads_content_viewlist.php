<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Ads' - Case: show ad list of some operation type ($opertype)
// -----------------------------------------
echo"  <div id=\"content\">\n";
echo"   <div class=\"wrap\">\n";
echo"    <h2>".$sectionTitle."</h2>\n";
echo"    <ul class=\"adslist\">\n";
foreach($inmodir_array['optdata'] as $myads)
{ 
 echo"     <li><a href=\"?acode=".$myads['ad_acode']."\">";//to 'forrent' section
 echo"<p class=\"txt\">".$myads['ad_introduction']." <em>".$myads['ad_price']."&euro;</em></p>";
 echo"<p class=\"img\"><img src=\"";
 if($myads['ad_defaultpic']!="0"){echo$myads['ad_defaultpic'];}//default photo
 else{echo$websiteUrlStatic."/img/nophoto.png";}//case ad has no photo (zero between quotes!!)
 echo"\" alt=\"".$myads['ad_introduction']."\" /></p>";
 echo"</a></li>\n";
}
echo"    </ul>\n";
echo"   </div>\n";//wrap
echo"  </div>\n";//content
// var 'adsinfo_errorName' defined at 'includes/sections/ads.php'
?>