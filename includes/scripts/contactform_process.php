<?php if(!isset($include) OR $include!="yes"){header("Location: http://".$_SERVER ['HTTP_HOST']."/");exit;}
// -----------------------------------------
// Section: 'Contact' - Process
// -----------------------------------------
// This script is called from 'includes/sections/contact.php' in case the user is trying to send a message
//
//
//
//
// Passing variables (more comfortable)
   $formName = $_POST['formName'];
   $formEmail = $_POST['formEmail'];
   $formPhone = $_POST['formPhone'];
   $formMessage = $_POST['formMessage'];   
//
//
//
//
// Limited to predefined number of characters in the form
   $formName=substr($formName,0,50); 
   $formEmail=substr($formEmail,0,75); 
   $formPhone=substr($formPhone,0,20); 
   $formMessage=substr($formMessage,0,$jLimitCharNum);//see footnotes to this script
//
//
//
//
// It ensures that user had specified something and/or variables not contain default values ​​set in the form
   if($formName=="Your name and lastname"){$formName="";}
   if($formEmail=="Your e-mail address"){$formEmail="";}
   if($formPhone=="e.g. 96 123 1234"){$formPhone="";}
//
//
//
//
// Initializes
   $processErrorsNumb=0; // inicializa
   $processErrorsTxt=""; // inicializa
//
//
//
//
// Valores vacios
   if ($processErrorsNumb == 0)
   {
    if($formName==""){$processErrorsTxt.="<br />Not the name indicated. ";$label_Name_value="error";$processErrorsNumb=$processErrorsNumb+1;}//No se ha indicado su nombre.
    if($formEmail==""){$processErrorsTxt.="<br />Not email address indicated. ";$label_Email_value="error";$processErrorsNumb=$processErrorsNumb+1;}//No se ha indicado su dirección de e-mail.
    if($formPhone==""){$processErrorsTxt.="<br />Not contact phone number indicated. It can be lan line or a mobile one.";$label_Phone_value="error";$processErrorsNumb=$processErrorsNumb+1;}//No se ha indicado tu teléfono.
    if($formMessage==""){$processErrorsTxt.="<br />Not message indicated. ";$label_Message_value="error";$processErrorsNumb=$processErrorsNumb+1;}//No se ha indicado el mensaje.
   }
//
//
//
//
// Weird characters
   if ($processErrorsNumb == 0)
   {
    function checkforchars ($foo) {
     if ($foo === htmlspecialchars($foo)) {
      $isValid="yes"; //return "Valid entry.";
     } else {
      $isValid="no";  //return "Invalid entry.";
     }
     return $isValid;  
    }//end function
    //
    //
    $formName_check4char = checkforchars($formName);//passes the variable
    if ($formName_check4char != "yes") 
	{$processErrorsTxt.="<br />The name entered is invalid characters. ";$label_Name_value="error";$processErrorsNumb=$processErrorsNumb+1;}
    //
    if ($formEmail!="")
    {
     $formEmail_check4char = checkforchars($formEmail);//passes the variable
     if ($formEmail_check4char != "yes") 
	 {$processErrorsTxt.="<br />The email you have entered invalid characters. ";$label_Email_value="error";$processErrorsNumb=$processErrorsNumb+1;}//El campo del e-mail tiene caracteres inválidos.
    }
    //
    $formPhone_check4char = checkforchars($formPhone);//passes the variable
    if ($formPhone_check4char != "yes") 
    {$processErrorsTxt.="<br />The telephone number entered has invalid characters. ";$label_Phone_value="error";$processErrorsNumb=$processErrorsNumb+1;}//El campo del teléfono de contacto tiene caracteres inválidos.
    //
    $formMessage_check4char = checkforchars($formMessage);//passes the variable
    if ($formMessage_check4char != "yes") 
	{$processErrorsTxt.="<br />The message entered has invalid characters. ";$label_Message_value="error";$processErrorsNumb=$processErrorsNumb+1;}//El campo del mensaje tiene caracteres inválidos.
   } 
//
//
//
//
//
// De html a TXT (por si hay tags, etiquetas, etc)
// Limpia de caracteres inválidos según función 'func_html2txt'
   if ($processErrorsNumb == 0)
   {
    function html2txt($document){
    $search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript
               '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
               '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA
     );
     $text=preg_replace($search, '', $document);
     return $text;
    }//end function
    //
    //
    $formName = html2txt($formName);
    $formEmail = html2txt($formEmail);
    $formPhone = html2txt($formPhone);
    $formMessage = html2txt($formMessage);
   }
//
//
//
//
//
// Escape some characters (quotes, etc)
   if ($processErrorsNumb == 0)
   {
    $formName=addslashes($formName);//Add bars before
    $formEmail=addslashes($formEmail);
    $formPhone=addslashes($formPhone);
    $formMessage=addslashes($formMessage);
   } 
//
//
//
//
//
// Individual checks:
   if ($processErrorsNumb == 0)
   {
    // Short name
    if (strlen($formName) < 4)
	{$processErrorsTxt.="<br />It seems a too short name. ";$label_Name_value="error";$processErrorsNumb=$processErrorsNumb+1;}
    //
    // Not valid email
    if ($formEmail != "")
    {
     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
     if(!preg_match($email_exp,$formEmail))
     {$processErrorsTxt.="<br />The indicated email address is not valid. ";$label_Email_value="error";$processErrorsNumb=$processErrorsNumb+1;}//La dirección de correo electrónico indicada no es válida.
    }
    //
    // Phone number too short
    if(strlen($formPhone) < 7)
	{$processErrorsTxt.="<br />Appears to be a phone number too short. Try also indicate the area code. ";$label_Phone_value="error";$processErrorsNumb=$processErrorsNumb+1;}//Parece ser un número de teléfono demasiado corto. Procure indicar también el código de area.
    //
    // Message short
    if(strlen($formMessage) < 7)
	{$processErrorsTxt.="<br />The message seems to be too short. Could you comment a little more? ";$label_Message_value="error";$processErrorsNumb=$processErrorsNumb+1;}//El mensaje parece ser demasiado corto. &#191;Podría comentar un poco mas?
   } 
//
//
//
//
//
//
// Procede si no hubo errores
   if ($processErrorsNumb==0)
   {
    // Send the message (...at last)
    // ----------------------------
    // The necessary values will be $mailDestiny , $mailSubject , $mailBody and $mailHeaders
    //
    // var $mailBody
    // -------------
    // If the user has mentioned an ad, it would be some adjustments
    if(isset($inmodata_array) && $inmodata_array!="" && $inmodata_array['optnumber']==1)
    {//we have an ad!
     $adsinfo=$inmodata_array['optdata'];//clear var 
     $mailBody ="Received the following message from the web on this publication: http://".$websiteUrl."/";
     //
     if($adsinfo['ad_opertype']==1)
     {
      $mailBody.=$mainmenuUri_forrent."?acode=".$acode;//make the URL of this section
      $sectionRefreshDestiny="../".$mainmenuUri_forrent."?acode=".$acode;//Destiny section after sending
     }
      else
     {
      $mailBody.=$mainmenuUri_forsale."?acode=".$acode;
      $sectionRefreshDestiny="../".$mainmenuUri_forsale."?acode=".$acode;
     }
    }
     else
    {//we do not have an ad!
     $mailBody ="Received the following message from the web:";
    }
    $mailBody.="\n\n";
    $mailBody.=$formMessage." \n";
    $mailBody.="---------------- \n\n";
    $mailBody.="Name: ".$formName.". \n";
    $mailBody.="Email: ".$formEmail."\n";
    $mailBody.="Phone: ".$formPhone."\n";
    //
    //
    // var $mailDestiny
    // -------------
    $mailDestiny=$websiteName." <".$websiteFormEmailDestiny.">";
    //
    //
    // var $mailSubject
    // -------------
    $mailSubject="Message from the web";
    //
    //
    // var $mailHeaders
    // -------------
    $mailHeaders = 'From: '.$websiteName.' <'.$websiteFormEmailSender.'>' . "\r\n" .
    'Reply-To: '.$websiteFormEmailSender."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    //
    //
/*
    // Test
    echo"<br>Destiny=".$mailDestiny;
    echo"<br>Subject=".$mailSubject;
    echo"<br><br>Body=<br>".$mailBody;
    exit;
*/
    //
    //
    // Send message
    // -------------
    mail($mailDestiny,$mailSubject,$mailBody,$mailHeaders);
    //
    // It will refresh in 20 seconds after the page is loaded width the note 'thank you'
    $sectionRefreshSeconds=20;//See 'includes/sitematrix/headers.php'
    if(!isset($sectionRefreshDestiny)){$sectionRefreshDestiny="../".$mainmenuUri_home;}//Destiny, if it was not defined
    $sectionContentInclude="contact_content_thankyou.php";//To print a 'thank you note'. See more at 'includes/sections/contact.php'
   } 
/*
NOTES:
var 'jLimitCharNum' defined at 'includes/sections/contact.php' and it is used in:
'includes/scripts/contactform_process.php' (this file)
'includes/sections/contact_form.php'
*/
?>