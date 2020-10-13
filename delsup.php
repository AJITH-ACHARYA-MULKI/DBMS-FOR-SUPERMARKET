<?php   



$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!");  
 
$sql="SELECT Supplier_Id FROM supplier"; 

$result=mysqli_query($con,$sql); 
?> 
<!doctype html>
<html>
<head>
<title>Delete Supplier</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>
<center><h5>SHOPPING MART<h5></center>
<h1><CENTER><font color="rosybrown"><u>DELETE SUPPLIER</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body style="background:URL(images/abc.jpg); background-repeat:no-repeat; background-size:90% 200%;">
	<br><br>
<center>
<form method="post" action="">
<table border="5" cellpadding="10" cellspacing="10">

<th align="left">SELECT THE SUPPLIER NAME</th>
<td><select name="sid" >
	<option>  </option>
<?php  
while($row=$result->fetch_assoc()) {
?>
<option value="<?php
echo($row['Supplier_Id'])
?>">
<?php
echo($row['Supplier_Id'])
?>
</option>
<?php
}
?> 
</select>

</td></tr>

</table><br><br>
	<input type="submit" value="Delete" name="submit" />  <input type="reset" />
</form><br>
<a href="addordelsup.php"><input type="submit" value="back" ></a> 
</center>
<?php  

if(isset($_POST["submit"])){  
  

if(!empty($_POST['sid'])) {  
    
$id=$_POST['sid'];  
      
$query=mysqli_query($con,"SELECT * FROM supplier WHERE Supplier_Id='".$id."'");  
    
$numrows=mysqli_num_rows($query);  
    
if($numrows>0)  
    { 
    
$sql="DELETE FROM supplier WHERE Supplier_Id='".$id."'";  
  
    
$result=mysqli_query($con,$sql); 
 
        
if($result){  
    
?>
<script type="text/javascript">
alert("You have deleted the Supplier Successfully!");
</script>

<?php
echo "Supplier Successfully Deleted";  
} else {  

?>
<script type="text/javascript">
alert("Failed to Delete the Supplier! Please try again...");
</script>

<?php    
echo "Failure!";     
}    
} else {  

?>
<script type="text/javascript">
alert("There is no such Supplier.");
</script>

<?php    
echo "There is no such Supplier";  
    
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
</body>
</html>


