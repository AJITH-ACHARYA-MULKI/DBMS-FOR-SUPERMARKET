<?php   
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!");  
 
$sql="SELECT Emp_Name FROM employee"; 

$result=mysqli_query($con,$sql); 
?> 
<!doctype html>
<html>
<head>
<title>Delete Supplier</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>
<CENTER><h5>SHOPPING MART<h5></CENTER><br>
<h1><CENTER><font color="rosybrown"><u>DELETE EMPLOYEE</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body STYLE="background:URL(images/abc.jpg);BACKGROUND-REPEAT:NO-REPEAT; BACKGROUND-SIZE:90% 200%">
<form method="post" action="">

<center>
	<table border="5" cellpadding="10" cellspacing="10">



<TR>
<TH align="left">SELECT THE EMPLOYEE ID TO BE DELETED</th><br><br><br>
<td><select name="id">
	<option>  </option>
<?php  
while($row=$result->fetch_assoc()) {
?>
<option value="<?php
echo($row['Emp_Name'])
?>">
<?php
echo($row['Emp_Name'])
?>
</option>
<?php
}
?> 
</select>

</td></tr>

</table>

<pre>
                   <input type="submit" value="Delete" name="submit" /> <input type="reset" />
                     
</pre>
</center>
</form>

<?php  

if(isset($_POST["submit"])){  
  

if(!empty($_POST['id'])) {  
    
$id=$_POST['id'];  
      
 
 
$query=mysqli_query($con,"SELECT * FROM employee WHERE Emp_Name='".$id."'");  
    
$numrows=mysqli_num_rows($query);  
    
if($numrows>0)  
    { 
    
$sql="DELETE FROM employee WHERE Emp_Name='".$id."'";  
  
    
$result=mysqli_query($con,$sql); 
 
        
if($result){  
?>
<script type="text/javascript">
alert("You have deleted the Employee Successfully!");
</script>

<?php
echo "Employee Successfully Deleted";  
}
 else {  

?>
<script type="text/javascript">
alert("Failed to Delete the Employee! Please try again...");
</script>

<?php    
echo "Failure!";  
    
}
    
  
  
    
} else {  

?>
<script type="text/javascript">
alert("There is no such Employee.");
</script>

<?php    
echo "There is no such Employee";  
    
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

?><br><br><br><br><br><br><br>
<CENTER>
	<a href="addordelemp.php">
		<input type="submit" value="back">
	</a>
</CENTER>
</body>
</html>


