 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Print Barcode</title>
 	<style type="text/css">
 		body {
			  background: rgb(204,204,204); 
			}
		page {
		  background: white;
		  display: block;
		  margin: 0 auto;
		  margin-bottom: 0.5cm;
		  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
		}
		page[size="A4"] {  
		  width: 21cm;
		  height: 29.7cm; 
		}
		page[size="A4"][layout="portrait"] {
		  width: 29.7cm;
		  height: 21cm;  
		}
		@media print {
		  body, page {
		    margin: 0;
		    box-shadow: 0;
		  }
		}
		@font-face { 
			font-family: 'barcode'; 
			src: url('<?php echo base_url(); ?>assets/iarifbd.ttf'); 
		} 

 	</style>
 </head>
 <body>
	<page size="A4">

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>

		<table style=" border: 1px solid black;">
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:5cm; padding:6px 6px 6px 6px; border: 1px solid black;text-align:right;font-size: 12px;">
		 			<?php echo $PrintBarCode['Description']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		 	<tr>
		 		<?php for ($x = 1; $x <= 5; $x++) { ?>	
		 		<td style="width:4cm; hight:2cm; padding:2px 2px 2px 2px; border: 1px solid black;text-align:right;font-size: 7px; font-family: 'barcode';">
		 			<?php echo $PrintBarCode['Barcode']; ?>
		 		</td>
		 		<?php }; ?>	
		 	</tr>
		</table>
	</page>
 </body>
 </html>