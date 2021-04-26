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
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$header="From:noreply@.com";
$to="narayanavishnukumar@gmail.com";
echo "Details:$name $email $subject $message <br>";
$result=mail($to,$subject,$message,$header);
echo $result;
if($result){
echo "mail sent successfully";
}
else{
echo "mail not sent";
}
}
?>
