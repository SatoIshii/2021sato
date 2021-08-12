<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>DB通信テスト</title>
  </head>
  <body>
      <h1>DB通信テスト</h1>
      <?php
        $DB_DSN = "mysql:host=localhost; dbname=sishii; charset=utf8";
        $DB_USER = "webaccess";
        $DB_PW = "toMeu4rH";
        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PW);


        $query_str = "SELECT * FROM test WHERE 1"; // 実行するSQL文を作成して変数に保持

        echo $query_str;                                    // 実行するSQL文を画面に表示するだけ（デバッグプリント
        $sql = $pdo->prepare($query_str);                   // PDOオブジェクトにSQLを渡す
        $sql->execute();                                    // SQLを実行する
        $result = $sql->fetchAll();                         // 実行結果を取得して$resultに代入する
        echo "<br>";

        foreach($result as $each){
            echo $each['dishname'] . ":";
            echo $each['price'] . "円<hr>";
        }
      ?>
  </body>
</html>
