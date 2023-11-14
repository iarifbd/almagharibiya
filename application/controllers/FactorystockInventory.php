<?php
class FactorystockInventory extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }


     public function index() {
        $data['factory'] = $this->db->get('factorystockinventory')->result_array();
        $this->load->view('warehouse/factorystockinventory_from', $data);
    }


    public function save_product() {
     
        $this->form_validation->set_rules('serial_number', 'Serial Number', 'required');
        $this->form_validation->set_rules('reference_number', 'Reference Number', 'required');
        $this->form_validation->set_rules('item_name', 'Item Name', 'required');
        $this->form_validation->set_rules('color', 'Color', 'required');
        $this->form_validation->set_rules('size[]', 'Size', 'required');
        $this->form_validation->set_rules('size_quantity[]', 'Size Quantity', 'required');
        $this->form_validation->set_rules('total_quantity', 'Total Quantity', 'required|numeric');
        $this->form_validation->set_rules('unit_price', 'Unit Price', 'required|numeric');
        $this->form_validation->set_rules('total_price', 'Total Price', 'required|numeric');
        $this->form_validation->set_rules('delivery_date', 'Delivery Date', 'required');


        // Set up file upload rules
        $config['upload_path']   = './uploads/';  // Create an "uploads" folder in your CodeIgniter root directory
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = 2048;  // Maximum file size in kilobytes (2MB)
        $config['file_name']     = 'product_image_' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run() === FALSE || !$this->upload->do_upload('image_file_path')) {
            $error = array('error' => $this->upload->display_errors());
            $data['factory'] = $this->db->get('factorystockinventory')->result_array();
            $this->load->view('warehouse/factorystockinventory_from', array_merge($error, $data));
        } else {
            
            $upload_data = array('upload_data' => $this->upload->data());
             // Get input as arrays
                $sizes = $this->input->post('size');
                $size_quantity = $this->input->post('size_quantity');

                //make array value
                $sizesString =$sizes[0];
                $sizes = explode(',', $sizesString);
                //make array value
                $SQS=$size_quantity[0];
                $sQ=explode(',', $SQS);

            //save array data
            for ($i=0; $i < count($sizes); $i++) { 
            
                // Prepare data to insert into the database
                $dataToInsert = array(
                    'SerialNumber' => $this->input->post('serial_number'),
                    'ImageFilePath' => 'uploads/' . $upload_data['upload_data']['file_name'],
                    'ReferenceNumber' => $this->input->post('reference_number'),
                    'ItemName' => $this->input->post('item_name'),
                    'Color' => $this->input->post('color'),
                    'Sizes' => $sizes[$i],
                    'SizeQuantity' => $sQ[$i],
                    'TotalQuantity' => $this->input->post('total_quantity'),
                    'UnitPrice' => $this->input->post('unit_price'),
                    'TotalPrice' => $this->input->post('total_price'),
                    'DeliveryDate' => $this->input->post('delivery_date')
                );

                // Insert the data into the database
                $save = $this->db->insert('factorystockinventory', $dataToInsert);

            }
          
           if ($save) {
                // If the insertion is successful, set a "success" flash message
                $successMessage = 'Add products to Factory Inventory Successful';
                $this->session->set_flashdata('success', $successMessage);
            } else {
                // If the insertion fails, you can set an error message here
                $errorMessage = 'Failed to add products to Factory Inventory';
                $this->session->set_flashdata('error', $errorMessage);
            }

            // Redirect to a success page or display a success message
            redirect('FactoryInventory');
        }
    }
}
