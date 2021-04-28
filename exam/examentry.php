<!doctype html>
<head>
<title>Exam Portal</title>
<link rel="icon" href="logo.jpeg"/>
<style>
.box{margin-top:10%;margin-left:40%;width:402px;border-radius:10px;padding-bottom:20px;border:1px solid black;}
.login{width:99.5%;height:50px;border:1px solid transparent;top:0;border-radius:10px;background-color:lime;padding-bottom:10px;} h1{color:blue;margin-left:5%;}
h2{color:green;margin-left:5%;}
img{float:left;width:80px;height:80px;}
.navbar{display:flex;flex-direction:row;justify-content:space-between;align-items:start;}
.navbar div p:nth-child(1){font-size:30px;color:white;text-shadow:1px 2px 2px black,3px 4px 5px darkblue;}
.navbar div p:nth-child(2){font-style:italic;margin-top:-20px;}
form input:nth-child(1),input:nth-child(2){border-width:0 0 2px 0;border-bottom-color:black;border-radius:5px;}
form input:nth-child(1):focus,input:nth-child(2):focus{background:#eee;transition:all 2s;}
form input:nth-child(3){padding:5px 20px 5px 20px;border:2px solid #aaa;border-radius:5px;box-shadow:1px 1px 1px black;}
*{font-family:newfont;}
@font-face{
src:url("MavenPro-Regular.ttf");
font-family:newfont;
}
</style>
</head>
<body >

<div class="navbar">
<img src="logo.jpeg" style="width:10%;height:20%;">
<div style="text-align:center;">
<p>Calcite X</p>
<p>Shaping the Uncut</p>
</div>
<div></div>
</div>

<div class="box">
<div class="login"><h1>Login</h1></div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<h2>Username:
<input type="text" id="username" name="user"  placeholder="username:" autofocus required style="width:300px;height:30px;margin-bottom:10px;"></h2>
<h2>Password:
<input type="password" id="password" name="pass"  placeholder="password:" required style="width:300px;height:30px;margin-bottom:10px;">
</h2>
<input style="margin-left:5%;" type="submit" value="submit" onsubmit></input>
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
return false;
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
	echo "<script>document.getElementByTagName('input')[0].value='';
		document.getElementByTagName('input')[1].value='';";
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
	







