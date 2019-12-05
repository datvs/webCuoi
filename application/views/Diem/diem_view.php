<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Điểm</title>
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
			<div class="col-sm-12 push-sm-3 form-group">
				<div>
					<div class="alert alert-success ; text-center" role="alert">
						<strong>Điểm</strong>
					</div>
				</div>
				<div>
				<form action="<?= base_url() ?>Diem/add" method="post">
					
					<fieldset class="form-control form-group">
						<label style="color: #E91E63">Mã Môn Học:</label>
						<select class="form-control form-group" name="mamonhoc">
						<option>Chọn Mã Môn Học: </option>
						<?php foreach ($data_mamonhoc as $value): ?>
							<option value="<?= $value['mamonhoc'] ?>"><?= $value['tenmonhoc'] ?>-<?= $value['mamonhoc'] ?></option>
						<?php endforeach ?>
						</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Sinh Viên:</label>
						<select class="form-control form-group" name="masinhvien">
							<option>Chọn Mã Sinh Viên:</option>
							<?php foreach ($data_sinhvien as $value): ?>
								<option value="<?= $value['masinhvien'] ?>"><?= $value['masinhvien'] ?></option>
							<?php endforeach ?>
						</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Học Kỳ:</label>
						<input type="text" class="form-control form-group" name="hocky" placeholder="Nhập học kỳ">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Chuyên Cần:</label>
						<input type="text" class="form-control form-group" name="diemcc" placeholder="Nhập điểm chuyên cần">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Giữa Kỳ:</label>
						<input type="text" class="form-control form-group" name="diemgk" placeholder="Nhập điểm giữa kỳ">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Thực Hành:</label>
						<input type="text" class="form-control form-group" name="diemthuchanh" placeholder="Nhập điểm thực hành">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Thi Kết Thúc:</label>
						<input type="text" class="form-control form-group" name="diemketthuc" placeholder="Nhập điểm thi kết thúc">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Thảo Luận:</label>
						<input type="text" class="form-control form-group" name="diemthaoluan" placeholder="Nhập điểm thảo luận">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Tổng Kết Học Phần:</label>
						<input type="text" class="form-control form-group" name="diemtongket" placeholder="Nhập điểm tổng kết học phần">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Chữ:</label>
						<input type="text" class="form-control form-group" name="diemchu" placeholder="Nhập điểm chữ">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm TBC:</label>
						<input type="text" class="form-control form-group" name="diemtbc" placeholder="Nhập điểm trung bình cộng">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Đánh Giá:</label>
						<input type="text" class="form-control form-group" name="danhgia" placeholder="Nhập đánh giá">
					</fieldset>

					<button type="submit" class="btn btn-outline-success form-group">Thêm</button>
				</form>
				</div>
			</div>

			<div class="col-sm-12 push-sm-3">
					<div>
						<div class="alert alert-success ; text-center" role="alert">
							<strong>Danh Sách Điểm </strong>
						</div>
					</div>
					<div class="table-responsive table--no-card m-b-30">
								<table class="table table-borderless table-striped table-earning">
									<thead>
										<tr>
											<th>Công Cụ</th>
											<th>STT</th>
											<th>Mã Môn Học</th>
											<th>Mã Sinh Viên</th>
											<th>Học Kỳ</th>
											<th>Điểm Chuyên Cần</th>
											<th>Điểm Kiểm Tra GK</th>
											<th>Điểm Thực Hành</th>
											<th>Điểm Thi Kết Thúc</th>
											<th>Điểm Thảo Luận</th>
											<th>Điểm Tổng Kết HP</th>
											<th>Điểm Chữ</th>
											<th>Điểm TBC</th>
											<th>Đánh Giá</th>
										</tr>
									</thead>
									<tbody>
											<?php $i=1 ?>
											<?php foreach ($data_diem as $value): ?>
												<tr>
													<td class="table-active">
													<a class="zmdi zmdi-edit" href="<?= base_url() ?>Diem/laydulieu/<?= $value['id'] ?>"></a>
												|
													<a style="color: red ; height: 50px" class="zmdi zmdi-delete" color="red" href="<?= base_url() ?>Diem/delete/<?= $value['id'] ?>"></a>
													</td>
													<td class="table-active"><?= $i ?></td>
													<td class="table-active"><?= $value['mamonhoc'] ?></td>
													<td class="table-active"><?= $value['masinhvien'] ?></td>
													<td class="table-active"><?= $value['hocky'] ?></td>
													<td class="table-active"><?= $value['diemcc'] ?></td>
													<td class="table-active"><?= $value['diemgk'] ?></td>
													<td class="table-active"><?= $value['diemthuchanh'] ?></td>
													<td class="table-active"><?= $value['diemketthuc'] ?></td>
													<td class="table-active"><?= $value['diemthaoluan'] ?></td>
													<td class="table-active"><?= $value['diemtongket'] ?></td>
													<td class="table-active"><?= $value['diemchu'] ?></td>
													<td class="table-active"><?= $value['diemtbc'] ?></td>
													<td class="table-active"><?= $value['danhgia'] ?></td>
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