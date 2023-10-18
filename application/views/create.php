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
	<h3>Create User</h3>
	<hr>
	<form method="post" name="createUser" action="<?php echo base_url().'index.php/BarCode/create' ?>">
	<div class="row">		
		<div class="col-md-6">
			<div class="form-group ">
				<label>Description</label>
				<textarea name="Description" class="form-control"><?php echo set_value('Description'); ?></textarea>
				<?php echo form_error('Description'); ?>
			</div>
			<div class="form-group ">
				<label>Barcode Number</label>
				<input type="text" name="Barcode" value="<?php echo set_value('Barcode'); ?>" class="form-control">
				<?php echo form_error('Barcode'); ?>
			</div>
			<div class="form-group ">
				<button class="btn btn-primary">create</button>
				<a class="btn btn-secondary" href="<?php echo base_url().'index.php/BarCode/index' ?>" > cancel</a>
			</div>
		</div>
	</div>
	</form>
</div>

</body>
</html>