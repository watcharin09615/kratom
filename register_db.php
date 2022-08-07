<meta charset="utf-8">
<?php
include('condb.php');
	$a_pass1  = $_POST["a_pass1"];
	$a_pass2  = $_POST["a_pass2"];
  $a_user = $_POST["a_user"];
  $a_name = $_POST["name"];
  $a_lastname = $_POST["lastname"];

  $check = "SELECT username FROM user WHERE username = '$a_user'";
  $result1 = mysqli_query($con, $check) or die(mysqli_error());
  $num=mysqli_num_rows($result1);

  if($num > 0)
  {
  echo "<script>";
  echo "alert(' Username นี้มีผู้ใช้งานแล้วกรุณาเปลี่ยน Username !');";
  echo "window.history.back();";
  echo "</script>";
  }else{
    if($a_pass1 != $a_pass2){
      echo "<script type='text/javascript'>";
      echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
      echo "window.history.back();";
      echo "</script>";
    }else{
    $sql = "INSERT INTO `user`(`username`, `password`, `name`,`lastname`, `user_type`) VALUES ('$a_user','$a_pass1','$a_name','$a_lastname','1')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    }
    if($result){
    echo "<script type='text/javascript'>";
    echo "alert('ลงทะเบียนสำเร็จ');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
    }else{
    echo "<script type='text/javascript'>";
    echo "window.history.back();";
    echo "</script>";
    }
  }
?>