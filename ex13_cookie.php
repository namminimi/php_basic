<?php
    setcookie("cookie1","green");
    setcookie("cookie2", "123456", time()+10);
    setcookie("cookie3", "username");
    if(isset($_COOKIE["cookie1"])){
        echo "쿠키 1은".$_COOKIE["cookie1"];
    }
    if(isset($_COOKIE["cookie2"])){
        echo"쿠키 2는".$_COOKIE["cookie2"];
    }
?>
<a href="./ex13_cookieunset.php">쿠키 삭제하기</a>