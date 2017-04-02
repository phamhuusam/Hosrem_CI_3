function onUpdateRecord(_data, callback, _global) {
    var _data  = JSON.stringify(_data);
    $.post(base_url_original + _global._pageAjax + "/onUpdateRecord", {
          'data' : _data
        })
        .done(function(result) {
            callback(result, true);
        })
        .fail(function() {
             callback(result, false);
        });
}

function onUpdateRecord_2(_data, callback, _global) {
    var _data  = JSON.stringify(_data);
    $.post(base_url_original + _global._pageAjax + "/onUpdateRecord_2", {
          'data' : _data
        })
        .done(function(result) {
            callback(result, true);
        })
        .fail(function() {
             callback(result, false);
        });
}

function onGetRecordById(_data, callback, _global) {
    var _data = JSON.stringify(_data);
     $.post(base_url_original + _global._pageAjax + "/onGetRecordById", {
          'data' : _data
        })
        .done(function(result) {
            callback(JSON.parse(result), true);
        })
        .fail(function() {
             callback(JSON.parse(result), false);
        });
}

function alert_CapNhatThanhCong() {
    alert('Bạn đã cập nhật thành công');
}

function alert_CapNhatThatBai() {
    alert('Bạn đã cập nhật thất bại');
}

function alert_ThemThanhCong() {
    alert('Bạn đã thêm thành công');
}

function alert_ThemThatBai() {
    alert('Bạn đã thêm thất bại');
}

