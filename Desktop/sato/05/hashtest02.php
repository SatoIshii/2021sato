<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>連想配列</title>
  </head>
  <body>
      <h1>連想配列</h1>
      <a href="./hashtest01.php">05/hashtest01</a>
      <a href="./multiloop01.php">05/multiloop01</a>
      <a href="./multiloop02.php">05/multiloop02</a>
      <a href="./multiloop03.php">05/multiloop03</a>
      <hr>
      <?php
      //書き方その1
      $me_data = array(
          'fruit' => 'スイカ',
          'sport' => '野球',
          'town' => '横浜',
          'age' => 21,
          'food' => 'カレーライス'
        );
        echo "<table>";
        foreach($me_data as $key => $value){
            echo "<tr><th>" . $key . "</th><td>" . $value . "</td></tr>";
        }
        echo "</table>";
    ?>
  </body>
</html>
