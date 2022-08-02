<?php
include('h.php');
include('../condb.php');

$type_address = $_POST['f_address'];
$type_subarea = $_POST['f_sub_area'];
$type_area = $_POST['f_area'];
$type_province = $_POST['f_province'];
$type_tel = $_POST['tel'];
$type_species = $_POST['species'];
$type_quantity = $_POST['qty'];


$sql ="INSERT INTO petition (address_farm,sub_area,area,province,tel,species,quantity,status) 
    VALUES ('$type_address','$type_subarea','$type_area','$type_province','$type_tel','$type_species','$type_quantity','checking')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      $sql2 ="INSERT INTO userpetition (id_user,id_petiton) VALUES ('$user_id')";
      $result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
      mysqli_close($con);

      
      echo "alert('สำเร็จ $user_id ฟามรหัส ');";
      echo "window.location ='index.php?act=add_petition'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php?act=add_petition'; ";
      echo "</script>";
    }
?>