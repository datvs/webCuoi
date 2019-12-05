<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lớp</title>
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
			<div class="col-sm-12 push-sm-3 form-group ">
				<div>
					<div class="alert alert-success ; text-center" role="alert">
						<strong>Lớp</strong>
					</div>
				</div>
				<div>
				<form action="<?= base_url() ?>Lop/add" method="post">

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Lớp:</label>
						<input type="text" class="form-control form-group" name="malop" placeholder="Nhập mã lớp">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Tên Lớp:</label>
						<input type="text" class="form-control form-group" name="tenlop" placeholder="Nhập tên lớp">
					</fieldset>
					
					<fieldset class="form-control form-group">
					<label style="color: #E91E63">Mã Khoa:</label>
					<select class="form-control form-group" name="makhoa">
						<option>Chọn Mã Khoa:</option>
						<?php foreach ($data_khoa as $value): ?>
							<option value="<?= $value['makhoa'] ?>"><?= $value['makhoa'] ?>-<?= $value['tenkhoa'] ?></option>
						<?php endforeach ?>
					</select>
					</fieldset>

					<fieldset class="form-control form-group">
					<label style="color: #E91E63">Mã Khóa Học:</label>
					<select class="form-control form-group" name="makhoahoc">
						<option>Chọn Mã Khóa Học:</option>
						<?php foreach ($data_khoahoc as $value): ?>
							<option value="<?= $value['makhoahoc'] ?>"><?= $value['makhoahoc'] ?>-<?= $value['tenkhoahoc'] ?></option>
						<?php endforeach ?>
					</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Hệ Đào Tạo:</label>
						<select class="form-control form-group" name="mahedaotao">
							<option>Chọn Mã Hệ Đào Tạo:</option>
							<?php foreach ($data_hedaotao as $value): ?>
								<option value="<?= $value['mahedaotao'] ?>"><?= $value['mahedaotao'] ?>-<?= $value['tenhedaotao'] ?></option>
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
							<strong>Danh Sách Lớp</strong>
						</div>
					</div>
					<div class="table-responsive table--no-card m-b-30">
								<table class="table table-borderless table-striped table-earning">
									<thead>
										<tr>
											<th>Công Cụ</th>
											<th>STT</th>
											<th>Mã Lớp</th>
											<th>Tên Lớp</th>
											<th>Mã Khoa</th>
											<th>Mã Khóa Học</th>
											<th>Mã Hệ Đào Tạo</th>
										</tr>
									</thead>
									<tbody>
											<?php $i=1 ?>
											<?php foreach ($data_lop as $value): ?>
												<tr>
													<td class="table-active">
													<a class="zmdi zmdi-edit" href="<?= base_url() ?>Lop/laydulieu/<?= $value['id'] ?>"></a>
												|
													<a style="color: red ; height: 50px" class="zmdi zmdi-delete" color="red" href="<?= base_url() ?>Lop/delete/<?= $value['id'] ?>"></a>
													</td>
													<td class="table-active"><?= $i ?></td>
													<td class="table-active"><?= $value['malop'] ?></td>
													<td class="table-active"><?= $value['tenlop'] ?></td>
													<td class="table-active"><?= $value['makhoa'] ?></td>
													<td class="table-active"><?= $value['makhoahoc'] ?></td>
													<td class="table-active"><?= $value['mahedaotao'] ?></td>
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