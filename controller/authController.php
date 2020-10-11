<?php
require'./config/conn.php';

$conn = mysqli_connect(servername, username, password, dbname);

// Message Vars
$msg = '';
$msgClass = '';

// Check For Submit
if(filter_has_var(INPUT_POST, 'submit')){
  // Get Form Data
  $message = htmlspecialchars($_POST['message']);
  $fullname = htmlspecialchars($_POST['fullname']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);

  // Check Required Fields
  if(!empty($message) && !empty($fillname) && !empty($email) && !empty($subject)){
    // Passed
    // Check Email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      // Failed
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
    } else {
      // Passed
      $toEmail = 'support@totalitybank.com';
      $subject = 'Contact Request From '.$fullname;
      $body = '<h2>Contact Request</h2>
        <h4>Name</h4><p>'.$fullname.'</p>
        <h4>Email</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$message.'</p>
        <h4>Message</h4><p>'.$subject.'</p>
      ';

      // Email Headers
      $headers = "MIME-Version: 1.0" ."\r\n";
      $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

      // Additional Headers
      $headers .= "From: " .$fullname. "<".$email.">". "\r\n";

      if(mail($toEmail, $subject, $body, $headers)){
        // Email Sent
        $msg = 'Your email has been sent';
        $msgClass = 'alert-success';
      } else {
        // Failed
        $msg = 'Your email was not sent';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    // Failed
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}


// Check For Submit
if(filter_has_var(INPUT_POST, 'send')){
    // Get Form Data
    $message = htmlspecialchars($_POST['message']);
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
  
    // Check Required Fields
    if(!empty($message) && !empty($fillname) && !empty($email)){
      // Passed
      // Check Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        // Passed
        $toEmail = 'support@totalitybank.com';
        $subject = 'Contact Request From '.$fullname;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$fullname.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Message</h4><p>'.$message.'</p>
        ';
  
        // Email Headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
  
        // Additional Headers
        $headers .= "From: " .$fullname. "<".$email.">". "\r\n";
  
        if(mail($toEmail, $subject, $body, $headers)){
          // Email Sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          // Failed
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }