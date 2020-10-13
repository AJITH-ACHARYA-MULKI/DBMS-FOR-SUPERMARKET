 
<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title>Employee Form</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>|<a href="logout.php">Logout</a></i></b></div>
<center>
	<h5>SHOPPING MART<h5>
</center>
<h1><CENTER><font color="rosybrown"><u>EMPLOYEE FORM</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>


<script type="text/javascript">

function validatePhone()
{
var phone=document.F.pno;
if(!isNaN(phone) || phone.value==0)
{
window.alert("Please Enter a Valid PHONE NUMBER!");
phone.focus();
return false;
}
else
return true;
}

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
<body STYLE="background:URL(images/abc.jpg);BACKGROUND-REPEAT:NO-REPEAT; BACKGROUND-SIZE:90% 90%;">


<FORM METHOD="POST" action="" name="F">
<fieldset>
	<legend> <h3><i>Personal Information of Employee</i></h3></legend>
	<center>
<table border="5" cellpadding="10" cellspacing="10">
<TR>
<TH align="left">SET EMPLOYEE ID</TH> <TD> <INPUT TYPE="TEXT" NAME="id" placeholder="ID"/></TD>
</TR>

<tr>
<TH align="left">EMPLOYEE NAME</TH><TD> <INPUT TYPE="TEXT" NAME="name"  placeholder="Name"/></TD>
</tr>

<TR>
<TH align="left">GENDER</TH> <TD><input type="radio" name="gender" value="Male"/> MALE   <input type="radio" name="gender" value="Female"/> FEMALE </TD>
</TR>

<TR>
<TH align="left">DATE OF BIRTH</TH> <TD> <input name="DATE" placeholder="yyyy/mm/dd" type="" /></TD><BR>
</TR>

<TR>
<TH align="left">POST</TH> <TD><SELECT NAME="post">
	<option> </option>
<OPTION>ACCOUNTANT</OPTION>
<OPTION>SECURITY</OPTION>
<OPTION>HELPER</OPTION>
</TD>
</TR>


<TR>
<TH align="left">PHONE NUMBER</TH> <TD><INPUT TYPE="text" name="pno" onBlur="validatePhone()" MAXLENGTH="10" placeholder="10 digits"/></TD>
</TR>



<TR>
<TH align="left">EMAIL ID</TH> <TD> <INPUT TYPE="TEXT" name="mail" onBlur="ValidateMail()" placeholder="Mail ID"/></TD>
</TR>



<TR>
<TH align="left">ADDRESS</TH> <TD> <TEXTAREA ROW="20" COL="20" name="add"> </TEXTAREA></TD>
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

if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['DATE'])&& !empty($_POST['post']) && !empty($_POST['pno']) && !empty($_POST['mail']) && !empty($_POST['add'])) {  
$id=$_POST['id'];  
$name=$_POST['name'];  
$date=$_POST['DATE'];
$gender=$_POST['gender'];
$post=$_POST['post'];
$pno=$_POST['pno'];
$mail=$_POST['mail'];
$add=$_POST['add'];
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!");  
 
$query=mysqli_query($con,"SELECT * FROM employee WHERE Emp_Id='".$id."'");  
    
$numrows=mysqli_num_rows($query);  
    
if($numrows==0)  
    { 
$sql="INSERT INTO employee(Emp_Id,Emp_Name,Gender,DOB,Post,Phone_no,Email_Id,Address) VALUES('$id','$name','$gender','$date','$post','$pno','$mail','$add')";  
  
    
$result=mysqli_query($con,$sql);  
        
if($result){  
    

?>
<script type="text/javascript">
alert("Employee Successfully Added!");
</script>

<?php
echo "Employee Successfully Added"; 
} else {  

?>
<script type="text/javascript">
alert("Failed to add Emplyee! Please try again...");
</script>

<?php    
echo "Failure!";  
   }
} else {  
?>
<script type="text/javascript">
alert("That Employee ID already exists! Please try again with another.");
</script>

<?php    
echo "That Employee ID already exists! Please try again with another.";  
    
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
?> 
<center> <a href="addordelemp.php">
		<input type="submit" value="back">
	</a>
</center>
</body>
</html>
<?php  
}
?>  