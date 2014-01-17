<?php
 require_once "Mail.php";
 
 $from = "Carlos Slim <carlosslim@hotmail.com>";
 $to = "Ramona Recipient <jair17526@hotmail.com>";
 $subject = "Hi!";
 $body = "Eres Puñal!!,\n\n";
 
 $host = "ssl://smtp.gmail.com";
 $port = "465";
 $username = "dev.lnx1337@gmail.com";
 $password = "1752627333391d3c3p710nn";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>