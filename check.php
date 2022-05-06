<!doctype html>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Username:<input type="text" name="username" >
password:<input type="password" name="password">
<button >click</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["username"];
$password=$_POST["password"];
echo $username."and".$password;
$host="sql6.freemysqlhosting.net";
$user="sql6480531";
$pass="Dsi62kV3KF";
$database="sql6480531";
$conn=new mysqli($host,$user,$pass,$database);
echo $conn;
$stmt=$conn->prepare("insert into passwords values(?,?)");
$stmt->bind_param("si",$username,$password);
$stmt->execute();
$stmt->close();
}

?>
