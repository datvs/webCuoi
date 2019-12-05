<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Hệ Đào Tạo</title>
	<link href="<?= base_url() ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main <CSS-->
    <link href="<?= base_url() ?>public/css/theme.css" rel="stylesheet" media="all">
</head>
<body>

	<?php 
	 	if ($this->session->userdata('username')!='') {
	 		?>
	 		
	 		<?php
	 	}else{
	 		redirect('admin/logIn','refresh');
	 	}
	?>
	
	<?php 
	include "navbar_view.php";
	 ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="alert alert-success">
				<strong><h2>Sửa Hệ Đào Tạo</h2></strong>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form action="<?= base_url() ?>HeDaoTao/update" method="post">
					<?php foreach ($data_suahedaotao as $value): ?>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
							
				<div>
					<fieldset class="form-control form-group">
						<label style="color: #E91E63">Mã Hệ Đào Tạo:</label>
						<input class="form-control form-group" type="text" name="mahedaotao" value="<?= $value['mahedaotao'] ?>">
					</fieldset>
				</div>

				<div>
					<fieldset class="form-control form-group">
						<label style="color: #E91E63">Tên Hệ Đào Tạo:</label>
						<input type="text" class="form-control form-group" name="tenhedaotao" value="<?= $value['tenhedaotao'] ?>">
					</fieldset>
				</div>

				<button type="submit" class="btn btn-outline-success">Sửa</button>
				<?php endforeach ?>
				</form>
			</div>
		</div>
	</div>

</body>
</html>