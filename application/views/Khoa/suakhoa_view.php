<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Khoa</title>
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

    <!-- Main CSS-->
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
			<div class="col-sm-12 push-sm-3 ;">
				<div>
					<div class="alert alert-success ; text-center" role="alert">
						<strong><h2>Sửa Khoa</h2></strong>
					</div>
				</div>
				<div>
				<form action="<?= base_url() ?>Khoa/update" method="post">
					<?php foreach ($khoa_sua as $value): ?>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">

					<fieldset class="form-group form-control">
						<label  style="color: #E91E63">Mã Khoa:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập mã khoa" name="makhoa" value="<?= $value['makhoa'] ?>" >
					</fieldset>

					<fieldset class="form-group form-control">
						<label  style="color: #E91E63">Tên Khoa:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập tên khoa" name="tenkhoa" value="<?= $value['tenkhoa'] ?>">
					</fieldset>
				
					<fieldset class="form-group form-control">
						<label  style="color: #E91E63">Địa Chỉ:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập địa chỉ" name="diachi" value="<?= $value['diachi'] ?>">
					</fieldset>	

					<fieldset class="form-group form-control">
						<label  style="color: #E91E63">Điện Thoại:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập số điện thoại" name="dienthoai" value="<?= $value['dienthoai'] ?>">
					</fieldset>	
					
					<button type="submit" class="btn btn-outline-success ">Sửa</button>

					<?php endforeach ?>
				</form>
				</div>
			</div>

		</div>
	</div>

</body>
</html>