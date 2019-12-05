<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sinh Viên</title>
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
						<strong>Sinh Viên</strong>
					</div>
				</div>
				<div>
				<form action="<?= base_url() ?>SinhVien/add" method="post">

					<fieldset class="form-group">
						<div class="text-danger"><?php $this->session->flashdata('msvexist'); ?></div>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Sinh Viên:</label>
						<input type="text" class="form-group form-control" name="masinhvien" placeholder="Nhập mã sinh viên" value="<?= set_value('masinhvien') ?>">
						<div class="text-danger"><?php form_error('masinhvien') ?></div>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Tên Sinh Viên:</label>
						<input type="text" class="form-control form-group" name="tensinhvien" placeholder="Nhập tên sinh viên">
					</fieldset>

					<fieldset class="form-control form-group">
						<label style="color: #E91E63">Giới Tính:</label></br>
						<input type="radio" name="gioitinh" value="Nam" checked="checked">Nam 
						<input type="radio" name="gioitinh" value="Nữ">Nữ
					</fieldset>

					<fieldset class="form-control form-group">
					<label style="color: #E91E63">Ngày sinh:</label>
					<input class="form-control form-group" type="date" name="ngaysinh" placeholder="Nhập ngày sinh">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Quê quán:</label>
						<input type="text" class="form-control form-group" name="quequan" placeholder="Nhập quê quán">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Lớp:</label>
						<select class="form-control form-group" name="malop">
							<option>Chọn Mã Lớp:</option>
							<?php foreach ($data_lop as $value): ?>
								<option value="<?= $value['malop'] ?>"><?= $value['malop'] ?>-<?= $value['tenlop'] ?></option>
							<?php endforeach ?>
						</select>
					</fieldset>

					<button type="submit" class="btn btn-outline-success ; form-group">Thêm</button>
				</form>
				</div>
			</div>

			<div class="col-sm-12 push-sm-3">
					<div>
						<div class="alert alert-success ; text-center" role="alert">
							<strong>Danh Sách Sinh Viên</strong>
						</div>
					</div>
					<div class="table-responsive table--no-card m-b-30">
								<table class="table table-borderless table-striped table-earning">
									<thead>
										<tr>
											<th>Công Cụ</th>
											<th>STT</th>
											<th>Mã Sinh Viên</th>
											<th>Tên Sinh Viên</th>
											<th>Giới Tính</th>
											<th>Ngày Sinh</th>
											<th>Quê Quán</th>
											<th>Mã Lớp</th>
										</tr>
									</thead>
									<tbody>
											<?php $i=1 ?>
											<?php foreach ($data_sinhvien as $value): ?>
												<tr>
													<td class="table-active">
													<a class="zmdi zmdi-edit" href="<?= base_url() ?>SinhVien/laydulieu/<?= $value['id'] ?>"></a>
												|
													<a style="color: red ; height: 50px" class="zmdi zmdi-delete" color="red" href="<?= base_url() ?>SinhVien/delete/<?= $value['id'] ?>"></a>
													</td>
													<td class="table-active"><?= $i ?></td>
													<td class="table-active"><?= $value['masinhvien'] ?></td>
													<td class="table-active"><?= $value['tensinhvien'] ?></td>
													<td class="table-active"><?= $value['gioitinh'] ?></td>
													<td class="table-active"><?= $value['ngaysinh'] ?></td>
													<td class="table-active"><?= $value['quequan'] ?></td>
													<td class="table-active"><?= $value['malop'] ?></td>
												</tr>
												<?php $i++ ?>
											<?php endforeach ?>
											
									</tbody>
					
								</table>
					</div>
			</div>
		</div>
	</div>
	

</body>
</html>

