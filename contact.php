<?php
if(isset($_POST['email'])) {
 
  $email_from = "henilparikh113@gmail.com";
  $email_to = "parik11n@uwindsor.ca";
  $email_subject = "Inquiry";
 
    $name = $_POST['name']; 
    $subject = $_POST['subject']; 
    $email = $_POST['email'];     
    $message = $_POST['message'];
    
    $email_message = "Form details below.\n\n";
    $email_message .= "Name:".$name."\n";
    $email_message .= "Subject: ".$subject."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Message: ".$message."\n";

    //echo $email_message;
    
    if(mail($email_to,$email_subject,$email_message,"From:".$email_from)){
    echo "<script>
            alert('Mail Sent');
            window.location.href='home.html';
          </script>";
}
?>