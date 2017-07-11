<?php 
require_once('connecting.php');
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8">


	<br>
	<input type="text" name="username" placeholder="User Name">
	<br>
	<br>
	<input type="text" name="e_mail" placeholder="E_mail">
	<br>
	<input type="password" name="PW" placeholder="password">
	<br>
	<br>
	<input type="file" name="imageUpload" id="imageUpload">

	<input type="submit" name="submit" value="sign up">
</form>


<h2>welcome to your community</h2>
<?php
if(isset($_POST['asd'])){

 $u_name = $_POST["username"];
 $u_pass = $_POST["PW"];
 $Email = $_POST["e_mail"];



$query= ("INSERT INTO tr( U_N , PW ,E_M ) VALUES ('$u_name','$u_pass','$Email')");
$DBadduser=mysqli_query($conn,$query);

if($DBadduser){
echo"<br />success<br />";
header("location:welcome.php");
}else{
echo"
<br />error<br />
";
}
}

?>
</body>
</html>