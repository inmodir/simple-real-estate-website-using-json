<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Ads' - Case: show information of an ad
// -----------------------------------------
echo"  <div id=\"content\">\n";
echo"   <div class=\"wrap\">\n";
echo"    <h2>".$adsinfo['ad_introduction']."</h2>\n";
echo"    <p class=\"description\">".$adsinfo['ad_description']."</p>\n";
echo"    <dl class=\"addata_info\">\n";
echo"     <dt>Property type:</dt>\n";
echo"     <dd>".$adsinfo_propertytypeName."</dd>\n";//Defined at 'ads.php'
echo"     <dt>Beds:</dt>\n";
echo"     <dd>".$adsinfo['ad_rooms']."</dd>\n";
echo"     <dt>Baths:</dt>\n";
echo"     <dd>".$adsinfo['ad_wc']."</dd>\n";
echo"     <dt>Square Feet:</dt>\n";
echo"     <dd>".$adsinfo['ad_totalsurface'].$surface_abbr." (".$adsinfo['ad_innersurface']."+".$adsinfo['ad_outersurface'].")</dd>\n";
if($adsinfo['ad_energylabel']!="0")//zero must be inside quotes in this case!!
{
 echo"     <dt>Energy efficiency:</dt>\n";
 echo"     <dd>".$adsinfo['ad_energylabel']."</dd>\n";
}
// Price
echo"     <dt>Price:</dt>\n";
echo"     <dd>".$badge_lf.$adsinfo['ad_paymentfrequency'].$badge_rt;//badge_lf,badge_rt is the badge symbol
if($opertype==1)
{//Case rental
 if($adsinfo['ad_paymentfrequency']==4){echo" per month.";}
 if($adsinfo['ad_paymentfrequency']==3){echo" per fortnight.";}
 if($adsinfo['ad_paymentfrequency']==2){echo" week.";}
 if($adsinfo['ad_paymentfrequency']==1){echo" per day.";}
}
echo"</dd>\n";
if($adsinfo['ad_neighborhood']!=0)
{
 echo"     <dt>Zone:</dt>\n";
 echo"     <dd>".$adsinfo['ad_neighborhood']."</dd>\n";
}
echo"     <dt>City:</dt>\n";
echo"     <dd>".$adsinfo['ad_city'].", ".$adsinfo['ad_state']." (".$websiteCountry.")</dd>\n";
if($adsinfo['ad_floor']!=0)
{
 echo"     <dt>Floor:</dt>\n";
 echo"     <dd>".$adsinfo['ad_floor']."</dd>\n";
}
if($adsinfo['ad_elevator']!=0)
{
 echo"     <dt>Elevators:</dt>\n";
 echo"     <dd>".$adsinfo['ad_elevator']."</dd>\n";
}
if($adsinfo['ad_garage']!=0)
{
 echo"     <dt>Garage:</dt>\n";
 echo"     <dd>Yes</dd>\n";
}
if($adsinfo['ad_storage']!=0)
{
 echo"     <dt>Storage:</dt>\n";
 echo"     <dd>Yes</dd>\n";
}
if($adsinfo['ad_balcony']!=0)
{
 echo"     <dt>Balcony:</dt>\n";
 echo"     <dd>Yes</dd>\n";
}
if($adsinfo['ad_airconditioning']!=0)
{
 echo"     <dt>Air conditioning:</dt>\n";
 echo"     <dd>Yes</dd>\n";
}
if($adsinfo['ad_centralheating']!=0)
{
 echo"     <dt>Central heating:</dt>\n";
 echo"     <dd>Yes</dd>\n";
}
if($adsinfo['ad_pool']!=0)
{
 echo"     <dt>Swimming pool:</dt>\n";
 echo"     <dd>Yes</dd>\n";
}
if($adsinfo['ad_areas']!=0)
{
 echo"     <dt>Areas:</dt>\n";
 echo"     <dd>Yes</dd>\n";
}
echo"    </dl>\n";//dl.addata_info
echo"    <div class=\"addata_moreinfo\">\n";
// ---- Published
echo"     <p><strong>Published:</strong> ".substr($adsinfo['ad_published'],8,2);//Day-Month-Year format
echo"-".substr($adsinfo['ad_published'],5,2)."-".substr($adsinfo['ad_published'],0,4)."</p>\n";
/*
 * Or could be: 
 * echo"     <p><strong>Published:</strong> ".substr($adsinfo['ad_published'],5,2);//Month-Day, Year format
 * echo"-".substr($adsinfo['ad_published'],8,2).", ".substr($adsinfo['ad_published'],0,4)."</p>\n";
 */
//
// ---- Reference
echo"     <p><strong>Reference:</strong> ".$adsinfo['ad_reference']."</p>\n";
//
// ---- Pictures
if($adsinfo['ad_pictures']!=0)
{// it has photos
 if($adsinfo['ad_pictures']==1)
 {// it has only one photo
  echo"     <p>".$adsinfo['ad_defaultpic']."</p>\n";
 }
  else
 {// it has more than one photo
  echo"     <ul class=\"adsdata_pictures\">\n";
  foreach($inmopic_array['optdata'] as $myadpics)
  { 
   echo"      <li><a href=\"".$myadpics['adpic_file']."\" rel=\"shadowbox[pic]\" title=\"".$myadpics['adpic_desc']."\">";
   echo"<img src=\"".$myadpics['adpic_file']."\" alt=\"".$adsinfo['ad_introduction']." - ".$myadpics['adpic_desc']."\" /></a></li>\n";
  }
  echo"     </ul>\n";
 }
}
//
// ---- Ask about this ad
echo"     <p><a href=\"".$prefix.$mainmenuUri_contact."?acode=".$acode."\" title=\"".$mainmenuTitle_contact."\">Ask about this ad</a></p>\n";
echo"    </div>\n";//addata_moreinfo
//
// ---- GoogleMap
if($adsinfo['ad_map']!=0)
{
 echo"    <div id=\"map-canvas\" class=\"gmap\"></div>\n";
}
echo"   </div>\n";//wrap
echo"  </div>\n";//content
?>