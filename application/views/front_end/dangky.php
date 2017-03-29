
	<div id="danhbawrapper">
	<form action="" method="post">
		<h2 class="dangky_title">ĐĂNG KÝ THÔNG TIN</h2>
		<div class="left">
			<label class="lbl_danhba">Upload hình đại diện</label><br />	
			<div class="image-frame">
				<a href="#"><img src="<?php echo base_url() ?>public/images/bacsi.png"></a>
				<input type="file" id="upload" name="hinhanh">
			</div>
			<div class="cauchamngon">	
				<label class="lbl_danhba">Câu châm ngôn yêu thích</label><br />
				<input type="text" name="cauchamngon" value="<?php echo set_value('cauchamngon');?>" />
			</div>
		</div>
		<div class="right">
			<div class="div_hoten float-left">
				<label class="lbl_danhba">Họ và tên</label><br />
				<?php echo form_error("hoten");?>				
				<input type="text" name="hoten" class="txt_hoten" value="<?php echo set_value('hoten');?>" />
			</div>
			<div class="div_donvicongtac float-left">	
				<label class="lbl_danhba">Đơn vị công tác hiện tại</label><br />
				<?php echo form_error("donvicongtac");?>				
				<input type="text" name="donvicongtac" class="txt_donvicongtac" value="<?php echo set_value('donvicongtac');?>" />
			</div>
			<div class="div_dt float-left">
				<label class="lbl_danhba">Điện thoại</label><br />
				<?php echo form_error("dt");?>				
				<input type="text" name="dt" class="txt_dt" value="<?php echo set_value('dt');?>" />
			</div>
			<div class="div_email float-left">
				<label class="lbl_danhba">Địa chỉ email</label><br />
				<?php echo form_error("email");?>				
				<input type="text" name="email" class="txt_email" value="<?php echo set_value('email');?>" />
			</div>						
			<div class="clear"></div>
			<div class="div_quatrinhhoctap">	
				<label class="lbl_danhba">Quá trình học tập</label><br />
				<?php echo form_error("quatrinhhoctap");?>				
				<textarea rows="4" cols="50" name="quatrinhhoctap" class="txt_quatrinhhoctap danhba_textarea" >
					<?php echo set_value('quatrinhhoctap');?>
				</textarea>			
			</div>	
			<div class="div_kinhnghiemcongtac">	
				<label class="lbl_danhba">Kinh nghiệm công tác</label><br />		
				<textarea rows="4" cols="50" name="kinhnghiemcongtac" class="txt_kinhnghiemcongtac danhba_textarea">
					<?php echo set_value('kinhnghiemcongtac');?>
				</textarea>			
			</div>	
			<div class="div_hoatdongchuyennganh">	
				<h4 class="text-center">HOẠT ĐỘNG CHUYÊN NGÀNH</h4>
				<label class="lbl_danhba">Bài viết / Sách chuyên ngành</label><br />				
				<textarea rows="4" cols="50" name="baivietchuyennganh" class="txt_hoatdongchuyennganh danhba_textarea" >
					<?php echo set_value('baivietchuyennganh');?>
				</textarea>			
				<label class="lbl_danhba">Công tác báo cáo / Giảng dạy</label><br />				
				<textarea rows="4" cols="50" name="congtacbaocao" class="txt_hoatdongchuyennganh danhba_textarea" >
					<?php echo set_value('congtacbaocao');?>
				</textarea>	
				<label class="lbl_danhba">Nghiên cứu nổi bật</label><br />				
				<textarea rows="4" cols="50" name="nghiencuunoibat" class="txt_hoatdongchuyennganh danhba_textarea" >
					<?php echo set_value('nghiencuunoibat');?>
				</textarea>									
			</div>			
			<input type="submit" class="float-right input_dangky" name="submit" value="Hoàn thành"/>		
			<input type="submit" class="float-right input_dangky" name="xemthu" value="Xem thử"/>			
		</div>
	</form>
	</div>