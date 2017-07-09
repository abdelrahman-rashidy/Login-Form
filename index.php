<?php 
require_once('connecting.php')
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
         	<link rel="stylesheet" href="style.css">

</head>
<body>
<form action="sucesses.php" method="post" accept-charset="utf-8">

	<input type="text" name="F_N" placeholder="Full Name">
	<br>
	<br>
	<input type="text" name="U_N" placeholder="User Name">
	<br>
	<br>
	<input type="email" name="E_M" placeholder="Email">
	<br>
	<br>
	<input type="password" name="PW" placeholder="password">
	<br>
	<br>
	<input type="insert" name="asd" value="sign up">
</form>

</body>
</html>

<?php

mysqli_close($conn);
?>