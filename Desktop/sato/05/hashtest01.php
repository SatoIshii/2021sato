<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>連想配列</title>
  </head>
  <body>
      <h1>連想配列</h1>
      <a href="./hashtest02.php">05/hashtest02</a>
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
        // 書き方その２（php5.4以降)
        /*
        $me_data = [
          'fruit' => 'スイカ',
          'sport' => '野球',
          'town' => '横浜',
          'age' => 21,
          'food' => 'カレーライス'
        ];
        */
        // 書き方その３
        /*
        $me_data['fruit'] = 'スイカ';
        $me_data['sport'] = '野球';
        $me_data['town'] = '横浜';
        $me_data['age'] = 21;
        $me_data['food'] = 'カレーライス';
        */
        /*
        foreach($me_data as $each){
            echo $each . "<br/>";
        }

        foreach($me_data as $key => $value){
            echo $key . " : " . $value . "<br/>";
        }*/
        echo $me_data['fruit'] . $me_data['sport'];
    ?>
    <hr>
    <pre>
    <?php var_dump($me_data); ?>
    </pre>

  </body>
</html>
