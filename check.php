<!doctype html>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<input type="text" name="username" required />
<input type="password" name="password" required />
<input type="submit" value="submit"/>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_POST['username'];
$userPassword=$_POST['password'];
$host="sql6.freemysqlhosting.net";
$username="sql6408612";
$password="w3Rvh3peL1";
$database="sql6408612";
$conn=new mysqli($host,$username,$password,$database);
$stmt=$conn->prepare("insert into mytable values(?,?)");
$stmt->bind_param("si",$user,$userPassword);
$stmt->execute();
$stmt->close();
}
?>
