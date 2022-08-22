<?php
  include('h.php');

    //1. เชื่อมต่อ database:
    include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    //2. query ข้อมูลจากตาราง tb_admin:
    $query = "SELECT * FROM user WHERE user_type=1 ORDER BY id_user ASC" or die("Error:" . mysqli_error($con));
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
    $result = mysqli_query($con, $query);
    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
    // $row_am = mysqli_fetch_assoc($result);
?>
<table border="2" class="display table table-bordered" id="example1" align="center"  >
        <thead>
          <tr class="info">    
            <th>Username</th>
            <th>name</th>
            <th>สถานะการใช้งาน</th>
            <th width="5%">delete</th>
          </tr>
        </thead>
      <?php
      if($result->num_rows == 0){
        ?>
        <tr align="center">
          <td colspan="4">ไม่พบข้อมูล</td>
        </tr>
      <?php

      } else {
      while ($row_am =  mysqli_fetch_assoc($result)){ ?>
        <tr>
          <td><?php echo $row_am['username']; ?></td>
          <td ><?php echo $row_am['name']; echo " "; echo $row_am['lastname']; ?></td>

          <?php if($row_am['user_status'] == 1){ ?>
            <td> กำลังใช้งาน </td>
            <td><a href="user_del_db.php?ID=<?php echo $row_am['id_user']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('ยันยันการปิดการใช้งาน')">ปิดการใช้งาน</a> </td>

          <?php }elseif($row_am['user_status'] == 0){ ?>
            <td> ถูกปิดงานใช้งาน </td>
            <td><a href="user_enable_db.php?ID=<?php echo $row_am['id_user']; ?>" class='btn btn-success'  onclick="return confirm('ยืนยันเปิดการใช้งาน')">เปิดการใช้งาน</a> </td>

          <?php }?>
        </tr>
      <?php } } ?>
      </table>