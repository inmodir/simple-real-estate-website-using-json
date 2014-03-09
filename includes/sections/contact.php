<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Contact'
// -----------------------------------------
// Initialize
   include($prefix."includes/config/basic.php");//basic info
   include($prefix."includes/config/sections.php");//Section names, uris, etc
//
// Special styles, JS, etc. See 'includes/sitematrix/bodyhead.php' or 'includes/sitematrix/bodymorescripts.php'
   $jLimitChar="yes";$jLimitCharNum=1000;//(we need this value in both cases, see below)
//
//
// Specific functions for this section
   if(isset($_GET['acode']) && is_numeric($_GET['acode']) && strlen($_GET['acode'])>30 OR
      isset($_POST['acode']) && is_numeric($_POST['acode']) && strlen($_POST['acode'])>30)
   {
    // We have 'acode'. Lets see if it exists and get its information. 
    // We´ll obtain the following var: '$inmodata_array'. If not, we´ll list all ads of this type
    //
    // POST or GET ???...
    if(isset($_GET['acode']) && $_GET['acode']!=""){$acode=$_GET['acode'];}else{$acode=$_POST['acode'];}
    //
    // Lets check it!
    include($prefix."includes/scripts/getadsdata.php");
   }
   //
   //
   if(isset($_POST['formName']) && $_POST['formName']!="" OR
      isset($_POST['formEmail']) && $_POST['formEmail']!="" OR
      isset($_POST['formPhone']) && $_POST['formPhone']!="" OR
      isset($_POST['formMessage']) && $_POST['formMessage']!="")
   {
    // We have all (or some) fields completed. Let´s check it and do the process
    include($prefix."includes/scripts/contactform_process.php");//Form process
   }
   //
   // 
   if(!isset($sectionContentInclude)){$sectionContentInclude="contact_content_form.php";}//We define include (y default)
//
// Print
   echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";//<<--Strict
   echo"<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"".$websiteLang."\">\n";//<<--var '$lang' defined at 'includes/config/basic.php'
   include($prefix."includes/sitematrix/headers.php");//Headers
   echo" <body>\n";
   include($prefix."includes/sitematrix/bodyhead.php");//Head inside body, main menu, etc.
   include($prefix."includes/sections/".$sectionContentInclude);//Contents of this section
   include($prefix."includes/sitematrix/bodyfooter.php");//Footer inside body
   include($prefix."includes/sitematrix/bodysocialnet.php");//It loads at end but it prints at top
   include($prefix."includes/sitematrix/bodymorescripts.php");//Aditional scripts before close body
   echo" </body>\n";
   echo"</html>";
?>