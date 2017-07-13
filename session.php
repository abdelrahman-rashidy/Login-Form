<?php include('connecting.php');

   $user_check = $_COOKIE["userNn"] ;

   $find = "SELECT U_N from tr where U_N = '$user_check'";
   $ses_sql = mysqli_query($conn,$find);
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['U_N'];
  
   if(!isset($_SESSION['userN'])){
      echo "not working ";
      //header("location:login.php");
   }
?>