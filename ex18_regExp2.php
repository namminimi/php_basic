<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="jumin" id="jumin">
    <button onclick="juminCh()">확인</button>
    <input type="text" name="userPass" id="userPass">
    <button onclick="passCh()">확인</button>
    <script>
        function juminCh() {
            let juminPattern = /^\d{6}-[1-4]\d{6}$/; //^시작 $끝
            if(!juminPattern.test(document.querySelector("#jumin").value)){
                alert("형식에 맞지않는 주민번호입니다.")
            }else {
                alert("형식에 맞습니다.");
            }
        }
        //영문, 숫자, 특수문자를 조합하여 최소 8자리 이상의 비밀번호 만들기
        //시작은 영문자로
        function passCh(){
            //let passPattern = /^[a-zA-Z][a-zA-Z0-9!@#*#$%^]{7,}$/;
            //"pinkcandy02"
            let pw = document.querySelector("#userPass").value;
            //숫자를 입력했는지 체크 num이 -1이 아니면 숫자가 있음
            let num = pw.search(/[0-9]/g)
            //영문자가 있는지 체크 eng가 -1이 아니면 있음.
            let eng = pw.search(/[a-z]/g);
            //영어 대문자가 있는지 체크 eng2가 -1이 아니면 있음.
            let eng2 = pw.search(/[A-Z]/g);
            //특수문자 포함하고 있는지 체크 spe가 -1이 아니면 있음.
            let spe = pw.search(/[~!@#$%^&*]/g);
            //문자길이가 8이상
            if(pw.length < 8) {
                alert("8자리 이상 입력하세요.");
                return false;
            } else if(pw.search(/\s/) > 0){
                alert("공백없이 입력해주세요.");
                return false;
            } else if (num<0 || eng < 0 || eng2 < 0 || spe < 0) {
                alert("영문재소문자, 숫자, 특수문자를 혼합하여 입력해주세요");
                return false;
            } else {
                alert("통과")
            }
        }
    </script>
</body>
</html>