<?php
    //1. เชื่อมต่อ database:
    include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    //2. query ข้อมูลจากตาราง tb_admin:
    $query = "SELECT * FROM user JOIN petition ON user.id_user = petition.id_user" or die("Error:" . mysqli_error($con));
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
    $result = mysqli_query($con, $query);
    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
    // $row_am = mysqli_fetch_assoc($result);
?>
<table border="2" class="display table table-bordered" id="example1" align="center"  >
        <thead>
          <tr class="info">   
          <th>ชื่อ</th> 
            <th>วันที่ยื่นคำร้อง</th>
            <th>สายพันธุ์</th>
            <th>สถานะ</th>
            <th width="5%">ดูรายละเอียดข้อมูล</th>
          </tr>
        </thead>
      <?php if($result->num_rows == 0){
        ?>
         <tr align="center">
           <td colspan="4">ไม่พบข้อมูล</td>
         </tr>
       <?php

      }else{
      while ($row_am =  mysqli_fetch_assoc($result)){ ?>
        <tr> 
          <td><?php echo $row_am['name']; echo " "; echo $row_am['lastname']; ?></td>
          <td><?php echo $row_am['petition_date']; ?></td>
          <td><?php echo $row_am['species']; ?></td>
          <?php if($row_am['status'] == 1){ ?>
            <td bgcolor="FFFF89"> รอการตรวจสอบ </td>


          <?php }elseif($row_am['status'] == 2){ ?>
            <td bgcolor="88FFEF"> กำลังดำเนินการ </td>

          <?php }elseif($row_am['status'] == 3){?>
            <td bgcolor="A4FB00"> เสร็จสิ้น </td>
            
          <?php } ?>

          <td><a href="user.php?act=detail&ID=<?php echo $row_am['id_petition']; ?>" class="btn btn-info btn-sm"> รายละเอียด</a> </td>
          </tr>
      <?php } } ?>
      </table>