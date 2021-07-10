<?php

$conn=mysqli_connect("localhost:3307", "root", "ehddud2020", "abc_corp");

if(!$conn){
    echo 'db에 연결하지 못했습니다'.mysqli_connect_error();
}else{
    echo 'db 접속했습니다';
}

$update_num=$_GET['number'];
// $update_message=$_POST['message'];
// $update_name=$_POST['name'];
// $sql= "UPDATE abc_corp SET message=$update_message name=$update_name where number=$update_num ";

// $result= mysqli_query($conn,$sql);

// mysqli_close($conn);

$sql= "SELECT * FROM msg_board where number= $update_num";
$result= mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>글수정하기</h1>
    <?php
    if($row=mysqli_fetch_array($result)){
        ?>
<form action="update_result.php" method="post">
<input type="hidden" name="number" value="<?= $update_num ?>">
<p>
    <label for="name">이름:</label>
    <input type="text" id="name" name="name" value ="<?= $row['name']?>">
</p>
<p>
    <label for="message">내용:</label>
    <textarea name="message" id="message" cols="30" rows="10"><?= $row['message']?></textarea>
    <input type="submit" value="글쓰기">
</p>


</form>

<?php 
}
mysqli_close($conn);
?>
   

    

</body>
</html>