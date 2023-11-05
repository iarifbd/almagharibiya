<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <?php echo form_open_multipart('FactorystockInventory/save_product'); ?>
        
        <!-- Serial Number -->
        <div class="form-group">
            <label for="serial_number">Serial Number</label>
            <input type="text" class="form-control" name="serial_number" value="<?php echo set_value('serial_number'); ?>">
            <?php echo form_error('serial_number'); ?>
        </div>
        
        <!-- Image File Path (File Upload) -->
        <div class="form-group">
            <label for="image_file_path">Image File Path</label>
            <input type="file" name="image_file_path">
            <?php if(isset($error)) echo $error; ?>
        </div>

        <!-- Reference Number -->
        <div class="form-group">
            <label for="reference_number">Reference Number</label>
            <input type="text" class="form-control" name="reference_number" value="<?php echo set_value('reference_number'); ?>">
            <?php echo form_error('reference_number'); ?>
        </div>

        <!-- Item Name -->
        <div class="form-group">
            <label for="item_name">Item Name</label>
            <input type="text" class="form-control" name="item_name" value="<?php echo set_value('item_name'); ?>">
            <?php echo form_error('item_name'); ?>
        </div>

        <!-- Color -->
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" value="<?php echo set_value('color'); ?>">
            <?php echo form_error('color'); ?>
        </div>

        <!-- Size -->
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" name="size" value="<?php echo set_value('size'); ?>">
            <?php echo form_error('size'); ?>
        </div>

        <!-- Total Quantity -->
        <div class="form-group">
            <label for="total_quantity">Total Quantity</label>
            <input type="text" class="form-control" name="total_quantity" value="<?php echo set_value('total_quantity'); ?>">
            <?php echo form_error('total_quantity'); ?>
        </div>

        <!-- Unit Price -->
        <div class="form-group">
            <label for="unit_price">Unit Price</label>
            <input type="text" class="form-control" name="unit_price" value="<?php echo set_value('unit_price'); ?>">
            <?php echo form_error('unit_price'); ?>
        </div>

        <!-- Total Price -->
        <div class="form-group">
            <label for="total_price">Total Price</label>
            <input type="text" class="form-control" name="total_price" value="<?php echo set_value('total_price'); ?>">
            <?php echo form_error('total_price'); ?>
        </div>

        <!-- Delivery Date -->
        <div class="form-group">
            <label for="delivery_date">Delivery Date</label>
            <input type="date" class="form-control" name="delivery_date" value="<?php echo set_value('delivery_date'); ?>">
            <?php echo form_error('delivery_date'); ?>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
    </div>

    <!-- Include Bootstrap JS and jQuery (you can also use a local copy) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
