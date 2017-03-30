
	<div id="danhbawrapper">
	<form id="form_DangKy" action="" method="post">
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
			</div>
			<div class="cauchamngon">
				<label class="lbl_danhba">Câu châm ngôn yêu thích</label><br />
				<input type="text" name="cauchamngon" value="<?php echo set_value('cauchamngon'); ?>" />
			</div>
			<div >
				<input style="display: none" type="text" id="txtHinhAnh" name="txtHinhAnh" value="<?php echo set_value('txtHinhAnh'); ?>" />
			</div>
		</div>
		<div class="right">
			<div class="div_hoten float-left">
				<label class="lbl_danhba">Họ và tên</label><br />
				<?php echo form_error("hoten"); ?>
				<input type="text" name="hoten" class="txt_hoten" value="<?php echo set_value('hoten'); ?>" />
			</div>
			<div class="div_donvicongtac float-left">
				<label class="lbl_danhba">Đơn vị công tác hiện tại</label><br />
				<?php echo form_error("donvicongtac"); ?>
				<input type="text" name="donvicongtac" class="txt_donvicongtac" value="<?php echo set_value('donvicongtac'); ?>" />
			</div>
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
			<div class="clear"></div>
			<div class="div_quatrinhhoctap">
				<label class="lbl_danhba">Quá trình học tập</label><br />
				<?php echo form_error("quatrinhhoctap"); ?>
				<textarea rows="4" cols="50" name="quatrinhhoctap" class="txt_quatrinhhoctap danhba_textarea" >
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
			<input type="button" class="float-right input_dangky" name="xemthu" value="Xem thử"/>
		</div>
	</form>
	</div>
<script type="text/javascript">

$(document).ready(function() {
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
					$("#txtHinhAnh").val(data);
					$("#form_DangKy").submit();
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

		debugger
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
</script>
 <script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>