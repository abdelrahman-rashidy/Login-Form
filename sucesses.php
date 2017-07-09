
<html>
<head>
    <meta charset="utf-8">
    <title>welcome to your community</title>
</head>
<body>
<h2>welcome to your community</h2>
<?php
//
 $fn = $_post["f_n"];
 $mn = $_post["u_n"];
 $nm = $_post["e_m"];
 $pw = $_post["pw"];
$sql = " insert into `user`(`user_name`, `full_name`, `e_mail`, `pw`) values ($fn ,$mn ,$nm ,$pw ); "
?>
welcome <?php echo $_post["f_n"]; ?>!<br />
<br>
your mail address <?php echo $_post["e_m"]; ?> you well reseve confirmation code.

<table>
<?php 


    foreach ($_post as $key => $value) {
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