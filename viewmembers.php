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
<h1><CENTER><font color="rosybrown"><u>ADMIN DETAILS</u></font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style>
</head>
<body bgcolor="ivory">
<fieldset>
<legend> <h3><i>ADMIN DETAIL</i></h3></legend>
<center>
	<a href="admin.php"><input type="submit" value="ADMIN DETAIL"></a><br><br>
	<a href="newadmin.php"><input type="submit" value="ADD NEW ADMIN"></a>
</center>
</fieldset>


</body>
</html>
<?php  

}  

?>  