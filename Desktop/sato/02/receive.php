<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>第二回課題、フォーム部品練習</title>
  </head>
  <body>
    <h1>第二回課題、フォーム部品練習</h1>
    <form method='get' action='receive.php'>
      名前：<input type="text" name="namae"><br>
      email：<input type="password" name="passwd"><br>
      性別：
      <input type="radio" name="gender" value="男">男
      <input type="radio" name="gender" value="女" checked>女
      <input type="radio" name="gender" value="その他">その他<br>
      コメント：<br>
      <textarea name="message" placeholder="メッセージを入力" width="300"></textarea><br>
      趣味は？<input type="checkbox" name="hobby" value="釣り" checked> 釣り
     <input type="checkbox" name="hobby" value="酒"> 日本酒<br>
     <input type="submit" value="送信">
    </form>
     <?php
        echo "ようこそ " . $_GET['namae'] . " さん<br/>";
        echo "あなたのアドレスは" . $_GET['namae'] . "だね<br/>"
     ?>
  </body>
</html>
