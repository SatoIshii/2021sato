<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>ログインページ</title>
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
      </form>
  </body>
</html>
