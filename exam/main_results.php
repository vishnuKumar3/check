<!doctype html>

<?php
session_start();
$username=$_SESSION["username"];
$host="sql6.freemysqlhosting.net";
$user="sql6415027";
$pass="QLpClerTmP";
$database="sql6415027";
$conn=new mysqli($host,$user,$pass,$database);
$select="select * from results";
$rows=$conn->query($select);
while($row=$rows->fetch_assoc()){
if($row["username"]==$username){
$result=$row["result"];
}
 
}

?>

<head>
<title>ETest | results</title>
<link rel="icon" href="images/logo.png"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<style>
.navbar{display:flex;flex-direction:row;justify-content:space-between;align-items:start;}
.navbar div p:nth-child(1){font-size:30px;color:white;text-shadow:1px 2px 2px black,3px 4px 5px darkblue;}
.navbar div p:nth-child(2){font-style:italic;margin-top:-20px;}
.navbar img{width:10%;height:100px;}
#table{border:1px solid black;margin-top:100px;border-collapse:collapse;border-radius:10px;}
th,td{border:1px solid black;padding:10px;}

@media (min-width:1500px){
.navbar img{width:10%;height:200px;}
}

@media (max-width:1000px){
.navbar{display:flex;flex-direction:row;padding-bottom:10%;align-items:center;justify-content:space-between;}
.navbar img{width:30%;height:100px;}
.navbar .imgbox{margin-top:-10%;}
.navbar div:nth-last-child(1){display:none;}
}
</style>

<body id="body">
<div class="navbar">
<img src="images/logo.png">
<div class="imgbox" style="text-align:center;">
<p>Calcite X</p>
<p>Shaping the Uncut</p>
</div>
<button style="padding:3px;" onclick="logout()">Logout</button>
</div>

<center>
<table id="table">
<tr>
<th>Name</th>
<th>Result</th>
</tr>
<tr>
<td><?php echo $username; ?></td>
<td><?php echo $result; ?></td>
</tr>
</table>
</center>
</body>


<script>
document.oncontextmenu=context;
document.onselectstart=select;
function context(){return false;}
function select(){return false;}
window.onload=loadfunction();


function loadfunction(){
if(sessionStorage.name==undefined || sessionStorage.name=="not defined") {
alert("First Login and then check the results");
document.getElementById("body").style.background="black";
document.getElementById("body").style.display="none";
window.location.replace("/exam/results.php");
}
}

function logout(){
sessionStorage.name="not defined";
window.location.replace("results.php");
}
</script>
