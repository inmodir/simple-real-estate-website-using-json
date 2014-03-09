<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Body header (Logo, main menu, etc)
// -----------------------------------------
echo"  <header>\n";
echo"   <div class=\"wrap\">\n";
echo"    <h1><a href=\"".$websiteUrl."\" title=\"".$websiteName."\">".$websiteName."</a></h1>\n";
echo"    <nav>\n";
echo"     <ul>\n";
echo"      <li><a ";if($sectionName=="home"){echo"class=\"on\" ";}echo"href=\"".$prefix.$mainmenuUri_home."\" title=\"".$mainmenuTitle_home."\">".$mainmenuName_home."</a></li>\n";
echo"      <li><a ";if($sectionName=="forrent"){echo"class=\"on\" ";}echo"href=\"".$prefix.$mainmenuUri_forrent."\" title=\"".$mainmenuTitle_forrent."\">".$mainmenuName_forrent."</a></li>\n";
echo"      <li><a ";if($sectionName=="forsale"){echo"class=\"on\" ";}echo"href=\"".$prefix.$mainmenuUri_forsale."\" title=\"".$mainmenuTitle_forsale."\">".$mainmenuName_forsale."</a></li>\n";
echo"      <li><a ";if($sectionName=="contact"){echo"class=\"on\" ";}echo"href=\"".$prefix.$mainmenuUri_contact."\" title=\"".$mainmenuTitle_contact."\">".$mainmenuName_contact."</a></li>\n";
echo"     </ul>\n";
echo"    </nav>\n";
echo"   </div>\n";//wrap
echo"  </header>\n";
?>