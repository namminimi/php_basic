<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php변수는 지역변수, 전역변수, 정적 변수 -->
    <?php 
        //전역변수
        $num = 50;
        function varFunc(){
            //지역변수 선언
            $localVar = 10;
            global $num; //global을 써줘야 전역변수에 접근가능
            echo "함수내부에서 어쩌고저쩌고 ${localVar}이다</br>";
            echo "함수 내부에서 호출한 지역변수 localVal의 값은 ".$localVar."입니다</br>"; //.은 +랑 같다
            echo "함수 외부에서 작성된 전역변수 num의 값은".$num."입니다</br>";
            echo "전역변수는 슈퍼변수글로벌의 배열에 있다".$GLOBALS['num']."이다"; // 글로벌이라는 배열안에 변수들 있음
        }
        varFunc();
        function counter(){
            static $count = 0;
            echo "count값은 ${count}이다.</br>";
            $count++;
        }
        counter();
        counter();
        counter();
        $float2 = 3.123456;
        $str2 = "ddddd";
        var_dump($num."</br>");
        var_dump($float2."</br>");
        var_dump($str2);
    ?>
</body>
</html>