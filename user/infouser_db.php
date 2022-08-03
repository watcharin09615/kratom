<?php
include('h.php');
$national = $_POST['national'];
$house = $_POST['house'];
$address = $_POST['address'];
$subarea = $_POST['subarea'];
$area = $_POST['area'];
$province = $_POST['province'];
$postcode = $_POST['postcode'];
$tel = $_POST['tel'];
$email = $_POST['email'];


$sql ="INSERT INTO infouser (id_user,national_id,house_id,address,sub_area,area,province,postcode,tel,email) 
    VALUES ('$user_id','$national','$house','$address','$subarea','$area','$province','$postcode','$tel','$email');";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('บันทึกสำเร็จ');";
      echo "window.location ='index.php?act='; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.history.back();";
      echo "</script>";
    }
?>