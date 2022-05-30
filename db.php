<?php
     
  $user="root";           
  $pass=NULL;    
  $database="система";        
  $dblink = @mysql_connect($host,$user,$pass);
  mysql_select_db($database,$dblink);
?>