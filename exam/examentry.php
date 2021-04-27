<!doctype html>
<title>Login form</title>
<style>
.box{margin-top:150px;margin-left:400px;width:402px;height:330px;border-radius:10px;border:1px solid black;}
.login{width:400px;height:50px;border:1px solid green;border-radius:10px;background-color:violet;padding-bottom:10px;} h1{color:blue;margin-left:30px;}
h2{color:green;margin-left:10px;}
img{float:left;width:80px;height:80px;}
</style>
<body >
<hr>
<img src="logo.png">
<center style="font-size:25px;color:red;">Rajiv Gandhi University Of Knowledge Technologies</center>
<br>
<center style="font-size:25px;color:green;">catering to the Educational Needs of Gifted Rural Youth of A.P</center>
<hr>
<div class="box">
<div class="login"><h1>Login</h1></div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<h2>Username:
<input type="text" id="username" name="user"  placeholder="username:" autofocus required style="width:300px;height:30px;margin-bottom:10px;"></h2>
<h2>Password:
<input type="password" id="password" name="pass"  placeholder="password:" required style="width:300px;height:30px;margin-bottom:10px;">

<input type="submit" value="submit" onsubmit></input></h2>
</form>
</div>
</body>
<!--<script>
function myfunction(){
var username=document.getElementById('username').value;
var password=document.getElementById('password').value;
var pass=0;
var a={r170001:0001,r170002:0002};
pass=a[username];
if(username!="" && password!=""){
if(pass!=undefined){
var b=[0001,0002];
for(var d=0;d<2;d++){
	if(password==b[d]){
	window.open("examfiles/exampaper.html"," ","width=3000,height=767","dialog=yes");}}}
else{
alert("you enter wrong username or password");}}
else{alert("please fill this field");}
window.history.go(0);}
</script>-->
<script>
function rightclick(){
return true;
}
document.oncontextmenu=rightclick;
document.onselectstart=select;
function select(){
	return false;}
</script>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_POST['user'];
$pass=$_POST['pass'];
$_SESSION['username1']=$user;
//setcookie("Name",$user);
//echo $_COOKIE["Name"];
if(!empty($user) && !empty($pass)){
	$host="sql6.freemysqlhosting.net";
	$username="sql6408612";
	$password="w3Rvh3peL1";
	$dbname="sql6408612";
	$conn=new mysqli($host,$username,$password,$dbname);
	$select="SELECT * FROM passwords";
	$sql=$conn->query($select);
	while($row=$sql->fetch_assoc()){
		if($row['username']==$user && $row['password']==$pass){
			header("Location:middle.html");
			die("Login Successful");}}
	
	echo '<script>alert("Login unsuccessful");</script>';
	die();
	}}
?>
	







