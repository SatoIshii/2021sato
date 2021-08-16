<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>multiloop01</title>
  </head>
  <body>
      <h1>都道府県</h1>
      <?php
          $hokkaido = array("北海道");
          $tohoku  = array("青森", "秋田", "岩手", "山形", "宮城","福島");
          $kanto = array("神奈川","栃木","群馬","埼玉","千葉","東京","茨城");
          $tyubu  = array("新潟", "富山", "石川", "福井", "山梨","長野","岐阜","静岡","愛知");
          $kansai = array("和歌山", "滋賀", "京都", "大阪", "兵庫","奈良","三重");
          $tyugoku = array("鳥取", "島根", "岡山", "広島", "山口");
          $sikoku = array("徳島","香川","愛媛","高知");
          $kyusyu = array("鹿児島","佐賀","長崎","熊本","大分","宮崎","福岡","沖縄");

          $japan = array($hokkaido, $tohoku, $kanto, $tyubu, $kansai, $tyugoku, $sikoku, $kyusyu);
          $area = array("北海道","東北","関東","中部","関西","中国","四国","九州");
          $i=0;
          echo "<table><tr><th>地方</th><th>県</th></tr>";
          foreach($japan as $each){
                  echo "<tr><th>". $area[$i] ."</th>";
                  foreach($each as $pre){
                      echo "<td>" . $pre . " </td>";
                  }
              echo  "</tr>";
              $i++;
          }
          echo "</table>";
          ?>
  </body>
</html>
