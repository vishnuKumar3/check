<!doctype html>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
Name:<input type="text" name="name" required /><br>
Email:<input type="email" name="email" required /><br>
Subject:<input type="text" name="subject" required /><br>
Message:<input type="text" name="message" required /><br>
<input type="submit" value="submit"/><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "noreply@gmail.com");
$to = "narayanavishnukumar@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com\r\n";


if(mail($to,$subject,$txt,$headers)==true){
echo "mail sent successfully";
}
else{
echo "mail not sent";
}
}
?>
