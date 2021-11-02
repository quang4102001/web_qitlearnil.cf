<?php
  if($_SESSION["user"]!='admin')
  {
    header('Location: index.php?go=home');
  }
?>