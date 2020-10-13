<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  

<!doctype html>
<html>
<head>
<title>ADD OR DELETE</title><br><br>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i><a href="adminhome.php" align="right"> Home </a> |<a href="logout.php">Logout</a></i></b></div>
<center>
<h5>SHOPPING MART<h5></center>
<h1><CENTER><font color="rosybrown">SUPPLIER DETAIL <br>& <br><u>ADD OR DELETE</u><font></CENTER></h1>
<hr color="rosybrown" width=400 height=400 />
<style type="text/css">
INPUT:hover{color:rosybrown;}
INPUT:focus{color:red;}
</style><br><br><br><br>
</head>
<body>
<center>
		<a href="viewsup.php">
        <input type="submit" value="SUPPLIERS DETAIL"></a><br><br>
        <a href="supplier.php">
        <input type="submit" value="ADD SUPPLIERS"></a><br><br>
        <a href="delsup.php">
	    <input type="submit" value="DELETE SUPPLIERS"></a>
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