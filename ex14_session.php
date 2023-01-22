<?php
    //세션시작
    session_start();
    //세션생성
    $_SESSION["session1"] = "green";
    $_SESSION["session2"] = "123456";
    echo $_SESSION["session1"];
    echo $_SESSION["session2"];
?>
<a href="ex14_secssionunset.php">세션삭제</a>