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
        <span class="error"></span>
        <script>
        $(document).ready(function(){
        $('#national').on('keyup',function(){
            if($.trim($(this).val()) != '' && $(this).val().length == 13){
            id = $(this).val().replace(/-/g,"");
            var result = Script_checkID(id);
            if(result === false){
                $('span.error').removeClass('true').text('เลขบัตรผิด');
            }else{
                $('span.error').addClass('true').text('เลขบัตรถูกต้อง');
            }
            }else{
            $('span.error').removeClass('true').text('กรุณากรอกข้อมูลให้ถูกต้อง');
            
            }
        })
        });
        function Script_checkID(id){
            if(! IsNumeric(id)) return false;
            if(id.substring(0,1)== 0) return false;
            if(id.length != 13) return false;
            for(i=0, sum=0; i < 12; i++)
                sum += parseFloat(id.charAt(i))*(13-i);
            if((11-sum%11)%10!=parseFloat(id.charAt(12))) return false;
            return true;
        }
        function IsNumeric(input){
            var RE = /^-?(0|INF|(0[1-7][0-7]*)|(0x[0-9a-fA-F]+)|((0|[1-9][0-9]*|(?=[\.,]))([\.,][0-9]+)?([eE]-?\d+)?))$/;
            return (RE.test(input));
        }
        </script>
    </div>
    <div class="col-sm-3" align="right"> รหัสทะเบียนบ้าน </div>
    <div class="col-sm-8" align="left">
        <input  name="house" type="pin" required class="form-control" id="house" placeholder="รหัสทะเบียนบ้าน" maxlength="11" size="11"/>
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-3" align="right"> ที่อยู่  </div>
    <div class="col-sm-8" align="left">
        <input  name="address" type="text" required class="form-control" id="address" placeholder="ที่อยู่" minlength="2"  />
        <input  name="subarea" type="text" required class="form-control" id="subarea" placeholder="ตำบล" minlength="2"  />
        <input  name="area" type="text" required class="form-control" id="area" placeholder="อำเภอ" minlength="2"  />
        <input  name="province" type="text" required class="form-control" id="province" placeholder="จังหวัด" minlength="2"  />
        <input  name="postcode" type="pin" required class="form-control" id="postcode" placeholder="รหัสไปรษณีย์" minlength="5" maxlength="5"  />
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-3" align="right"> เบอร์โทร </div>
    <div class="col-sm-10" align="left">
        <input  name="pin" type="text" required class="form-control" id="tel" placeholder="เบอร์โทร" minlength="10" maxlength="10" />

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
