<?php
$conn =mysqli_connect("localhost:3307","root","ehddud2020","abc_corp");
//$conn에 데이터베이스에 접속을 하라고 저장시킴

if(!$conn){
    echo 'db에연결하지 못했습니다'.mysqli_connect_error();
}else{
    echo 'db에 접속했습니다';
}

$user_name=$_POST['name'];
$user_msg=$_POST['message'];

$sql="INSERT INTO msg_board(name, message) VALUES ('$user_name','$user_msg')";
//number는 자동으로 숫자가 올라가게 설정해놓았다.

$result =mysqli_query($conn,$sql);

if($result===false){
    echo '저장하지 못했습니다';
    error_log(mysqli_error($link));

}else{
    echo "저장성공";
}


mysqli_close($conn);
print "<hr/><a href='index.php'>메인화면으로 돌아가기</a>";



//insert into 테이블명 (컬럼1,컬럼2) values(컬럼1값, 컬럼2값); 
?>
 