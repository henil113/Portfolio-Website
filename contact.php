<?php
if(isset($_POST['submit'])) {
 
    $name = $_POST['name']; 
    $subject = $_POST['subject']; 
    $email = $_POST['email'];     
    $message = $_POST['message'];
    
    $to = 'parik11n@uwindsor.ca'
    $subject='Form Submission'
    $msg = "Name: ".$name."\n"."Subject: ".$subject."\n"."Wrote Following: "."\n\n".$message;
    $headers = "From: ".$email

    if(mail($to,$subject,$msg,$headers)){
        echo"<h1> Sent SUccesfully! </h1>";
    }
    else{
        echo "Something went wrong!"; 
    }
}
?>