<!doctype html>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_SESSION['username1'];
$result=array();
$answer=array("","a","c","d","c","a","b","a","b","c","d");
$result[1]=$_POST['1'];
$result[2]=$_POST['2'];
$result[3]=$_POST['3'];
$result[4]=$_POST['4'];
$result[5]=$_POST['5'];
$result[6]=$_POST['6'];
$result[7]=$_POST['7'];
$result[8]=$_POST['8'];
$result[9]=$_POST['9'];
$result[10]=$_POST['10'];
$total="";
for($i=1;$i<=10;$i++){
		$total=$total."-".$result[$i];}
$host="sql6.freemysqlhosting.net";
$username="sql6408612";
$password="w3Rvh3peL1";
$dbname="sql6408612";
$conn=new mysqli($host,$username,$password,$dbname);
$insert=$conn->prepare("INSERT INTO mytable values(?,?)");
$insert->bind_param("ss",$user,$total);
$insert->execute();
$insert->close();
echo '<script>window.alert("Your exam is over");window.location.replace("/exam/examentry.php");</script>';
die();}
?>
<title>MainExam</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link rel="icon" href="images/logo.jpeg"/>
<style>
.select{margin-right:5px;margin-top:100px;} 
.vline{border:1px solid black;height:1500px;} 
#group1{width:90%;}
img{width:100%;}
.exam{display:flex;flex-direction:row;justify-content:space-between;}
form{margin-right:5%;width:100%;}
#group1 p input,#group2 p input,#group3 p input{border:none;border-radius:5px;width:30%;height:30px;background:#ddd;transition:2s;}
button{padding:5px 20px 5px 20px;border:2px solid #aaa;border-radius:5px;box-shadow:1px 1px 1px black;}
#group1 p input:focus,#group2 p input:focus,#group3 p input:focus{border-bottom:1px solid black;background:#fff;transition:2s;}
.navbar{display:flex;flex-direction:row;justify-content:space-between;align-items:start;}
.navbar div p:nth-child(1){font-size:30px;color:white;text-shadow:1px 2px 2px black,3px 4px 5px darkblue;}
.navbar div p:nth-child(2){font-style:italic;margin-top:-20px;}
.navbar img{width:10%;height:100px;}

*{font-family:newfont;}
@font-face{
src:url("fonts/MavenPro-Regular.ttf");
font-family:newfont;
}

@media (min-width:1500px){
.navbar img{width:10%;height:200px;}
}

@media (max-width:1000px){
#group1 p input,#group2 p input,#group3 p input{width:100%;}
.navbar{display:flex;flex-direction:row;padding-bottom:10%;align-items:center;justify-content:start;}
.navbar img{width:30%;height:100px;}
.navbar .imgbox{margin-top:-10%;}
.navbar div:nth-last-child(1){display:none;}
}

body{padding:0% 2% 2% 2%;}
</style>

<body onblur="closefunction()" onmousedown="openFullscreen()" >

<div class="navbar">
<img src="images/logo.jpeg">
<div class="imgbox" style="text-align:center;">
<p>Calcite X</p>
<p>Shaping the Uncut</p>
</div>
<div></div>
</div>

<div>
<h3 style="float:left;">TIME:30Minutes</h3>
<h3 style="float:right;">MAXMARKS:10</h3>
<br><br><br>
<hr style="width:100%;"/>
</center>
</div>
<!--<div class="vline"></div>-->
<div>
<b id='out'></b>
<form id="group1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<br>
<p>1.Tag used to display the picture:  <input name="1" maxlength="90" type="text"></p>
<p>2.Metatag used for responsiveness is:  <input name="2" maxlength="90" type="text"></p>
<p>3.Tag used for styling is:  <input name="3" maxlength="90" type="text"></p>
<p>4.Is HTML a programming language:  <input name="4" maxlength="90" type="text"></p>
<p>5.Css used for:  <input name="5" maxlength="90" type="text"></p>
<p>6.javascript run by:  <input name="6" maxlength="90" type="text"></p>
<p>7.Properties also called as:  <input name="7" maxlength="90" type="text"></p>
<p>8.Acronym of HTML:  <input name="8" maxlength="90" type="text"></p>
<p>9.Acronym of CSS:  <input name="9" maxlength="90" type="text"></p>
<p>10.How many types of heading elements present in html:  <input name="10" maxlength="90" type="text"></p>
<button onclick="closefunction()">Submit</button></div>
</form>
<form id="group2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<br>
<p>1.Use of name attribute in input types:<input name="1" maxlength="90" type="text"></p>
<p>2.Attribute used for direction in marquee tag:  <input name="2" maxlength="90" type="text"></p>
<p>3.Tag used for table heading:  <input name="3" maxlength="90" type="text"></p>
<p>4.Attribute used in merging rows:  <input name="4" maxlength="90" type="text"></p>
<p>5.Tag used for horizontal line:  <input name="5" maxlength="90" type="text"></p>
<p>6.Tag used in bullet list:  <input name="6" maxlength="90" type="text"></p>
<p>7.Properties also called as:  <input name="7" maxlength="90" type="text"></p>
<p>8.Acronym of HTML:  <input name="8" maxlength="90" type="text"></p>
<p>9.Acronym of CSS:  <input name="9" maxlength="90" type="text"></p>
<p>10.Tag used for numbered list:  <input name="10" maxlength="90" type="text"></p>
<button onclick="closefunction()">Submit</button></div>
</form>
<form id="group3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<br>
<p>1.Tag used to display the video:  <input name="1" maxlength="90" type="text"></p>
<p>2.Value of type attribute for passwords:  <input name="2" maxlength="90" type="text"></p>
<p>3.Tag used for line break:  <input name="3" maxlength="90" type="text"></p>
<p>4.Marquee used for:  <input name="4" maxlength="90" type="text"></p>
<p>5.Attribute for address of image:  <input name="5" maxlength="90" type="text"></p>
<p>6.Tag used for display text when image not loaded:  <input name="6" maxlength="90" type="text"></p>
<p>7.Properties also called as:  <input name="7" maxlength="90" type="text"></p>
<p>8.Acronym of HTML:  <input name="8" maxlength="90" type="text"></p>
<p>9.Acronym of CSS:  <input name="9" maxlength="90" type="text"></p>
<p>10.Attribute used for merging columns:  <input name="10" maxlength="90" type="text"></p>
<button onclick="closefunction()">Submit</button></div>
</form>
</div>
</body>
<script>
if(performance.navigation.type==1){
closefunction();
}

window.onload=loadfunction();
function loadfunction(){
var group1=["Deepa","Vinaya","Touheed","Suhaanth"];
var group2=["Priya","Ansh","Aryan"];
var group3=["Akshay","Kaushik","Venkat","nvk"];
if(sessionStorage.name==undefined){
alert("you donot have permission to open this page");
window.location.replace("/exam/examentry.php");
}
else{
G1=document.getElementById("group1");
G2=document.getElementById("group2");
G3=document.getElementById("group3");
if(group1.includes(sessionStorage.name)){sessionStorage.group="group1";G2.style.display=G3.style.display="none";G1.style.display="block";}
else if(group2.includes(sessionStorage.name)) {sessionStorage.group="group2";G1.style.display=G3.style.display="none";G2.style.display="block";}
else if(group3.includes(sessionStorage.name)) {sessionStorage.group="group3";G1.style.display=G2.style.display="none";G3.style.display="block";}
else{alert("You are not part of Calcitex");window.location.replace("/exam/examentry.php");}
if(localStorage.exam1countModify==undefined)
localStorage.exam1count=0;
else 
closefunction();
}
}

function rightclick(){
return false;
}
document.oncontextmenu=rightclick;
document.onselectstart=select;
function select(){
	return false;}





window.setInterval(time,1000);
document.getElementById('out').style.color="red";
var seconds=60;
var minutes=29;
function time(){
if(seconds<58){
if(window.innerHeight<100){
		myfunction();
		}}
if(seconds==0){
	seconds=60;
	minutes=minutes-1;}
else{
seconds=seconds-1;}
if(minutes==0){
	myfunction();}
document.getElementById('out').innerHTML="TIME LEFT: "+minutes+":"+seconds;}


var elem = document.documentElement;

/* Function to open fullscreen mode */

function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { 
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { 
    elem.msRequestFullscreen();
  }
}


function closefunction(){
document.getElementById(sessionStorage.group).submit();
}





/*function myfunction(){
var one=document.getElementById('1').value;
var two=document.getElementById('2').value;
var three=document.getElementById('3').value;
var four=document.getElementById('4').value;
var five=document.getElementById('5').value;
var six=document.getElementById('6').value;
var seven=document.getElementById('7').value;
var eight=document.getElementById('8').value;
var nine=document.getElementById('9').value;
var ten=document.getElementById('10').value;
var choice=[];
choice.push(one);
choice.push(two);
choice.push(three);
choice.push(four);
choice.push(five);
choice.push(six);
choice.push(seven);
choice.push(eight);
choice.push(nine);
choice.push(ten);
var marks=0;
var a=["a","c","d","c","a","b","a","b","c","d"];
for(var i=0;i<10;i++){
	if(a[i]==choice[i]){
		marks++;}}
}*/
</script>

















