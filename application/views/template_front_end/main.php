<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="overflow-x: hidden">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url() ?>public/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/css/mystyle.css">
	<!--<script src="<?php echo base_url() ?>public/jquery-3.2.1.js"></script>-->
 <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>	
	<script src="<?php echo base_url() ?>public/js/croppie.js"></script>
	<script src="<?php echo base_url() ?>public/js/typeahead.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/croppie.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/slick/slick-theme.css">
	<script src="<?php echo base_url() ?>public/js/tinymce/tinymce.min.js  "></script>
	 <script>
		tinymce.init({
			selector: '.danhba_textarea',
			height: 100,
			menubar: false,
			statusbar: false,
	          plugins: "advlist lists ",
	          toolbar: 'bold italic underline | bullist numlist outdent indent',
		});
		var base_url_original = "<?php echo base_url() ?>";


	  </script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote: base_url_original + '/Danhba/Search?key=%QUERY',
        limit : 20
    });
	});
    </script>	
	
 <style type="text/css">
.bs-example{
	font-family: sans-serif;
	position: relative;
	
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 8px;
	font-size: 24px;
	height: 30px;
	line-height: 30px;
	outline: medium none;
	padding: 20px 12px;
	width: 500px !important;
}
.typeahead {
	background-color: #FFFFFF;
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 600px;
}
.tt-suggestion {
	font-size: 24px;
	line-height: 24px;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
table {
    border-collapse: collapse;
}

th, td {
    border: 1px solid black;
    padding:5px;
    text-align: center;
}

.hidden{
    display:none;
}
</style>	  
</head>
<html lang="en">
	<body>
		<?php echo $content_for_layout ?>
	</body>
</html>
