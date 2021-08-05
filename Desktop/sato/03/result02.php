<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>結果画面</title>
  </head>
  <body>
      <h1>ログインページ</h1>
      <p>会員IDとパスワードを入力してください。</p>
      <form method='post' action='result02.php'>
          <table>
              <tr>
                  <td>会員ID：</td>
                  <td><input type="text" name="id" size="20"></td>
              </tr>
              <tr>
                  <td>パスワード：</td>
                  <td><input type="password" name="password" size="20"></td>
              </tr>
          </table><br>
          <input type="submit" value="送信">
          <input type="reset" value="リセット">
          <br>
      </form>

      <?php
        //ゴールド会員を設定
        $gold_pw = "ishii";
        $gold_id = "sato";
        //ノーマル会員
        $reg_pw = "webrage01";
        $reg_id = "webrage";
        //判定
        if($gold_id == $_POST['id'] AND $gold_pw == $_POST['password']){
            echo "<br>ゴールド会員です。<br>";
        }else if($reg_id == $_POST['id'] AND $reg_pw == $_POST['password']){
            echo "<br>レギュラー会員です。<br>";
        }else{
            echo "<br>ID、パスワードが間違えています。<br>";
        }
      ?>

  </body>
</html>
