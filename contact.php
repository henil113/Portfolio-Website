<?php
if(isset($_POST['email'])) {
 
   
 
    $name = $_POST['name']; 
    $subject = $_POST['subject']; 
    $email = $_POST['email'];     
    $message = $_POST['message'];

    $email_from = "henilparikh113@gmail.com";
    $email_to = "parik11n@uwindsor.ca";
    $email_subject = "Inquiry";
    
    $email_message = "Form details below.\n\n";
    $email_message .= "Name:".$name."\n";
    $email_message .= "Subject: ".$subject."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Email: ".$message."\n";

    //echo $email_message;
    
    mail($email_to,$email_subject,$email_message,"From:".$email_from);
    echo "<script>
            alert('Mail Sent');
            window.location.href='home.html';
          </script>";
}
?>