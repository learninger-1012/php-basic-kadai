<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array,bool $order){
            if($order){
                echo '<br>昇順にソートします。';
                sort($array);
                foreach($array as $num){
                    echo '<br>';
                    echo $num;
                }
            }else{
                echo '<br>降順にソートします。';
                arsort($array);
                foreach($array as $num){
                    echo '<br>';
                    echo $num;
                }            
            }
        }

        $nums = [15, 4, 18, 23, 10 ];

        sort_2way($nums,True);
        sort_2way($nums,FALSE);
        
        ?>
    </p>
</body>
</html>