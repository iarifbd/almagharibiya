<?php
class SupplierInventory extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
        $this->load->model('Shipment_model');
        $this->load->library('form_validation');
    }

     public function index() {
        $data['factory'] = $this->db->get('factorystockinventory')->result_array();
        $this->load->view('warehouse/SupplierInventoryForm', $data);
    }


    public function save_product() {
     
        $this->form_validation->set_rules('serial_number', 'Serial Number', 'required');
        $this->form_validation->set_rules('reference_number', 'Reference Number', 'required');
        $this->form_validation->set_rules('item_name', 'Item Name', 'required');
        $this->form_validation->set_rules('color', 'Color', 'required');
        $this->form_validation->set_rules('size', 'Size', 'required');
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
            $this->load->view('warehouse/SupplierInventoryForm', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());


            // Prepare data to insert into the database
            $data = array(
                'SerialNumber' => $this->input->post('serial_number'),
                'ImageFilePath' => 'uploads/' . $data['upload_data']['file_name'], // Store the file path in the database
                'ReferenceNumber' => $this->input->post('reference_number'),
                'ItemName' => $this->input->post('item_name'),
                'Color' => $this->input->post('color'),
                'Size' => $this->input->post('size'),
                'TotalQuantity' => $this->input->post('total_quantity'),
                'UnitPrice' => $this->input->post('unit_price'),
                'TotalPrice' => $this->input->post('total_price'),
                'DeliveryDate' => $this->input->post('delivery_date')
            );

            // Insert the data into the database
            $save=$this->db->insert('supplierinventory', $data);

            $this->session->unset_flashdata('success');
            if($save){
             $this->session->set_flashdata('success', 'Add products to Factory Inventory Successful');
           }

            // Redirect to a success page or display a success message
            redirect('FactoryInventory');
        }
    }
}
