<?php
  include('h.php');
?>
<a href="admin.php?act=" class="bth-info">back</a>
<form action="admin_add_db.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> Username  </div>
    <div class="col-sm-8" align="left">
        <input  name="a_user" type="text" required class="form-control" id="a_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3" align="right"> Password  </div>
    <div class="col-sm-8" align="left">
        <input  name="a_pass1" type="password" required class="form-control" id="a_pass1" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-3" align="right"> Confirm Password </div>
    <div class="col-sm-8" align="left">
        <input  name="a_pass2" type="password" required class="form-control" id="a_pass2" placeholder="Confirm Password " pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-3" align="right"> ชื่อ-สกุล  </div>
    <div class="col-sm-10" align="left">
        <input  name="name" type="text" required class="form-control" id="name" placeholder="ชื่อ" />
        <input  name="lastname" type="text" required class="form-control" id="lastname" placeholder="นามสกุล" />
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3"> </div>
    <div class="col-sm-5" align="right">
        <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> เพิ่ม  </button>      
    </div> 
    </div>
    </form>
