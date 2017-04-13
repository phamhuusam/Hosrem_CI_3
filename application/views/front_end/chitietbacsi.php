<div id="danhbawrapper">
		<div class="db-header">
			<div class="search-box">
				<form action="Search" method="post">
					<input class="button" type="button" onclick="location.href='<?php echo base_url() ?>danhba/danhsach';" value="Về trang chính" name="back">	
					<br />
					<input class="button" type="button" onclick="location.href='<?php echo base_url() ?>danhba/dangky';" value="Đăng ký danh bạ bác sĩ" name="search">
				</form>
			</div>
		</div>
		<div class="clear"></div>
	<div class="top-info">
    <div class="col-sm-3 col-md-3 img-box">
      <img class="mHinhAnh" src="<?php echo base_url()?>public/images/hinh_bacsi/<?php echo $chitietbacsi->HinhAnh;?>" width="100%">
      <?php echo '"'.$chitietbacsi->CauChamNgon.'"'?>
    </div>
    <div class="col-sm-9 col-md-9" style="padding-left: 0px; ">
      <!-- Dành cho thông tin bác sĩ !-->
      <div class="col-sm-12 col-md-12">
			 <h2 class="mTen"><?php echo $chitietbacsi->Ten?></h2>
       </div>
      <div class="col-sm-12 col-md-12">
			 <h3 class="mDonvicongtac"><?php echo $chitietbacsi->DonViCongTac?></h3>
       </div>
       <div class="clear"></div>
       <div class="line"></div>
      <div class="col-sm-4 col-md-4">
        <div class="form-group">
          <label for="NamSinh">Năm sinh:</label> <span id="mNamSinh"><?php echo $chitietbacsi->NamSinh?></span>
        </div>
      </div>
      <div class="col-sm-4 col-md-4">
        <div class="form-group">
          <label for="GioiTinh">Giới tính:</label> <span id="mGioiTinh"><?php echo $chitietbacsi->GioiTinh?></span>
        </div>
      </div>
      <!----------------------------------------------------!-->
      <div class="col-sm-4 col-md-4">
        <div class="form-group">
          <label for="TinhThanh">Tỉnh thành:</label> <span id="mTinh"><?php echo $chitietbacsi->Tinh?></span>
        </div>
      </div>

      <div class="col-sm-12">
        <div class="form-group">
          <label for="DienThoai">Điện thoại:</label> <span id="mDienThoai"><?php echo $chitietbacsi->DienThoai?></span>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label for="Email">Địa chỉ mail:</label> <span id="mEmail"><?php echo $chitietbacsi->Email?></span>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label for="facebook">Địa chỉ facebook:</label> <span id="mFacebook"><?php echo $chitietbacsi->Facebook?></span>
        </div>
      </div>
    </div>
    </div>
    <!-- giải phóng ra ngoài tấm hình-->
	<div class="clear"></div>
    <!-- quá trình học tập -->
    <div class="col-sm-12" style="margin-top: 10px">
      <div class="form-group">
        <label for="QuaTrinhHocTapVaCongTac" class="label_title">Quá trình học tập:</label><span id="mQuaTrinhHocTapVaCongTac"><?php echo $chitietbacsi->QuaTrinhHocTapVaCongTac?></span>

      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="KinhNghiemCongTac" class="label_title">Kinh nghiệm công tác:</label><span id="mKinhNghiemCongTac"><?php echo $chitietbacsi->KinhNghiemCongTac?></span>
      </div>
    </div>
    <div style="text-align: center; font-size: 18px; color: #1492df;font-weight: bold"> HOẠT ĐỘNG CHUYÊN NGÀNH</div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon" class="label_title">Bài viết / Sách chuyên ngành:</label><span id="mBaiVietChuyenNganh"><?php echo $chitietbacsi->BaiVietChuyenNganh?></span>
      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon" class="label_title">Công tác báo cáo / Giảng dạy:</label><span id="mCongTacBaoCao"><?php echo $chitietbacsi->CongTacBaoCao?></span>
      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon" class="label_title">Nghiên cứu nổi bật:</label><span id="mNghienCuuNoiBat"><?php echo $chitietbacsi->NghienCuuNoiBat?></span>
      </div>
    </div>
  </div>