<?php
    setcookie("cookie1", "",time()-10);
    if(isset($_COOKIE["cookie1"])){
        echo "쿠키 1은".$_COOKIE["cookie1"];
    }else {
        echo "쿠키1은 사라짐";
    }
    if(isset($_COOKIE["cookie2"])){
        echo "쿠키 2은".$_COOKIE["cookie2"];
    }else {
        echo "쿠키2은 사라짐";
    }
    if(isset($_COOKIE["cookie3"])){
        echo "쿠키 3은".$_COOKIE["cookie3"];
    }else {
        echo "쿠키3은 사라짐";
    }
?>