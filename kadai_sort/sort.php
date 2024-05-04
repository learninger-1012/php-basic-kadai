<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10 ];

        echo '昇順にソートします。';

        sort($nums);
        foreach($nums as $num){
            echo "<br>{$num}";
        }

        echo '<br>降順にソートします。';
        arsort($nums);
        foreach($nums as $num){
            echo "<br>{$num}";
        }

        ?>
    </p>
</body>

</html>
