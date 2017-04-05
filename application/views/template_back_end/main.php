<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="overflow-x: hidden">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url() ?>public/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>public/jquery-3.2.1.js"></script>
	<script src="<?php echo base_url() ?>public/bootstrap-3.3.7/js/bootstrap.js"></script>
	<link href="<?php echo base_url() ?>public/admin/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>public/admin/css/css.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>public/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>public/admin/js/js_Parent.js"></script>
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
	  

	<style type="text/css">
		body{
			overflow: auto;
		}
	</style>
</head>
	<body>
	<div class="container">
	<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Trang chủ</a></li>
		        <li><a href="#">Page 1</a></li>
		        <li><a href="#">Page 2</a></li>
		        <li><a href="#">Page 3</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?php echo base_url() ?>admin/login"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a>
		        <li><a href="<?php echo base_url() ?>admin/login/do_logout"><span class="glyphicon glyphicon-user"></span> Đăng xuất</a></li></li>
		      </ul>
		    </div>
		  </div>
		</nav>
  		<?php echo $content_for_layout ?>
  		</div>

  		<script type="text/javascript">
  			var base_url_original = "<?php echo base_url() ?>";
  		</script>
	</body>
</html>
