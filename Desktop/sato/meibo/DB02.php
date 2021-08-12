<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>DB通信テスト02</title>
    <style>
        table {
            margin-left: auto;
            margin-right: auto;
            margin-top    : 10px;
            background    : #F0F2F4;
            width: auto;
        }
        th{
            background: #4A4D58;
            color: #fff;
        }
    </style>
  </head>
  <body>
      <h1>DB通信テスト02</h1>
      <?php

        # DBアクセス
        $DB_DSN = "mysql:host=localhost; dbname=sishii; charset=utf8";
        $DB_USER = "webaccess";
        $DB_PW = "toMeu4rH";
        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PW);

        #SQL文を変数に代入
        $query_str = "SELECT * FROM test WHERE 1"; // 実行するSQL文を作成して変数に保持

        echo $query_str;                                    // 実行するSQL文を画面に表示するだけ（デバッグプリント
        $sql = $pdo->prepare($query_str);                   // PDOオブジェクトにSQLを渡す
        $sql->execute();                                    // SQLを実行する
        $result = $sql->fetchAll();                         // 実行結果を取得して$resultに代入する
        $i=0;

        #出力
        echo "<table><tr><th>料理名</th><th>値段</th><th>ジャンル</th><th>メモ</th></tr>";

        foreach($result as $each){
            echo "<tr><td>" . $each['dishname'] . "</td>";
            echo "<td>" . $each['price'] . "円</td>";
            echo "<td>" . $each['genre'] . "</td>";
            echo "<td>" . $each['memo'] . "</td></tr>";
        }
        echo "</table>"
      ?>
      <!--<pre><?php #var_dump($result); ?></pre>-->
  </body>
</html>
