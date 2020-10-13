<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  
<!doctype html>
<html>
<head>
<title> ADMIN </title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>
<center>
	<h5>SHOPPING MART<h5>
</center>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body bgcolor="ivory">
	<fieldset>
<legend> <h3><i>ADMIN DETAIL</i></h3></legend>
<center><table width="500" cellpadding="5" cellspacing="5" border="1">
<tr>
<th>a_id </th><th>name</th><th>email</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!");
$result=mysqli_query($con,"SELECT a_id,name,email FROM admin");
if(mysqli_num_rows($result)<1)
{
echo "no items found";
}
else
{
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['a_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>
<?php
}
}
?>
</table>
</center>
</fieldset>
<center> <a href="viewmembers.php">
		<input type="submit" value="back">
	</a>
</center>
</body>
</html>
<?php  
}  
?>  