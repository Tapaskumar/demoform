
<html>
<head>
	<title>new pages</title>
	<style type="text/css">
		div{
			height: ;
			width: 100%;
			color: red;
			background: url(img.jpg) no-repeat center top fixed;
			-webkit-background-size: cover;
			-moz-background-size:cover;
			-o-background-size:cover;
			background-size:cover;
			shape-image-threshold: 100%;
			font-size: 32;
			word-spacing: 10px;
			text-decoration-line: 10px;
			text-align: center;
		}
		#d1{
			height: 600px;
		}
	</style>
</head>
<body>
	<form method="POST" action="vve.php">
		<div id="d1">
			username:<input type="text" name="username" > <br>
			password:<input type="password" name="password"> <br>
			gender: <input type="radio" name="gender" class="male" value="male">male
					<input type="radio" name="gender" class="female" value="female">female
					<input type="radio" name="gender" class="others " value="others">others <br>
			language:<input type="checkbox" name="language[HINDI]" value="HINDI">HINDI
					<input type="checkbox" name="language[ODIA]" value="ODIA">ODIA
					<input type="checkbox" name="language[ENGLISH]" value="ENGLISH">ENGLISH	<br>	
			        <input type="submit" name="submit">	


		</div>
	</form>

</body>
</html>