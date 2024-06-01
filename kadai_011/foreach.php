<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP課題「forach文を使って連想配列の値とキーを出力しよう」</title>
    </head>

    <body>
        <p>
            <?php

            $vegetables = ['name'=>'玉ねぎ', 'price'=>200, 'area'=>'北海道'];

            foreach($vegetables as $key => $value){
                if($key === 'name'){
                    echo "{$key}:{$value} <br>";
                } elseif($key === 'price'){
                    echo "{$key}:{$value} <br>";
                } else{
                    echo "{$key}:{$value} <br>";
                }
            }
            ?>
        </p>
    </body>
</html>