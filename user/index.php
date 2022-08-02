<!DOCTYPE html>
<html>
  <head>
  <?php 
    include('h.php');
  ?>
  </head>
<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
    //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
  });
} );
 
  </script>

<body>
  <div class="container">
  <?php include('../navbar.php');?>
  <div class="row">
    <div class="col-md-3">
        <?php include('menu_left.php');?>
        <!-- Content Wrapper. Contains page content -->

    </div> 
    <div class="col-md-9">
      <?php 
      $act = $_GET['act'];
      if($act == 'petition'){
        include('user_petition_list.php');
      }elseif($act == 'add_petition'){
        include('user_petition_form_add.php');
      }else{
        ?>
        <!-- <a href="" class="bth-info">เพิ่ม</a> -->
        <?php
        include('gap.php');
      }
      ?>
    </div>
  </div>
</div>
</body>
</html>
