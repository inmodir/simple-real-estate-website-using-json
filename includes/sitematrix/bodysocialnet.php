<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Body social network (Follow as at... etc, etc)
// -----------------------------------------
echo"  <div id=\"socialnetwork\">\n";
echo"   <ul>\n";
if(isset($websiteNet_googleplus) && $websiteNet_googleplus!=""){echo"    <li><a class=\"googleplus\" href=\"".$websiteNet_googleplus."\" title=\"Google plus\" rel=\"me follow\" onclick=\"window.open(this.href,'_blank');return false;\">Google plus</a></li>\n";}
if(isset($websiteNet_linkedin) && $websiteNet_linkedin!=""){echo"    <li><a class=\"linkedin\" href=\"".$websiteNet_linkedin."\" title=\"Linked in\" rel=\"me follow\" onclick=\"window.open(this.href,'_blank');return false;\">Linked in</a></li>\n";}
if(isset($websiteNet_inmodir) && $websiteNet_inmodir!=""){echo"    <li><a class=\"inmodir\" href=\"".$websiteNet_inmodir."\" title=\"InmoDir\" rel=\"me follow\" onclick=\"window.open(this.href,'_blank');return false;\">InmoDir</a></li>\n";}
if(isset($websiteNet_facebook) && $websiteNet_facebook!=""){echo"    <li><a class=\"facebook\" href=\"".$websiteNet_facebook."\" title=\"Facebook\" rel=\"me follow\" onclick=\"window.open(this.href,'_blank');return false;\">Facebook</a></li>\n";}
if(isset($websiteNet_twitter) && $websiteNet_twitter!=""){echo"    <li><a class=\"twitter\" href=\"".$websiteNet_twitter."\" title=\"Twitter\" rel=\"me follow\" onclick=\"window.open(this.href,'_blank');return false;\">Twitter</a></li>\n";}
if(isset($websiteNet_blogspot) && $websiteNet_blogspot!=""){echo"    <li><a class=\"blogspot\" href=\"".$websiteNet_blogspot."\" title=\"Blogspot\" rel=\"me follow\" onclick=\"window.open(this.href,'_blank');return false;\">Blogspot</a></li>\n";}
if(isset($websiteNet_skype) && $websiteNet_skype!=""){echo"    <li><a class=\"skype\" href=\"skype:".$websiteNet_skype."?call\" title=\"Skype\" rel=\"me follow\">Skype</a></li>\n";}
if(isset($websiteNet_youtube) && $websiteNet_youtube!=""){echo"    <li><a class=\"youtube\" href=\"".$websiteNet_youtube."\" title=\"Youtube\" rel=\"me follow\" onclick=\"window.open(this.href,'_blank');return false;\">Youtube</a></li>\n";}
echo"   </ul>\n";
echo"  </div>\n";//socialnetwork
/*
 * See at: 'includes/config/basic.php'
 * and at: 'static/css/common.css' #socialnetwork ul li a
 */
?>