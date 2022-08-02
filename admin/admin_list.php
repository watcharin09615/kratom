<?php
  include('h.php');

    //1. เชื่อมต่อ database:
    include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    //2. query ข้อมูลจากตาราง tb_admin:
    $query = "SELECT * FROM user WHERE user_type=2 ORDER BY id_user ASC" or die("Error:" . mysqli_error());
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
    $result = mysqli_query($con, $query);
    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
    $row_am = mysqli_fetch_assoc($result);
?>
<table border="2" class="display table table-bordered" id="example1" align="center"  >
<a href="admin.php?act=add" class="bth-info">เพิ่ม</a>
        <thead>
          <tr class="info">    
            <th>Username</th>
            <th>name</th>
            <th width="10%">password</th>
            <th width="5%">edit</th>
            <th width="5%">delete</th>
          </tr>
        </thead>
      <?php do { ?>
        <tr>
          <td><?php echo $row_am['username']; ?></td>
          <td ><?php echo $row_am['name']; echo " "; echo $row_am['lastname']; ?></td>
          <td><a href="index.php?act=rwd&ID=<?php echo $row_am['id_user']; ?>" class="btn btn-info btn-sm"> password </a> </td>
          <td><a href="index.php?act=edit&ID=<?php echo $row_am['id_user']; ?>" class="btn btn-warning btn-sm"> แก้ไข </a> </td>
          <td><a href="admin_del_db.php?ID=<?php echo $row_am['id_user']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
        </tr>
      <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
      </table>