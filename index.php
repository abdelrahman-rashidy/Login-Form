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
	<input type="text" name="E_M" placeholder="E_mail">
	<br>
	<input type="password" name="PW" placeholder="password">
	<br>
	<br>
	<input type="file" name="imageUpload" id="imageUpload">

	<input type="submit" name="asd" value="sign up">
</form>


<h2>welcome to your community</h2>
<?php
if(isset($_POST['asd'])){
 if(isset($_POST["asd"])){
 $u_name = $_POST["U_N"];
 $u_pass = $_POST["PW"];
 $Email = $_POST["E_M"];



$query= ("INSERT INTO tr( U_N , PW ,E_M ) VALUES ('$u_name','$u_pass','$Email')");
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
require_once("closeTheConnection.php")
?>
</body>
</html>