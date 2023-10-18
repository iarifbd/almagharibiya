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
	<h3>Update Barcode</h3>
	<hr>
	<form method="post" name="UpdateBarcode" action="<?php echo base_url().'index.php/BarCode/edit/'.$Barcode['id']; ?>">
	<div class="row">		
		<div class="col-md-12">
			<div class="form-group ">
				<label>Description</label>
				<input type="text" name="Description" value="<?php echo set_value('Description',$Barcode['Description']); ?>" class="form-control">
				<?php  echo form_error('Description'); ?>
			</div>
			<div class="form-group ">
				<label>Barcode</label>
				<input type="text" name="Barcode" value="<?php echo set_value('Barcode',$Barcode['Barcode']); ?>" class="form-control">
				<?php  echo form_error('Barcode'); ?>
			</div>
			<div class="form-group ">
				<button class="btn btn-primary">Update</button>
				<a class="btn btn-secondary" href="<?php echo base_url().'index.php/BarCode/index' ?>" > cancel</a>
			</div>
		</div>
	</div>
	</form>
</div>

</body>
</html>