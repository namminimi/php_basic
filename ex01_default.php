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
        echo "hello php";//세미콜론 주의!!!!!
    ?>
    <h2>1+1</h2>
    <?php
        echo 1+1;
    ?>
    <h2>2-1</h2>
    <?php
        echo 2-1;
    ?>
    <h2>2*3</h2>
    <?php
        echo 2*3;
    ?>
    <h2>3/2</h2>
    <?php
        echo 3/2;
    ?>
    <h2>2**2</h2>
    <?php
        echo 2**2;
    ?>
    <h2>문자열</h2>
    <?php
        echo "hello"."world<br/>";
        $int1 = 1000;
        $float1 = 31.1113;
        $str1 = "<br/>green<br/>";
        echo $int1;
        echo $float1;
        echo $str1."안녕하세요";
    ?>
</body>
</html>