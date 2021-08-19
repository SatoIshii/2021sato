<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>multiloop03</title>
  </head>
  <body>
      <h1>JOJO</h1>
      <a href="./hashtest01.php">05/hashtest01</a>
      <a href="./hashtest02.php">05/hashtest02</a>
      <a href="./multiloop01.php">05/multiloop01</a>
      <a href="./multiloop02.php">05/multiloop02</a>
      <h2>ジョジョキャラクター</h2>
      <?php
        #データ格納
          $jojo01 = array(
              "name" => "ジョセフ・ジョースター",
              "stand" => "ハーミット・パープル",
              "season" => "「戦闘潮流」",
              "num" => "2"
          );
          $jojo02 =  array(
              "name" => "空条承太郎",
              "stand" => "スタープラチナ",
              "season" => "「スターダストクルセイダース」",
              "num" => "3"
          );
          $jojo03 =  array(
              "name" => "東方仗助",
              "stand" => "クレイジーダイアモンド",
              "season" => "「ダイアモンドは砕けない」",
              "num" => "4"
          );
          $jojo04 =  array(
              "name" => "ジョルノ・ジョバーナ",
              "stand" => "ゴールド・エクスペリエンス",
              "season" => "「黄金の風」",
              "num" => "5"
          );

        #二次元配列作成
          $jojo= array($jojo01, $jojo02, $jojo03, $jojo04);

        #表出力
          echo "<table><tr>
                    <th>名前</th>
                    <th>スタンド</th>
                    <th>シーズン</th></tr>";
          foreach($jojo as $each){
              echo  "<tr><td>". $each['name'] . "</td><td>"
                     . $each['stand'] . "</td><td>第"
                     .$each['num'] . "部" . $each['season'] . "</td></tr>";
          }
          echo "</table>";
    ?>

  </body>
</html>
