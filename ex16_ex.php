<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return inputCh()"> 
        <input type="text"	name="userId" id="userId" required>
        <p id="ii">dddd</p>
        <input type="text"	name="userPw" required>
        <input type="submit" value="전송">
    </form>
    <script>
        function inputCh(){ 
            const input1 = document.querySelector("#userId");
            const p = document.querySelector("#ii");
            if(input1.value.length < 5){
                p.style.color="red";
                p.innerHTML="id는 5글자 이상 적으셔야합니다.";
                return false;
            }
        }    
    </script>
</body>
</html>