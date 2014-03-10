<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Config: Basic info
// -----------------------------------------
$websiteName="Alvarez inmobiliaria";
$websitePhone="96 123 1234";
$websitePlacename="London, Ontario";//Optional, or let this var empty
$websiteRegion="CA-ON";//Optional, or let this var empty
$websiteCountry="España";
$websiteLang="esES";//Language
$websiteFormEmailSender="sales@mydomain.co.uk";//Not public. Must have the same domain as the website. See 'includes/scripts/contactform_process.php'
$websiteFormEmailDestiny="sales@mydomain.co.uk";//Idem 
$websiteAuthorName="John Doe";//Webmaster´s name
$websiteAuthorUrl="http://www.google.com";//Do not forget to put 'http://' at the beginning
$websiteUrl="http://www.mydomain.co.uk";//Do not forget to put 'http://' at the beginning and do not end with a slash "...../"
$websiteUrlStatic=$prefix."static";//Without any last slash. Recomended, in an absolute way like: "http://static.mydomain.co.uk"
//
// InmoDir account settings
$inmodirLabUrl="http://es.inmodir.com/lab";//"http://{country-ext}.inmodir.com/lab"
$inmodirInteractionsUrl="http://escl1.inmodir.com/js/interactions.js";//"http://{country-ext}cl1.inmodir.local/js/interactions.js" - See also 'includes/sitematrix/bodymorescripts.php'
$inmodirIcode="10541385229280234788191408708099";//Your customer´s 'icode' of InmoDir
//
// More
$surface_abbr="sq ft";//sq ft', 'm&sup2;' <<<surface>>>
$badge_lf="&pound;";//<<<badge symbol at left>>>
$badge_rt="";//<<<badge symbol at right>>> Example '&euro;' at the right, '&pound;' at left, etc.
//
//Social networks
$websiteNet_googleplus="https://plus.google.com";//example: http://google.com/+your-GPLUS-username
$websiteNet_linkedin="https://www.linkedin.com";//example: https://www.linkedin.com/your-LinkeIn-username
$websiteNet_inmodir="http://es.inmodir.com/alvarez";//example: http://es.inmodir.com/alvarez
$websiteNet_facebook="";//example: https://faceboook.com/your-FB-username
$websiteNet_twitter="";//fill only if you have an account of these social network websites
$websiteNet_blogspot="";
$websiteNet_skype="";//Only your email or username of skype, not an url!
$websiteNet_youtube="";
?>
