<?php
class Shipment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database library during model initialization
        $this->load->database();
    }

    public function insert_shipment($data) {
        // Insert shipment data into the database
        $this->db->insert('shipments', $data);
    }

    public function get_shipments() {
        // Retrieve a list of shipments from the database
        $query = $this->db->get('shipments');
        return $query->result();
    }

    // Add more methods for updating, deleting, and retrieving specific shipments as needed.
}
