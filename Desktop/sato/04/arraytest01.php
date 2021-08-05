<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>配列</title>
  </head>
  <body>
      <h1>配列</h1>
      <?php
      $fruit = array("りんご", "すいか", "みかん", "なし", "イチゴ", "かき");
      echo "<hr>";

      foreach($fruit as $each){
          echo $each . "<br/>";
      }

      echo "<hr>";

      foreach($fruit as $key => $value){
          echo $key . "番目の要素は" . $value . "です。<br/>";
      }
      ?>
  </body>
</html>
