<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Contact' - Case: show form
// -----------------------------------------
echo"  <div id=\"content\">\n";
echo"   <div class=\"wrap\">\n";
echo"    <h2>".$sectionTitle."</h2>\n";
echo"    <p class=\"contactform_note\">Want to contact us? We appreciate your interest. Please, fill out the form below and we will contact you shortly.</p>\n";
//
//
//
echo"    <form method=\"POST\" action=\"\">\n";
echo"     <fieldset class=\"contact\">\n";
// -------------
// In case the user had selected an ad and it´s ok
   if(isset($inmodata_array) && $inmodata_array!="")
   {
    if($inmodata_array['optnumber']==1)//we have an ad
    {
     $adsinfo=$inmodata_array['optdata'];//clear var 
     echo"      <div><input type=\"hidden\" name=\"acode\" value=\"".$acode."\"></div>\n";
     echo"      <p>\n";
     echo"       <label for=\"inputAds\" class=\"form_label_ok\">Ad reference:</label>\n";
     echo"       <input type=\"text\" id=\"inputPhone\" name=\"formPhone\" maxlength=\"20\" size=\"25\" value=\"";
     echo$adsinfo['ad_reference']." - ".$adsinfo['ad_introduction']."\" readonly />\n";
     echo"      </p>\n";
    }
   }
// -------------
echo"      <p>\n";
echo"       <label for=\"inputName\" class=\"form_label_";
if(isset($label_Name_value) && $label_Name_value=="error"){echo"error";}else{echo"ok";}
echo"\">Your name:</label>\n";
echo"       <input type=\"text\" id=\"inputName\" name=\"formName\" maxlength=\"50\" size=\"25\" value=\"";
if(isset($formName) && $formName!=""){echo$formName;}else{echo"Your name and lastname";}
echo"\" ";
echo"onfocus=\"if (this.value=='Your name and lastname'){this.value='';};return false;\" ";
echo"onblur=\"if (this.value==''){this.value='Your name and lastname';return false;}\" />\n";
echo"      </p>\n";
echo"      <p>\n";
echo"       <label for=\"inputPhone\" class=\"form_label_";
if(isset($label_Phone_value) && $label_Phone_value=="error"){echo"error";}else{echo"ok";}
echo"\">Phone number:</label>\n";
echo"       <input type=\"text\" id=\"inputPhone\" name=\"formPhone\" maxlength=\"20\" size=\"25\" value=\"";
if(isset($formPhone) && $formPhone!=""){echo$formPhone;}else{echo"e.g. 96 123 1234";}
echo"\" onfocus=\"if (this.value=='e.g. 96 123 1234'){this.value='';};return false;\" ";
echo"onblur=\"if (this.value==''){this.value='e.g. 96 123 1234';return false;}\" />\n";
echo"      </p>\n";
echo"      <p>\n";
echo"       <label for=\"inputEmail\" class=\"form_label_";
if(isset($label_Email_value) && $label_Email_value=="error"){echo"error";}else{echo"ok";}
echo"\">E-mail:</label>\n";
echo"        <input type=\"text\" id=\"inputEmail\" name=\"formEmail\" maxlength=\"75\" size=\"25\" value=\"";
if (isset($formEmail) && $formEmail!=""){echo$formEmail;}else{echo"Your e-mail address";}
echo"\" onfocus=\"if (this.value=='Your e-mail address'){this.value='';};return false;\" ";
echo"onblur=\"if (this.value==''){this.value='Your e-mail address';return false;}\" />\n";
echo"      </p>\n";
echo"      <p>\n";
echo"       <label for=\"inputMessage\" class=\"form_label_";
if(isset($label_Message_value) && $label_Message_value=="error"){echo"error";}else{echo"ok";}
echo"\">Your message or question:</label>\n";
echo"        <textarea name=\"formMessage\" id=\"inputMessage\" style=\"resize:none;\" rows=\"10\" cols=\"30\" ";
echo"onkeydown=\"limitText(this,".$jLimitCharNum.");\" ";
echo"onkeyup=\"limitText(this,".$jLimitCharNum.");\">";
if(isset($formMessage) && $formMessage!=""){echo$formMessage;}
echo"</textarea>\n";// Vease debajo javascript
echo"      </p>\n";
echo"      <p><input type=\"submit\" value=\"Send message\" /></p>\n";
echo"     </fieldset>\n";
echo"    </form>\n";
//
// Case an error has ocurred...
if (isset($processErrorsNumb) && $processErrorsNumb>0)
{
 echo"    <p class=\"contactform_error\"><strong>";
 if ($processErrorsNumb==1){echo"An error has occurred";}else{echo$processErrorsNumb." errors have occurred";}
 echo" when sending the message: </strong>".$processErrorsTxt."</p>\n";
}
//
echo"   </div>\n";//wrap
echo"  </div>\n";//content
?>