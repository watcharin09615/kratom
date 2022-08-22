<?php
include('h.php');

$type_address = $_POST['f_address'];
$type_subarea = $_POST['f_sub_area'];
$type_area = $_POST['f_area'];
$type_province = $_POST['f_province'];
$type_tel = $_POST['tel'];
$type_species = $_POST['species'];
$type_quantity = $_POST['qty'];


$sql ="INSERT INTO petition (id_user,address_farm,sub_area,area,province,tel,species,quantity,status,petition_date) 
    VALUES ('$user_id','$type_address','$type_subarea','$type_area','$type_province','$type_tel','$type_species','$type_quantity','1',CURRENT_TIMESTAMP);";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('สำเร็จ');";
      echo "window.location ='index.php?act=add_petition'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php?act=add_petition'; ";
      echo "</script>";
    }
?>