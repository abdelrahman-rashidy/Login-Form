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
<form action="Index.php" method="post" accept-charset="utf-8">


	<br>
	<input type="text" name="U_N" placeholder="User Name">
	<br>
	<br>

	<br>
	<input type="password" name="PW" placeholder="password">
	<br>
	<br>
	<input type="submit" name="asd" value="sign up">
</form>


<h2>welcome to your community</h2>
<?php
if(isset($_POST['asd'])){
 if(isset($_POST["asd"])){
 $u_name = $_POST["U_N"];
 $u_pass = $_POST["PW"];



$query= ("INSERT INTO tr( U_N , PW ) VALUES ('$u_name','$u_pass')");
$DBadduser=mysqli_query($conn,$query);

if($DBadduser){
echo"
<br />success<br />
";
}else{
echo"
<br />error<br />
";
}
}
}

mysqli_close($conn);
?>
</body>
</html>