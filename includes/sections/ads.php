<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'For rent' or 'For sale'
// -----------------------------------------
// Initialize
   include($prefix."includes/config/basic.php");//basic info
   include($prefix."includes/config/sections.php");//Section names, uris, etc
//
// Specific functions for this section
// 2 cases: To view an specific ads, by param 'acode' (method GET), or to show the list of this type of ads
   if(isset($_GET['acode']) && is_numeric($_GET['acode']) && strlen($_GET['acode'])>30)
   {
    // We have 'acode'. Lets see if it exists and get its information. 
    // We´ll obtain the following var: '$inmodata_array'. If not, we´ll list all ads of this type
    $acode=$_GET['acode'];
    include($prefix."includes/scripts/getadsdata.php");
   }
//
// Define the content page include (see below var 'sectionContentInclude')
   if(isset($inmodata_array) && $inmodata_array!="")
   {
    if($inmodata_array['optnumber']<0)//less than zero, there is an error
    {
     include($prefix."includes/config/errorcodes.php");//Error texts (array '$errorTexts')
     $adsinfo_errorId=$inmodata_array['opterror'];//e.g. if it '5' ...
     $adsinfo_errorName=$errorTexts[$adsinfo_errorId];//... then adsinfo_errorName['5']
     $sectionContentInclude="ads_content_viewerror.php";//We define include
    }
     else
    {
     $sectionContentInclude="ads_content_viewdata.php";//We define include
     $adsinfo=$inmodata_array['optdata'];//clear var
     // PropertyType
     include($prefix."includes/config/propertytypes.php");//Type of property (array '$propertyNames')
     $adsinfo_propertytypeId=$adsinfo['ad_propertype'];//e.g. if it '5' ...
     $adsinfo_propertytypeName=$propertyNames[$adsinfo_propertytypeId];//... then adsinfo_propertytypeName['5']
     // Page new metatags
     $sectionTitle=strip_tags($adsinfo['ad_introduction']);//re define page title
     $sectionDescription=strip_tags($adsinfo['ad_introduction']);//re define page description
     $shadowbox="yes";//See 'includes/sitematrix/bodymorescripts.php'
     $sectionExtraCssFile="shadowbox";//See 'includes/sitematrix/headers.php'
     // Ad pictures
     if($adsinfo['ad_pictures']>0)
     {
      include($prefix."includes/scripts/getadspics.php");//It gets array 'inmopic_array'
     }//end case: Ad has more than 1 pic
     // Ad map
     if($adsinfo['ad_map']!=0)
     {
      $Jgooglemap="yes";//See 'includes/sitematrix/bodymorescripts.php'
      $Jgooglemap_tit=html_entity_decode("Ref&#35;".$adsinfo['ad_reference']);
      $Jgooglemap_lat=$adsinfo['ad_maplatitude'];
      $Jgooglemap_long=$adsinfo['ad_maplongitude'];
      $Jgooglemap_text=$adsinfo['ad_introduction'];
      $Jgooglemap_picfile=$adsinfo['ad_defaultpic'];
      $Jgooglemap_pictitle=$adsinfo['ad_introduction'];
     }    
    }
   }
    else
   {
    $sectionContentInclude="ads_content_viewlist.php";//We define include
    include($prefix."includes/scripts/getadslist.php");
   }
//
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
   include($prefix."includes/sections/".$sectionContentInclude);//Contents of this section
   include($prefix."includes/sitematrix/bodyfooter.php");//Footer inside body
   include($prefix."includes/sitematrix/bodysocialnet.php");//It loads at end but it prints at top
   include($prefix."includes/sitematrix/bodymorescripts.php");//Aditional scripts before close body
   echo" </body>\n";
   echo"</html>";
?>