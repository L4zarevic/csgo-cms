<?php 
if(isset($_POST['submit'])){
    $to = "contact.csgo.nnb@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email addres
    $name = $_POST['name'];
  
    $subject = "Kontakt forma";
   
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
 

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location:kontakt.php');
   
    }
?>