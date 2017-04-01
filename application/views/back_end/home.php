
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