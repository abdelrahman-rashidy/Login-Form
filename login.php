<?php 
	require_once("connecting.php");
$Log_user = $log_pass = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
$Log_user =  mysqli_real_escape_string($conn,$_POST['username']);
$log_pass =  mysqli_real_escape_string($conn,$_POST['password']);
}

  $SQuery = "SELECT id FROM tr WHERE U_N = '$Log_user' and PW = '$log_pass'";
	$result = mysqli_query($conn,$SQuery);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
if (!$result) {
	die('query failed' . mysqli_errno());
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login here</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="login" value="login">
	</form>

<?php 

if($count == 1) {
         session_register("Log_user");
         $_SESSION['Log_user'] = $Log_user;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
?>

</body>
</html>

<?php 
	require_once("closeTheConnection.php");
 ?>