<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Môn Học</title>
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
			<div class="col-sm-4 push-sm-3">
				<div class="alert alert-success ; text-center">
					<strong>Môn Học</strong>
				</div>

				<form action="<?= base_url() ?>Monhoc/add" method="POST">
				<fieldset class="form-group form-control">
					<label style="color: #E91E63">Mã Môn Học:</label>
					<input type="text" class="form-control form-group" placeholder="Nhập các môn học" name="mamonhoc">
				</fieldset>

				<fieldset class="form-group form-control">
					<label style="color: #E91E63">Tên Môn Học:</label>
					<input type="text" name="tenmonhoc" placeholder="Nhập tên môn học" class="form-control form-group">
				</fieldset>

				<fieldset class="form-group form-control">
					<label style="color: #E91E63">Số Tín Chỉ:</label>
					<input type="text" class="form-control form-group" placeholder="Nhập số tín chỉ" name="sotinchi">
				</fieldset>

				<button type="submit" class="btn btn-outline-success">Thêm</button>
				</form>

			</div>

			<div class="col-sm-8 push-sm-3">
				<div>
					<div class="alert alert-success text-center">
						<strong>Danh Sách Môn Học</strong>
					</div>
				</div>

					<div class="table-responsive table--no-card m-b-30">
						<table class="table table-borderless table-striped table-earning">
						<thead>
							<tr>
								<th>Công Cụ</th>
								<th>STT</th>
								<th>Mã Môn Học</th>
								<th>Tên Môn Học</th>
								<th>Số Tín Chỉ</th>
							</tr>
						</thead>

							<tbody>
								<?php $i=1 ?>
								<?php foreach ($data_monhoc as $value): ?>
									<tr>
										<td class="table-active">
										<a class="zmdi zmdi-edit" href="<?= base_url() ?>Monhoc/laydulieu/<?= $value['id'] ?>"></a>
									|
										<a style="color: red ; height: 50px" class="zmdi zmdi-delete" color="red" href="<?= base_url() ?>Monhoc/delete/<?= $value['id'] ?>"></a>
										</td>
										<td class="table-active"><?= $i ?></td>
										<td class="table-active"><?= $value['mamonhoc'] ?></td>
										<td class="table-active"><?= $value['tenmonhoc'] ?></td>
										<td class="table-active"><?= $value['sotinchi'] ?></td>
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