<?php
  $nombre= $_POST['nombre'];
  setcookie("Jane", "$nombre", time()+3600);

?>