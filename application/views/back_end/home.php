<style type="text/css">


  #exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
  }

  #exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
  }

  /* remove border radius for the tab */

  #exTab1 .nav-pills > li > a {
  border-radius: 0;
  }

  /* change border radius for the tab , apply corners on top*/

  #exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
  }

  #exTab3 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
  }

</style>

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
      mRecord.push('<?php echo ($bacsi['Email']) ?>');
      mRecord.push('<?php echo ($bacsi['DonViCongTac']) ?>');
      mRecord.push('<?php echo ($bacsi['DienThoai']) ?>');
      mRecord.push('<?php echo ($bacsi['DonViCongTac']) ?>');
      mRecord.push('<?php echo ($bacsi['DienThoai']) ?>');
      mRecord.push('<?php echo ($bacsi['HinhAnh']) ?>');
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

      <a  href="#1" data-toggle="tab">DANH SÁCH CHƯA DUYỆT</a>
    </li>
    <li>
      <a href="#2" data-toggle="tab">DANH SÁCH ĐÃ DUYỆT</a>
    </li>
    <li>
      <a href="#3" data-toggle="tab">DANH SÁCH KHÔNG DUYỆT</a>
    </li>

    <li>
      <a href="#3" data-toggle="tab">DANH SÁCH TREO</a>
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
          { title: "Name" },
          { title: "Position" },
          { title: "Office" },
          { title: "Extn." },
          { title: "Start date" },
          { title: "Salary" },
          { title: "Tool"},
          { title: "Tool"}
      ],

      columnDefs: [{ // Money columns
            "targets": 6,
            "render": function( data, type, row ) {
                return "<img src='../../images/'"+data +">"
            }
      }, { // Money columns
            "targets": 7,
            "render": function( data, type, row ) {
                var valueReturn = "<img style='height: 70px;  border-radius: 35px' src='../../public/images/" + data +"''>";
                return valueReturn;
          }
      }]

    });

    $('#example tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data[0] +"'s salary is: "+ data[ 5 ] );
    } );

    $('[data-toggle="tooltip"]').tooltip();

  });
</script>