<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Upload_model extends CI_Model {

    public function download_bukti($id)
    {
        $query = $this->db->get_where('tbl_siswa', array('id_siswa' => $id));
        return $query->row_array();
    }

	public function get_data($table)
    {
        return $this->db->get($table);
    }

}
?>