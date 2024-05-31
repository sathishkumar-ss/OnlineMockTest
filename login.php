<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<style type="text/css">
		body{
			background:#eee;
		}
		#form{
			border:solid grey 1px;
			width:20%;
			border-radius: 5px;
			background:white;
			margin:150px auto;
			padding:50px;
		}
		#btn{
			color:#ffff;
			background: grey;
			padding:5px;
			margin-left: 60%;
		}
		label{
			font-family: timesofindia;
		}
	</style>
</head>
<body>
	<div id="form">
		<form action="process.php"  method="POST">
			<p>
				<label> USERNAME:&nbsp;&nbsp;</label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>PASSWORD :&nbsp;&nbsp;</label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>
			
		</form>
	</div>


</body>
</html>