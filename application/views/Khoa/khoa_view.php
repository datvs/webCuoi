<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khoa</title>
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
		} else {
			redirect('admin/logIn','refresh');
		}
	?>

	<?php 
		include "navbar_view.php";
	 ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3 form-group">
				<div class="alert alert-success ; text-center">
					<strong>Khoa</strong>
				</div>
			
			<div>
				<form action="<?= base_url() ?>Khoa/add" method="POST">
	
					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Khoa:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập mã khoa" name="makhoa">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Tên Khoa:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập tên khoa" name="tenkhoa">
					</fieldset>
				
					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Địa Chỉ:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập địa chỉ" name="diachi">
					</fieldset>	

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điện Thoại:</label>
						<input type="text" class="form-control form-group" placeholder="Nhập số điện thoại" name="dienthoai">
					</fieldset>	
					
					<button type="submit" class="btn btn-outline-success ; form-group">Thêm</button>

				</form>
			</div>

			</div>

			<div class="col-sm-12 push-sm-3">
				<div class="alert alert-success ; text-center">
					<strong>Danh Sách Khoa</strong>
				</div>

				<div class="table-responsive table--no-card m-b-30">
					<table class="table table-borderless table-striped table-earning">
						<thead>
							<tr>
								<th>Công Cụ</th>
								<th>STT</th>
								<th>Mã Khoa</th>
								<th>Tên Khoa</th>
								<th>Địa Chỉ</th>
								<th>Điện Thoại</th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<?php $i= 1 ?>
							<?php foreach ($data_khoa as $value): ?>

							<tr>
								<td class="table-active">
									<a class="zmdi zmdi-edit " href="<?= base_url() ?>Khoa/laydulieu/<?= $value['id'] ?>"></a>
									|
									<a class="zmdi zmdi-delete" style="color: red" href="<?= base_url() ?>Khoa/delete/<?= $value['id'] ?>"></a>
								</td>
								<td class="table-active"><?= $i ?></td>
								<td class="table-active"><?= $value['makhoa'] ?></td>
								<td class="table-active"><?= $value['tenkhoa'] ?></td>
								<td class="table-active"><?= $value['diachi'] ?></td>
								<td class="table-active"><?= $value['dienthoai'] ?></td>
								<td class="table-active"></td>
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