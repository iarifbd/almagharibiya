<!DOCTYPE html>
<html>
<head>
	<title>CRUD Application</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>">
</head>
<body>

<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">BARCODE APPLICATION</a>
	</div>
</div>
<div class="container" style="padding-top: 10px;">
	<div class="row">
		<div class="col-md-12">
		<?php 
			$success=$this->session->userdata('success');
			if ($success !="") {
		?>
			<div class="alert alert-success"><?php echo $success ; ?></div>
		<?php
			}
		?>

		<?php 
			$failure=$this->session->userdata('failure');
			if ($failure !="") {
		?>
			<div class="alert alert-success"><?php echo $failure ; ?></div>
		<?php
			}
		?>
		</div>
	</div>
	<h3>Barcode Records</h3>
	<hr>
	<div class="row">
		<div class="col-md-12 mb-3 text-right">
			<a class="btn btn-primary" href="<?php echo base_url().'index.php/BarCode/create' ?>" > create</a>
		</div>
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Barcode</th>
					<th width="100">Edit</th>
					<th width="100">Delete</th>
				</tr>
				<?php if (!empty($BarCode)) {
					foreach ($BarCode as $key => $value) {
				?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['Description']; ?></td>
					<td><?php echo $value['Barcode']; ?></td>
					<td>
						<a href="<?php echo base_url().'index.php/BarCode/edit/'.$value['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
					</td>					
					<td>
						<a  href="<?php echo base_url().'index.php/BarCode/printBarcode/'.$value['id'] ?>" class="btn btn-success btn-sm" >Print</a>
					</td>
				</tr>
				<?php
					}
				} else{
					?>
				<tr>
					<td colspan="5">Record Not Found</td>
				</tr>
				<?php 
				} ?>
			
			</table>
		</div>
	</div>
</div>

</body>
</html>