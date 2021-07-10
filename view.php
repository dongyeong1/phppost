<?php
    echo 'test';

    $conn = mysqli_connect("localhost:3307","root","ehddud2020","abc_corp");
    //$conn에 데이터베이스에 접속을 하라고 저장시킴

    if(!$conn){
        echo 'db에연결하지 못했습니다'.mysqli_connect_error();
    }else{
        echo 'db에 접속했습니다!!';
    }

    //msg_board에서 조회하기
    $view_num=$_GET['number'];

    //view_num은 a태그에서 넘어오는것

    $sql= "SELECT * FROM msg_board where number= $view_num";
    $result= mysqli_query($conn,$sql);
    $list='';

    // print_r($result);

  
    mysqli_close($conn);

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view dong 게시판</title>
</head>

<body>
    <h1>게시판</h1>
    <h2>글 내용</h2>
<?php
if($row=mysqli_fetch_array($result)){
     
?>
<h3>글번호: <?=$row['number']?> / 글쓴이: <?= $row['name'] ?></h3>
<div>
<?= $row['message'] ?>

</div>
<?php
}

?>
<p><a href="index.php">메인화면으로 돌아가기</a></p>
<p><a href="update.php?number=<?= $row['number'] ?>"> 수정하기</a></p>



</body>

</html>