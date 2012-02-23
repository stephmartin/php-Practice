  <?php 
 $name = $_REQUEST['Email'] ;
 $to = 'smartin@advantus.com';
 $headers = "HR Law Posters"; 
 $subject = "Web Contact Data"; 
 
 $fields = array(); 
 $fields{"Email"} = "Email"; 
  
 
 
 $body = "We have received the following information:\n\n"; foreach($fields as $a => $b){ 	 $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); } 
 
 $headers2 = "From: noreply@hrlawposters.com"; 
 $subject2 = "Thank you for contacting us"; 
 $autoreply = "Thank you subscribe to HR Law Posters.";
 
 if($from == '') {print "You have not entered an email, please go back and try again";} 
 else { 
 if($name == '') {print "You have not entered a name, please go back and try again";} 
 else { 
 $send = mail($to, $subject, $body, $headers); 
 $send2 = mail($name, $subject2, $autoreply, $headers2); 
 if($send) 
 {header( "Location: http://advantus.com/hrlawposters/thankyou.html" );} 
 else 
 {print "We encountered an error sending your mail, please notify bbottin@advantus.com"; } 
 }
}
 ?> 
 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="Description" CONTENT="HR Law Posters" />
<META NAME="Keywords" CONTENT="Compliance Alerts, Labor Law Posters, Federal Posters, State Posters, Federal & State Combo Posters" />
<title>HR Law Posters</title>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
</head>

<body >

</body>
</html>