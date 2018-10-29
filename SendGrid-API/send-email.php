<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');
        // Get the form fields and remove whitespace.
    //   
// echo $_COOKIE['name'];
  $name = strip_tags(trim($_COOKIE['name']));
	$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_COOKIE['email']), FILTER_SANITIZE_EMAIL);
        $phone = filter_var(trim($_COOKIE['phone']), FILTER_SANITIZE_NUMBER_INT);
        $message = trim($_COOKIE['message']);
/*Content*/
$from = new SendGrid\Email("The Sqwash", "info@thesqwash.com");
$subject = "new Email";
$content = '';
$content .= 'Name : '.$name."<br>";
 $content .='Email : '.$email."<br>";
$content .='Phone : '.$phone."<br>";
 $content .='Message : '.$message."<br>"; 
$to = new SendGrid\Email("TheSqwash", "namusjung@gmail.com");
$content = new SendGrid\Content("text/html", $content);
/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);
/*Response*/
$response = $sg->client->mail()->send()->post($mail);

?>
