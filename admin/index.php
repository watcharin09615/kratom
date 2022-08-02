<!DOCTYPE html>
<html>
  <head>
  <?php 
    include('h.php');
  ?>
  </head>
<script>    
$(document).ready(
  function() {
    $('#example1').DataTable( 
      {
      "aaSorting" :[[0,'ASC']],
    //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
      }
    );
  } 
);
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
      <p></p>
      <?php 
      $act = $_GET['act'];
      if($act == 'add'){
        include('admin_add.php');
      }elseif($act == 'list'){
        include('admin_petition_list.php');
      }elseif($act == 'detail'){
        include('detail_petition.php');
      }elseif($act == 'memberadmin'){
        include('admin_list.php');
      }elseif($act == 'memberuser'){
          include('user_list.php');
      }else{
        include('gap.php');
      }
      ?>
    </div>
  </div>
</div>
</body>
</html>


