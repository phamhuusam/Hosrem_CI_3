var _global = {
  _pageAjax: 'index.php/admin/home'
};


$(document).ready(function() {
  var table_ChuaDuyet = $('#table_ChuaDuyet').DataTable({
    data: dataSet_ChuaDuyet,
    "aaSorting": [],
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
      title: "Ngày đăng ký"
    }, {
      title: "Ngày duyệt"
    }, {
      title: "Tool"
    }],

    columnDefs: [{ // Money columns
      "targets": 2,
      "render": function(data, type, row) {
        var valueReturn = "<img style='height: 70px;  border-radius: 35px' src='" + base_url_original + "public/images/hinh_bacsi/" + data + "'>";
        return valueReturn;
      }
    }, { // Money columns
      "targets": -2,
      "render": function(data, type, row) {
        var valueReturn = "<a class= 'classGreen'> Duyệt</a> | <a class= 'classBlue'>Không duyệt</a> | <a class= 'classRed'>Treo</a>";
        valueReturn += "<div class='panel_KhongDuyet' style='padding-top: 5px; display:none'> <input  placeHolder='Lý do không duyệt' /> <button class='button_Khongduyet'>OK</button></div>";
        valueReturn += "<div class='panel_Treo' style='padding-top: 5px; display:none'> <input  placeHolder='Lý do treo' /> <button class='button_Treo'>OK</button></div>";
        return valueReturn;
      }
    }, {
      "targets": -1,
      "render": function(data, type, row){
        var mClass ="glyphicon glyphicon-eye-open";
        if(row[9] == 0)
          mClass = "glyphicon glyphicon-eye-close";

        var mString = "<a class='dislay_bacsi' href='#'><span class='" + mClass+ "' data-toggle='tooltip' title='Ẩn / Hiện bác sĩ'></span></a>";
        mString += " | <a class='display_detail'> <span class='glyphicon glyphicon-info-sign' data-toggle='tooltip' title='Thông tin chi tiết bác sĩ'></span></a>";
        return mString;
      }
    }]

  });

  //xử lý show textbox
  $('#table_ChuaDuyet tbody').on('click', 'a', function() {
    $('.panel_KhongDuyet').fadeOut(200);
    $('.panel_Treo').fadeOut(200);

    var className = this.attributes.class.value;
    var data = table_ChuaDuyet.row($(this).parents('tr')).data();
    //alert( data[0] +"'s salary is: "+ data[ 5 ] );
    var tagets_1 = $(this).parents('tr').find(".panel_KhongDuyet"); // panel 1
    var tagets_2 = $(this).parents('tr').find(".panel_Treo"); // panel 2

    switch (className) {
      case 'classGreen':
        tagets_1.fadeOut(200);
        tagets_2.fadeOut(200);
        // update tại đây
        var mData = {
          'Id': data[0],
          'Value': '',
          'Status': 'DaDuyet'
        };
        onUpdateRecord(mData, function(result, flag) {
          if (flag) {
            location.reload();
            alert_CapNhatThanhCong();

          } else {
            alert_CapNhatThatBai();
          }
        }, _global);

        break;
      case 'classBlue':
        tagets_1.fadeIn(200);
        tagets_2.fadeOut(200);

        break;
      case 'classRed':
        tagets_1.fadeOut(200);
        tagets_2.fadeIn(200);
        break;

      case 'dislay_bacsi':
        if(data[9] == 1) { //đang show giờ không muốn show nữa
          if (confirm('Bạn đồng ý muốn ẩn bác sĩ này?')) {
            //do something.
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-open" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-close" ).fadeIn(1000);
            data[9] = 0;
            call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});

          }
        } else { // đang ẩn muốn show.
          if (confirm('Bạn đồng ý muốn hiện bác sĩ này?')) {
            //do something.
            data[9] = 1;
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-close" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-open" ).fadeIn(1000);
             call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});
          }
        }
        break;

        case 'display_detail': 
          var idBacSi = data[0];
          onShowFormDetail(idBacSi);
        break;
    }
  });
  // xử lý button submit

  $('#table_ChuaDuyet tbody').on('click', 'button', function() {
    var className = this.attributes.class.value;
    var data = table_ChuaDuyet.row($(this).parents('tr')).data();
    //alert(data[0]);
    var className = this.attributes.class.value;
    var valueText = $(this).parent('div').find('input').val();
    if (valueText.length == 0) {
      alert("Bạn chưa nhập thông tin");
    } else {
      switch (className) {
        case 'button_Khongduyet':
          var mData = {
            'Id': data[0],
            'Value': valueText,
            'Status': 'KhongDuyet'
          };
          break;
        case 'button_Treo':
          var mData = {
            'Id': data[0],
            'Value': valueText,
            'Status': 'Treo'
          };
          break;
      }

      onUpdateRecord(mData, function(result, flag) {
        if (flag) {
          location.reload();
          alert_CapNhatThanhCong();
        } else {
          console.log(result);
          alert_CapNhatThatBai();
        }
      }, _global);
    }
  });

  $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function() {
  var table_DaDuyet = $('#table_DaDuyet').DataTable({
    data: dataSet_DaDuyet,
    "aaSorting": [],
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
      title: "Ngày duyệt"
    }, {
      title: "Tool"
    }],
    columnDefs: [{ // Money columns
      "targets": 2,
      "render": function(data, type, row) {
        var valueReturn = "<img style='height: 70px;  border-radius: 35px' src='" + base_url_original + "public/images/hinh_bacsi/" + data + "'>";
        return valueReturn;
      }
    }, { // Money columns
      "targets": -2,
      "render": function(data, type, row) {
        var MnguoiDuyet = row[6];
        var valueReturn = "";
        valueReturn += "<a href='#'><span class='glyphicon glyphicon-user table_icon' data-toggle='tooltip' title='Duyệt bởi: " + MnguoiDuyet + "'></span></a>";
        //valueReturn += "<a href='#' data-toggle='tooltip' title='Hooray!'>Hover over me</a>";
        valueReturn += " | " + row[7];
        return valueReturn;
      }
    }, {
      "targets": -1,
      "render": function(data, type, row){
        var mClass ="glyphicon glyphicon-eye-open";
        if(row[9] == 0)
          mClass = "glyphicon glyphicon-eye-close";
        return "<a class='dislay_bacsi' href='#'><span class='" + mClass+ "' data-toggle='tooltip' title='Ẩn / Hiện bác sĩ'></span></a>"
      }
    }]
  });

  // xử lý button submit

//xử lý show textbox
  $('#table_DaDuyet tbody').on('click', 'a', function() {
    var className = this.attributes.class.value;
    var data = table_DaDuyet.row($(this).parents('tr')).data();    
    switch (className) {
      case 'dislay_bacsi':
        if(data[9] == 1) { //đang show giờ không muốn show nữa
          if (confirm('Bạn đồng ý muốn ẩn bác sĩ này?')) {
            //do something.
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-open" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-close" ).fadeIn(1000);
            data[9] = 0;
            call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});

          }
        } else { // đang ẩn muốn show.
          if (confirm('Bạn đồng ý muốn hiện bác sĩ này?')) {
            //do something.
            data[9] = 1;
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-close" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-open" ).fadeIn(1000);
             call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});
          }
        }
        break;
    }
  });

  $('[data-toggle="tooltip"]').tooltip();
});

// không duyệt
$(document).ready(function() {
  var table_KhongDuyet = $('#table_KhongDuyet').DataTable({
    data: dataSet_KhongDuyet,
    "aaSorting": [],
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
      title: "Ngày duyệt"
    }, {
      title: "Tool"
    }],
    columnDefs: [{ // Money columns
      "targets": 2,
      "render": function(data, type, row) {
        var valueReturn = "<img style='height: 70px;  border-radius: 35px' src='" + base_url_original + "public/images/hinh_bacsi/" + data + "'>";
        return valueReturn;
      }
    }, { // Money columns
      "targets": -2,
      "render": function(data, type, row) {
        var MnguoiDuyet = row[6];
        var mLyDo = row[8];
        var valueReturn = "";
        valueReturn += "<a href='#'><span class='glyphicon glyphicon-user table_icon' data-toggle='tooltip' title='Không duyệt bởi: " + MnguoiDuyet + "'></span></a>";
        valueReturn += " | <a href='#'><span class='glyphicon glyphicon-info-sign table_icon' data-toggle='tooltip' title='Lý do: " + mLyDo + "'></span></a>";
        valueReturn += " | " + row[7];
        return valueReturn;
      }
    }, {
      "targets": -1,
      "render": function(data, type, row){
        var mClass ="glyphicon glyphicon-eye-open";
        if(row[9] == 0)
          mClass = "glyphicon glyphicon-eye-close";
        return "<a class='dislay_bacsi' href='#'><span class='" + mClass+ "' data-toggle='tooltip' title='Ẩn / Hiện bác sĩ'></span></a>"
      }
    }]
  });

 $('#table_KhongDuyet tbody').on('click', 'a', function() {
    var className = this.attributes.class.value;
    var data = table_KhongDuyet.row($(this).parents('tr')).data();    
    switch (className) {
      case 'dislay_bacsi':
        if(data[9] == 1) { //đang show giờ không muốn show nữa
          if (confirm('Bạn đồng ý muốn ẩn bác sĩ này?')) {
            //do something.
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-open" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-close" ).fadeIn(1000);
            data[9] = 0;
            call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});

          }
        } else { // đang ẩn muốn show.
          if (confirm('Bạn đồng ý muốn hiện bác sĩ này?')) {
            //do something.
            data[9] = 1;
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-close" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-open" ).fadeIn(1000);
             call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});
          }
        }
        break;
    }
  });
  $('[data-toggle="tooltip"]').tooltip();
});

// Treo

$(document).ready(function() {
  var table_Treo = $('#table_Treo').DataTable({
    data: dataSet_Treo,
    "aaSorting": [],
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
      title: "Ngày duyệt"
    }, {
      title: "Tool"
    }],
    columnDefs: [{ // Money columns
      "targets": 2,
      "render": function(data, type, row) {
        var valueReturn = "<img style='height: 70px;  border-radius: 35px' src='" + base_url_original + "public/images/hinh_bacsi/" + data + "'>";
        return valueReturn;
      }
    }, { // Money columns
      "targets": -2,
      "render": function(data, type, row) {
        var mLyDo = row[8];
        var MnguoiDuyet = row[6];
        var valueReturn = "<span class='tooltipRow' data-toggle='tooltip' title='" + mLyDo + "'> Đang xử lý </span>";
        valueReturn += " | <a class= 'classGreen'> Duyệt</a> | <a class= 'classBlue'>Không duyệt</a>";
        valueReturn += "<div class='panel_KhongDuyet' style='padding-top: 5px; display:none'> <input  placeHolder='Lý do không duyệt' /> <button class='button_Khongduyet'>OK</button></div>";
        valueReturn += "<br/><a href='#'><span style='color: green;' class='glyphicon glyphicon-user' data-toggle='tooltip' title='Treo bởi " + MnguoiDuyet + "'></span></a>";
        valueReturn += " | " + row[7];
        return valueReturn;
      }
    }, {
      "targets": -1,
      "render": function(data, type, row){
        var mClass ="glyphicon glyphicon-eye-open";
        if(row[9] == 0)
          mClass = "glyphicon glyphicon-eye-close";
        return "<a class='dislay_bacsi' href='#'><span class='" + mClass+ "' data-toggle='tooltip' title='Ẩn / Hiện bác sĩ'></span></a>"
      }
    }]
  });


  //xử lý show textbox
  $('#table_Treo tbody').on('click', 'a', function() {
    $('.panel_KhongDuyet').fadeOut(200);
    $('.panel_Treo').fadeOut(200);

    var className = this.attributes.class.value;
    var data = table_Treo.row($(this).parents('tr')).data();
    //alert( data[0] +"'s salary is: "+ data[ 5 ] );
    var tagets_1 = $(this).parents('tr').find(".panel_KhongDuyet"); // panel 1
    switch (className) {
      case 'classGreen':
        tagets_1.fadeOut(200);
        // update tại đây
        var mData = {
          'Id': data[0],
          'Value': '',
          'Status': 'DaDuyet'
        };
        onUpdateRecord(mData, function(result, flag) {
          if (flag) {
            location.reload();
            alert_CapNhatThanhCong();
          } else {
            console.log(result);
            alert_CapNhatThatBai();
          }
        }, _global);
        break;
      case 'classBlue':
        tagets_1.fadeIn(200);
        break;

      case 'dislay_bacsi':
        if(data[9] == 1) { //đang show giờ không muốn show nữa
          if (confirm('Bạn đồng ý muốn ẩn bác sĩ này?')) {
            //do something.
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-open" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-close" ).fadeIn(1000);
            data[9] = 0;
            call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});

          }
        } else { // đang ẩn muốn show.
          if (confirm('Bạn đồng ý muốn hiện bác sĩ này?')) {
            //do something.
            data[9] = 1;
            $(this).find("span").removeClass( "glyphicon glyphicon-eye-close" ).fadeOut(100).addClass( "glyphicon glyphicon-eye-open" ).fadeIn(1000);
             call_OnUpdateRecord_2({'Id': data[0], 'Display': data[9]});
          }
        }
        break;
    }
  });
  // xử lý button submit

  $('#table_Treo tbody').on('click', 'button', function() {
    var className = this.attributes.class.value;
    var data = table_Treo.row($(this).parents('tr')).data();
    //alert(data[0]);
    var className = this.attributes.class.value;
    var valueText = $(this).parent('div').find('input').val();
    if (valueText.length == 0) {
      alert("Bạn chưa nhập thông tin");
    } else {
      switch (className) {
        case 'button_Khongduyet':
          var mData = {
            'Id': data[0],
            'Value': valueText,
            'Status': 'KhongDuyet'
          };
          break;
      }

      onUpdateRecord(mData, function(result, flag) {
        if (flag) {
          location.reload();
          alert_CapNhatThanhCong();
        } else {
          console.log(result);
          alert_CapNhatThatBai();
        }
      }, _global);
    }
  });
  $('[data-toggle="tooltip"]').tooltip();
});


//function chung


function onShowFormDetail(idBacSi) {

  onGetRecordById({'Id': idBacSi}, function(result, flag) {
      if(flag) {
        onSetForm(result);
        $('#detail_form').modal('show');  
      } else {
        alert("Lấy thông tin bác sĩ thất bại");
      }
  }, _global);
}




// function call update
function call_OnUpdateRecord_2(mData) {
  onUpdateRecord_2(mData, function(result, flag) {
    if (flag) {           
      //alert_CapNhatThanhCong();
    } else {
      alert_CapNhatThatBai();
    }
  }, _global);
}

function onSetForm(result) {
  debugger;
  $("#HinhAnh").attr("src",  base_url_original + "public/images/hinh_bacsi/" + result.HinhAnh)
}