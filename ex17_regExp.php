<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="enginput" name="enginput">
    <button onclick=engCh()>확인</button>
    <input type="text" id="numinput" name="numinput">
    <button onclick=numCh()>확인</button>0
    <input type="text" id="telinput" name="telinput">
    <button onclick=telCh()>확인</button>0
    <script>
        //input에 입력값이 영어인지 체그
        function engCh() {
            let eng = /^[a-z-A-Z]$/;
            let engInput = document.querySelector("#enginput");
            if(eng.test(engInput.value)) {
                console.log("영어만 입력해주세요.")
            }else {
                console.log("영어입ㄴ티다.")
            }
        }
        //input 입력값이 숫자인지 체크
        function numCh(){
            let num = /^[0-9]*$;
            let numInput = document.querySelector("#numinput");
            if(!num.text(numInput.value)) {
                console.log("숫자만 입력해주세요")
            } else {
                console.log("숫잡입니다.")
            }
        }

        //010-1234-1234형태인지 체크하는 함수
        function telCh(){
            let telPattern = /^\d{3}-\d{4}-\d{4}$/;
            let telinput = document.querySelector("#telinput");
            if(!telPattern.test(telinput.value)){
                console.log("전화번호 형식에 맞지않습니다.");
            } else [
                console.log("일치합니다.")
            ]
        }
    </script>
</body>
</html>