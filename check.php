<!doctype html>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Username:<input type="text" name="username" >
password:<input type="password" name="password">
<input type="submit" value="submit1"/>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$username=$_POST["username"];
$password=$_POST["password"];
$host="sql6.freemysqlhosting.net";
$user="sql6480531";
$pass="Dsi62kV3KF";
$database="sql6480531";
$conn=new mysqli($host,$user,$pass,$database);
$stmt=$conn->prepare("insert into passwords values(?,?)");
$stmt->bind_param("si",$username,$password);
$stmt->execute();
$stmt->close();
}

?>
