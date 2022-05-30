<link rel="stylesheet" href="style.css">
<?php
require("header.php");

?> 

<p><a class="main_text" href="index.php">Главная</a> > <a href="spravSys.php">Справочники системы</a> > <a href="#">Сотрудники</a></p>
<div class="center_main">
  <div>
    <table border=1>
      <tbody>
      <tr>
          <th>Фамилия</th>
          <th>Имя</th>
          <th>Отчество</th>
          <th>Телефон</th>
          <th></th>
          <th></th>
      </tr>
  

<?php
      include("db.php");
      $selected = mysqli_select_db($link,$database);
      $result = mysqli_query($link,"SELECT * FROM worker"); 
      while($mr=mysqli_fetch_row($result))
      {
        $str ="<tr><td>".$mr[1]."</td><td>".$mr[2]."</td><td>".$mr[3]."</td><td>".$mr[4]."</td><td>"."<a name=\"update\" href=\"redact.php?redact=".$mr[0]."\">Редактировать</a>\n"."</td><td>"."<a name=\"del\" href=\"delete.php?del=".$mr[0]."\">Удалить</a>\n"."</td></td>";
        echo $str;
      }
?>
</tbody>
</table>
 </div>
</div>