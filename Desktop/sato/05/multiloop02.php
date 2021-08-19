<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>multiloop02</title>
  </head>
  <body>
      <h1>連想配列</h1>
      <a href="./hashtest01.php">05/hashtest01</a>
      <a href="./hashtest02.php">05/hashtest02</a>
      <a href="./multiloop01.php">05/multiloop01</a>
      <a href="./multiloop03.php">05/multiloop03</a>
      <hr>
      <?php
          $player01 = array(
              "name" => "梶谷隆幸",
              "position" => "外野手",
              "from" => "島根",
              "year" => "2007",
              "num" => "3"
          );
          $player02 =  array(
              "name" => "佐野恵太",
              "position" => "内野手",
              "from" => "岡山",
              "year" => "2017",
              "num" => "44"
          );
          $player03 =  array(
              "name" => "井納翔一",
              "position" => "ピッチャー",
              "from" => "東京",
              "year" => "2013",
              "num" => "15"
          );

          $players = array($player01, $player02, $player03);
          echo "<table><tr>
                    <th>背番号</th>
                    <th>名前</th>
                    <th>ポジション</th>
                    <th>出身地</th>
                    <th>入団年</th></tr>";
          foreach($players as $each){
              echo  "<tr><td>". $each['num'] . "</td><td>"
                     . $each['name'] . "</td><td>"
                     . $each['position'] . "</td><td>"
                     . $each['from'] . "</td><td>"
                     . $each['year'] . "</td></tr>";
          }
          echo "</table>";
    ?>
