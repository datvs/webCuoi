<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Điểm</title>
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
				<strong><h2>Sửa Điểm</h2></strong>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 push-sm-3">
				<form action="<?= base_url() ?>Diem/sua" method="post">
					<?php foreach ($data_suadiem as $value1): ?>
						<input type="hidden" name="id" value="<?= $value1['id'] ?>">

					<fieldset class="form-control form-group">
						<label style="color: #E91E63">Mã Môn Học:</label>
						<select class="form-control form-group" name="mamonhoc">
						<option>Chọn Mã Môn Học: </option>
						<?php foreach ($data_mamonhoc as $value): ?>
							<option <?php if ($value1['mamonhoc'] == $value['mamonhoc']): ?>
									<?= "selected" ?>
								<?php endif ?> value="<?= $value['mamonhoc'] ?>"><?= $value['mamonhoc'] ?>-<?= $value['tenmonhoc'] ?></option>
							<?php endforeach ?>
						</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Mã Sinh Viên:</label>
						<select class="form-control form-group" name="masinhvien">
							<option>Chọn Mã Sinh Viên:</option>
							<?php foreach ($data_sinhvien as $value2): ?>
								<option <?php if ($value2['masinhvien'] == $value1['masinhvien']): ?>
									<?= "selected" ?>
								<?php endif ?> value="<?= $value2['masinhvien'] ?>"><?= $value2['masinhvien'] ?></option>
							<?php endforeach ?>
						</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Học Kỳ:</label>
						<select class="form-group form-control" name="hocky">
							<option>Chọn Học Kỳ:</option>
							<option <?php if ($value1['hocky'] == "Học Kỳ 1"): ?>
								<?= "selected" ?> 
							<?php endif ?>>Học Kỳ 1</option>
							<option <?php if ($value1['hocky'] == "Học Kỳ 2"): ?>
								<?= "selected" ?>
							<?php endif ?>>Học Kỳ 2</option>
							<option <?php if ($value1['hocky'] == "Cả Năm"): ?>
								<?= "selected" ?>
							<?php endif ?>>Cả Năm</option>
						</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Lần Học:</label>
						<input type="text" class="form-control form-group" name="lanhoc" placeholder="Nhập lần học" value="<?= $value1['lanhoc'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Lần Thi:</label>
						<input type="text" class="form-control form-group" name="lanthi" placeholder="Nhập lần thi" value="<?= $value1['lanthi'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Chuyên Cần:</label>
						<input type="text" class="form-control form-group" name="diemcc" placeholder="Nhập điểm chuyên cần" value="<?= $value1['diemcc'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Giữa Kỳ:</label>
						<input type="text" class="form-control form-group" name="diemgk" placeholder="Nhập điểm giữa kỳ" value="<?= $value1['diemgk'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Thực Hành:</label>
						<input type="text" class="form-control form-group" name="diemthuchanh" placeholder="Nhập điểm thực hành" value="<?= $value1['diemthuchanh'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Thi Kết Thúc:</label>
						<input type="text" class="form-control form-group" name="diemketthuc" placeholder="Nhập điểm thi kết thúc" value="<?= $value1['diemketthuc'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Thảo Luận:</label>
						<input type="text" class="form-control form-group" name="diemthaoluan" placeholder="Nhập điểm thảo luận" value="<?= $value1['diemthaoluan'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Tổng Kết Học Phần:</label>
						<input type="text" class="form-control form-group" name="diemtongket" placeholder="Nhập điểm tổng kết học phần" value="<?= $value1['diemtongket'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm Chữ:</label>
						<select class="form-group form-control" name="diemchu">
							<option>Chọn Điểm Chữ:</option>
							<option <?php if ($value1['diemchu'] == "A"): ?>
								<?= "selected" ?>
							<?php endif ?> >A</option>
							<option <?php if ($value1['diemchu'] == "B+"): ?>
								<?= "selected" ?>
							<?php endif ?>>B+</option>
							<option <?php if ($value1['diemchu'] == "B"): ?>
								<?= "selected" ?>
							<?php endif ?>>B</option>
							<option <?php if ($value1['diemchu'] == "C+"): ?>
								<?= "selected" ?>
							<?php endif ?>>C+</option>
							<option <?php if ($value1['diemchu'] == "C"): ?>
								<?= "selected" ?>
							<?php endif ?>>C</option>
							<option <?php if ($value1['diemchu'] == "D+"): ?>
								<?= "selected" ?>
							<?php endif ?>>D+</option>
							<option <?php if ($value1['diemchu'] == "D"): ?>
								<?= "selected" ?>
							<?php endif ?> >D</option>
						</select>
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Điểm TBC:</label>
						<input type="text" class="form-control form-group" name="diemtbc" placeholder="Nhập điểm trung bình cộng" value="<?= $value1['diemtbc'] ?>">
					</fieldset>

					<fieldset class="form-group form-control">
						<label style="color: #E91E63">Đánh Giá:</label>
						<input type="text" class="form-control form-group" name="danhgia" placeholder="Nhập đánh giá" value="<?= $value1['danhgia'] ?>">
					</fieldset>

					<button type="submit" class="btn btn-outline-success">Sửa</button>
					<?php endforeach ?>
				</form>
			</div>
		</div>
	</div>

</body>
</html>