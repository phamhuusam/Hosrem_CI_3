<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="overflow-x: hidden">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url() ?>public/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/css/mystyle.css">	
	<script src="<?php echo base_url() ?>public/jquery-3.2.1.js"></script>
	<script src="<?php echo base_url() ?>public/bootstrap-3.3.7/js/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>public/js/croppie.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/croppie.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/slick/slick-theme.css">
	<script src="<?php echo base_url() ?>public/js/tinymce/tinymce.min.js  "></script>  
	 <script>
		tinymce.init({
			selector: '.danhba_textarea',
			height: 150,
			menubar: false,
			statusbar: false,
	          plugins: "advlist lists ",
	          toolbar: 'bold italic underline | bullist numlist outdent indent',
		});	  
	  </script>
<script type="text/javascript">
$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});

$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    	
    }
    reader.readAsDataURL(this.files[0]);
});

$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {

		$.ajax({
			url: "/ajaxpro.php",
			type: "POST",
			data: {"image":resp},
			success: function (data) {
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
			}
		});
	});
});

</script>	  
</head>
<html lang="en">

	<body>		
		<?php echo $content_for_layout ?>		
	</body>

</html>