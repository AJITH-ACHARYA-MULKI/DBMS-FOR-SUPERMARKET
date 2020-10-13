<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title> MEMBERS </title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>
<center>
	<h5>SHOPPING MART<h5>
</center>
<h1><CENTER><font color="rosybrown"><u>REPLENISHMENT DETAILS</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body bgcolor="ivory">
<fieldset>
<legend> <h3><i>REPLENISHMENT DETAIL</i></h3></legend>
<center><table width="500" cellpadding="5" cellspacing="5" border="1">
<tr>
<th>Item_name </th><th>Quantity</th><th>Price</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!"); 
$result=mysqli_query($con,"SELECT s.Item_Name,r.Qty,s.Price FROM stock s,replenishment r WHERE S.Item_id=r.Item_id");
$result1=mysqli_query($con,"CALL total2()");

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['Item_Name']; ?></td>
<td><?php echo $row['Price']; ?></td>
<td><?php echo $row['Qty']; ?></td>
</tr>
<?php
}
while($row=mysqli_fetch_array($result1))
{
?>

<table style="border-collapse: separate;border-spacing: 15px;">
	<tr>
<th>TOTAL AMMOUNT=</th>
<th><?php echo $row['total']; ?></th>
</tr>
</table>

<?php
}
?>
</table>
</center>
</fieldset>
<center> <a href="billingrecord.php">
		<input type="submit" value="back">
	</a>
</center>
</body>
</html>
<?php  

}  

?>  