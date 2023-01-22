<?php
    $conn = mysqli_connect("localhost", "root", "1234","green");
    echo "mysql 연결테스트 <br/>";
    if($conn) {
        echo "성공";
    }else {
        echo "실패";
    }
?>