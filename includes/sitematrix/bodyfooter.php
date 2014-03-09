<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Body footer (Copyright, author, etc)
// -----------------------------------------
echo"  <footer>\n";
echo"   <div class=\"wrap\">\n";
echo"    <span class=\"copyright\">".$websiteName." &reg; ".date('Y')."</span>\n";
echo"    <ul class=\"footermenu\">\n";//idem 'includes/sitematrix/bodyheadnav.php'
echo"     <li><a href=\"".$prefix.$mainmenuUri_home."\" title=\"".$mainmenuTitle_home."\">".$mainmenuName_home."</a></li>\n";
echo"     <li><a href=\"".$prefix.$mainmenuUri_forrent."\" title=\"".$mainmenuTitle_forrent."\">".$mainmenuName_forrent."</a></li>\n";
echo"     <li><a href=\"".$prefix.$mainmenuUri_forsale."\" title=\"".$mainmenuTitle_forsale."\">".$mainmenuName_forsale."</a></li>\n";
echo"     <li><a href=\"".$prefix.$mainmenuUri_contact."\" title=\"".$mainmenuTitle_contact."\">".$mainmenuName_contact."</a></li>\n";
echo"    </ul>\n";//ul:footermenu
echo"    <a class=\"author\" href=\"".$websiteAuthorUrl."\" title=\"Web design by ".$websiteAuthorName."\" onclick=\"window.open(this.href,'_blank');return false;\">".$websiteAuthorName."</a>\n";
echo"    <div id=\"inmodir_rbtn\" class=\"recommendbut\"></div>\n";
echo"    <div id=\"inmodir_fbtn\" class=\"followbut\"></div>\n";
echo"   </div>\n";//wrap
echo"  </footer>\n";
?>