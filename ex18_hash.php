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
        $password = "helloGreen";
        $hashpass1 = password_hash($password, PASSWORD_DEFAULT);
        $hashpass2 = password_hash($password, PASSWORD_DEFAULT);
        $hashpass3 = password_hash($password, PASSWORD_DEFAULT);
        echo $hashpass1."<br/>";
        echo $hashpass2."<br/>";
        echo $hashpass3."<br/>";

        $testText = "helloGreen";
        $testText2 = "hello";
        echo password_verify($testText, $hashpass1) ? "일치함<br/>" : "다름<br/>";
        echo password_verify($testText, $hashpass2) ? "일치함<br/>" : "다름<br/>";
        echo password_verify($testText, $hashpass3) ? "일치함<br/>" : "다름<br/>";
    ?>
</body>
</html>