<!doctype html>

<html>  
<head>  
<title>Login</title>  
  
<style>   
        
body{  
              
    
margin-top: 100px;  
    
margin-bottom: 100px;  
    
margin-right: 150px;  
    
margin-left: 80px;  
    
background-color: azure ;  
    
color: palevioletred;  
    
font-family: verdana;  
    
font-size: 100%  
      
        
}  
            
h6 {  
    
color: indigo;  
    
font-family: verdana;  
    
font-size: 50px;  

}  
form
{
margin-right: 500px;
}
        
h3 {  
    
color: indigo;  
    
font-family: verdana;  
    margin-right: 500px;

font-size: 100%;  

} 
</style>  

</head>  

<body>  
     
<center align="centre"><h6> LOGIN </h6></center>  
<center>
<p> <a href="login.php"></a></p>  

<h3>Login Form</h3>  
<form action="" method="POST"> 
 
User Id: <input type="text" name="user"><br /> <br />
 
Password: <input type="password" name="pass"><br />  <br />
 
<input type="submit" value="Login" name="submit" /> 
 
</form>  
</center>  

<?php  

if(isset($_POST["submit"])){  
  

if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    
$user=$_POST['user'];  
    
$pass=$_POST['pass'];  
  
    
$con=mysqli_connect('localhost','root','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("cannot select DB");  
  
  $sql="SELECT * FROM login WHERE a_id='$user' AND password='$pass'";
    
$query=mysqli_query($con,$sql);  

$numrows=mysqli_num_rows($query);  
    
if($numrows!=0)  
    
{  
    

session_start();  
    
$_SESSION['sess_user']=$user;  
header("Location: adminhome.php");      
} else {     
echo "Invalid username or password!";     
}  
 } else {  
    
echo "All fields are required!";  

}  

}  

?>  

</body>  

</html>   

