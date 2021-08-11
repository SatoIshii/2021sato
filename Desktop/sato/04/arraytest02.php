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
      // 配列を定義
      $fruit = array("りんご", "すいか", "みかん", "なし", "イチゴ", "かき");

      // 配列の内容を表示
      var_dump($fruit);
      
      // 出力
      echo "<hr>";
      foreach($fruit as $each){
        echo $each . "<br/>";
      }
      echo "<hr>";

      foreach($fruit as $key => $value){
        echo $key . "番目の要素は" . $value . "です。<br/>";
      }

      // 検索する文字列
      $needle = "みかん";

      if(in_array($needle, $fruit)) {
          echo $needle . " がfruitの要素の値に存在しています";
      } else {
          echo $needle . " がfruitの要素の値に存在しません";
      }
      ?>
  </body>
</html>
