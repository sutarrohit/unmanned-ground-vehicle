
<?php
require  'loginDB.php';
?>

<!DOCTYPE html>

<html>
    <head>
        
        <title>LOGIN PAGE</title>
        
 
   <script type="text/javascript">

   
    function validate()
           {
              var user = document.myform.username.value;
              var pass = document.myform.password.value;
              
              if(user === "" && pass === "")
              {
                  alert("Enter Username and Password");
                  document.getElementById("username").style.borderColor="red";
                   document.getElementById("password").style.borderColor="red";
                    document.getElementById("ulable").style.color="red";
                    document.getElementById("plable").style.color="red";
               document.myform.username.focus();
               return false;
              }
              if(user === "")
           {
               alert("Enter Username");
                document.getElementById("username").style.borderColor="red";
                document.getElementById("ulable").style.color="red";
               document.myform.username.focus();
               return false;
           }
           
              if(pass === "")
           {
               alert("Enter Password");
                document.getElementById("password").style.borderColor="red";
                document.getElementById("plable").style.color="red";
               document.myform.username.focus();
               return false;
           }
 }          
 
</script>
</head>

   <body class="body"  background="12.jpg" >

   <link rel="stylesheet" type='text/css' href="index1.css">






<div id='wrapper'>
             
            <center><h1>Login Here</h1>
            <img src="a.jpg" class='avatar' alt="UGV"/>
            </center>
             
             <form  class='myform' name="myform"  method='post' >
                  
                <label class="label" id='ulable'><b>Username:</b></label><br>
                <input type="text" id="username" name="username" class='inputvalues' placeholder="Enter Username"><br><br>
                   
                <label  class="label" id='plable'><b>Password:</b></label><br>
                <input type="password" id="password" name="password" class='inputvalues' placeholder="Enter Password" ><br>
               
                <input type="submit" name="Login" id='Login' value='Login' onclick="return validate();">
                
            </form>
        </div> 

   </body> 
</html>
 
 <?php
if(isset($_POST["Login"]))
 {

$username=$_POST['username'] ;
$password=$_POST['password'] ;
setcookie("user",$username,time()+10000,"/");


$result = $conn->query("SELECT*FROM login WHERE username='$username' AND password='$password'");  

if ($result->num_rows > 0) 
{
$_SESSION['username']= $username;
$_SESSION['password']= $password;

header ('location:home2.php');
}

else {
echo' <script type="text/javascript">alert("Wrong Password")</script> ';

}
}

?>
