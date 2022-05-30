
<?php
  include("db.php");
  $del=$_GET['del'];
  $selected = mysqli_select_db($link,$database);
  $query = "DELETE FROM worker WHERE id_worker=$del"; 
  mysqli_query($link,$query);
  require("sotrud.php");
?>