<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>連想配列</title>
  </head>
  <body>
      <h1>連想配列</h1>
      <?php
        $team_a = array("今永", "濱口", "平良", "石田", "東");
        $team_b = array("伊藤", "髙城", "嶺井", "戸柱", "益子");
        $team_c = array("宮崎", "柴田", "大和", "石川", "倉本");
        $team_d = array("佐野", "乙坂", "細川", "梶谷", "神里");
        $team_e = array("三島", "三上", "国吉", "砂田", "武藤");

        $team_all = array($team_a, $team_b, $team_c, $team_d, $team_e);

        foreach($team_all as $row){
            foreach($row as $data){
                echo $data . "<br/>";
            }
        }
    ?>
  </body>
</html>
