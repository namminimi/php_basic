<?php
    var_dump($_FILES);
    //임시로 저장된 정보 (tmp_name)
    $tempFile = $_FILES["imgfile"]["tmp_name"];
    $resFile = "./img/{$_FILES['imgfile']['name']}";
    //파일타입 및 확장자 체크
    //image/jpeg 문자열을 배열로 반환 => ["image", "jpeg"]
    //expload(구분자, 문자열) => 문자열을 구분자로 구분하여 배열로 반환
    $filetypeExt = explode("/",$_FILES["imgfile"]["type"]); 
    var_dump($filetypeExt);

    //파일타입
    $fileType = $filetypeExt[0]; //image
    //파일 확장자
    $fileExt = $filetypeExt[1]; //jpeg 이미지 확장자
    //확장자 검사
    $extStatus = false;

    //jpeg, jpg, gif, png 일때 $extStatus = true;
    switch($fileExt) {
        case 'jpeg':
        case 'jpg':
        case 'png':
        case 'gif':
            $extStatus = true;
            break;
        default:
            echo "이미지 전용 확장자(jpeg,jpg,png,gif)외에는 사용이 불가합니다.";
            break;                 
    }
    //이미지 파일이 맞는지 검사
    if($fileType == 'image') {
        //확장자 체크
        if($extStatus){
            $imageUpload = move_uploaded_file($tempFile, $resFile);
            //업도르 성공 여부
            if($imageUpload) {
                echo "파일이 정상적으로 업로드 되었습니다.<br/>";
                echo "<img src='{resFile}' width='200'>";
            }else {
                echo "파일 업로드에 실패했습니다.";
            }
        }
    }else{
        echo "이미지 파일이 아닙니다.";
    }
    
?>