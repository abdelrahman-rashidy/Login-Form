

<?php
   session_start();
unset($_COOKIE["userNn"]);
   if(session_destroy()) {
      header("Location: login.php");
   }
?>