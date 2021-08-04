<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>第二回課題、フォーム部品練習</title>
    <style>
        form{
            size=50;
        }
        textarea {
            resize: vertical;
            width:300px;
            height:200px;
        }
    </style>
  </head>

  <body>
    <h1>第二回課題、フォーム部品練習</h1>
    <form method='post' action='receive.php'>
        <table border="1" style="border-collapse:collapse;">
            <tr>
                <th>項目</th>
                <th>入力フォーム</th>
            </tr>
            <tr>
                <td>名前</td>
                <td><input type="text" name="namae" size="20"></td>
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
                <td><select name="gender">
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option></select>
                </td>
            </tr>
            <tr>
                <td>趣味</td>
                <td><input type="checkbox" name="hobby" value="釣り"> 釣り
                    <input type="checkbox" name="hobby" value="日本酒"> 日本酒
                    <input type="checkbox" name="hobby" value="キャンプ"> キャンプ
                    <input type="checkbox" name="hobby" value="読書"> 読書
                </td>
            </tr>
            <tr>
                <td>コメント</td>
                <td><textarea name="message" placeholder="メッセージを入力" width="30px"></textarea></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="送信">
        <input type="reset" value="リセット">
    </form>
    <br>
    <?php
        if(isset($_POST["namae"])) {
            $name = $_POST["namae"];
            echo 'ようこそ' . $_POST['namae'] . 'さん<br>';
        }
        if(isset($_POST['gender'])) {
            $gender = $_POST['gender'];
            echo $gender. '<br>';
        }
        if(isset($_POST['hobby'])) {
            $syumi = $_POST['hobby'];
            echo $syumi;
        }
    ?>

  </body>
</html>
