//khởi tạo
var dataSet = [];

var _global = {
  _pageAjax : 'index.php/admin/home'
};


$(document).ready(function() {
  var table = $('#example').DataTable({
    data: dataSet,
    columns: [{
      title: "Id"
    }, {
      title: "Họ và tên"
    }, {
      title: "Hình"
    }, {
      title: "Email"
    }, {
      title: "Đơn vị"
    }, {
      title: "Điện thoại"
    }, {
      title: "Tool"
    }],

    columnDefs: [{ // Money columns
      "targets": 2,
      "render": function(data, type, row) {
        var valueReturn = "<img style='height: 70px;  border-radius: 35px' src='../../public/images/" + data + "''>";
        return valueReturn;
      }
    }, { // Money columns
      "targets": -1,
      "render": function(data, type, row) {
        var valueReturn = "<a class= 'classGreen'> Duyệt</a> | <a class= 'classBlue'>Không duyệt</a> | <a class= 'classRed'>Treo</a>";
        valueReturn += "<div class='panel_KhongDuyet' style='padding-top: 5px; display:none'> <input  placeHolder='Lý do không duyệt' /> <button class='button_Khongduyet'>OK</button></div>";
        valueReturn += "<div class='panel_Treo' style='padding-top: 5px; display:none'> <input  placeHolder='Lý do treo' /> <button class='button_Treo'>OK</button></div>";
        return valueReturn;
      }
    }]

  });

  //xử lý show textbox
  $('#example tbody').on('click', 'a', function() {
    $('.panel_KhongDuyet').fadeOut(200);
    $('.panel_Treo').fadeOut(200);

    var className = this.attributes.class.value;
    var data = table.row($(this).parents('tr')).data();
    //alert( data[0] +"'s salary is: "+ data[ 5 ] );
    var tagets_1 = $(this).parents('tr').find(".panel_KhongDuyet"); // panel 1
    var tagets_2 = $(this).parents('tr').find(".panel_Treo"); // panel 2

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
  // xử lý button submit

  $('#example tbody').on('click', 'button', function() {
    var className = this.attributes.class.value;
    var data = table.row($(this).parents('tr')).data();
    //alert(data[0]);
    var className = this.attributes.class.value;
    var valueText = $(this).parent('div').find('input').val();
    if (valueText.length == 0) {
      alert("Bạn chưa nhập thông tin");
    } else {
      switch (className) {
        case 'button_Khongduyet':
              var mData = {
                'Id' : data[0],
                'Value': valueText
              };
              onUpdateRecord( mData, function(result, flag){
                  if(flag) {
                    console.log(result);
                    //alert_CapNhatThanhCong();
                  }
                  else {
                    console.log(result);
                    //alert_CapNhatThatBai();
                  }
              }, _global);
               
          break;
        case 'button_Treo':

          break;
      }
    }
  });

  // tooltip
  $('[data-toggle="tooltip"]').tooltip();
});