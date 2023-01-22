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
        //define("상수이름", "값", 대소문자구분 false구분함/true구분안함)함수
        //const PHP = "php수업에 잘 오셨습니다."
        define("PHP", "php수업에 잘 오셨습니다.<br/>", false); //false대소문자 구분가능 
        echo "aa";
        echo PHP;
        
        function defFunc(){
            echo PHP;
            define("abc", "곧 점심");
        }
        defFunc();
        echo abc;

    ?>
</body>
</html>