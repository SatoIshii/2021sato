<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>multiloop02</title>
  </head>
  <body>
      <h1>連想配列</h1>
      <?php
          $player01 = array(
              "name" => "佐野恵太",
              "position" => "外野手",
              "from" => "岡山",
              "num" => "2017"
              "sum" => ""
          );
          $player02 =  array(
              "name" => "佐野恵太",
              "position" => "外野手",
              "from" => "岡山",
              "num" => "2017",
          );
          $player03 =  array(
              "name" => "佐野恵太",
              "position" => "外野手",
              "from" => "岡山",
              "num" => "2017"
          );

          $players = array($player01, $player02, $player03);
          echo "<table><tr>
                    <th>背番号</th>
                    <th>名前</th>
                    <th>ポジション</th>
                    <th>出身地</th>
                    <th>入団年</th></tr>";
          foreach($players as $each){
              echo  "<tr><td>". $each['id'] . "</td><td>"
                     . $each['name'] . "</td><td>"
                     . $each['position'] . "</td><td>"
                     . $each['from'] . "</td><td>"
                     . $each['year'] . "</td></tr>";
          }
          echo "</table>";
    ?>
