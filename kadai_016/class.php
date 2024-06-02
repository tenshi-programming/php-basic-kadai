<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP課題「クラスを2つ作ってそれぞれのインスタンスを出力しよう」</title>
    </head>

    <body>
        <p>
            <?php
            class Food{
                private $name;
                private $price;
                public function __construct(string $name, int $price){
                    $this->name = $name;
                    $this->price = $price;
                }

                public function show_price(){
                    echo $this->price . '<br>';
                }
            }

            $sandwich = new Food('サンドイッチ',350);

            print_r($sandwich);
            ?>
        </p>
        <p>
            <?php
            class Animal{
                private $name;
                private $height;
                private $weight;
                public function __construct(string $name,int $height,int $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
                public function show_height(){
                    echo $this->height . '<br>'; 
                }
            }

            $dog = new Animal('小型犬',30,4);

            print_r($dog);
            ?>
        </p>
        <p>
            <?php
            $sandwich->show_price();
            $dog->show_height();
            ?>
        </p>
    </body>
</html>