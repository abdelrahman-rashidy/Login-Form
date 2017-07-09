
<?php 
require_once('connecting.php')
?>
<html>
<head>
	<title>welcome to your community</title>
</head>
<body>
<h2>welcome to your community</h2>
<?php
if(isset($_POST['registerdo'])){
$u_name = strip_tags($_POST["F_N"]);
$u_nam = strip_tags($_POST["U_N"]);
$u_pass = md5($_POST["PW"]);
$u_email = strip_tags($_POST["u_email"]);



$query= ("INSERT INTO user(User_Name,Full_Name,E_Mail,PW)VALUES ('".$u_name."','".$u_nam."','".$u_email."','".$u_pass."')");
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
?>


<p>
    Welcome <?php echo $_POST["F_N"]; ?>!<br />
    <br>
    your mail address <?php echo $_POST["E_M"]; ?> you well reseve confirmation code.
</p>
<table>
<?php 


    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
?>
</table>



</body>
</html> 
<?php

mysqli_close($conn);
?>