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
        <table border="1" style="border-collapse:collapse;">
            <tr>
                <th>項目</th>
                <th>入力フォーム</th>
            </tr>
            <tr>
                <td>名前</td>
                <td><input type="text" name="namae"></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="mail"></td>
            </tr>
            <tr>
                <td>性別</td>
                <td><input type="radio" name="gender" value="男">男
                    <input type="radio" name="gender" value="女">女
                    <input type="radio" name="gender" value="その他">その他
                </td>
            </tr>
            <tr>
                <td>趣味</td>
                <td><input type="checkbox" name="hobby" value="釣り"> 釣り
                    <input type="checkbox" name="hobby" value="酒"> 日本酒
                </td>
            </tr>
            <tr>
                <td>コメント</td>
                <td><textarea name="message" placeholder="メッセージを入力" width="300"></textarea></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="送信">
        <input type="reset" value="リセット">
    </form>
    <br>
    <?php
        $name = <?$GET["namae"];
        $age = $GET["age"];
        $address = $GET["mail"];
    ?>
  </body>
</html>
