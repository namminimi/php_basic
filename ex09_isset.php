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
        $testInt1 = 0;
        $testInt2 = 100;
        $testStr1 = "0";
        $testStr2 = "100";
        $testStr3 = "abcd";
        $testStr4 = "";
        $testbool1 = true;
        $testbool2 = false;
        $testnull = null;

        //isset($var) 변수가 설정되었는지 확인
        //설정이 되었으면 true 설정이 되지 않았으면 false를 반환
        //empty($var) 변수가 비어있는지 확인
        //비어있으면 true비어있지 않다면 false를 반환
        //0는 비어있다고 인식
        //1. int 0
        echo empty($testInt1) ? "int 0 empty는 Y <br/>"
        : "int 0 empty는 N <br/>"; //비어있는지 체크
        echo isset($testInt1) ? "int 0 isset는 Y <br/>"
        : "int 0 isset은 N <br/>"; //null이 아닌지 체크


        //2. int 0외의 숫자
        echo empty($testInt2) ? "int 100 empty는 Y <br/>"
        : "int 100 empty는 N <br/>"; //비어있는지 체크
        echo isset($testInt2) ? "int 100 isset는 Y <br/>"
        : "int 100 isset은 N <br/>"; //null이 아닌지 체크

        //3. str "0"
        echo empty($testStr1) ? "str '0' empty는 Y <br/>"
        : "str '0' empty는 N <br/>"; //비어있는지 체크
        echo isset($testStr1) ? "str '0' isset는 Y <br/>"
        : "str '0' isset은 N <br/>"; //null이 아닌지 체크

        //4. str "100"
        echo empty($testStr2) ? "str '100' empty는 Y <br/>"
        : "str '100' empty는 N <br/>"; //비어있는지 체크
        echo isset($testStr2) ? "str '100' isset는 Y <br/>"
        : "str '100' isset은 N <br/>"; //null이 아닌지 체크

        //5. str "abcd"
        echo empty($testStr3) ? "str 'abcd' empty는 Y <br/>"
        : "str 'abcd' empty는 N <br/>"; //비어있는지 체크
        echo isset($testStr3) ? "str 'abcd' isset는 Y <br/>"
        : "str 'abcd' isset은 N <br/>"; //null이 아닌지 체크

        //6. str ""
        echo empty($testStr4) ? "str '' empty는 Y <br/>"
        : "str '' empty는 N <br/>"; //비어있는지 체크
        echo isset($testStr4) ? "str '' isset는 Y <br/>"
        : "str '' isset은 N <br/>"; //null이 아닌지 체크

        //7. bool true
        echo empty($testbool1) ? "boolean true empty는 Y <br/>"
        : "boolean true empty는 N <br/>"; //비어있는지 체크
        echo isset($testbool1) ? "boolean true isset는 Y <br/>"
        : "boolean true isset은 N <br/>"; //null이 아닌지 체크

        //8. bool false
        echo empty($testbool2) ? "boolean false empty는 Y <br/>"
        : "boolean false empty는 N <br/>"; //비어있는지 체크
        echo isset($testbool2) ? "boolean false isset는 Y <br/>"
        : "boolean false isset은 N <br/>"; //null이 아닌지 체크

        //9. null
        echo empty($testnull) ? "null empty는 Y <br/>"
        : "null empty는 N <br/>"; //비어있는지 체크
        echo isset($testbool2) ? "null isset는 Y <br/>"
        : "null isset은 N <br/>"; //null이 아닌지 체크
    ?>
</body>
</html>