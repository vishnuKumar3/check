<!doctype html>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="email" name="email"></input>
<input type="submit"></input>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$mail=$_POST['email'];
echo $mail;
$to="narayanavishnukumar@gmail.com<b>hii</b>";
$subject="alert";
$message="cybersecurity";
$result=mail($to,$subject,$message);
if($result==true){
	echo "result sent";}
else{
	echo "not send";}}
