<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:employeelogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title> Tot_Stock </title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>
<center>
	<h5>SHOPPING MART<h5>
</center>
<h1><CENTER><font color="rosybrown"><u>REPLENISHED ITEMS</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body bgcolor="ivory">
<fieldset>
<legend><h3><i>Total Stock</i></h3></legend>
<center><table width="500" cellpadding="5" cellspacing="5" border="1">
<tr>
<th>Item Id </th><th> Item Name </th><th> Total Qty </th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','') or die(mysql_error());  
    
mysqli_select_db($con,'super_market(3)') or die("Cannot select DB!"); 
$result=mysqli_query($con,"SELECT s.Item_id,s.Item_Name,r.Qty AS Tot_Qty FROM stock as s,replenishment as r WHERE s.Item_id=r.Item_id");

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['Item_id']; ?></td>
<td><?php echo $row['Item_Name']; ?></td>
<td><?php echo $row['Tot_Qty']; ?></td>
</tr>
<?php
}
?>
</table>
</center>
</fieldset>
<center> <a href="REPLENESTIMENT.php">
		<input type="submit" value="back">
	</a>
</center>
</body>
</html>
<?php  

}  

?>  