<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shipment Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Shipment Form</h1>

    <form action="<?php echo base_url('SubmitShipment'); ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="EXP_NO">EXP NO</label>
            <input type="text" name="EXP_NO" id="EXP_NO" class="form-control">
          </div>
          <div class="form-group">
            <label for="DATE">DATE</label>
            <input type="date" name="DATE" id="DATE" class="form-control">
          </div>
          <div class="form-group">
            <label for="SHIPMENT_DETAILS">SHIPMENT DETAILS</label>
            <textarea name="SHIPMENT_DETAILS" id="SHIPMENT_DETAILS" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="PAYMENT_TERMS">PAYMENT TERMS</label>
            <input type="text" name="PAYMENT_TERMS" id="PAYMENT_TERMS" class="form-control">
          </div>

          <div class="shipment-item-container">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>SL NO</th>
                  <th>DESCRIPTION</th>
                  <th>TOTAL QTY PCS</th>
                  <th>TOTAL BALES</th>
                  <th>TOTAL CTN</th>
                  <th>NET WEIGHT</th>
                  <th>GROSS WEIGHT</th>
                  <th>TOTAL CBM</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="table-body">
                <tr>
                  <td><input type="text" class="form-control" name="SL_NO[]"></td>
                  <td><input type="text" class="form-control" name="DESCRIPTION[]"></td>
                  <td><input type="number" class="form-control" name="TOTAL_QTY_PCS[]"></td>
                  <td><input type="number" class="form-control" name="TOTAL_BALES[]"></td>
                  <td><input type="number" class="form-control" name="TOTAL_CTN[]"></td>
                  <td><input type="number" class="form-control" name="NET_WEIGHT[]"></td>
                  <td><input type="number" class="form-control" name="GROSS_WEIGHT[]"></td>
                  <td><input type="number" class="form-control" name="TOTAL_CBM[]"></td>
                  <td><button type="button" class="btn btn-danger" onclick="removeRow(this)">Remove</button></td>
                </tr>
              </tbody>
            </table>

            <button type="button" class="btn btn-primary" onclick="addRow()">Add Row</button>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script>
    function addRow() {
      const tableBody = document.getElementById('table-body');
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
        <td><input type="text" class="form-control" name="SL_NO[]"></td>
        <td><input type="text" class="form-control" name="DESCRIPTION[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_QTY_PCS[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_BALES[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_CTN[]"></td>
        <td><input type="number" class="form-control" name="NET_WEIGHT[]"></td>
        <td><input type="number" class="form-control" name="GROSS_WEIGHT[]"></td>
        <td><input type="number" class="form-control" name="TOTAL_CBM[]"></td>
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

