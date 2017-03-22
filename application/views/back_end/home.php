
<script src="<?php echo base_url() ?>public/admin/js/js_Home.js"></script>
<?php
foreach ($dsBacSi as $bacsi) {
	?>
  <script type="text/javascript">
      var mRecord = [];
      mRecord.push('<?php echo ($bacsi['Id']) ?>');
      mRecord.push('<?php echo ($bacsi['Ten']) ?>');
      mRecord.push('<?php echo ($bacsi['HinhAnh']) ?>');
      mRecord.push('<?php echo ($bacsi['Email']) ?>');
      mRecord.push('<?php echo ($bacsi['DonViCongTac']) ?>');
      mRecord.push('<?php echo ($bacsi['DienThoai']) ?>');
      // push vao dataset
      dataSet.push(mRecord);

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
      <a href="#3" data-toggle="tab" class="classRed">DANH SÁCH TREO</a>
    </li>

  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="1">
      <br/>
      <table id="example" class="display" width="100%"></table>
    </div>
    <div class="tab-pane" id="2">
      đây là tab 2
    </div>
    <div class="tab-pane" id="3">
      đây là tab3
    </div>

    <div class="tab-pane" id="4">
      đây là tab4
    </div>

  </div>
</div>


