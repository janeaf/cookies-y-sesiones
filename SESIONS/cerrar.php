<?php
  session_start();
  error_reporting(0);
  $sesion =$_SESSION['Usuario'];
  if ($sesion == null || $sesion = '');{
     echo 'No esta autorizado';
     die();
   }
  session_destroy();
  header("Location:index.php");
?>