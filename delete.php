
<?php
include("db.php");
$del=$_GET['del'];
$query = "DELETE FROM worker WHERE (id_worker='{$del}')"; 

?>