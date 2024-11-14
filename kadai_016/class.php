<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題16</title>
 </head>
 
 <body>
     <p>
        <?php
        // クラスの定義
        class Food {
            // プロパティの定義
            private $name;
            private $price;

            // メソッドの定義
            public function set_price(int $price) {
                    $this->price = $price;
            }
            public function show_price() {
                    echo $this->price . '<br>';
            }
            
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
            }
        }

        class Animal {
            // プロパティの定義
            private $name;
            private $height;
            private $weight;

            // メソッドの定義
            public function set_height(int $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            }
        }

        // インスタンス化する
        $apple = new Food('りんご', 100);
        $cat = new Animal('ねこ', 25, 5);

        //  各プロパティの値を出力する
        print_r($apple);
        echo '<br>';
        print_r($cat);
        echo '<br>';

        // メソッドへアクセス
        $apple->set_price('100');
        $apple->show_price();

        $cat->set_height('25');
        $cat->show_height();
        ?>
    </p>
</body>

</html>