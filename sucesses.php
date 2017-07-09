
<html>
<head>
	<meta charset="utf-8">
	<title>welcome to your community</title>
</head>
<body>
<h2>welcome to your community</h2>
<?php


//
 $fn = $_POST["F_N"];
 $mn = $_POST["U_N"];
 $nm = $_POST["E_M"];
 $pw = $_POST["PW"];
$sql = " INSERT INTO `user`(`User_Name`, `Full_Name`, `E_Mail`, `PW`) VALUES ($fn ,$mn ,$nm ,$pw ); "

?>

Welcome <?php echo $_POST["F_N"]; ?>!<br />
<br>
your mail address <?php echo $_POST["E_M"]; ?> you well reseve confirmation code.

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

<?php

$conn->close();

?>

</body>
</html> 