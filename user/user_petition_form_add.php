
<a href="user.php?act=petition" class="bth-info">back</a>
<form action="user_petition_form_add_db.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> กระท่อมสายพันธ์ุ </div>
    <div class="col-sm-10" align="left">
        <input  name="species" type="text" required class="form-control" id="species" placeholder="ชื่อสายพันธุ์" />
        
    </div>
    <div class="col-sm-8" align="left">
        <input  name="qty" type="number" required class="form-control" id="qty" placeholder="จำนวน (ต้น)" />
        ต้น    
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> ที่ตั้งฟาร์ม  </div>
    <div class="col-sm-8" align="left">
        <input  name="f_address" type="text" required class="form-control" id="f_address" placeholder="ที่อยู่" minlength="2"  />
        <input  name="f_sub_area" type="text" required class="form-control" id="f_sub_area" placeholder="ตำบล" minlength="2"  />
        <input  name="f_area" type="text" required class="form-control" id="f_area" placeholder="อำเภอ" minlength="2"  />
        <input  name="f_province" type="text" required class="form-control" id="f_province" placeholder="จังหวัด" minlength="2"  />
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-3" align="right"> เบอร์โทร </div>
    <div class="col-sm-10" align="left">
        <input  name="tel" type="text" required class="form-control" id="tel" placeholder="เบอร์โทร" />

    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3"> </div>
    <div class="col-sm-5" align="right">
        <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> เพิ่ม  </button>      
    </div> 
    </div>
    </form>
