<!DOCTYPE html>
<html>
  <head>
  <?php 
    include('h.php');
  ?>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
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
    <nav class="navber">
      <div class="navber-container container">
         <?php include('menu_left.php');?>
          <!-- Content Wrapper. Contains page content -->

      </div>
      
    </nav>
     
    <div class="col-md-9">
      <?php 
      $act = $_GET['act'];
      if($act == 'petition'){
        include('user_petition_list.php');
      }elseif($act == 'add_petition'){
        include('user_petition_form_add.php');
      }elseif($act == 'planting'){
        include('planting_list.php');
      }elseif($act == 'add_planting'){
        include('planting_add.php');
      }else{
        include('gap.php');
      }
      ?>
    </div>
  </div>
</div>
</body>
</html>
