<?php
   include('connecting.php');
   session_start();
   
   $user_check = $_SESSION['Log_user'];
   
   $ses_sql = mysqli_query($SQuery,"select U_N from tr where Log_user = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['Log_user'])){
      header("location:login.php");
   }
?>