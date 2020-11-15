<?php
   session_start();
   unset($_SESSION["login"]);
   unset($_SESSION["uid"]);
   unset($_SESSION["utype"]);
   
   echo 'Logging out';
   header('Refresh: 2; URL = login.html');
?>