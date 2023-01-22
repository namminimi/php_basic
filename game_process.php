<?php
    $user = $_POST["user"];
    $randnum = rand(1,3);
    $com = $randnum == 1 ? "가위" : $randnum == 2 ? "바위" : "보";
    echo "사용자는".$user."를 냈습니다.<br/>";
    echo "컴퓨터는".$com."를 냈습니다.<br/>";
    if($user == $com) {
        echo "비겼습니다.";
    }elseif(($user == "가위" && $com == "보")||
    ($user == "바위" && $com == "가위") ||
    ($user == "보" && $com == "바위")
    ){
        echo "사용자가 이겼습니다.";
    }else {
        echo "컴퓨터가 이겼습니다.";
    }
?>