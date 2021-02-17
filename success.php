<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
img{
	margin-top:10px;
	
}
h1{
	 text-shadow:5px 5px 10px #00FF00;
}
#container{
	border:1px solid red;
	background-color:#55CBCD;
	width:500px;
	height:500px;
	justify-content:center;
	margin-left:325px;
}
 

</style>
</head>
<body>
<?php 
     $Accname = $_POST['Accname'];
	 $Receipeintname= $_POST['Receipeintname'];
	 $amount = $_POST['amount'];
	 //Database connection
	 $conn = new mysqli('127.0.0.1:3307','root','','transaction_db');
	 if($conn->connect_error){
		 die('connection failed :'.$conn->connect_error);
	 }else{
		 $stmt = $conn->prepare("insert into transfer(Accname, Receipeintname, amount)values(?,?,?)");
		 $stmt->bind_param("ssi",$Accname, $Receipeintname, $amount);
		 $stmt->execute();
		 echo "succes";
		 $stmt->close();
		 $conn->close();
	 }
		 ?>
		 
<div id="container">		 
<center>
<h1>TRANSACTION SUCESSFUL</h1>
<img  src="https://i.imgur.com/RsoazHr.jpg" width="50px;" height="50px;">
<br>
<br>
<h5>MONEY SENT: <?php echo $_POST["amount"];?></h5><br><br>
<h5>TO: <?php echo $_POST["Receipeintname"];?></h5>
</center>
</div>




</body>
</html>