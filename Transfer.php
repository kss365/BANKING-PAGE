
 <html>
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
 body{
	 background-color:#55cbcd;
 }
	 
form {
	
	padding:5px;
	margin-top:35px;
	padding-top:50px';
}
button{
	border-radius:15px;
	background-color:blue;
	color:#ff968a;
}
 </style>
 </head>
 <body>
 <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
 <center> <h1>
  PLEASE PROCCED FOR PAYMENT
   </h1></center>
  <center> <img src="https://i.imgur.com/yvPwrJ5.jpg" height="75px;"></center>
   <div class="payment">
<center>

  <form action="success.php" method="post">
  <span class="glyphicon glyphicon-user"> <input type="text" placeholder="Enter your name" name="Accname" required></span><br><br>
    <span class="glyphicon glyphicon-user"> <INPUT type="text" placeholder="Enter receipient name" name="Receipeintname" required></span><br><br>
  <span class="glyphicon glyphicon-usd"> <input type="text" placeholder="Enter amount" name="amount" onkeypress="return IsNumeric(event);"></span> <span id="error" style="color: blue; display: none">* Input digits (0 - 9)</span><br><br>
  
  
     <button>PROCEED TO PAY</button>
  </form>
  </center>
</div>
 </body>
 </html>