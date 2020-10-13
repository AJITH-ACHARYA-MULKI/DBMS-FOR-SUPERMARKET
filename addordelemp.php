<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title> ADD OR DELETE</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a>| <a href="logout.php">Logout</a></i></b></div>

<h5><center>SHOPPING MART</centre><h5><br><br>
<h1><CENTER><font color="rosybrown">EMPLOYEE DETAILS <br>&<br><u>ADD OR DELETE EMPLOYEE</u><font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style><br><br><br><br>
</head>
<body>
	<center>
		<a href="viewemp.php">
        <input type="submit" value="EMPLOYEE DETAIL"></a><br><br>
        <a href="emp.php">
        <input type="submit" value="ADD EMPLOYEE"></a><br><br>
        <a href="delemp.php">
	    <input type="submit" value="DELETE EMPLOYEE"></a>
</center>
<style>
input{
	outline: none;
	border-radius: 4px;
	border: none;
	width: 200px;
	height: 30px;
	padding-left: 3px;
	box-shadow: 0px 0px 1px 1px rgba(0,0,0,0.1);
	transition: 0.5s;
}
input:focus{
	box-shadow: 0px 4px 5px #000;
}
	
</style>
</body>
</html>
<?php  

}  

?>  