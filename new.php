<?php
$host='127.0.0.1';
$user='admin';
$password='';
$database='tr';
$conn=mysqli_connect($host, $user ,$password ,$database);

if(mysqli_connect_errno()){
die('cannot connect to database field'.mysqli_connect_error());
}else{
echo 'database is connect';
}

if(isset($_POST['registerdo'])){
$u_name = strip_tags($_POST["u_name"]);
$u_pass = md5($_POST["u_pass"]);
$u_email = strip_tags($_POST["u_email"]);



$query= ("INSERT INTO `tr`(`User_Name`, `Full_Name`, `E_Mail`, `PW`) VALUES ('".$u_name."','".$u_pass."','".$u_email."')");
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
mysqli_close($conn);
?>





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
==