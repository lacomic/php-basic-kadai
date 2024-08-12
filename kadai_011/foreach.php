<!DOCTYPE html>
<html long="ja">

<head>
    <meta charset="UFT-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 連想配列に値を代入する
        $prodact = ['名前' => '玉ねぎ','値段' => 200,'産地' => '北海道'];

        // 連想配列$prodactのキーと値をコロン（：）で区切り、要素ごとに改行して出力する
        foreach($prodact as $key => $value){
          echo "{$key} : {$value}<br>";
        }
        ?>
    </p>

</body>

</html>
