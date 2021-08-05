<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>表出力</title>
  </head>

  <body>
      <h1>表出力</h1>
      <form method='post' action='loop02.php'>
          <input type="text" name="li" size="3">行 x
          <input type="text" name="col" size="3">列
          <br><br>
          <input type="submit" value="送信">
          <input type="reset" value="リセット">
      </form>
      <br><br>
      <table border="1" style="border-collapse:collapse;">
          <?php
          for($i=1;$i<=$_POST['li'];$i++){
              echo "<tr>";
             for($j=1;$j<=$_POST['col'];$j++){
                 echo  "<td>" .$i . "-" . $j . "</td>";
             }
              echo "</tr>";
            }
          ?>
      </table>

  </body>
 </html>
