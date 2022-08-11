<?php
    // include('h.php');
    //1. เชื่อมต่อ database:
    include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    //2. query ข้อมูลจากตาราง tb_admin:
    $query = "SELECT * FROM planting WHERE id_user='$user_id'" or die("Error:" . mysqli_error($con));
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
    $result = mysqli_query($con, $query);
    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
    // $row_am = mysqli_fetch_assoc($result);
?>

<table border="2" class="display table table-bordered" id="example1" align="center"  >
        <a href="index.php?act=add_planting" class="bth-info">เพิ่ม</a>
        <thead>
          <tr class="info">    
            <th>สายพันธุ์</th>
            <th>วันที่ปลูก</th>
            <th>หมายเหตุ</th>
            <th>ตัวดำเนินการ</th>
          </tr>
        </thead>
      <?php
      if ($result->num_rows == 0) {
      ?>
        <tr align="center">
          <td colspan="4">ไม่พบข้อมูล</td>
        </tr>
      <?php
      } else {
        while ($row_am =  mysqli_fetch_assoc($result)){
      ?>
        <tr> 
          <td><?php echo $row_am['species']; ?></td>
          <td><?php echo $row_am['planting_date']; ?></td>
          <td><?php echo $row_am['note']; ?></td>
          <td><a href="index.php?act=" class='btn btn-success'>เก็บ</a> </td>
          </tr>
      <?php }  
      }?>
      </table>