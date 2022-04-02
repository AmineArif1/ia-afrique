<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->IsSMTP(true);
$mail->CharSet = "utf-8";
$mail->Mailer = "smtp";

// $mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = getenv("EMAIL_PERS");
$mail->Password   = getenv("EMAIL_PASSWD");
try {

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      echo "<pre>";
      var_dump($_POST);
      echo "<pre>";
      $mail->IsHTML(true);
      $mail->AddAddress(getenv("EMAIL_PERS"), "recipient-name");
      $mail->SetFrom(getenv("EMAIL_PERS"), "from-name");
      $mail->AddReplyTo(getenv("EMAIL_PERS"), "reply-to-name");
      $mail->AddCC(getenv("EMAIL_PERS"), "cc-recipient-name");
      $mail->Subject = "Contact IA-AFRIQUE";
      $first_name = $_POST["first-name"];
      $last_name = $_POST["last-name"];
      $email = $_POST["email"];
      $number = $_POST["number"];
      $message = $_POST["message"];

      $contact_template = 'contact_template.html';
      $content = file_get_contents($contact_template);

      $content = str_replace('%first_name%', $first_name, $content);
      $content = str_replace('%last_name%', $last_name, $content);
      $content = str_replace('%email%', $email, $content);
      $content = str_replace('%number%', $number, $content);
      $content = str_replace('%message%', $message, $content);

      $mail->MsgHTML($content);
      if(!$mail->Send()) {
      echo "Error while sending Email.";
      var_dump($mail);
      } else {
      echo "Email sent successfully";
      }
      header("Location:index.php");


  }


} catch (Exception $e) {
    header("Location:index.php");
}

?>
