<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Contact' - Case: show note
// -----------------------------------------
echo"  <div id=\"content\">\n";
echo"   <div class=\"wrap\">\n";
echo"    <h2>Message sent</h2>\n";
echo"    <p>Thank you very much for contacting us. Your message has been sent and will be answered soon.</p>\n";
echo"   </div>\n";//wrap
echo"  </div>\n";//content
?>