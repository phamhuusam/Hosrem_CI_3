
<script type="text/javascript">
  var dataSet_ChuaDuyet = [];
  var dataSet_DaDuyet = [];
  var dataSet_KhongDuyet= [];
  var dataSet_Treo= [];

</script>
<?php
foreach ($dsBacSi_ChuaDuyet as $bacsi) {
	?>
  <script type="text/javascript">
      var mRecord_ChuaDuyet = [];
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['Id']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['FullName']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['HinhAnh']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['Email']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['DonViCongTac']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['DienThoai']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['FullName']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['NgayCapNhatTinhTrang']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['LyDoTuChoi']) ?>');
      mRecord_ChuaDuyet.push('<?php echo ($bacsi['Display']) ?>');
      // push vao dataset
      dataSet_ChuaDuyet.push(mRecord_ChuaDuyet);

  </script>
<?php
}
?>


<?php
foreach ($dsBacSi_DaDuyet as $bacsi) {
	?>
  <script type="text/javascript">
      var mRecord_DaDuyet = [];
      mRecord_DaDuyet.push('<?php echo ($bacsi['Id']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['Ten']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['HinhAnh']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['Email']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['DonViCongTac']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['DienThoai']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['FullName']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['NgayCapNhatTinhTrang']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['LyDoTuChoi']) ?>');
      mRecord_DaDuyet.push('<?php echo ($bacsi['Display']) ?>');
      // push vao dataset

      dataSet_DaDuyet.push(mRecord_DaDuyet);

  </script>
<?php
}
?>


<?php

foreach ($dsBacSi_KhongDuyet as $bacsi) {
	?>
  <script type="text/javascript">
      var mRecord_KhongDuyet = [];
      mRecord_KhongDuyet.push('<?php echo ($bacsi['Id']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['Ten']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['HinhAnh']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['Email']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['DonViCongTac']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['DienThoai']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['FullName']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['NgayCapNhatTinhTrang']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['LyDoTuChoi']) ?>');
      mRecord_KhongDuyet.push('<?php echo ($bacsi['Display']) ?>');
      // push vao dataset
      dataSet_KhongDuyet.push(mRecord_KhongDuyet);

  </script>
<?php

}
?>

<?php
foreach ($dsBacSi_Treo as $bacsi) {
	?>
  <script type="text/javascript">
      var mRecord_Treo = [];
      mRecord_Treo.push('<?php echo ($bacsi['Id']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['Ten']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['HinhAnh']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['Email']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['DonViCongTac']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['DienThoai']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['FullName']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['NgayCapNhatTinhTrang']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['LyDoTuChoi']) ?>');
      mRecord_Treo.push('<?php echo ($bacsi['Display']) ?>');
      // push vao dataset
      dataSet_Treo.push(mRecord_Treo);

  </script>
<?php
}
?>



<h2>Danh sách</h2>
<div id="exTab2">
  <ul class="nav nav-tabs">
    <li class="active">
      <a  href="#1" data-toggle="tab" class="classNormal">DANH SÁCH CHƯA DUYỆT</a>
    </li>
    <li>
      <a href="#2" data-toggle="tab" class="classGreen">DANH SÁCH ĐÃ DUYỆT</a>
    </li>
    <li>
      <a href="#3" data-toggle="tab" class="classBlue">DANH SÁCH KHÔNG DUYỆT</a>
    </li>

    <li>
      <a href="#4" data-toggle="tab" class="classRed">DANH SÁCH TREO</a>
    </li>

  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="1">
      <br/>
      <table id="table_ChuaDuyet" class="display" width="100%"></table>
    </div>
    <div class="tab-pane" id="2">
      <br/>
      <table id="table_DaDuyet" class="display" width="100%"></table>
    </div>
    <div class="tab-pane" id="3">
      <table id="table_KhongDuyet" class="display" width="100%"></table>
    </div>

    <div class="tab-pane" id="4">

       <table id="table_Treo" class="display" width="100%"></table>
    </div>

  </div>
</div>
<script src="<?php echo base_url() ?>public/admin/js/js_Home.js"></script>


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
                  <img id="HinhAnh" width="100%">

              </div>
              <div class="col-sm-9">
                <div class="form-group">
                    <label for="chamngon">Châm ngôn yêu thích:</label>
                    <input type="text" class="form-control" id="chamngon">
                  </div>
              </div>
        </div>


      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary">Lưu</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->