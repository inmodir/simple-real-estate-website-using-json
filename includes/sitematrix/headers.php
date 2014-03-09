<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Body headers
// -----------------------------------------
echo" <head>\n";
echo"  <title>"; 
if(isset($sectionSubtitle) && $sectionSubtitle!="")
{echo$sectionTitle." - ".$sectionSubtitle;}
else
{echo$sectionTitle;}
echo"</title>\n";
//
//
//
//
//
//
// METAs
echo"  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n";//Remember to save all php files under UTF8!!
echo"  <meta name=\"description\" content=\"".$sectionDescription."\" />\n";//Description
echo"  <meta name=\"keywords\" content=\"".$sectionKeywords."\" />\n"; //Palabras clave
echo"  <meta name=\"author\" content=\"".$websiteAuthorName." - ".$websiteAuthorUrl."\" />\n";//Author
if (!isset($sectionRobots) OR $sectionRobots==""){$sectionRobots="index,follow";}//Robots if not declared
echo"  <meta name=\"robots\" content=\"".$sectionRobots."\" />\n";//Robots
if(isset($websiteCountry) && $websiteCountry!=""){echo"  <meta name=\"geo.country\" content=\"".$websiteCountry."\" />\n";}
if(isset($websiteRegion) && $websiteRegion!=""){echo"  <meta name=\"geo.region\" content=\"".$websiteRegion."\" />\n";}
if(isset($websitePlacename) && $websitePlacename!=""){echo"  <meta name=\"geo.placename\" content=\"".$websitePlacename."\" />\n";}
echo"  <meta name=\"distribution\" content=\"global\" />\n";// Distribution
if(!isset($sectionRevisit) OR $sectionRevisit==""){$sectionRevisit="30";}//Revisit 30 days, if not declared
echo"  <meta name=\"revisit\" content=\"".$sectionRevisit."\" />\n";
//
if (isset($sectionNocache) && $sectionNocache=="yes")
{//If we need to force this at 'includes/config/sections.php'...
 echo"  <meta HTTP-EQUIV=\"CACHE-CONTROL\" CONTENT=\"NO-CACHE\">\n";
 echo"  <meta HTTP-EQUIV=\"EXPIRES\" CONTENT=\"Mon, 22 Jul 2002 11:12:01 GMT\">\n";
 echo"  <meta HTTP-EQUIV=\"PRAGMA\" CONTENT=\"NO-CACHE\">\n";
}
//
if (isset($sectionRefreshSeconds) && $sectionRefreshSeconds != "" && 
    isset($sectionRefreshDestiny) && $sectionRefreshDestiny != "")
{//If necessary to refresh and to go to another page in some seconds...
 echo"  <META HTTP-EQUIV=\"Refresh\" CONTENT=\"".$sectionRefreshSeconds."; URL=".$sectionRefreshDestiny."\">\n";
 /*
  * Example: 
  * $sectionRefreshSeconds="10";
  * $sectionRefreshDestiny="../contact/";
  * Will print this page but in 10 seconds it goes to the contact section.
  */
}
//
//
//
//
//
// Styles
echo"  <link rel=\"stylesheet\" title=\"standard\" href=\"".$websiteUrlStatic."/css/common.css\" type=\"text/css\" media=\"screen\" />\n";
echo"  <link rel=\"stylesheet\" title=\"standard\" href=\"".$websiteUrlStatic."/css/";
if($sectionName=="home"){echo"home";}else{echo"internal";}
echo".css\" type=\"text/css\" media=\"screen\" />\n";
//
//
// Si se requiere cargar un CSS de la sección
if(isset($sectionExtraCssFile) && $sectionExtraCssFile!="")
{
 echo"  <link rel=\"stylesheet\" title=\"standard\" href=\"".$websiteUrlStatic."/css/".$sectionExtraCssFile.".css\" type=\"text/css\" media=\"screen\" />\n";
}
//
//
//
//
//
// Special fonts
echo"  <link href='http://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />\n"; // Open Sans
/*
 * echo"  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>\n";
 * echo"  <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css' />\n"; // Poiret One
 * echo"  <link href='http://fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css' />\n"; // Text+Me+One
 */
//
//
//
//
//
//
// favICON
echo"  <link rel=\"shortcut icon\" href=\"http://".$_SERVER ['HTTP_HOST']."/favicon.ico\" />\n";//favicon
// Apple touch icon 
echo"  <link rel=\"apple-touch-icon\" href=\"http://".$_SERVER ['HTTP_HOST']."/apple-touch-icon.png\" />\n";//Apple touch icon
//
//
//
//
//
//
//
// Si hay que agregar estilos especiales
if(isset($sectionExtraCssLines) && $sectionExtraCssLines!="")
{
 echo"  <style type=\"text/css\">\n";
 echo$sectionExtraCssLines;
 echo"  </style>\n";
}
//
//
//
//
//
//
echo" </head>\n";
?>