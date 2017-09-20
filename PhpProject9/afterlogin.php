<?php
    session_start();
    
   // if(isset($_SESSION['user'])==0)
   //     header('Location: http://localhost/PhpProject9')
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -300px;
	width: auto;
	height: auto;
	background-image: url(https://media2.wnyc.org/i/800/0/l/80/1/shutterstock_127010054.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -300px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 290px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(20% - 65px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Artificial<span>Doctor</span></div>
		</div>
		<br>
		<div class="login">
                    <FORM ACTION="prediction_1_1.php" METHOD="POST">
				<input type="text" placeholder="symptom1" name="symptom1"><br>
				<input type="text" placeholder="symptom2" name="symptom2"><br>
				<input type="text" placeholder="symptom3" name="symptom3"><br>
                                <input type="text" placeholder="symptom4" name="symptom4"><br>
                                <input type="text" placeholder="symptom5" name="symptom5"><br>
                                <input type="text" placeholder="symptom6" name="symptom6"><br>
                                <input type="text" placeholder="symptom7" name="symptom7"><br>
                                <input type="text" placeholder="symptom8" name="symptom8"><br>
                                <input type="text" placeholder="symptom9" name="symptom9"><br>
                                <input type="text" placeholder="symptom10" name="symptom10"><br>
                                <input type="text" placeholder="enter age" name="age"><br>
                                <input type="text" placeholder="enter gender" name="gender"><br>
                                <input type="text" placeholder="enter past diseases" name="pasthistory"><br>
                                <input type="text" placeholder="enter country" name="country"><br>
                                <input type="text" placeholder="enter heriditary diseases" name="heriditary"><br>
                                
                                <input type="submit" value="submit">
                        </form>
                    <p>If you have less than 10 symptoms then fill remaining symptoms as "-"</p>
                  <p>&copy; 2017 Artificial Doctor. All rights reserved.Designed by Mohan Krishna Sunkara (130911328)</p>

		</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
