<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shipment Confirmation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Shipment Confirmation</h2>
        <p>Your shipment details have been successfully submitted.</p>
        <p>Grand Total: $<?= number_format($grand_total, 2) ?></p>
        <a href="<?= site_url('ShipmentDashboard'); ?>" class="btn btn-primary">Back to Dashboard</a>
    </div>
</body>
</html>

