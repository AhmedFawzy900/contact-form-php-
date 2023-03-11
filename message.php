<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message= $_POST['message'];

if(!empty($email) && !empty($message)){
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    $receiver = "ahmedattia2753061@gmail.com";
    $subjet = "Form: $name <$email>";
    $body = "Name: $name \nEmail: $email\nPhone: $phone\nWebsite: $website \n\n Message: $message\n\n Regards,\n$name";
    $sender = "From: $email";
    if (mail($receiver,$subjet,$body,$sender)) {
        echo "Done , Your message has been sent";
    }else {
        echo "Sorry , Failed to send your massage!";
    }
  }else{
    echo "Enter Valide Email address!";
  }
}else{
    echo "Email and password field is required!";
}
?>