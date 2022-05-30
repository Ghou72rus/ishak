<?php
  include("db.php");
  $del=$_GET['del'];
  $selected = mysqli_select_db($link,$database);
  $query = "UPDATE `worker` SET =`worker_surname`='[value-2]',`worker_name`='[value-3]',`worker_otchestvo`='[value-4]',`worker_phone`='[value-5]' WHERE `id_worker` = $"; 
  mysqli_query($link,$query);
  require("sotrud.php");
?>