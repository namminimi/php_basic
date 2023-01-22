<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>문자열 내장함수</h2>
    <h3>배열을 문자열로 리턴 join(), inplode()</h3>
    <?php
        $newArr = ["green", "javascript", "php"];
        $str = implode("!!", $newArr);
        $str2 = join("$$", $newArr);
        echo $str."<br/>";
        echo $str2."<br/>";
    ?>
    <h3>문자열을 배열로 리턴 explode()</h3>
    <?php
        $str3 = "green.com";
        $newArr2 = explode(".", $str3);
        var_dump($newArr2);
        echo "<br/>";
        print_r($newArr2);
    ?>
    <h1>문자열 검색 substr(), strstr(), strops(), strcontains()</h3>
    <?php
        $str4 ="greencomputer";
        $str5 = substr($str4, 2, 3);
        
        echo $str5."<br/>"; //een

        $str6 = strstr($str4, "om", true);
        echo $str6."<br/>";
        $strIndex = strpos($str4,"c");
        echo $strIndex."<br/>";
        /* $result1 = str_contains($str4, "green") ? "있습니다.<br/>" : "없습니다.<br/>";
        $result2 = str_contains($str4, "abc") ? "abc는 있습니다.<br/>" : "abc는 없습니다.<br/>";
        echo "green은".$result1;
        echo "abc는".$result2; */
    ?>
    <h3>문자열 변경하기 strtoupper(), strtolower(), ucwords(), strtr()</h3>
    <?php
        $str7 = "Hello green COM";
        $replace_arr = [
            'Hello' => 'welcome',
            'green' => 'green',
            'COM' => "COM"
        ];

        echo strtoupper($str7)."<br/>";
        echo strtolower($str7)."<br/>";
        echo ucwords($str7)."<br/>";
        echo strtr($str7, "Hello", "welcome")."<br/>";
        echo strtr($str7, $replace_arr);
    ?>
</body>
</html>