<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>11章課題</title>
</head>

<body>
  <p>
    <?php
    $vegetable = [
      '名前' => '玉ねぎ',
      '価格' => 200,
      '産地' => '北海道'
    ];


    // 連想配列$vegetableのキーと値を順番に出力する
    foreach ($vegetable as $key => $value) {
      echo "{$key}: {$value} <br> " ;
    }

    ?>
  </p>
</body>

</html>
