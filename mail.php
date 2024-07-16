<?php




    
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// require './PHPMailer/src/Exception.php';
// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/src/SMTP.php'; // Adjust the path as needed

// $mail = new PHPMailer(true); // Set to true to enable exceptions

// try {
//   $mail->isSMTP();
//   $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
//   $mail->SMTPAuth = true;
//   $mail->Username = 's.shivamailid@gmail.com';
//   $mail->Password = 'SHIvapalanivel';
//   $mail->SMTPSecure = 'ssl'; // or 'ssl'
//   $mail->Port = 465;

//   $mail->setFrom('s.shivamailid@gmail.com', 'shiva');
//   $mail->addAddress('shivapalanivel1@gmail.com', 'shivapalanivel');

//   $mail->Subject = 'Test Email with PHPMailer';
//   $mail->Body = 'This is a test email using PHPMailer.';

//   $mail->send();
//   echo 'Message has been sent!';
// } catch (Exception $e) {
//   echo "Error: " . $e->getMessage();
// }


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$email = "s.shivamailid@gmail.com";
function sendmail_function($email)
{

    $mailsendername = "HR Manager";
    $message1 = " Hello";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mailsend2116@gmail.com';
    $mail->Password = 'rmwngyuirkxqmoer';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $mailsendername);
    $mail->addAddress($email);
    $mail->Subject = ("Payment Received Confirmation @ Techvolt Software Pvt Ltd");
    $mail->Body = $message1;
    $mail->send();
}
sendmail_function($email);
?>
