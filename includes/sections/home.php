<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Home'
// -----------------------------------------
// Initialize
   include($prefix."includes/config/basic.php");//basic info
   include($prefix."includes/config/sections.php");//Section names, uris, etc
//
// Specific functions for this section
   include($prefix."includes/scripts/getlastads.php");
//
// Special styles, JS, etc. See 'includes/sitematrix/bodyhead.php' or 'includes/sitematrix/bodymorescripts.php'
// (niente)
//
// Print
   echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";//<<--Strict
   echo"<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"".$websiteLang."\">\n";//<<--var '$lang' defined at 'includes/config/basic.php'
   include($prefix."includes/sitematrix/headers.php");//Headers
   echo" <body>\n";
   include($prefix."includes/sitematrix/bodyhead.php");//Head inside body, main menu, etc.
   include($prefix."includes/sections/".$sectionName."_content.php");//Contents of this section
   include($prefix."includes/sitematrix/bodyfooter.php");//Footer inside body
   include($prefix."includes/sitematrix/bodysocialnet.php");//It loads at end but it prints at top
   include($prefix."includes/sitematrix/bodymorescripts.php");//Aditional scripts before close body
   echo" </body>\n";
   echo"</html>";
?>