<?php

$conn= mysqli_connect("localhost:3307","root","ehddud2020","abc_corp");

if($conn==false){
    echo '데이터베이스에 연결되지 않았습니다.';

}else{
    echo '데이터베이스에 연결되었습니다';
}

$update_num=$_POST['number'];
$update_message=$_POST['message'];
$update_name=$_POST['name'];

echo $update_num;
echo $update_message;
echo $update_name;
$sql= "UPDATE msg_board  SET message='$update_message', name='$update_name' WHERE number='$update_num'";

$result= mysqli_query($conn,$sql);



if($result==false){

    echo '수정되지 않았습니다';
}else{
    echo '수정되었습니다';
}


print "<hr/><a href='index.php'>메인화면으로 돌아가기</a> ";
mysqli_close($conn);
