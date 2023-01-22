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
        //내림 floor()올림 ceil() 반올림 round()
        echo "내림 floor()올림 ceil() 반올림 round()<br/>";
        echo floor(11.94). "<br/>";
        echo floor(11.14). "<br/>";
        echo floor(11.56). "<br/>";
        echo ceil(12.123). "<br/>";
        echo ceil(12.56). "<br/>";
        echo ceil(12.8). "<br/>";
        echo round(12.123). "<br/>";
        echo round(12.56). "<br/>";
        echo round(12.8). "<br/>";
        //쉼표넣기 number_format(숫자, 소수자리수, "소수점기호", "천단위기호")
        echo "쉼표넣기 number_format(숫자, 소수자리수, 소수점기호, 천단위기호)<br/>";
        echo number_format(2022.0108)."<br/>";
        echo number_format(2022.0108,3)."<br/>";
        echo number_format(2022.0108,2,",",",")."<br/>";
        //최소값 min() 최대값 max()
        echo "최소값 min() 최대값 max()<br/>";
        $numbers = [10, 30, 20, 60, 22, 70];
        echo min(10, 20, 30, 50)."<br/>";
        echo max(10, 20, 30, 50)."<br/>";
        echo min($numbers)."<br/>";
        echo max($numbers)."<br/>";
        //랜덤 rand()
        echo "랜덤 rand()<br/>";
        echo rand(1,5);
    ?>
</body>
</html>