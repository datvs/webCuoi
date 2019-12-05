<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Sinh Viên</title>
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
			<div class="col-sm-12 text-sm-center">
				<div class="alert alert-success" role="alert">
				<strong><h2>Sửa Sinh Viên</h2></strong>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3">
				<form action="<?= base_url() ?>SinhVien/update" method="post">
					<?php foreach ($data_suasinhvien as $value): ?>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
				
					
					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Sinh Viên:</label>
						<input type="text" class="form-group form-control" name="masinhvien" placeholder="Nhập mã sinh viên" value="<?= $value['masinhvien'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Tên Sinh Viên:</label>
						<input type="text" class="form-control form-group" name="tensinhvien" placeholder="Nhập tên sinh viên" value="<?= $value['tensinhvien'] ?>">
					</fieldset>

					
					<fieldset class="form-control form-group">
						<label style="color: #E91E63">Giới Tính:</label>
						<input type="radio" name="gioitinh" value="Nam" <?php if ($value['gioitinh'] == "Nam"): ?>
							<?= "checked" ?>
						<?php endif ?> >Nam
						<input type="radio" name="gioitinh" value="Nữ" <?php if ($value['gioitinh'] == "Nữ"): ?>
							<?= "checked" ?>
						<?php endif ?> >Nữ
					</fieldset>
					

					<fieldset class="form-control form-group">
					<label style="color: #E91E63">Ngày sinh:</label>
					<input class="form-control form-group" type="date" name="ngaysinh" placeholder="Nhập ngày sinh" value="<?= $value['ngaysinh'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Quê quán:</label>
						<input type="text" class="form-control form-group" name="quequan" placeholder="Nhập quê quán" value="<?= $value['quequan'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Lớp:</label>
						<select class="form-control form-group" name="malop">
							<option>Chọn Mã Lớp:</option>
							<?php foreach ($data_lop as $value1): ?>
								<option <?php if ($value1['malop'] == $value['malop']): ?>
									<?= "selected" ?>
								<?php endif ?> value="<?= $value1['malop'] ?>"><?= $value1['malop'] ?>-<?= $value1['tenlop'] ?></option>
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