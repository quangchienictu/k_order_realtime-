<?php 
    require("session_user.php");
if(isset($_SESSION['login_user'])){
  $sql2="SELECT * FROM user where sdt_user = ".$_SESSION['login_user'];
  $result2 = $conn->query($sql2);
  $data = $result2->fetch_assoc();
  if($data['quyen_user']==1){
    
  }else{
    header('Location:admin.php');
 }
}else{
 header("location: login.php");
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check book</title>
     <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header_user.css">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
    <link rel="stylesheet" href="../css/book_product.css">
    <?php require("../css/style.php"); ?>
</head>
<body>
        <?php 
       
       
        
require("header_user.php")
         ?> 
        <div class="checkbook__body ">

            <div class="checkbook__header">
                 <b style="color: white;font-size:25px;line-height: 30px;">Nhân viên : <?=$data['ten_user']?></b>
                <h4 class="header__text">ĐẶT BÀN</h4>  
            </div>
        <div class="row">   
            <?php require("select_book.php");?>
            </div>
        </div>
  
</body>
</html>