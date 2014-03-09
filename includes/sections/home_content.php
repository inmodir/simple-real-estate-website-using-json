<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Home' - Content
// -----------------------------------------
echo"  <div id=\"content\">\n";
echo"   <div class=\"wrap\">\n";
include($prefix."includes/templates/".$sectionName."_intro.php");//Introduction and welcome text
//
if(isset($inmodir_rentads) && $inmodir_rentads['optnumber']>0)
{
 echo"    <h3>Last rentals listings ".$inmodir_rentads['optnumber']."</h3>\n";
 echo"    <ul>\n";
 foreach($inmodir_rentads['optdata'] as $myads)
 { 
  echo"     <li><a href=\"".$prefix.$mainmenuUri_forrent."/?acode=".$myads['ad_acode']."\">";//to 'forrent' section
  echo"<p>".$myads['ad_introduction']." <em>".$myads['ad_price']."&euro;</em></p>";
  echo"<img src=\"";
  if($myads['ad_defaultpic']!="0"){echo$myads['ad_defaultpic'];}//default photo
  else{echo$websiteUrlStatic."/img/nophoto.png";}//case ad has no photo (zero between quotes!!)
  echo"\" alt=\"".$myads['ad_introduction']."\" />";
  echo"</a></li>\n";
 }
 echo"    </ul>\n";
}
//
if(isset($inmodir_saleads) && $inmodir_saleads['optnumber']>0)
{
 echo"    <h3>Latest sale ads</h3>\n";
 echo"    <ul>\n";
 foreach($inmodir_saleads['optdata'] as $myads)
 { 
  echo"     <li><a href=\"".$prefix.$mainmenuUri_forsale."/?acode=".$myads['ad_acode']."\">";//to 'forsale' section
  echo"<p>".$myads['ad_introduction']." <em>".$myads['ad_price']."&euro;</em></p>";
  echo"<img src=\"";
  if($myads['ad_defaultpic']!="0"){echo$myads['ad_defaultpic'];}//default photo
  else{echo$websiteUrlStatic."/img/nophoto.png";}//case ad has no photo (zero between quotes!!)
  echo"\" alt=\"".$myads['ad_introduction']."\" />";
  echo"</a></li>\n";
 }
 echo"    </ul>\n";
}
echo"   </div>\n";//wrap
echo"  </div>\n";//content
?>