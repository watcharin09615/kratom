<?php
include('h.php');

$species = $_POST['species'];
$qty= $_POST['qty'];
$date = $_POST['date'];
$note = $_POST['note'];



$sql ="INSERT INTO planting (id_user,species,qty,planting_date,note) 
    VALUES ('$user_id','$species','$qty','$date','$note');";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('สำเร็จ');";
      echo "window.location ='index.php?act=planting'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.history.back()'; ";
      echo "</script>";
    }
?>