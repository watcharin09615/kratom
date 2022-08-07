<!DOCTYPE html>
<html>
<head>
    <?php include('../h.php');?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ข้อมูลเกษตรกร</title>
</head>
<div class="container">
  <div class="row">
    <div class="col-md-12">
<form action="infouser_db.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> เลขบัตรประชาชน </div>
    <div class="col-sm-10" align="left">
        <input  name="national" type="text" required class="form-control" id="national" placeholder="เลขบัตรประชาชน" />
        
    </div>
    <div class="col-sm-3" align="right"> รหัสทะเบียนบ้าน </div>
    <div class="col-sm-8" align="left">
        <input  name="house" type="text" required class="form-control" id="house" placeholder="รหัสทะเบียนบ้าน" />
  
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> ที่อยู่  </div>
    <div class="col-sm-8" align="left">
        <input  name="address" type="text" required class="form-control" id="address" placeholder="ที่อยู่" minlength="2"  />
        <input  name="subarea" type="text" required class="form-control" id="subarea" placeholder="ตำบล" minlength="2"  />
        <input  name="area" type="text" required class="form-control" id="area" placeholder="อำเภอ" minlength="2"  />
        <input  name="province" type="text" required class="form-control" id="province" placeholder="จังหวัด" minlength="2"  />
        <input  name="postcode" type="text" required class="form-control" id="postcode" placeholder="รหัสไปรษณีย์" minlength="2"  />
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-3" align="right"> เบอร์โทร </div>
    <div class="col-sm-10" align="left">
        <input  name="tel" type="text" required class="form-control" id="tel" placeholder="เบอร์โทร" />

    </div>
    <div class="col-sm-3" align="right"> email</div>
    <div class="col-sm-10" align="left">
        <input  name="email" type="email" required class="form-control" id="email" placeholder="email" />

    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3"> </div>
    <div class="col-sm-5" align="right">
        <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> ยืนยัน  </button>      
    </div> 
    </div>
    </form>
    </div>
  </div>
</div>
