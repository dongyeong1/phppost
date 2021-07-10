<?php
$conn= mysqli_connect("localhost:3307","root","ehddud2020","abc_corp");

if(!$conn){
    echo 'db에연결안됬습니다';
    mysqli_connect_error();
}else{
    echo 'db에 접속했습니다';
}

$delnum=$_POST['delnum'];

$sql="DELETE FROM msg_board where number = $delnum";
 mysqli_query($conn,$sql);

 $sql2="SELECT * FROM msg_board";
 $result=mysqli_query($conn,$sql2);

if($result===false){
    echo '삭제되지 않았습니다';
}else{
    echo '정상적으로 삭제 되었습니다.';
}
$list='';

while($row=mysqli_fetch_array($result)){
$list=$list."<li>{$row['number']}: <a href=\"view.php?number={$row['number']}\"> {$row['name']}</a></li>";
}
echo $list;

print "<hr/><a href='index.php>메인화면으로 돌아가기</a> ";

?>