 
<?php   

session_start();  

if(!isset($_SESSION["sess_user"])){  
    
header("location:adminlogin.php");  

} else {  

?>  


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ADMIN PAGE</title>
<div id="view" style="position:absolute; top: 30px; left: 1400px;"><b><i> <a href="logout.php">Logout</a></i></b></div>
<style type="text/css">



</style>
</head>
<body style="BACKGROUND-COLOR:ivory;">

<br><BR>
<center>
<h2><u><i>Welcome Admin
!  </i></u></h2>

        <img src="images/b.jpg" alt="Welcome to Super Market!" />
</center>

<fieldset>
<legend> <h3><i>Select your option...</i></h3></legend>
<h2>
<pre>
		     <b>Add & Delete		     Stock Replenishment		 Add & Delete</b>
		       <b>Supplier								   Employee</b>
</pre>
</h2>
	<center><a href="addordelsup.php"><img class="select" height=200 width=350 src="images/Su.jpg" alt="Add or Delete Supplier" /></a>
<a href="REPLENESTIMENT.php"><img class="select" height=200 width=350 src="images/rep.jpg" alt="Place Stock Replenishment Request" /></a>

	<a href="addordelemp.php"><img class="select" height=200 width=350 src="images/ep.jpg" alt="Add or Delete Employee" /></a></center><br>

<h2>
<pre>
		     <b>search       		      Total Ammount     		  Admin Details</b>
</pre>
</h2>
<center><a href="search.php"><img class="select" height=200 width=350 src="images/fdbk.png" alt="View Feedback" /></a>
<a href="billingrecord.php"><img class="select" height=200 width=350 src="images/bill.jpg" alt="View Inventory" /></a>
<a href="viewmembers.php"><img class="select" height=200 width=350 src="images/mem.png" alt="View Members" /></a></center><br/>
</fieldset>
</body>
</html>
<?php  

}  

?>  