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
        echo "integer타입의 크기는". PHP_INT_SIZE."바이트 입니다.</br>";
        echo "integer타입이 표현할수 있는 가장 큰수는" .PHP_INT_MAX."</br>";
        //String
        $str1 = "안녕하세요";
        $str2 = "green";
        echo strlen($str1)."<br/>";
        echo strlen($str2);
        //Array
        $day = array("일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일", "일요일");
        echo $day[0]."<br/>";
        var_dump($day);
        //연관배열
        $arr = array("name"=>"green", "age"=>30);
        echo $arr["name"]."<br/>";
        var_dump($arr)."<br/>";

        $fruits = ["🍿", "🌭", "🍟"];
        echo $fruits[2]."<br/>";

        $fruits2 = ["key1"=>"사과", "key2"=>"오렌지", "key3"=> "딸기"];
        echo $fruits2["key3"];
        //배열생성하기
        //1. array("값1", "값2", "값3")
        //* array("name"=>"green", "age"=>30)
        //2. ["값1", "값2", "값3"]
        // ["key1"="값1", "key2"=>"값2"]

        $myVar1 = "abc";
        $myVar2 = 100;
        $myVar3 = true;
        $myVar4 = NULL;

        echo gettype($myVar1)."<br/>"; //gettype은 변수의 타입을 볼수있음
        echo gettype($myVar2)."<br/>";
        echo gettype($myVar3)."<br/>";
        echo gettype($myVar4)."<br/>";
        echo gettype($fruits)."<br/>";
        echo gettype($fruits2)."<br/>";

        //형변환 (int) integer로 변환
        //(string) string으로 변환
        //(bool) boolean으로 변환

        echo (int)1.12345."<br/>";
        echo (int)"1020"."<br/>";
        echo (int)"그린"."<br/>";
        echo (bool)"그린"."<br/>";

    ?>
</body>
</html>