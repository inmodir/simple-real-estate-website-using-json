<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Body more scripts inside body before close it
// -----------------------------------------
echo"  <!-- More scripts before close body (start)-->\n";
if(isset($shadowbox) && $shadowbox=="yes")
{
 echo"  <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script><!-- jQuery (necessary to shadowbox) -->\n";
 echo"  <!-- Shadowbox, needs jQuery -->\n";
 echo"  <script type=\"text/javascript\" src=\"".$websiteUrlStatic."/js/shadowbox.js\"></script>\n";
 echo"  <script type=\"text/javascript\">\n";
 echo"   Shadowbox.init({\n";
 echo"   language:   \"en\",\n";
 echo"   modal: true,\n";
 echo"   players:    ['img', 'html', 'mp4', 'swf', 'flv'],\n";
 echo"   autoplayMovies:true\n";
 echo"   });\n";
 echo"  </script>\n";
}
if (isset($jLimitChar) && $jLimitChar=="yes")
{
 echo"  <script type=\"text/javascript\">\n";
 echo"    function limitText(limitField, limitNum) {\n";
 echo"        if (limitField.value.length > limitNum) {\n";
 echo"            limitField.value = limitField.value.substring(0, limitNum);\n";
 echo"        } \n";
 echo"    }\n";
 echo"  </script>\n";
}
if (isset($Jgooglemap) && $Jgooglemap=="yes")
{
 echo"  <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&amp;language=es\"></script>\n";
 echo"  <script type=\"text/javascript\">\n";
 echo"   function initialize() {\n";
 echo"    var myLatlng = new google.maps.LatLng(".$Jgooglemap_lat.",".$Jgooglemap_long.");\n";
 echo"    var mapOptions = {\n";
 echo"    zoom: 18,\n";
 echo"    center: myLatlng\n";
 echo"   };\n";
 echo"   var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);\n";
 echo"   var contentString = '<div class=\"gmap_content\">'+\n";
 echo"    '<div class=\"gmap_content_ref\">".$Jgooglemap_tit."</div>'+\n";
 echo"    '<div class=\"gmap_content_data\">".$Jgooglemap_text."</div>'+\n";
 echo"    '<div class=\"gmap_content_re\"><a href=\"".$websiteUrl."\" title=\"".$websiteName."\">".$websiteName."</a>";
 if($websitePhone!=""){echo"<br />".$websitePhone;}
 echo"</div>'+\n";
 if(isset($Jgooglemap_picfile) && $Jgooglemap_picfile!="" &&
    isset($Jgooglemap_pictitle) && $Jgooglemap_pictitle!="")
 {echo"    '<div class=\"gmap_content_pic\"><img src=\"".$Jgooglemap_picfile."\" title=\"".$Jgooglemap_pictitle."\" /></div>'+\n";}
 echo"    '<div class=\"gmap_content_ask\"><a href=\"".$prefix.$mainmenuUri_contact."?acode=".$acode."\" title=\"".$mainmenuTitle_contact."\">Ask about this ad</a></div>'+\n";
 echo"    '</div>';\n";
 echo"    var infowindow = new google.maps.InfoWindow({\n";
 echo"     content: contentString\n";
 echo"    });\n";
 echo"    var marker = new google.maps.Marker({\n";
 echo"     position: myLatlng,\n";
 echo"     map: map,\n";
 echo"     title: '".html_entity_decode($Jgooglemap_text)."'\n";
 echo"    });\n";
 echo"    google.maps.event.addListener(marker, 'click', function() {\n";
 echo"     infowindow.open(map,marker);\n";
 echo"    });\n";
 echo"   }\n";
 echo"   google.maps.event.addDomListener(window, 'load', initialize);\n";
 echo"  </script>\n";
}
//
// Script interactions of InmoDir
// http://www.inmodir.com/es-es/desarrolladores
echo"  <script type=\"text/javascript\">\n";
echo"	var icode=\"".$inmodirIcode."\",\n";//Real estate ´s icode (see 'includes/config/basic.php')
echo"       rbtn=\"inmodir_rbtn\",\n";//Name of the DIV where 'recommend button' should be (see footer)
echo"       fbtn=\"inmodir_fbtn\";\n";//Name of the DIV where 'follow button' should be (see footer)
echo"  </script>\n";
echo"  <script type=\"text/javascript\" src=\"".$inmodirInteractionsUrl."\"></script>\n";// InmoDir Interactions URL (see 'includes/config/basic.php')
echo"  <!-- More scripts before close body (end)-->\n";
?>
