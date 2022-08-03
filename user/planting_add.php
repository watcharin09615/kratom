
<a href="user.php?act=planting" class="bth-info">back</a>
<form action="add_db.php" method="POST" class="form-horizontal">
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> กระท่อมสายพันธ์ุ </div>
    <div class="col-sm-10" align="left">
        <input  name="species" type="text" required class="form-control" id="species" placeholder="ชื่อสายพันธุ์" />
        
    </div>
    <div class="col-sm-8" align="left">
        <input  name="qty" type="number" required class="form-control" id="qty" placeholder="จำนวน (ต้น)" /> 
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> วันที่ปลูก </div>
    <div class="col-sm-10" align="left">
        <input  name="date" type="date" required class="form-control" id="date" />

    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-3" align="right"> หมายเหตุ </div>
    <div class="col-sm-10" align="left">
        <input  name="note" type="text" required class="form-control" id="note" placeholder="หมายเหตุ" />

    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3"> </div>
    <div class="col-sm-5" align="right">
        <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> เพิ่ม  </button>      
    </div> 
    </div>
    </form>
