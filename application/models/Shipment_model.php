<?php

class Shipment_model extends CI_Model
{

    public function insert_shipment($shipment_data)
    {
        $this->db->insert('shipment', $shipment_data);
        return $this->db->insert_id();
    }


    public function insert_shipment_item($detail_data)
    {
        $this->db->insert('shipment_item', $detail_data);
    }


    public function get_all_shipments()
    {
        $query = $this->db->get('shipment');
        return $query->result_array();
    }


    public function get_shipment_by_id($shipment_id)
    {
        $query = $this->db->get_where('shipment', array('id' => $shipment_id));
        return $query->row_array();
    }


    public function get_shipment_items_by_shipment_id($shipment_id)
    {
        $query = $this->db->get_where('shipment_item', array('shipment_id' => $shipment_id));
        return $query->result_array();
    }
    
}
