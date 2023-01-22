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
        $a = 5;
        echo "증감 연산자";
        echo "++a는 ".++$a. "입니다<br/>";
        echo "--a는 ".--$a. "입니다<br/>";
        echo "a++는 ".$a++. "입니다<br/>";
        echo "a--는 ".$a--. "입니다<br/>";

        $fru1 = ["사과", "딸기", "포도"];
        $fru2 = ["배", "수박", "키위"];

        $arr1 = array("key1" => "딸기", "key2" => "사과");
        $arr2 = array("key3"=>"키위", "key4"=>"오렌지", "key5"=>"망고");

        $result1 = $fru1 + $fru2;
        $result = $arr1 + $arr2;

        print_r($result1);
        print_r($result);
        //var_dump($result);
        $t = true;
        $f = false;
        //true => string 1이되고 false => string 빈 문자열이 된다
        echo "논리연산자<br/>";
        echo "t and f는 ".($t and $f). "입니다.<br/>";
        echo "t or f는 ".($t or $f). "입니다.<br/>";
        echo "t xor f는 ".($t xor $f). "입니다.<br/>"; //! not하고 비슷함
        echo "!t" .!$t. "입니다.<br/>";
        echo "t && f는 ".($t && $f). "입니다.<br/>";
        echo "t || f는 ".($t || $f). "입니다.<br/";
        echo "dddd".(string)false;

        //삼항연산자
        echo "<br/>삼항연산자<br/>";
        $number = 3;
        echo $number == 1 ? "1입니다.<br/>" : "1이아닙니다.<br/>";

        //문자열 합치기
        $str3 = "안녕하세요";
        $str3 .= "php공부중입니다.";  //+대신에 .을 사용
        //안녕하세요 php공부중입니다.
        // let str = "a"  str += "b"
    ?>
</body>
</html>