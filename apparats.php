<link rel="stylesheet" href="style.css">
<?php
require("header.php"); 
?> 
<p><a class="main_text" href="index.php">Главная</a> > <a href="spravSys.php">Справочники системы</a> > <a href="#">Аппараты</a></p>
<div class="center_main">
<table>
      <tr>
          <th>Номер аппарата</th>
          <th>Комментарий</th>
      </tr>
  

<?php
      include("db.php"); 
      $selected = mysqli_select_db($link,$database);
      $result = mysqli_query($link,"SELECT * FROM hz"); 
      while($mr=mysqli_fetch_row($result))
      {
        $str ="<tr><td>".$mr[1]."</td><td>".$mr[2]."</td><td>"."<a href=#>Редактировать</a>"."</td><td>"."<a href=#>Удалить</a>"."</td></td>";
        echo $str;
      }
?>
</table>
</div>