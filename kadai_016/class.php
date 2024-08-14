<!DOCTYPE html>
<html long="ja">

<head>
    <meta charset="UFT-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;
      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
      }
      // メソッドを定義する
      public function show_price() {
          echo 'price: ' . $this->price . '<br>';
      }
    }

    $food = new Food('potato',250);
    // 価格を表示
    print_r($food);
    $food->show_price();

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name,int $height,int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
      }

      // 高さを表示するためのメソッド
      public function show_height() {
          echo 'Height: ' . $this->height . '<br>';
      }
    }

    $animal = new Animal('dog',60,5000);
    // 高さを表示
    print_r($animal);
    $animal->show_height();
    ?>
  </p>
</body>

</html>