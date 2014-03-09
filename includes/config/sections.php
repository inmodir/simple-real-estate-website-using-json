<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Config: Sections info
// -----------------------------------------
//
// Section mainmenu
$mainmenuName_home="Home";
$mainmenuTitle_home="Back to the home page";
$mainmenuUri_home="";
$mainmenuName_forrent="For rent";
$mainmenuTitle_forrent="Properties for rent";
$mainmenuUri_forrent="forrent";
$mainmenuName_forsale="For sale";
$mainmenuTitle_forsale="Properties for sale";
$mainmenuUri_forsale="forsale";
$mainmenuName_contact="Contact";
$mainmenuTitle_contact="Contact us";
$mainmenuUri_contact="contact";//e.g.: 'http://mydomain.co.uk/contact'
//
// Section info
if($sectionName=="home")
{//Home section
 $sectionTitle="Welcome to ".$websiteName;//'includes/config/basic.php'
 $sectionSubtitle="";
 $sectionDescription="";
 $sectionKeywords="";
 $sectionRobots="";
 $sectionRevisit="30 days";
}
if($sectionName=="forrent")
{//Home section
 $sectionTitle="Properties for rent";
 $sectionSubtitle=$websiteName;//'includes/config/basic.php'
 $sectionDescription="{Name of the real estate} rental listings";
 $sectionKeywords="rental ads, houses for rent, houses for rent in {city}";
 $sectionRobots="";
 $sectionRevisit="30 days";
}
if($sectionName=="forsale")
{//Home section
 $sectionTitle="Properties for sale";
 $sectionSubtitle=$websiteName;//'includes/config/basic.php'
 $sectionDescription="{Name of the real estate} sale ads";
 $sectionKeywords="sale ads, houses for sale, houses for sale in {city}";
 $sectionRobots="";
 $sectionRevisit="30 days";
}
if($sectionName=="contact")
{//Home section
 $sectionTitle="Contact ".$websiteName;//'includes/config/basic.php'
 $sectionSubtitle="";
 $sectionDescription="";
 $sectionKeywords="";
 $sectionRobots="nofollow";
 $sectionRevisit="180 days";
}
?>