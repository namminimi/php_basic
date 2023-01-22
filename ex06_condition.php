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
        $n = $_GET['num1'];
        if($n % 3 == 0) {
            echo "{$n}은 3의 배수이다.<br/>";
        } elseif($n % 5 == 0) {
            echo "{$n}은 5의 배수이다.<br/>";
        } else {
            echo "{$n}은 3과 5의 배수가 아니다.";
        }

        $score = 100;
        switch($score) {
            case 100:
                echo "점수는 100점입니다.";
                break;
            case 90:
                echo "점수는 90점입니다.";
                break;
            case 80:
                echo "점수는 80점입니다.";
                break;
            default:
                echo "점수는 80점 미만입니다.";            
        }
    ?>
</body>
</html>