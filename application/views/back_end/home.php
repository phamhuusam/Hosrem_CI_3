
<script type="text/javascript">
  var dataSet = [];
</script>
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



<script>
  $(document).ready(function() {
    var table = $('#example').DataTable({
      data: dataSet,
      columns: [
          { title: "Id" },
          { title: "Họ và tên" },
          { title: "Hình" },
          { title: "Email" },
          { title: "Đơn vị" },
          { title: "Điện thoại"}, 
          { title: "Tool"}
      ],

      columnDefs: [{ // Money columns
            "targets": 2,
            "render": function( data, type, row ) {
                var valueReturn = "<img style='height: 70px;  border-radius: 35px' src='../../public/images/" + data +"''>";
                return valueReturn;
          }
      }, { // Money columns
            "targets": -1,
            "render": function( data, type, row ) {
              var valueReturn = "<a class= 'classGreen'> Duyệt</a> | <a class= 'classBlue'>Không duyệt</a> | <a class= 'classRed'>Treo</a>";
              valueReturn += "<div class='inputKhongDuyet' style='padding-top: 5px; display:none'> <input  placeHolder='Lý do không duyệt' /></div>";
              valueReturn += "<div class='inputKhongTreo' style='padding-top: 5px; display:none'> <input  placeHolder='Lý do treo' /></div>";
              
                return  valueReturn;
            }
      }]

    });

    $('#example tbody').on( 'click', 'a', function () {

      $('.inputKhongDuyet').fadeOut(200);
      $('.inputKhongTreo').fadeOut(200);

      var className = this.attributes.class.value;

      var data = table.row( $(this).parents('tr') ).data();
        //alert( data[0] +"'s salary is: "+ data[ 5 ] );
      var tagets_1 = $(this).parents('tr').find(".inputKhongDuyet");
      var tagets_2 = $(this).parents('tr').find(".inputKhongTreo");

      switch (className) { 
        case 'classGreen':
          tagets_1.fadeOut(200);
          tagets_2.fadeOut(200);
          break;
        case 'classBlue':
          tagets_1.fadeIn(200);
          tagets_2.fadeOut(200);

          break;
        case 'classRed':
          tagets_1.fadeOut(200);
          tagets_2.fadeIn(200);
          break;
      }

    });

    $('[data-toggle="tooltip"]').tooltip();

  });
</script>