<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = 1;
        while($i<5) {
            echo "{$i}<br/>";
            $i++;
        }
        do {
            echo "1번은 실행됨!!";
        }while(false);

        for($i=1; $i<10; $i++) {
            echo "<br/>";
            echo "{$i}단<br/>";
            for($j=1; $j < 10; $j++) {
                $n = $i * $j;
                echo "$i * $j = $n<br/>";
            };
        };

        //forEach
        $arr = array(1,2,3,4,5);
        $arr2 = [1,2,3,4,5];

        foreach($arr as $value) {
            echo "$value 입니다<br/>";
        }

        $arr3 = array("key1" =>"수박", "key2"=> "딸기", "key3"=>"키위");
        foreach($arr as $key => $value) {
            echo "배열에서 key는 {$key}이고 value 는 {$value}이다<br/>";
        }
    ?>
</body>
</html>