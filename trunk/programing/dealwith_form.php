<html>
	<head>
		<title>dealwith.php</title>
	</head>
	<body>
	 <form action=dealwith_form.php method=post>
                姓名: <input type=text name="username"><br>
                性别: <input type=text name="sex"><br>
                <input type=submit>
         </form> 
		<?php
		echo $username;
		echo "<br>";
		echo "username:".$_POST["username"]."sex:".$_POST['sex']."<br>";
		?>
	</body>
</html>
