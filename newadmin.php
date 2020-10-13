 
<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title>Admin Form</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>|<a href="logout.php">Logout</a></i></b></div>
<center>
	<h5>SHOPPING MART<h5>
</center>
<h1><CENTER><font color="rosybrown"><u>ADMIN FORM</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
<script type="text/javascript">
function ValidateMail()
{
var mail=document.F.mail;
if(mail.value.indexOf("@",0)<0)
{
mail.focus();
return false;
}
if(mail.value.indexOf(".",0)<0)
{
mail.focus();
return false;
}
}
</script>
</head>
	<FORM METHOD="POST" action="" name="F">
<fieldset>
<legend> <h3><i>Admin Information</i></h3></legend>
<center>
<table border="5" cellpadding="10" cellspacing="10">
<TR>
<TH align="left">ADMIN ID</TH> <TD> <INPUT TYPE="TEXT" NAME="id" placeholder="ID"/></TD>
</TR>

<tr>
<TH align="left">ADMIN NAME</TH><TD> <INPUT TYPE="TEXT" NAME="name"  placeholder="Name"/></TD>
</tr>

<TR>
<TH align="left">EMAIL ID</TH> <TD> <INPUT TYPE="TEXT" name="mail" onBlur="ValidateMail()" placeholder="Mail ID"/></TD>
</TR>

<TR>
<TH align="left">PASSWORD</TH> <TD> <INPUT TYPE="password" NAME="password"  placeholder="password"/></TD> 
</TR>

</table>
<pre>
                   <input type="submit" value="Submit" name="submit" /> <input type="reset" /> 
                     
</pre>
</center>
</fieldset>
</FORM>
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['password'])) {  
$id=$_POST['id'];  
$name=$_POST['name'];  
$mail=$_POST['mail'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!");  
$query=mysqli_query($con,"SELECT * FROM admin WHERE a_id='".$id."'");  
$numrows=mysqli_num_rows($query);  
if($numrows==0)  
    { 
$sql="INSERT INTO admin(a_id,name,email,password) VALUES('$id','$name','$mail','$password')";  
$result=mysqli_query($con,$sql);  
        
if($result){  
?>
<script type="text/javascript">
alert("Admin Successfully Added!");
</script>

<?php
echo "Admin Successfully Added"; 
 
} else {  

?>
<script type="text/javascript">
alert("Failed to add Admin! Please try again...");
</script>

<?php    
echo "Failure!";  
   }
} else {  
?>
<script type="text/javascript">
alert("That Admin ID already exists! Please try again with another.");
</script>

<?php    
echo "That Admin ID already exists! Please try again with another.";  
    
}  
  

} else { 
?>
<script type="text/javascript">
alert("All fields are required!");
</script>

<?php  
    
echo "All fields are required!";  

}  
}
?> <br>
<center> <a href="viewmembers.php">
		<input type="submit" value="back">
	</a>
</center>
</body>
</html>
<?php  
}
?>  