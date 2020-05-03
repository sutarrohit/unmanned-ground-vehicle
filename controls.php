

<!DOCTYPE html 
<html>
<head>
                
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



<script type="text/javascript">// <![CDATA[

$(document).ready(function() {



$('#f').click(function(){

var a= new XMLHttpRequest();

a.open("GET", "forword.php"); a.onreadystatechange=function(){

if(a.readyState==4){ if(a.status ==200){

 } else alert ("http error"); } }

a.send();

});



$('#b').click(function(){

var a= new XMLHttpRequest();

a.open("GET", "backword.php"); a.onreadystatechange=function(){

if(a.readyState==4){ if(a.status ==200){

 } else alert ("http error"); } }

a.send();

});



$('#r').click(function(){

var a= new XMLHttpRequest();

a.open("GET", "right.php"); a.onreadystatechange=function(){

if(a.readyState==4){ if(a.status ==200){

 } else alert ("http error"); } }

a.send();

});



$('#l').click(function(){

var a= new XMLHttpRequest();

a.open("GET", "left.php"); a.onreadystatechange=function(){

if(a.readyState==4){ if(a.status ==200){

 } else alert ("http error"); } }

a.send();

});




});


</script>



               <title>pi controlller</title>
        </head>
        <body>
              <button type="button" id="f">Forword</button><br>
              <button type="button" id="b">backword</button><br>
              <button type="button" id="r">right</button><br>
              <button type="button" id="l">left</button><br>

        </body>
</html> 

