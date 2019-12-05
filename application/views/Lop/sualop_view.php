<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Lớp</title>
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
				<strong><h2>Sửa Lớp</h2></strong>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3">
				<form action="<?= base_url() ?>Lop/update" method="post">
					<?php foreach ($data_sualop as $value): ?>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
							
				<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Lớp:</label>
						<input type="text" class="form-control form-group" name="malop" placeholder="Nhập mã lớp" value="<?= $value['malop'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Tên Lớp:</label>
						<input type="text" class="form-control form-group" name="tenlop" placeholder="Nhập tên lớp" value="<?= $value['tenlop'] ?>">
					</fieldset>
					
					<fieldset class="form-control form-group">
					<label style="color: #E91E63">Mã Khoa:</label>
					<select class="form-control form-group" name="makhoa">
						<option>Chọn Mã Khoa:</option>
						<?php foreach ($data_khoa as $value1): ?>
							<option <?php if ($value1['makhoa'] == $value['makhoa']): ?>
								<?= "selected" ?>
							<?php endif ?> value="<?= $value1['makhoa'] ?>"><?= $value1['makhoa'] ?>-<?= $value1['tenkhoa'] ?></option>
						<?php endforeach ?>
					</select>
					</fieldset>

					<fieldset class="form-control form-group">
					<label style="color: #E91E63">Mã Khóa Học:</label>
					<select class="form-control form-group" name="makhoahoc">
						<option>Chọn Mã Khóa Học:</option>
						<?php foreach ($data_khoahoc as $value1): ?>
							<option <?php if ($value1['makhoahoc'] == $value['makhoahoc']): ?>
								<?= "selected" ?>
							<?php endif ?> value="<?= $value1['makhoahoc'] ?>"><?= $value1['makhoahoc'] ?>-<?= $value1['tenkhoahoc'] ?></option>
						<?php endforeach ?>
					</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Hệ Đào Tạo:</label>
						<select class="form-control form-group" name="mahedaotao">
							<option>Chọn Mã Hệ Đào Tạo:</option>
							<?php foreach ($data_hedaotao as $value1): ?>
								<option <?php if ($value1['mahedaotao'] == $value['mahedaotao']): ?>
									<?= "selected" ?>
								<?php endif ?> value="<?= $value1['mahedaotao'] ?>"><?= $value1['mahedaotao'] ?>-<?= $value1['tenhedaotao'] ?></option>
							<?php endforeach ?>
						</select>
					</fieldset>

					<button type="submit" class="btn btn-outline-success ; form-group">Sửa</button>
				<?php endforeach ?>
				</form>
			</div>
		</div>
	</div>

</body>
</html>