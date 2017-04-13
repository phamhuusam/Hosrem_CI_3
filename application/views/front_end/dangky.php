
	<div id="danhbawrapper">
	<form id="form_DangKy" name="TestForm" action="" method="post" accept-charset="utf-8">
		<h2 class="dangky_title">ĐĂNG KÝ THÔNG TIN</h2>
		<div class="left">
			<label class="lbl_danhba">Upload hình đại diện</label><br />
			<div class="image-frame">
				<div id="upload-demo" style="width:200px"></div>
				<a class="chonAnh" style="font-weight: bold; padding-right: 10px; cursor: pointer;"> Chọn ảnh </a>
				<input type="file" style="display: none" id="upload" name="hinhanh" value="Chèn ảnh">
				<!--<a class="btn-sm btn-success upload-result" style="float: left">Upload</a>-->
				<img class="xoay" title="xoay ảnh" height="25px" src="<?php echo base_url() ?>/public/images/rotate.png" />
				<br/>
				<input name="userImage" type="file" class="inputFile" style="display: none" />
			</div>
			<div class="cauchamngon">
				<label class="lbl_danhba">Câu châm ngôn yêu thích</label><br />
				<input type="text" name="cauchamngon" value="<?php echo set_value('cauchamngon'); ?>" />
			</div>
			<div >
				<input  type="text" class="txtImage" style="display: none" name="txtImage" value="heee" />
			</div>
		</div>
		<div class="right">
			<div class="div_hoten float-left">
				<label class="lbl_danhba">Họ và tên</label><br />
				<?php echo form_error("hoten"); ?>
				<input type="text" name="hoten" class="txt_hoten" value="<?php echo set_value('hoten'); ?>" />
			</div>
			<div class="div_namsinh float-left">
				<label class="lbl_danhba">Năm sinh</label><br />
				<?php echo form_error("namsinh"); ?>
				<input type="text" name="namsinh" class="txt_namsinh" value="<?php echo set_value('namsinh'); ?>" />
			</div>
			<div class="div_gioitinh float-left">
			<label class="lbl_danhba gioitinh">Giới tính</label><br />
				<div class="gioitinh_wrapper">
					<label for="nam" class="nam">Nam<input type="radio" id="one" name="gioitinh" value="Nam" /></label>
					<label for="nu" class="nu">Nữ<input type="radio" id="two" name="gioitinh" value="Nữ" /></label>
				</div>
			</div>
			<div class="div_donvicongtac float-left">
				<label class="lbl_danhba">Đơn vị công tác hiện tại</label><br />
				<?php echo form_error("donvicongtac"); ?>
				<input type="text" name="donvicongtac" class="txt_donvicongtac" value="<?php echo set_value('donvicongtac'); ?>" />
			</div>
			<div class="div_tinhthanh float-left">
				<label class="lbl_danhba">Tỉnh thành</label><br />
				<?php echo form_dropdown('TinhThanh', $TinhThanh, 0); ?>
			</div>
			<div class="clear"></div>
			<div class="div_dt float-left">
				<label class="lbl_danhba">Điện thoại</label><br />
				<?php echo form_error("dt"); ?>
				<input type="text" name="dt" class="txt_dt" value="<?php echo set_value('dt'); ?>" />
			</div>
			<div class="div_email float-left">
				<label class="lbl_danhba">Địa chỉ email</label><br />
				<?php echo form_error("email"); ?>
				<input type="text" name="email" class="txt_email" value="<?php echo set_value('email'); ?>" />
			</div>
			<div class="div_facebook float-left">
				<label class="lbl_danhba">Địa chỉ facebook</label><br />
				<?php echo form_error("facebook"); ?>
				<input type="text" name="facebook" class="txt_facebook" value="<?php echo set_value('facebook'); ?>" />
			</div>
			<div class="clear"></div>
			<div class="showhide">
				<input type="checkbox" id='sam_1' name="showhide" value="1" style="margin-right:5px">Cho phép hiển thị các thông tin: Điện thoại, email và facebook (mặc định là không cho phép)<br>
			</div>
			<div class="clear"></div>
			<div class="div_quatrinhhoctap">
				<label class="lbl_danhba">Quá trình học tập</label><br />
				<?php echo form_error("quatrinhhoctap"); ?>
				<textarea rows="2" cols="50" name="quatrinhhoctap" class="txt_quatrinhhoctap danhba_textarea" >
					<?php echo set_value('quatrinhhoctap'); ?>
				</textarea>
			</div>
			<div class="div_kinhnghiemcongtac">
				<label class="lbl_danhba">Kinh nghiệm công tác</label><br />
				<textarea rows="4" cols="50" name="kinhnghiemcongtac" class="txt_kinhnghiemcongtac danhba_textarea">
					<?php echo set_value('kinhnghiemcongtac'); ?>
				</textarea>
			</div>
			<div class="div_hoatdongchuyennganh">
				<h4 class="text-center">HOẠT ĐỘNG CHUYÊN NGÀNH</h4>
				<label class="lbl_danhba">Bài viết / Sách chuyên ngành</label><br />
				<textarea rows="4" cols="50" name="baivietchuyennganh" class="txt_hoatdongchuyennganh danhba_textarea" >
					<?php echo set_value('baivietchuyennganh'); ?>
				</textarea>
				<label class="lbl_danhba">Công tác báo cáo / Giảng dạy</label><br />
				<textarea rows="4" cols="50" name="congtacbaocao" class="txt_hoatdongchuyennganh danhba_textarea" >
					<?php echo set_value('congtacbaocao'); ?>
				</textarea>
				<label class="lbl_danhba">Nghiên cứu nổi bật</label><br />
				<textarea rows="4" cols="50" name="nghiencuunoibat" class="txt_hoatdongchuyennganh danhba_textarea" >
					<?php echo set_value('nghiencuunoibat'); ?>
				</textarea>
			</div>
			<input type="button" class="float-right input_hoanthanh" name="submit" value="Hoàn thành"/>
			<input type="submit" class="float-right input_hoanthanh_1" style="display: none" name="submit" value="Hoàn thành_1"/>
			<input type="button" class="float-right input_dangky" id='Id_XemThu' name="xemthu" value="Xem thử"/>
		</div>
	</form>
	</div>
<script type="text/javascript">

$(document).ready(function() {
	$('#Id_XemThu').click(function() {
		var  file = $('#upload')[0].files[0]
		if(file == null) {
		 	alert("Bạn chưa chọn hình ảnh đại diện");
			return false;
		}
		else {
			$uploadCrop.croppie('result', {
				type: 'canvas',
				quality: '1',
				size: {
				width: 800,
				height: 800
				}
			}).then(function (resp) {
				$("#mHinhAnh").attr("src", resp);
				//$("#HinhAnh").val(resp);
			});
		}

		$('#mCauChamNgon').html($('input[name="cauchamngon"]').val());
		$('#mTen').html($('input[name="hoten"]').val());
		$('#mNamSinh').html($('input[name="namsinh"]').val());
		$('#mGioiTinh').html($('input[name="gioitinh"]:checked').val());
		$('#mDonViCongTac').html($('input[name="donvicongtac"]').val());
		$('#mTinh').html($('select[name="TinhThanh"]').find('option:selected').text());
		$('#mDienThoai').html($('input[name="dt"]').val());
		$('#mEmail').html($('input[name="email"]').val());
		$('#mFacebook').html($('input[name="facebook"]').val());
		$('#mQuaTrinhHocTapVaCongTac').html(tinyMCE.get('quatrinhhoctap').getContent());
		$('#mKinhNghiemCongTac').html(tinyMCE.get('kinhnghiemcongtac').getContent());
		$('#mCongTacBaoCao').html(tinyMCE.get('congtacbaocao').getContent());
		$('#mBaiVietChuyenNganh').html(tinyMCE.get('baivietchuyennganh').getContent());
		$('#mNghienCuuNoiBat').html(tinyMCE.get('nghiencuunoibat').getContent());


		var mShow_Info =  $('#sam_1').prop('checked');
		debugger
		if(mShow_Info) {
			$('#sam_2').prop('checked', true);
		} else {
			$('#sam_2').prop('checked', false);
		}

		$("#detail_form").modal('show');
	});


	$('.input_hoanthanh').click(function(e){
		var  file = $('#upload')[0].files[0]
		if(file == null) {
		 	alert("Bạn chưa chọn hình ảnh đại diện");
			return false;
		}
		else {
			$uploadCrop.croppie('result', {
			type: 'canvas',
			quality: '1',
			size: {
			width: 800,
			height: 800
			}
		}).then(function (resp) {
			$.ajax({
				url: base_url_original + "/Danhba/UploadFile",
				type: "POST",
				data: {"image":resp},
				success: function (data) {
					html = '<img src="' + resp + '" />';
					//$("#upload-demo-i").html(html);
					$(".txtImage").val(data);
					document.getElementsByClassName("HinhAnh").value = data;
					console.log($(".txtImage").val());
					setTimeout(function(){
						if(checkValidate() == true) {
							console.log("sao bằng true");
							$(".input_hoanthanh_1").trigger('click');
						}
					}, 100);
				}
			});
		});
		}
	});


	$('.chonAnh').click(function() {
		$('#upload').click();
	});

	$uploadCrop = $('#upload-demo').croppie({
	    enableExif: true,
	    enableOrientation:true,
	    viewport: {
	        width: 200,
	        height: 200,
	        type: 'square'
	    },
	    boundary: {
	        width: 220,
	        height: 220
	    }

	});


	var canvas = document.getElementsByClassName("cr-image")[0];
    var context = canvas.getContext("2d");
    // Sample graphic

	function getRadianAngle(degreeValue) {
	    return degreeValue * Math.PI / 180;
	}
    // create button
    var button = document.getElementById("rotate");
	$('.xoay').on('click', function() {


		var image = new Image();
		image.src = canvas.toDataURL();
		context.clearRect(0,0,canvas.width,canvas.height);
        context.save();
        context.translate(canvas.width/2,canvas.height/2);
        context.rotate(Math.PI/2);
        context.drawImage(image,-image.width/2,-image.width/2);
        context.restore();


	});

	$('#upload').on('change', function () {

		console.log(this.files[0].size);
		if(this.files[0].size > 3000000) {
			alert("Dung lượng file không được quá 3M");
			return;

		}

		var reader = new FileReader();
	    reader.onload = function (e) {
	    	$uploadCrop.croppie('bind', {
	    		url: e.target.result
	    	}).then(function(value){
	    		console.log('jQuery bind complete');

	    	});
	    }
	    reader.readAsDataURL(this.files[0]);
	});
});



function checkValidate() {
	var mArrayCheck = [{
		'field': 'cauchamngon',
		'name': 'Câu châm ngôn'
	}, {
		'field': 'hoten',
		'name': 'Họ và tên'
	}, {
		'field': 'donvicongtac',
		'name': 'Đơn vị công tác'
	}, {
		'field': 'dt',
		'name': 'Điện thoại'
	}, {
		'field': 'email',
		'name': 'Email'
	}, {
		'field': 'email',
		'name': 'Điện thoại'
	}, {
		'field': 'quatrinhhoctap',
		'name': 'Quá trình học tập',
		'tinyMCE': true
	}];
	var valueReturn = true;
	$.each(mArrayCheck, function(index, value){
		var mField = $("input[name=" + value.field +  "]");
		if(mField.length == 0) {{
			 mField = $("textarea[name=" + value.field +  "]");
		}}
		mField.removeClass("boderRed");

		var  valueText = mField.val();

		if(value.tinyMCE == true) {
			//debugger
			valueText = tinyMCE.get('quatrinhhoctap').getContent();
		}
		if( valueText.trim().length == 0) {
			alert(value.name + " chưa được nhập thông tin");
			mField.addClass("boderRed");

			if(value.tinyMCE == true)
				tinyMCE.get(value.field).focus();
			else
				mField.focus();

			valueReturn = false;
			return false;
		}
	})
	return valueReturn;

}
</script>
<script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>


<div class="modal fade" tabindex="-1" role="dialog" id="detail_form">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Thông tin chi tiết bác sĩ</h4>
</div>
<div class="modal-body">
<form>
  <div class="row">
    <div class="col-sm-3">
      <img id="mHinhAnh" width="100%">
    </div>

    <div class="col-sm-9" style="padding-left: 0px; ">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="CauChamNgon">Châm ngôn yêu thích:</label> <span id="mCauChamNgon"></span>
        </div>
      </div>
      <!-- Dành cho thông tin bác sĩ !-->
      <div class="col-sm-6">
        <div class="form-group">
          <label for="FullName">Họ và tên:</label> <span id="mTen"></span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="NamSinh">Năm sinh:</label> <span id="mNamSinh"></span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="GioiTinh">Giới tính:</label> <span id="mGioiTinh"></span>
        </div>
      </div>
      <!----------------------------------------------------!-->
      <div class="col-sm-6">
        <div class="form-group">
          <label for="DonViCongTac">Đơn vị công tác:</label> <span id="mDonViCongTac"></span>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="TinhThanh">Tỉnh thành:</label> <span id="mTinh"></span>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="form-group">
          <label for="DienThoai">Điện thoại:</label> <span id="mDienThoai"></span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="Email">Địa chỉ mail:</label> <span id="mEmail"></span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="facebook">Địa chỉ facebook:</label> <span id="mFacebook"></span>
        </div>
      </div>

      <div class="col-sm-12">
        <label><input type="checkbox" id='sam_2'> Cho phép hiển thị các thông tin: Điện thoại, email và facebook (mặc định là không cho phép)</label>
      </div>

    </div>
    <!-- giải phóng ra ngoài tấm hình-->

    <!-- quá trình học tập -->
    <div class="col-sm-12" style="margin-top: 10px">
      <div class="form-group">
        <label for="QuaTrinhHocTapVaCongTac">Quá trình học tập:</label><span id="mQuaTrinhHocTapVaCongTac"></span>

      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="KinhNghiemCongTac">Kinh nghiệm công tác:</label><span id="mKinhNghiemCongTac"></span>
      </div>
    </div>
    <div style="text-align: center; font-size: 18px; color: #337ab7"> HOẠT ĐỘNG CHUYÊN NGÀNH</div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon">Bài viết / Sách chuyên ngành:</label><span id="mBaiVietChuyenNganh"></span>
      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon">Công tác báo cáo / Giảng dạy:</label><span id="mCongTacBaoCao"></span>
      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon">Nghiên cứu nổi bật:</label><span id="mNghienCuuNoiBat"></span>
      </div>
    </div>
  </div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

