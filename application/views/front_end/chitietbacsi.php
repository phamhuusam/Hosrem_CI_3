<div class="row">
    <div class="col-sm-3">
      <img id="mHinhAnh" src="<?php echo base_url()?>public/images/hinh_bacsi/<?php echo $chitietbacsi->HinhAnh;?>" width="100%">
    </div>

    <div class="col-sm-9" style="padding-left: 0px; ">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="CauChamNgon">Châm ngôn yêu thích:</label> <span id="mCauChamNgon"><?php echo $chitietbacsi->CauChamNgon;?></span>
        </div>
      </div>
      <!-- Dành cho thông tin bác sĩ !-->
      <div class="col-sm-6">
        <div class="form-group">
          <label for="FullName">Họ và tên:</label> <span id="mTen"><?php echo $chitietbacsi->Ten?></span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="NamSinh">Năm sinh:</label> <span id="mNamSinh"><?php echo $chitietbacsi->NamSinh?></span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="GioiTinh">Giới tính:</label> <span id="mGioiTinh"><?php echo $chitietbacsi->GioiTinh?></span>
        </div>
      </div>
      <!----------------------------------------------------!-->
      <div class="col-sm-6">
        <div class="form-group">
          <label for="DonViCongTac">Đơn vị công tác:</label> <span id="mDonViCongTac"><?php echo $chitietbacsi->DonViCongTac?></span>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="TinhThanh">Tỉnh thành:</label> <span id="mTinh"><?php echo $chitietbacsi->Tinh?></span>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="form-group">
          <label for="DienThoai">Điện thoại:</label> <span id="mDienThoai"><?php echo $chitietbacsi->DienThoai?></span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="Email">Địa chỉ mail:</label> <span id="mEmail"><?php echo $chitietbacsi->Email?></span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="facebook">Địa chỉ facebook:</label> <span id="mFacebook"><?php echo $chitietbacsi->Facebook?></span>
        </div>
      </div>
    </div>
    <!-- giải phóng ra ngoài tấm hình-->

    <!-- quá trình học tập -->
    <div class="col-sm-12" style="margin-top: 10px">
      <div class="form-group">
        <label for="QuaTrinhHocTapVaCongTac">Quá trình học tập:</label><span id="mQuaTrinhHocTapVaCongTac"><?php echo $chitietbacsi->QuaTrinhHocTapVaCongTac?></span>

      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="KinhNghiemCongTac">Kinh nghiệm công tác:</label><span id="mKinhNghiemCongTac"><?php echo $chitietbacsi->KinhNghiemCongTac?></span>
      </div>
    </div>
    <div style="text-align: center; font-size: 18px; color: #337ab7"> HOẠT ĐỘNG CHUYÊN NGÀNH</div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon">Bài viết / Sách chuyên ngành:</label><span id="mBaiVietChuyenNganh"><?php echo $chitietbacsi->BaiVietChuyenNganh?></span>
      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon">Công tác báo cáo / Giảng dạy:</label><span id="mCongTacBaoCao"><?php echo $chitietbacsi->CongTacBaoCao?></span>
      </div>
    </div>
    <!-- quá trình công tác-->
    <div class="col-sm-12">
      <div class="form-group">
        <label for="chamngon">Nghiên cứu nổi bật:</label><span id="mNghienCuuNoiBat"><?php echo $chitietbacsi->NghienCuuNoiBat?></span>
      </div>
    </div>
  </div>