<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>税率計算</title>
  </head>
  <body>
    <h1>税率計算</h1>
      <form method='post' action='tax.php'>
          <table border="1" style="border-collapse:collapse;">
              <tr>
                  <th>商品名</th>
                  <th>価格（単位：円、税抜き）</th>
                  <th>個数</th>
                  <th>税率</th>
              </tr>
              <tr>
                  <td><input type="text" name="namae01" size="20"></td>
                  <td><input type="text" name="nedan01" size="20"></td>
                  <td><input type="text" name="num01" size="4">個</td>
                  <td><label><input type="radio" name="tax01" value="8" checked> 8%</label>
                      <label><input type="radio" name="tax01" value="10"> 10%</label>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="namae02" size="20"></td>
                  <td><input type="text" name="nedan02" size="20"></td>
                  <td><input type="text" name="num02" size="4">個</td>
                  <td><label><input type="radio" name="tax02" value="8" checked> 8%</label>
                      <label><input type="radio" name="tax02" value="10"> 10%</label>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="namae03" size="20"></td>
                  <td><input type="text" name="nedan03" size="20"></td>
                  <td><input type="text" name="num03" size="4">個</td>
                  <td><label><input type="radio" name="tax03" value="8" checked> 8%</label>
                      <label><input type="radio" name="tax03" value="10"> 10%</label>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="namae04" size="20"></td>
                  <td><input type="text" name="nedan04" size="20"></td>
                  <td><input type="text" name="num04" size="4">個</td>
                  <td><label><input type="radio" name="tax04" value="8" checked> 8%</label>
                      <label><input type="radio" name="tax04" value="10"> 10%</label>
                  </td>
              </tr>
              <tr>
                  <td><input type="text" name="namae05" size="20"></td>
                  <td><input type="text" name="nedan05" size="20"></td>
                  <td><input type="text" name="num05" size="4">個</td>
                  <td><label><input type="radio" name="tax05" value="8" checked> 8%</label>
                      <label><input type="radio" name="tax05" value="10"> 10%</label>
                  </td>
              </tr>
          </table>
          <br>
          <input type="submit" value="送信">
          <input type="reset" value="リセット">
      </form>
      <br>
      <?php
            //1行目
            $name01 = $_POST["namae01"];
            $price01 = $_POST["nedan01"];
            $number01 = $_POST["num01"];
            $tax01 = $_POST["tax01"];
            $tax = $tax01*0.01;
            $sum01 = ($price01 + ($price01 * $tax)) ;
            //2行目
            $name02 = $_POST["namae02"];
            $price02 = $_POST["nedan02"];
            $number02 = $_POST["num02"];
            $tax02 = $_POST["tax02"];
            $tax = $tax02*0.01;
            $sum02 = ($price02 + ($price02 * $tax)) ;
            //3行目
            $name03 = $_POST["namae03"];
            $price03 = $_POST["nedan03"];
            $number03 = $_POST["num03"];
            $tax03 = $_POST["tax03"];
            $tax = $tax03*0.01;
            $sum03 = ($price03 + ($price03 * $tax)) ;
            //4行目
            $name04 = $_POST["namae04"];
            $price04 = $_POST["nedan04"];
            $number04 = $_POST["num04"];
            $tax04 = $_POST["tax04"];
            $tax = $tax04*0.01;
            $sum04 = ($price04 + ($price04 * $tax)) ;
            //5行目
            $name05 = $_POST["namae05"];
            $price05 = $_POST["nedan05"];
            $number05 = $_POST["num05"];
            $tax05 = $_POST["tax05"];
            $tax = $tax05*0.01;
            $sum05 = ($price05 + ($price05 * $tax)) ;
            //合計計算
            $sum = $sum01 + $sum02 + $sum03 + $sum04 + $sum05;
      ?>

      <table  border="1" style="border-collapse:collapse;">
          <tr>
              <th>商品名</th>
              <th>価格（単位：円、税抜き）</th>
              <th>個数</th>
              <th>税率</th>
              <th>小計（単位：円）</th>
          </tr>
          <tr>
              <td style="text-align: left;"><?php echo $name01;?></td>
              <td style="text-align: right;"><?php echo number_format($price01);?></td>
              <td style="text-align: right;"><?php echo $number01;?></td>
              <td style="text-align: right;"><?php echo $tax01;?>%</td>
              <td style="text-align: right;"><?php echo number_format($sum01);?></td>
          </tr>
          <tr>
              <td style="text-align: left;"><?php echo $name02;?></td>
              <td style="text-align: right;"><?php echo number_format($price02);?></td>
              <td style="text-align: right;"><?php echo $number02;?></td>
              <td style="text-align: right;"><?php echo $tax02;?>%</td>
              <td style="text-align: right;"><?php echo number_format($sum02);?></td>
          </tr>
          <tr>
              <td style="text-align: left;"><?php echo $name03;?></td>
              <td style="text-align: right;"><?php echo number_format($price03);?></td>
              <td style="text-align: right;"><?php echo $number03;?></td>
              <td style="text-align: right;"><?php echo $tax03;?>%</td>
              <td style="text-align: right;"><?php echo number_format($sum03)?></td>
          </tr>
          <tr>
              <td style="text-align: left;"><?php echo $name04;?></td>
              <td style="text-align: right;"><?php echo number_format($price04);?></td>
              <td style="text-align: right;"><?php echo $number04;?></td>
              <td style="text-align: right;"><?php echo $tax04;?>%</td>
              <td style="text-align: right;"><?php echo number_format($sum04);?></td>
          </tr>
          <tr>
              <td style="text-align: left;"><?php echo $name05;?></td>
              <td style="text-align: right;"><?php echo number_format($price05);?></td>
              <td style="text-align: right;"><?php echo $number05;?></td>
              <td style="text-align: right;"><?php echo $tax05;?>%</td>
              <td style="text-align: right;"><?php echo number_format($sum05);?></td>
          </tr>
          <tr>
              <td colspan="4">合計</td>
              <td style="text-align: right;"><?php echo number_format($sum);?></td>
          </tr>
      </table>
  </body>
</html>
