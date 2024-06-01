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
                    echo "名前：{$value} <br>";
                } elseif($key === 'price'){
                    echo "値段：{$value} <br>";
                } else{
                    echo "産地：{$value} <br>";
                }
            }
            ?>
        </p>
    </body>
</html>