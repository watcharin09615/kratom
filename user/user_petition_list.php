<?php
    //1. เชื่อมต่อ database:
    include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    //2. query ข้อมูลจากตาราง tb_admin:
    $query = "SELECT * FROM user JOIN userpetition ON user.id_user = userpetition.id_user JOIN petition ON petition.id_petition = userpetition.id_petition WHERE user.id_user = $user_id;" or die("Error:" . mysqli_error());
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
    $result = mysqli_query($con, $query);
    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
    $row_am = mysqli_fetch_assoc($result);
?>

<table border="2" class="display table table-bordered" id="example1" align="center"  >
        <a href="index.php?act=add_petition" class="bth-info">เพิ่ม</a>
        <thead>
          <tr class="info">    
            <th>พันธุ์</th>
            <th>จำนวน</th>
            <th>วันที่ยื่นคำร้อง</th>
            <th>วันที่ดำเนินการเสร็จสิ้น</th>
            <th>สถานะ</th>
          </tr>
        </thead>
      <?php do { ?>
        <tr> 
          <td><?php echo $row_am['species']; ?></td>
          <td><?php echo $row_am['quantity']; ?></td>
          <td><?php echo $row_am['petition_date']; ?></td>
          <td><?php echo $row_am['succes_date']; ?></td>
          <td ><?php echo $row_am['status']; ?></td>
          </tr>
      <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
      </table>