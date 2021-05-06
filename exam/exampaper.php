<!doctype html>
<head>
<title>MainExam</title>
<style>
.select{margin-right:5px;margin-top:100px;} 
.vline{border:1px solid black;height:1500px;} 
.exam_box{width:60%;}
.second_box{width:15%;}
img{width:100%;}
.exam{display:flex;flex-direction:row;justify-content:space-between;}
form{margin-right:5%;width:100%;}
@media (max-width:1000px){
h3{font-size:30px;}
img{width:100%;}
.exam_box{width:70%;}
}
</style>
</head>
<body onblur="closefunction()" onmousedown="openFullscreen()" >
<div>
<center><h3>IIITRKVALLEY-IDUPULAPAYA</h3>
<h3>Rajiv Gandhi University Of Knowledge Technologies-Andhra Pradesh</h3>
<h3>Academic Year2019-2020:Semester-1</h3>
<h3>WeeklyTest-1</h3>
<h3>Computer Science Engineering</h3>
<h3>CCXY208:Chemistry</h3>
<h3>R17BATCH</h3>
<h3 style="float:left;">TIME:45Minutes</h3>
<h3 style="float:right;">MAXMARKS:10</h3>
<br><br><br>
<hr style="width:100%;"/>
</center>
</div>
<div class="exam">
<div class="exam_box">
<img  src="1_P2.Q.png"></img><br>
<img  src="8_P2.Q.png"></img><br>
<img  src="2_P1.Q.png"></img><br>
<img  src="2_P2.Q.png"></img><br>
<img  src="2_P3.Q.png"></img><br>
<img  src="3_P1.Q.png"></img><br>
<img  src="3_P2.Q.png"></img><br>
<img  src="4_P1.Q.png"></img><br>
<img  src="4_P2.Q.png"></img><br>
</div>
<!--<div class="vline"></div>-->
<div class="second_box">
<form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<b id='out'></b>
<div class="select">
1:
<select id="1" name="1">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
2:
<select id="2" name="2">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
3:
<select id="3" name="3">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
4:
<select id="4" name="4">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
5:
<select id="5" name="5">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
6:
<select id="6" name="6">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
7:
<select id="7" name="7">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
8:
<select id="8" name="8">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
9:
<select id="9" name="9">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select>
<br>
<br>
10:
<select id="10" name="10">
<option value="">----</option>
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
</select></p>
<br>
<br>
<button onclick="closefunction()">Submit</button></div>
</form>
</div>
</div>
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
$total=0;
for($i=1;$i<=10;$i++){
	if($answer[$i]==$result[$i]){
		$total+=1;}}
$host="sql6.freemysqlhosting.net";
$username="sql6408612";
$password="w3Rvh3peL1";
$dbname="sql6408612";
$conn=new mysqli($host,$username,$password,$dbname);
$insert=$conn->prepare("INSERT INTO mytable values(?,?)");
$insert->bind_param("si",$user,$total);
$insert->execute();
$insert->close();
echo '<script>window.alert("Your exam is over");window.location.replace("/exam/examentry.php");</script>';
die();}
?>
</body>
<script>
window.onload=loadfunction();

function loadfunction(){
if(sessionStorage.name==undefined){
alert("you donot have permission to open this page");
document.getElementById("form").action="examentry.php";
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
var minutes=45;
function time(){
if(seconds<58){
if(window.innerHeight<100){
		myfunction();
		close();}}
if(seconds==0){
	seconds=60;
	minutes=minutes-1;}
else{
seconds=seconds-1;}
if(minutes==0){
	myfunction();
	close();}
document.getElementById('out').innerHTML=minutes+":"+seconds;}


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
document.getElementById("form").submit();}





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

















