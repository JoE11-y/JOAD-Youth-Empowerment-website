<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPmailer/Exception.php';
require_once 'PHPmailer/PHPMailer.php';
require_once 'PHPmailer/SMTP.php';
 
$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone'];
    $category = $_POST['category'];
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Joadyouthempowerment@gmail.com'; //Gmail address which is used as smtp server
        $mail->Password = 'joolarda2020'; //Gmail address password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';
        
        
        $mail->setFrom('Joadyouthempowerment@gmail.com'); //Gmail address used as smtp server
        $mail->addAddress('Joadyouthempowerment@gmail.com'); // Email to receive the mails
    
        $mail->isHTML(true);
        $mail->Subject = 'New Submission Received (JOAD Youth Empowerment program)';
        $mail->Body = "<h3>Name: $name <br>Email: $email <br>Phone-Number: $phonenumber <br>Category: $category</h3>";
    
        $mail->send();
        $alert = '<div class="alert-success"> 
                        <span>Submission successfull, Check your mail for more information</span>
                  </div>';
    } catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}

if(isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    try{
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'Joadyouthempowerment@gmail.com'; // Gmail address which you want to use as SMTP server
      $mail->Password = 'joolarda2020'; // Gmail address Password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = '587';
  
      $mail->setFrom('Joadyouthempowerment@gmail.com'); // Gmail address which you used as SMTP server
      $mail->addAddress('Joadyouthempowerment@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
  
      $mail->isHTML(true);
      $mail->Subject = 'Message Received (Contact Page)';
      $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";
  
      $mail->send();
      $alert = '<div class="alert-success">
                   <span>Message Sent! Thank you for contacting us.</span>
                  </div>';
    } catch (Exception $e){
      $alert = '<div class="alert-error">
                  <span>'.$e->getMessage().'</span>
                </div>';
    }
  }
?>