<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shipment Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Shipment Form</h2>
        <form action="<?= site_url('shipment_controller/submit_form'); ?>" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>DESCRIPTION OF GOODS</th>
                        <th>TOTAL QTY PCS</th>
                        <th>TOTAL BALES</th>
                        <th>TOTAL CTN</th>
                        <th>N.WT</th>
                        <th>G.WT</th>
                        <th>TOTAL CBM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td><input type="text" class="form-control" name="SL_NO[]"><?= form_error('SL_NO[]') ?></td>
                        <td><input type="text" class="form-control" name="DESCRIPTION[]"><?= form_error('DESCRIPTION[]') ?></td>
                        <td><input type="text" class="form-control" name="TOTAL_QTY_PCS[]"><?= form_error('TOTAL_QTY_PCS[]') ?></td>
                        <td><input type="text" class="form-control" name="TOTAL_BALES[]"><?= form_error('TOTAL_BALES[]') ?></td>
                        <td><input type="text" class="form-control" name="TOTAL_CTN[]"><?= form_error('TOTAL_CTN[]') ?></td>
                        <td><input type="text" class="form-control" name="NET_WEIGHT[]"><?= form_error('NET_WEIGHT[]') ?></td>
                        <td><input type="text" class="form-control" name="GROSS_WEIGHT[]"><?= form_error('GROSS_WEIGHT[]') ?></td>
                        <td><input type="text" class="form-control" name="TOTAL_CBM[]"><?= form_error('TOTAL_CBM[]') ?></td>
                        <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="addRow()">Add Row</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        function addRow() {
            const tableBody = document.getElementById('table-body');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><input type="text" class="form-control" name="SL_NO[]"><?= form_error('SL_NO[]') ?></td>
                <td><input type="text" class="form-control" name="DESCRIPTION[]"><?= form_error('DESCRIPTION[]') ?></td>
                <td><input type="text" class="form-control" name="TOTAL_QTY_PCS[]"><?= form_error('TOTAL_QTY_PCS[]') ?></td>
                <td><input type="text" class="form-control" name="TOTAL_BALES[]"><?= form_error('TOTAL_BALES[]') ?></td>
                <td><input type="text" class="form-control" name="TOTAL_CTN[]"><?= form_error('TOTAL_CTN[]') ?></td>
                <td><input type="text" class="form-control" name="NET_WEIGHT[]"><?= form_error('NET_WEIGHT[]') ?></td>
                <td><input type="text" class="form-control" name="GROSS_WEIGHT[]"><?= form_error('GROSS_WEIGHT[]') ?></td>
                <td><input type="text" class="form-control" name="TOTAL_CBM[]"><?= form_error('TOTAL_CBM[]') ?></td>
                <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td>
            `;
            tableBody.appendChild(newRow);
        }

        function removeRow(button) {
            const row = button.parentNode.parentNode;
            const tableBody = document.getElementById('table-body');
            tableBody.removeChild(row);
        }
    </script>
</body>
</html>
