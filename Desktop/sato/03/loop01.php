<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>表出力</title>
  </head>

  <body>
      <h1>表出力</h1>
      <form method='post' action='loop01.php'>
          <p>数字を入力してください。</p>
          <input type="text" name="num" size="3">
          <br><br>
          <input type="submit" value="送信">
          <input type="reset" value="リセット">
      </form>
      <br><br>
      <table border="1" style="border-collapse:collapse;">
          <?php
          for($i=0;$i<$_POST['num'];$i++){
            echo "<tr><td>ishii</td></tr>";
            }
          ?>
      </table>

  </body>
 </html>
