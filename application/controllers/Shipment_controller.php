<?php
class Shipment_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Shipment_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('warehouse/WH_shipment_form');
    }

    public function shipment_form() {
        $this->load->view('warehouse/shipment_form');
    }

    public function submit_form() {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $this->load->library('form_validation');

        // Define form validation rules
        $this->form_validation->set_rules('SL_NO[]', 'SL NO', 'required');
        $this->form_validation->set_rules('DESCRIPTION[]', 'DESCRIPTION', 'required');
        $this->form_validation->set_rules('TOTAL_QTY_PCS[]', 'TOTAL QTY PCS', 'required|numeric');
        $this->form_validation->set_rules('TOTAL_BALES[]', 'TOTAL BALES', 'required|numeric');
        $this->form_validation->set_rules('TOTAL_CTN[]', 'TOTAL CTN', 'required|numeric');
        $this->form_validation->set_rules('NET_WEIGHT[]', 'N.WT', 'required|numeric');
        $this->form_validation->set_rules('GROSS_WEIGHT[]', 'G.WT', 'required|numeric');
        $this->form_validation->set_rules('TOTAL_CBM[]', 'TOTAL CBM', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
           echo validation_errors();
            $this->load->view('warehouse/shipment_form');
        } else {
            // Process the submitted data and calculate the grand total
            $data = $this->input->post();
            $grand_total = 0;

            // Loop through the submitted rows and calculate the grand total
            foreach ($data['TOTAL_QTY_PCS'] as $key => $qty) {
                $net_weight = $data['NET_WEIGHT'][$key];
                $row_total = $qty * $net_weight;
                $grand_total += $row_total;
            }

            // Prepare the data to be saved in the database
            $shipment_data = array(
                'EXP_NO' => $this->input->post('EXP_NO'),
                'DATE' => $this->input->post('DATE'),
                'SHIPMENT_DETAILS' => $this->input->post('SHIPMENT_DETAILS'),
                'PAYMENT_TERMS' => $this->input->post('PAYMENT_TERMS')
            );

            // Insert shipment data into the database
            $shipment_id = $this->Shipment_model->insert_shipment($shipment_data);

            // Now, insert each row of details associated with this shipment
            foreach ($data['SL_NO'] as $key => $sl_no) {
                $detail_data = array(
                    'shipment_id' => $shipment_id,
                    'SL_NO' => $sl_no,
                    'DESCRIPTION' => $data['DESCRIPTION'][$key],
                    'TOTAL_QTY_PCS' => $data['TOTAL_QTY_PCS'][$key],
                    'TOTAL_BALES' => $data['TOTAL_BALES'][$key],
                    'TOTAL_CTN' => $data['TOTAL_CTN'][$key],
                    'NET_WEIGHT' => $data['NET_WEIGHT'][$key],
                    'GROSS_WEIGHT' => $data['GROSS_WEIGHT'][$key],
                    'TOTAL_CBM' => $data['TOTAL_CBM'][$key]
                );
                $this->Shipment_model->insert_shipment_item($detail_data);
            }

            $this->load->view('warehouse/confirmation', array('grand_total' => $grand_total));
        }
    }

}
