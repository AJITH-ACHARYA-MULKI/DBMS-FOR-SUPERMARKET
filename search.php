<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  
<!doctype html>
<html>
<head>
<title> SEARCH </title><br><br>
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
<script type="text/javascript">
	function check(inputtx)
	{
	if(inputtx.value.length==0)
	{
		alert("please insert the item name")
		return false;
	}
 return true;
	}
</script>
<body bgcolor="ivory">
	<fieldset>
<legend> <h3><i>STOCK DETAIL</i></h3></legend>
		<center>
	<form method="POST" action="">
		<input type="SEARCH" name="keyword" placeholder="search" onsubmit="check()">
		<input type="submit" name="searchbtn" value="search" >		
	</form>
</center><br>
<center><table width="500" cellpadding="5" cellspacing="5" border="1">
<tr>
<th>Item_name </th><th>Quantity</th><th>Price</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!");
if(isset($_POST['searchbtn'])){
$keyword=$_POST['keyword'];
$result=mysqli_query($con,"SELECT * FROM stock WHERE Item_Name LIKE '%$keyword%'");
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
<td><?php echo $row['Item_Name']; ?></td>
<td><?php echo $row['Quantity']; ?></td>
<td><?php echo $row['Price']; ?></td>
</tr>
<?php
}
}
}
?>
</table>
</center>
</fieldset>
<center> <a href="adminhome.php">
		<input type="submit" value="back">
	</a>
</center>
</body>
</html>
<?php  
}  
?>  