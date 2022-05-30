
<?php
require("header.php");

?> 
<link rel="stylesheet" href="style.css">
<p><a class="main_text" href="index.php">Главная</a> > <a href="spravSys.php">Справочники системы</a> > <a href="#">Сотрудники</a></p>
<div class="center_main">
  <div>
    <table>
      <tr>
          <th>Фамилия</th>
          <th>Имя</th>
          <th>Отчество</th>
          <th>Телефон</th>
      </tr>
  

<?php
      include("db.php"); 
      $selected = mysqli_select_db($link,$database);
      $result = mysqli_query($link,"SELECT * FROM worker"); 
      while($mr=mysqli_fetch_row($result))
      {
        $str ="<tr><td>".$mr[1]."</td><td>".$mr[2]."</td><td>".$mr[3]."</td><td>".$mr[4]."</td><td>"."<a href=#>Редактировать</a>"."</td><td>"."<td><a name=\"del\" href=\"delete.php?del=".$row["id_worker"]."\">Удалить</a></td>\n"."</td></td>";
        echo $str;
      }
?>
</table>
 </div>
</div>