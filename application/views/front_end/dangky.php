	<div id="danhbawrapper">
	<form action="" method="post">
		<h2 class="dangky_title">ĐĂNG KÝ THÔNG TIN</h2>
		<div class="left">
			<label class="lbl_danhba">Upload hình đại diện</label class="lbl_danhba"><br />	
			<div class="image-frame">
				<a href="#"><img src="<?php echo base_url() ?>public/images/bacsi.png"></a>
			</div>
			<div class="cauchamngon">	
				<label class="lbl_danhba">Câu châm ngôn yêu thích</label class="lbl_danhba"><br />
				<input type="text" name="cauchamngon" />
			</div>
		</div>
		<div class="right">
			<div class="div_hoten float-left">
				<label class="lbl_danhba">Họ và tên</label class="lbl_danhba"><br />
				<input type="text" name="hoten" class="txt_hoten" />
			</div>
			<div class="div_donvicongtac float-left">	
				<label class="lbl_danhba">Đơn vị công tác hiện tại</label class="lbl_danhba"><br />
				<input type="text" name="donvicongtac" class="txt_donvicongtac" />
			</div>
			<div class="clear"></div>
			<div class="div_quatrinhhoctap">	
				<label class="lbl_danhba">Quá trình học tập</label class="lbl_danhba"><br />
				<textarea rows="4" cols="50" name="quatrinhhoctap" class="txt_quatrinhhoctap danhba_textarea" >At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
				</textarea>			
			</div>	
			<div class="div_kinhnghiemcongtac">	
				<label class="lbl_danhba">Kinh nghiệm công tác</label class="lbl_danhba"><br />
				<textarea rows="4" cols="50" name="kinhnghiemcongtac" class="txt_kinhnghiemcongtac danhba_textarea" >At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
				</textarea>			
			</div>	
			<div class="div_hoatdongchuyennganh">	
				<label class="lbl_danhba">Hoạt động chuyên ngành</label class="lbl_danhba"><br />
				<textarea rows="4" cols="50" name="hoatdongchuyennganh" class="txt_hoatdongchuyennganh danhba_textarea" >At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
				</textarea>			
			</div>			
			<input type="submit" class="float-right input_dangky" name="submit" value="Hoàn thành"/>		
			<input type="submit" class="float-right input_dangky" name="xemthu" value="Xem thử"/>			
		</div>
	</form>
	</div>