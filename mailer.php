 
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);    // Passing `true` enables exceptions
// TCP port to connect to

    // Only process POST reqeusts.
   // Get the form fields and remove whitespace.
     $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = filter_var(trim(($_POST["phone"])), FILTER_SANITIZE_NUMBER_INT);
        $message = trim($_POST["message"]);
    //     $name = strip_tags(trim(isset($_POST["name"])));
				// $name = str_replace(array("\r","\n"),array(" "," "),$name);
    //     $email = filter_var(trim(isset($_POST["email"])), FILTER_SANITIZE_EMAIL);
        
    //     $message = trim(isset($_POST["message"]));
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'thesqwash.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admin@thesqwash.com';                 // SMTP username
    $mail->Password = 'p@ssw0rd';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@thesqwash.com', 'The Sqwash');
    $mail->addAddress('anoj@designpac.net', 'Joe User');     // thesqwash-com.mail.protection.outlook.com
   

   
    //Content
    $mail->isHTML(true);
    $subject = "New contact from $name";

        // Build the email content.
                                        // Set email format to HTML
    $mail->Subject = 'Here is the subject';
     $mail->Body = "Name: $name\n";
         $mail->Body .= "Email: $email\n\n";
         $mail->Body .= "Phone: $phone\n\n\n";
         $mail->Body .= "Message:\n$message\n"; 
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
