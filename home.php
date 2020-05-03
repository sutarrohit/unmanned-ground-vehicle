<?php

require  'loginDB.php';

?>


<html>
<head>

<link rel="stylesheet"  href="home.css">

<title>Home Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {


$('body').on('keydown', function (e) {
if(e.keyCode === 87 || e.keyCode === 38)
{
var a= new XMLHttpRequest();
a.open("GET", "forword.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();		
}
}).on('keyup', function (e) {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
});


$('body').on('keydown', function (e) {
if(e.keyCode === 83 || e.keyCode === 40)
{
var a= new XMLHttpRequest();
a.open("GET", "backword.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}
}).on('keyup', function (e) {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
});


$('body').on('keydown', function (e) {
if(e.keyCode === 68 || e.keyCode === 39)
{
var a= new XMLHttpRequest();
a.open("GET", "right.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}
}).on('keyup', function (e) {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
});


$('body').on('keydown', function (e) {
if(e.keyCode === 65 || e.keyCode ===  37)
{
var a= new XMLHttpRequest();
a.open("GET", "left.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}
}).on('keyup', function (e) {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
});



$("#forword").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "forword.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}).on('mouseup', function() {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });


$("#backword").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "backword.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}).on('mouseup', function() {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });


$("#right").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "right.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}).on('mouseup', function() {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });


$("#left").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "left.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}).on('mouseup', function() {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });




$("#cleft").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "camleft.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}).on('mouseup', function() {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });


$("#cright").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "camright.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
}).on('mouseup', function() {
var a= new XMLHttpRequest();
a.open("GET", "stop.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });


$("#ledon").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "ledon.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });

$("#ledoff").on("mousedown", function() {
var a= new XMLHttpRequest();
a.open("GET", "ledoff.php"); a.onreadystatechange=function(){
if(a.readyState==4){ if(a.status ==200){
 } else alert ("http error"); } }
a.send();
 });


});
 

</script>

</head>



<body background="mi.jpg">


<?php
if(!( isset($_COOKIE["user"])))
{

echo '<span style="color:#AFA;font-size:40px; ";>Login Please</span>';
exit();


}
?>

<div class="sensor"  id="show"> <center> </center></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
setInterval(function () {
$('#show').load('data.php')
}, 1000);
});
</script>

<from method="post">


<img id="video" src="http://192.168.1.102:8081" alt="wait"  width="880" height="500">  
     
<div class="controle">
 <center>       
 <input class="b"  type="button" name="up" id="forword" value='Forword'><br>              
 <input class="b" type="button" name="left" id="left" value='Left'> &nbsp;
 <input class="b" type="button" name="right" id="right" value='Right'><br>
 <input class="b" type="button" name="down" id="backword" value='Backword'>
 </center>
</div>

<div class="camera">

 <center>
  <input class="b"  type="button" id="cright" name="Right" value='Right'>
 <input class="b" type="button" id="cleft" name="Left" value='Left'>
 </center>

</div>

<div class="led">

 <center>
  <input class="b"  type="button" id="ledon" name="ledon" value='ON'>
 <input class="b" type="button" id="ledoff" name="ledoff" value='OFF'>
 </center>

</div>


<div class= "logout">
 <a class="blogout" href="session.php">logout</a>
</div>

</form>
</body>

</html> 


 





 
