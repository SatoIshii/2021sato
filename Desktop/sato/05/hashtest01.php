<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>連想配列</title>
  </head>
  <body>
      <h1>連想配列</h1>
      <?php
      $me_data = array(
          'fruit' => 'スイカ',
          'sport' => '野球',
          'town' => '横浜',
          'age' => 21,
          'food' => 'カレーライス'
        );

        foreach($me_data as $each){
            echo $each . "<br/>";
        }

        foreach($me_data as $key => $value){
            echo $key . " : " . $value . "<br/>";
        }
    ?>

  </body>
</html>
