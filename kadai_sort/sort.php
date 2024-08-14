<!DOCTYPE html>
<html long="ja">

<head>
    <meta charset="UFT-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          function sort_2way($array,$order){
            // trueならば昇順、falseならば降順
              if ($order) {
                  echo '昇順にソートします。<br>';
                  sort($array); // 引数に直接配列を渡す
              } else {
                  echo '降順にソートします。<br>';
                  rsort($array); // 引数に直接配列を渡す
              }

              // ソート結果を表示
              foreach ($array as $nums) {
                  echo $nums . '<br>'; // 各数値を改行して表示
              }
              echo '<br>'; // 各ソート毎に改行
          }

          // ソートする配列
          $nums = [15, 4, 18, 23, 10];

          // 昇順ソートの呼び出し
          sort_2way($nums,true);

          // 降順ソートの呼び出し
          sort_2way($nums,false);
        ?>
    </p>

</body>


</html>