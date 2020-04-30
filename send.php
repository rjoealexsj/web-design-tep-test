<?php 

if(isset($_POST['submit'])){
	 
    $to = "idntica@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
	
    $subject = "Idntica Query";
    $subject2 = "Copy of your Idntica Query";
    $message = $name . "(" . $from . ")" . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your Idntica Query. Thank You for contacting us. We will reach you soon. BY TEAM IDNTICA " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
 	if(mail($to,$subject,$message,$headers)){
         echo "Message Sent Successfully";
     }
     else {
         echo "Unseccessful";
     }
}
?>