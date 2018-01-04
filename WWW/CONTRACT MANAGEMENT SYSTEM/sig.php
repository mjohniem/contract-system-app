<html>
<head>
      <title>Verification Results</title>
	  <SCRIPT type="text/JavaScript">
<!-- Begin
function signForm(theForm, theWindow, validation, varnames) {
    //header text
   var texttbs = "I affirm the following information:\n";
    //header text, spanish version
    //var texttbs = "Certifico que la siguiente informacion es cierta:\n";
   var vars = "";        //to store variable names
   var signature = "";   //to store the digital signature of texttbs
   var elem;
   var formSize = theForm.elements.length;
   for(var i = 0; i < formSize; i++) {
      elem = theForm.elements[i];
      switch (elem.type) {
         case "hidden":
         case "button":
         case "submit":
         case "reset":
         case "image":
         case "password":
         case "file":
            // Do not include previous elements in the text to be signed.
            break;
         case "select-one":
            var selectValue = elem.options[elem.selectedIndex].value;
            texttbs += elem.name + "=" + selectValue + "\n";
            vars += elem.name + ",";
            break;
         case "select-multiple":
            for(var op = 0; op < elem.length; op++) {
               if(elem.options[op].selected) {
                  texttbs += elem.name + "=" + elem.options[op].value + "\n";
                  vars += elem.name + ",";
               }
            }
            break;
         case "radio":
            if(elem.checked) {
               texttbs += elem.name + "=" + elem.value + "\n";
               vars += elem.name + ",";
            }
            break;
         case "checkbox":
            if(elem.checked) {
               texttbs += elem.name + "=" + elem.value + "\n";
               vars += elem.name + ",";
            }
            break;
         //In the case of unchecked radio buttons and checkboxes, variables
         //are not sent, hence they must not be signed.
         default: //input text
            texttbs += elem.name + "=" + elem.value + "\n";
            vars += elem.name + ",";
      }
   }
   //Digital signature
   signature = theWindow.crypto.signText(texttbs, "ask");
   if (signature.substr(0,5)=="error") {
      alert("Signature not created\n" + signature);
      return false;
   }
   //Store signature an vars in hidden inputs of the form
   theForm.signature.value = signature;
   theForm.varnames.value= vars;
   return true;
}
// End -->
</script>
</head>
<body>
   <h1>Verifying and storing the data sent to this server
   </h1>
<?php
function Validation($signature,$varnames)
{
   /*** Creates validation file comprising the signature ***/
   $uniq_id=uniqid();
   $fp=fopen("validation_".$uniq_id.".pem","w");
   fwrite($fp,"-----BEGIN PKCS7-----\n");
   fwrite($fp,$signature);
   fwrite($fp,"\n-----END PKCS7-----");
   fclose($fp);
   /*** Creates original_text, based on varnames ***/
   /* extract variable names */
   $i=0;
   $beg=0;
   $len=strlen($varnames);
   do{
      $end=strpos($varnames,',',$beg);
       if (!($end===false)) {
      $var_name[$i]=substr($varnames,$beg,$end-$beg);
      $i=$i+1;
      $beg=$end+1;
      }
   }while(($beg<$len) && !($end===false));
   $num_var=$i;
 
   /* Builds orginal_text */
   $original_text="I affirm the following information:\n";
 
   for($i=0;$i<$num_var;$i++){
      $original_text.=$var_name[$i]."=".$_REQUEST[$var_name[$i]]."\n";
   }
   /*** Creates original_text file ***/
   $fp=fopen("original_text_".$uniq_id.".txt","w");
   fwrite($fp,$original_text);
   fclose($fp);
   /*** Identifies CA ***/
   $ca=GetCA($signature);
   if ($ca==="/C=ES/O=FNMT/OU=FNMT Clase 2 CA\n") $root_cert="fnmt.pem";
   else if ($ca==="/emailAddress=cert@upcomillas.es/C=ES/ST=Madrid/L=Madrid/ O=Universidad Pontificia Comillas/OU=STIC/CN=CA www.upcomillas.es\n") $root_cert="comillas.pem";
   else $root_cert=NULL; //same as unset
   /*** Calls openssl ***/
   if (isset($root_cert)) {
      $command="/opt/csw/bin/openssl smime -verify -in";
      $command.=" validation_".$uniq_id.".pem";
      $command.=" -inform PEM -binary -content";
      $command.=" original_text_".$uniq_id.".txt";
      $command.=" -CAfile ".$root_cert;
      //print $command;
      $rep=shell_exec($command." 2>&1");
   } else  {
      $rep='The issuer of your certificate is not trusted by the server';
   }
   /* delete temp files */
   unlink("validation_".$uniq_id.".pem");
   unlink("original_text_".$uniq_id.".txt");
   //print $rep;
   if (substr($rep,0,23)=="Verification successful")
      $rep=NULL;  //returns NULL if successful
   return $rep;
}
function GetName($signature)
{
   //Gets the name of the owner of the certificate
   /*** Creates validation file comprising the signature ***/
   $uniq_id=uniqid();
   $fp=fopen("validation_".$uniq_id.".pem","w");
   fwrite($fp,"-----BEGIN PKCS7-----\n");
   fwrite($fp,$signature);
   fwrite($fp,"\n-----END PKCS7-----");
   fclose($fp);
   $command="/opt/csw/bin/openssl pkcs7 -inform PEM -in";
   $command.="  validation_".$uniq_id.".pem";
   $command.=" -print_certs -noout | grep \^subject | head -1 | cut -d'=' -f2-";
   $rep=shell_exec($command." 2>&1");
   unlink("validation_".$uniq_id.".pem");
   //print $rep;
   return $rep;
}
function GetCA($signature)
{
   //Gets the name of the issuer of the certifcate
   /*** Creates validation file comprising the signature ***/
   $uniq_id=uniqid();
   $fp=fopen("validation_".$uniq_id.".pem","w");
   fwrite($fp,"-----BEGIN PKCS7-----\n");
   fwrite($fp,$signature);
   fwrite($fp,"\n-----END PKCS7-----");
   fclose($fp);
   $command="/opt/csw/bin/openssl pkcs7 -inform PEM -in";
   $command.="  validation_".$uniq_id.".pem";
   $command.=" -print_certs -noout | grep \^issuer | head -1 | cut -d'=' -f2-";
   $rep=shell_exec($command." 2>&1");
   unlink("validation_".$uniq_id.".pem");
   //print $rep;
   return $rep;
}
/***************************/
/*** PROGRAM BEGINS HERE ***/
$signature=$_REQUEST["signature"];
$varnames=$_REQUEST["varnames"];
if (!isset($signature) || !isset($varnames)) {
   die("<p>Error, no digital signature provided<br>Current (2007) version of IE does not support digital signature</p>\n</body></html>");
}
$ctrl=Validation($signature,$varnames);
if (isset($ctrl)) {
   die("<p>Error validating signature: ".$ctrl."</p>\n</body></html>");
}
/*** Validation OK, continue with normal procedure ***/
//variables verification
//storage in database (do not forget to add signature and varnames to the database)
//message
print "<p>Information signed by: ".GetName($signature);
print "<p>Thank you. Data received and stored correctly";
 
?>
 
</body>
</html>