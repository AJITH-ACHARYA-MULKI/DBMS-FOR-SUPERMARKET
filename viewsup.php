<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title> FEEDBACKS</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>

<center>
	<h5>SHOPPING MART<h5>
</center>
<h1><CENTER><font color="rosybrown"><u>SUPPLIERS</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body bgcolo="ivory">
<fieldset>
<legend><h3><i>Suppliers Information</i></h3></legend>
<center><table width="500" cellpadding="5" cellspacing="5" border="1">
<tr>
<th>SUPPLIER ID </th><th> SUPPLIER NAME</th><th> TYPE</th><th> PHONE NUMBER</th><th> ADDRESS</th><th> PIN</th><th> EMAIL ID</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!"); 
$result=mysqli_query($con,"SELECT * FROM supplier");

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['Supplier_Id']; ?></td>
<td><?php echo $row['Supplier_Name']; ?></td>
<td><?php echo $row['Type']; ?></td>
<td><?php echo $row['Contact_No']; ?></td>

<td><?php echo $row['Address']; ?></td>
<td><?php echo $row['pin']; ?></td>
<td><?php echo $row['Mail']; ?></td>
</tr>
<?php
}
?>
</table></center>
</fieldset>
<center> <a href="addordelsup.php">
		<input type="submit" value="back">
	</a>
</center>
</body>
</html>
<?php  

}  

?>  