<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formapl2 extends CI_Controller
{
    public function index()
	{
        $id = $this->session->userdata('no_pendaftaran');
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('');
		} else {
			$data = array(
				'user'		=> $this->siswa->base_biodata($this->session->userdata('no_pendaftaran')),
				'judul_web'	=> "Form APL 02",
			);
            $data['tbl_pemdas'] = $this->db->query("SELECT * FROM tbl_pemdas WHERE tbl_pemdas.no_pendaftaran='$id'")->row();
            $data['tbl_pemweb'] = $this->db->query("SELECT * FROM tbl_pemweb WHERE tbl_pemweb.no_pendaftaran='$id'")->row();
            $data['tbl_pbo'] = $this->db->query("SELECT * FROM tbl_pbo WHERE tbl_pbo.no_pendaftaran='$id'")->row();
            $data['tbl_animasi2d'] = $this->db->query("SELECT * FROM tbl_animasi2d WHERE tbl_animasi2d.no_pendaftaran='$id'")->row();
            $data['tbl_audiovideo'] = $this->db->query("SELECT * FROM tbl_audiovideo WHERE tbl_audiovideo.no_pendaftaran='$id'")->row();
            $data['tbl_desaingrafis'] = $this->db->query("SELECT * FROM tbl_desaingrafis WHERE tbl_desaingrafis.no_pendaftaran='$id'")->row();
            $data['tbl_instalasijaringan'] = $this->db->query("SELECT * FROM tbl_instalasijaringan WHERE tbl_instalasijaringan.no_pendaftaran='$id'")->row();
            $data['tbl_konfigurasiperangkat'] = $this->db->query("SELECT * FROM tbl_konfigurasiperangkat WHERE tbl_konfigurasiperangkat.no_pendaftaran='$id'")->row();
            $data['tbl_konfigurasirouting'] = $this->db->query("SELECT * FROM tbl_konfigurasirouting WHERE tbl_konfigurasirouting.no_pendaftaran='$id'")->row();
            $data['tbl_pelayananperbankan'] = $this->db->query("SELECT * FROM tbl_pelayananperbankan WHERE tbl_pelayananperbankan.no_pendaftaran='$id'")->row();
            $data['tbl_pengoperasianaplikasi'] = $this->db->query("SELECT * FROM tbl_pengoperasianaplikasi WHERE tbl_pengoperasianaplikasi.no_pendaftaran='$id'")->row();
            $data['tbl_desainpercetakan'] = $this->db->query("SELECT * FROM tbl_desainpercetakan WHERE tbl_desainpercetakan.no_pendaftaran='$id'")->row();
            if($data['tbl_animasi2d']->no_pendaftaran == $id) {
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_audiovideo']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_desaingrafis']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_instalasijaringan']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_konfigurasiperangkat']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_konfigurasirouting']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_pelayananperbankan']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_pengoperasianaplikasi']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_desainpercetakan']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_pbo']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_pemweb']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } elseif($data['tbl_pemdas']->no_pendaftaran == $id){
                $this->load->view('404_panel_siswa');
            } else {
			$this->load->view('admin/header2', $data);
			$this->load->view('siswa/formapl2', $data);
            }
		}
	}

    public function tambah_formapl2()
    {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit1el4 = $this->input->post('unit1el4');
        $unit1el5 = $this->input->post('unit1el5');
        $unit1el6 = $this->input->post('unit1el6');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit2el4 = $this->input->post('unit2el4');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit3el4 = $this->input->post('unit3el4');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $unit4el4 = $this->input->post('unit4el4');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit5el3 = $this->input->post('unit5el3');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit6el3 = $this->input->post('unit6el3');
        $unit6el4 = $this->input->post('unit6el4');
        $unit6el5 = $this->input->post('unit6el5');
        $unit7el1 = $this->input->post('unit7el1');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit1el4 = $this->input->post('buktiunit1el4');
        $buktiunit1el5 = $this->input->post('buktiunit1el5');
        $buktiunit1el6 = $this->input->post('buktiunit1el6');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit2el4 = $this->input->post('buktiunit2el4');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit3el4 = $this->input->post('buktiunit3el4');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');
        $buktiunit4el4 = $this->input->post('buktiunit4el4');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit5el3 = $this->input->post('buktiunit5el3');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit6el3 = $this->input->post('buktiunit6el3');
        $buktiunit6el4 = $this->input->post('buktiunit6el4');
        $buktiunit6el5 = $this->input->post('buktiunit6el5');
        $buktiunit7el1 = $this->input->post('buktiunit7el1');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit1el4' => $unit1el4,
            'unit1el5' => $unit1el5,
            'unit1el6' => $unit1el6,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit2el4' => $unit2el4,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit3el4' => $unit3el4,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'unit4el4' => $unit4el4,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit5el3' => $unit5el3,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit6el3' => $unit6el3,
            'unit6el4' => $unit6el4,
            'unit6el5' => $unit6el5,
            'unit7el1' => $unit7el1,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit1el4' => $buktiunit1el4,
            'buktiunit1el5' => $buktiunit1el5,
            'buktiunit1el6' => $buktiunit1el6,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit2el4' => $buktiunit2el4,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit3el4' => $buktiunit3el4,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
            'buktiunit4el4' => $buktiunit4el4,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit5el3' => $buktiunit5el3,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit6el3' => $buktiunit6el3,
            'buktiunit6el4' => $buktiunit6el4,
            'buktiunit6el5' => $buktiunit6el5,
            'buktiunit7el1' => $buktiunit7el1,
        );

        $this->web->insert_data($data, 'tbl_animasi2d');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_desainpercetakan() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit1el4 = $this->input->post('unit1el4');
        $unit1el5 = $this->input->post('unit1el5');
        $unit1el6 = $this->input->post('unit1el6');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit2el4 = $this->input->post('unit2el4');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit3el4 = $this->input->post('unit3el4');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $unit4el4 = $this->input->post('unit4el4');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit5el3 = $this->input->post('unit5el3');
        $unit5el4 = $this->input->post('unit5el4');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit6el3 = $this->input->post('unit6el3');
        $unit7el1 = $this->input->post('unit7el1');
        $unit7el2 = $this->input->post('unit7el2');
        $unit7el3 = $this->input->post('unit7el3');
        $unit7el4 = $this->input->post('unit7el4');
        $unit8el1 = $this->input->post('unit8el1');
        $unit8el2 = $this->input->post('unit8el2');
        $unit8el3 = $this->input->post('unit8el3');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit1el4 = $this->input->post('buktiunit1el4');
        $buktiunit1el5 = $this->input->post('buktiunit1el5');
        $buktiunit1el6 = $this->input->post('buktiunit1el6');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit2el4 = $this->input->post('buktiunit2el4');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit3el4 = $this->input->post('buktiunit3el4');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');
        $buktiunit4el4 = $this->input->post('buktiunit4el4');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit5el3 = $this->input->post('buktiunit5el3');
        $buktiunit5el4 = $this->input->post('buktiunit5el4');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit6el3 = $this->input->post('buktiunit6el3');
        $buktiunit7el1 = $this->input->post('buktiunit7el1');
        $buktiunit7el2 = $this->input->post('buktiunit7el2');
        $buktiunit7el3 = $this->input->post('buktiunit7el3');
        $buktiunit7el4 = $this->input->post('buktiunit7el4');
        $buktiunit8el1 = $this->input->post('buktiunit8el1');
        $buktiunit8el2 = $this->input->post('buktiunit8el2');
        $buktiunit8el3 = $this->input->post('buktiunit8el3');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit1el4' => $unit1el4,
            'unit1el5' => $unit1el5,
            'unit1el6' => $unit1el6,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit2el4' => $unit2el4,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit3el4' => $unit3el4,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'unit4el4' => $unit4el4,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit5el3' => $unit5el3,
            'unit5el4' => $unit5el4,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit6el3' => $unit6el3,
            'unit7el1' => $unit7el1,
            'unit7el2' => $unit7el2,
            'unit7el3' => $unit7el3,
            'unit7el4' => $unit7el4,
            'unit8el1' => $unit8el1,
            'unit8el2' => $unit8el2,
            'unit8el3' => $unit8el3,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit1el4' => $buktiunit1el4,
            'buktiunit1el5' => $buktiunit1el5,
            'buktiunit1el6' => $buktiunit1el6,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit2el4' => $buktiunit2el4,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit3el4' => $buktiunit3el4,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
            'buktiunit4el4' => $buktiunit4el4,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit5el3' => $buktiunit5el3,
            'buktiunit5el4' => $buktiunit5el4,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit6el3' => $buktiunit6el3,
            'buktiunit7el1' => $buktiunit7el1,
            'buktiunit7el2' => $buktiunit7el2,
            'buktiunit7el3' => $buktiunit7el3,
            'buktiunit7el4' => $buktiunit7el4,
            'buktiunit8el1' => $buktiunit8el1,
            'buktiunit8el2' => $buktiunit8el2,
            'buktiunit8el3' => $buktiunit8el3,
        );

        $this->web->insert_data($data, 'tbl_desainpercetakan');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_desaingrafis() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit1el4 = $this->input->post('unit1el4');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit2el4 = $this->input->post('unit2el4');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit3el4 = $this->input->post('unit3el4');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit1el4 = $this->input->post('buktiunit1el4');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit2el4 = $this->input->post('buktiunit2el4');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit3el4 = $this->input->post('buktiunit3el4');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit1el4' => $unit1el4,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit2el4' => $unit2el4,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit3el4' => $unit3el4,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit1el4' => $buktiunit1el4,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit2el4' => $buktiunit2el4,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit3el4' => $buktiunit3el4,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
        );

        $this->web->insert_data($data, 'tbl_desaingrafis');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_audiovideo() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit1el4 = $this->input->post('unit1el4');
        $unit1el5 = $this->input->post('unit1el5');
        $unit1el6 = $this->input->post('unit1el6');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit2el4 = $this->input->post('unit2el4');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit3el4 = $this->input->post('unit3el4');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $unit4el4 = $this->input->post('unit4el4');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit5el3 = $this->input->post('unit5el3');
        $unit5el4 = $this->input->post('unit5el4');
        $unit5el5 = $this->input->post('unit5el5');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit6el3 = $this->input->post('unit6el3');
        $unit6el4 = $this->input->post('unit6el4');
        $unit7el1 = $this->input->post('unit7el1');
        $unit7el2 = $this->input->post('unit7el2');
        $unit7el3 = $this->input->post('unit7el3');
        $unit7el4 = $this->input->post('unit7el4');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit1el4 = $this->input->post('buktiunit1el4');
        $buktiunit1el5 = $this->input->post('buktiunit1el5');
        $buktiunit1el6 = $this->input->post('buktiunit1el6');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit2el4 = $this->input->post('buktiunit2el4');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit3el4 = $this->input->post('buktiunit3el4');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');
        $buktiunit4el4 = $this->input->post('buktiunit4el4');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit5el3 = $this->input->post('buktiunit5el3');
        $buktiunit5el4 = $this->input->post('buktiunit5el4');
        $buktiunit5el5 = $this->input->post('buktiunit5el5');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit6el3 = $this->input->post('buktiunit6el3');
        $buktiunit6el4 = $this->input->post('buktiunit6el4');
        $buktiunit7el1 = $this->input->post('buktiunit7el1');
        $buktiunit7el2 = $this->input->post('buktiunit7el2');
        $buktiunit7el3 = $this->input->post('buktiunit7el3');
        $buktiunit7el4 = $this->input->post('buktiunit7el4');
        $buktiunit7el5 = $this->input->post('buktiunit7el5');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit1el4' => $unit1el4,
            'unit1el5' => $unit1el5,
            'unit1el6' => $unit1el6,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit2el4' => $unit2el4,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit3el4' => $unit3el4,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'unit4el4' => $unit4el4,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit5el3' => $unit5el3,
            'unit5el4' => $unit5el4,
            'unit5el5' => $unit5el5,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit6el3' => $unit6el3,
            'unit6el4' => $unit6el4,
            'unit7el1' => $unit7el1,
            'unit7el2' => $unit7el2,
            'unit7el3' => $unit7el3,
            'unit7el4' => $unit7el4,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit1el4' => $buktiunit1el4,
            'buktiunit1el5' => $buktiunit1el5,
            'buktiunit1el6' => $buktiunit1el6,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit2el4' => $buktiunit2el4,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit3el4' => $buktiunit3el4,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
            'buktiunit4el4' => $buktiunit4el4,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit5el3' => $buktiunit5el3,
            'buktiunit5el4' => $buktiunit5el4,
            'buktiunit5el5' => $buktiunit5el5,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit6el3' => $buktiunit6el3,
            'buktiunit6el4' => $buktiunit6el4,
            'buktiunit7el1' => $buktiunit7el1,
            'buktiunit7el2' => $buktiunit7el2,
            'buktiunit7el3' => $buktiunit7el3,
            'buktiunit7el4' => $buktiunit7el4,
        );

        $this->web->insert_data($data, 'tbl_audiovideo');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_konfigurasirouting() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit1el4 = $this->input->post('unit1el4');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit3el4 = $this->input->post('unit3el4');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit1el4 = $this->input->post('buktiunit1el4');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit3el4 = $this->input->post('buktiunit3el4');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit1el4' => $unit1el4,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit3el4' => $unit3el4,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit1el4' => $buktiunit1el4,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit3el4' => $buktiunit3el4
        );

        $this->web->insert_data($data, 'tbl_konfigurasirouting');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_konfigurasiperangkat() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit5el3 = $this->input->post('unit5el3');
        $unit5el4 = $this->input->post('unit5el4');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit6el3 = $this->input->post('unit6el3');
        $unit6el4 = $this->input->post('unit6el4');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit5el3 = $this->input->post('buktiunit5el3');
        $buktiunit5el4 = $this->input->post('buktiunit5el4');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit6el3 = $this->input->post('buktiunit6el3');
        $buktiunit6el4 = $this->input->post('buktiunit6el4');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit5el3' => $unit5el3,
            'unit5el4' => $unit5el4,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit6el3' => $unit6el3,
            'unit6el4' => $unit6el4,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit5el3' => $buktiunit5el3,
            'buktiunit5el4' => $buktiunit5el4,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit6el3' => $buktiunit6el3,
            'buktiunit6el4' => $buktiunit6el4,
        );

        $this->web->insert_data($data, 'tbl_konfigurasiperangkat');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_instalasijaringan() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3
        );

        $this->web->insert_data($data, 'tbl_instalasijaringan');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_pengoperasianaplikasi() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit1el4 = $this->input->post('unit1el4');
        $unit1el5 = $this->input->post('unit1el5');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit3el4 = $this->input->post('unit3el4');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $unit4el4 = $this->input->post('unit4el4');
        $unit4el5 = $this->input->post('unit4el5');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit1el4 = $this->input->post('buktiunit1el4');
        $buktiunit1el5 = $this->input->post('buktiunit1el5');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit3el4 = $this->input->post('buktiunit3el4');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');
        $buktiunit4el4 = $this->input->post('buktiunit4el4');
        $buktiunit4el5 = $this->input->post('buktiunit4el5');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit1el4' => $unit1el4,
            'unit1el5' => $unit1el5,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit3el4' => $unit3el4,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'unit4el4' => $unit4el4,
            'unit4el5' => $unit4el5,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit1el4' => $buktiunit1el4,
            'buktiunit1el5' => $buktiunit1el5,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit3el4' => $buktiunit3el4,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
            'buktiunit4el4' => $buktiunit4el4,
            'buktiunit4el5' => $buktiunit4el5
        );

        $this->web->insert_data($data, 'tbl_pengoperasianaplikasi');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_pelayananperbankan() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit1el4 = $this->input->post('unit1el4');
        $unit1el5 = $this->input->post('unit1el5');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit5el3 = $this->input->post('unit5el3');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit7el1 = $this->input->post('unit7el1');
        $unit7el2 = $this->input->post('unit7el2');
        $unit8el1 = $this->input->post('unit8el1');
        $unit8el2 = $this->input->post('unit8el2');
        $unit8el3 = $this->input->post('unit8el3');
        $unit9el1 = $this->input->post('unit9el1');
        $unit9el2 = $this->input->post('unit9el2');
        $unit9el3 = $this->input->post('unit9el3');
        $unit10el1 = $this->input->post('unit10el1');
        $unit10el2 = $this->input->post('unit10el2');
        $unit10el3 = $this->input->post('unit10el3');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit1el4 = $this->input->post('buktiunit1el4');
        $buktiunit1el5 = $this->input->post('buktiunit1el5');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit5el3 = $this->input->post('buktiunit5el3');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit7el1 = $this->input->post('buktiunit7el1');
        $buktiunit7el2 = $this->input->post('buktiunit7el2');
        $buktiunit8el1 = $this->input->post('buktiunit8el1');
        $buktiunit8el2 = $this->input->post('buktiunit8el2');
        $buktiunit8el3 = $this->input->post('buktiunit8el3');
        $buktiunit9el1 = $this->input->post('buktiunit9el1');
        $buktiunit9el2 = $this->input->post('buktiunit9el2');
        $buktiunit9el3 = $this->input->post('buktiunit9el3');
        $buktiunit10el1 = $this->input->post('buktiunit10el1');
        $buktiunit10el2 = $this->input->post('buktiunit10el2');
        $buktiunit10el3 = $this->input->post('buktiunit10el3');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit1el4' => $unit1el4,
            'unit1el5' => $unit1el5,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit5el3' => $unit5el3,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit7el1' => $unit7el1,
            'unit7el2' => $unit7el2,
            'unit8el1' => $unit8el1,
            'unit8el2' => $unit8el2,
            'unit8el3' => $unit8el3,
            'unit9el1' => $unit9el1,
            'unit9el2' => $unit9el2,
            'unit9el3' => $unit9el3,
            'unit10el1' => $unit10el1,
            'unit10el2' => $unit10el2,
            'unit10el3' => $unit10el3,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit1el4' => $buktiunit1el4,
            'buktiunit1el5' => $buktiunit1el5,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit5el3' => $buktiunit5el3,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit7el1' => $buktiunit7el1,
            'buktiunit7el2' => $buktiunit7el2,
            'buktiunit8el1' => $buktiunit8el1,
            'buktiunit8el2' => $buktiunit8el2,
            'buktiunit8el3' => $buktiunit8el3,
            'buktiunit9el1' => $buktiunit9el1,
            'buktiunit9el2' => $buktiunit9el2,
            'buktiunit9el3' => $buktiunit9el3,
            'buktiunit10el1' => $buktiunit10el1,
            'buktiunit10el2' => $buktiunit10el2,
            'buktiunit10el3' => $buktiunit10el3,
        );

        $this->web->insert_data($data, 'tbl_pelayananperbankan');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_pbo() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit5el3 = $this->input->post('unit5el3');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit7el1 = $this->input->post('unit7el1');
        $unit7el2 = $this->input->post('unit7el2');
        $unit7el3 = $this->input->post('unit7el3');
        $unit7el4 = $this->input->post('unit7el4');
        $unit7el5 = $this->input->post('unit7el5');
        $unit8el1 = $this->input->post('unit8el1');
        $unit8el2 = $this->input->post('unit8el2');
        $unit8el3 = $this->input->post('unit8el3');
        $unit8el4 = $this->input->post('unit8el4');
        $unit8el5 = $this->input->post('unit8el5');
        $unit8el6 = $this->input->post('unit8el6');
        $unit8el7 = $this->input->post('unit8el7');
        $unit8el8 = $this->input->post('unit8el8');
        $unit9el1 = $this->input->post('unit9el1');
        $unit9el2 = $this->input->post('unit9el2');
        $unit9el3 = $this->input->post('unit9el3');
        $unit9el4 = $this->input->post('unit9el4');
        $unit10el1 = $this->input->post('unit10el1');
        $unit10el2 = $this->input->post('unit10el2');
        $unit10el3 = $this->input->post('unit10el3');
        $unit10el4 = $this->input->post('unit10el4');
        $unit10el5 = $this->input->post('unit10el5');
        $unit11el1 = $this->input->post('unit11el1');
        $unit11el2 = $this->input->post('unit11el2');
        $unit11el3 = $this->input->post('unit11el3');
        $unit11el4 = $this->input->post('unit11el4');
        $unit11el5 = $this->input->post('unit11el5');
        $unit12el1 = $this->input->post('unit12el1');
        $unit12el2 = $this->input->post('unit12el2');
        $unit13el1 = $this->input->post('unit13el1');
        $unit13el2 = $this->input->post('unit13el2');
        $unit13el3 = $this->input->post('unit13el3');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit5el3 = $this->input->post('buktiunit5el3');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit7el1 = $this->input->post('buktiunit7el1');
        $buktiunit7el2 = $this->input->post('buktiunit7el2');
        $buktiunit7el3 = $this->input->post('buktiunit7el3');
        $buktiunit7el4 = $this->input->post('buktiunit7el4');
        $buktiunit7el5 = $this->input->post('buktiunit7el5');
        $buktiunit8el1 = $this->input->post('buktiunit8el1');
        $buktiunit8el2 = $this->input->post('buktiunit8el2');
        $buktiunit8el3 = $this->input->post('buktiunit8el3');
        $buktiunit8el4 = $this->input->post('buktiunit8el4');
        $buktiunit8el5 = $this->input->post('buktiunit8el5');
        $buktiunit8el6 = $this->input->post('buktiunit8el6');
        $buktiunit8el7 = $this->input->post('buktiunit8el7');
        $buktiunit8el8 = $this->input->post('buktiunit8el8');
        $buktiunit9el1 = $this->input->post('buktiunit9el1');
        $buktiunit9el2 = $this->input->post('buktiunit9el2');
        $buktiunit9el3 = $this->input->post('buktiunit9el3');
        $buktiunit9el4 = $this->input->post('buktiunit9el4');
        $buktiunit10el1 = $this->input->post('buktiunit10el1');
        $buktiunit10el2 = $this->input->post('buktiunit10el2');
        $buktiunit10el3 = $this->input->post('buktiunit10el3');
        $buktiunit10el4 = $this->input->post('buktiunit10el4');
        $buktiunit10el5 = $this->input->post('buktiunit10el5');
        $buktiunit11el1 = $this->input->post('buktiunit11el1');
        $buktiunit11el2 = $this->input->post('buktiunit11el2');
        $buktiunit11el3 = $this->input->post('buktiunit11el3');
        $buktiunit11el4 = $this->input->post('buktiunit11el4');
        $buktiunit11el5 = $this->input->post('buktiunit11el5');
        $buktiunit12el1 = $this->input->post('buktiunit12el1');
        $buktiunit12el2 = $this->input->post('buktiunit12el2');
        $buktiunit13el1 = $this->input->post('buktiunit13el1');
        $buktiunit13el2 = $this->input->post('buktiunit13el2');
        $buktiunit13el3 = $this->input->post('buktiunit13el3');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit5el3' => $unit5el3,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit7el1' => $unit7el1,
            'unit7el2' => $unit7el2,
            'unit7el3' => $unit7el3,
            'unit7el4' => $unit7el4,
            'unit7el5' => $unit7el5,
            'unit8el1' => $unit8el1,
            'unit8el2' => $unit8el2,
            'unit8el3' => $unit8el3,
            'unit8el4' => $unit8el4,
            'unit8el5' => $unit8el5,
            'unit8el6' => $unit8el6,
            'unit8el7' => $unit8el7,
            'unit8el8' => $unit8el8,
            'unit9el1' => $unit9el1,
            'unit9el2' => $unit9el2,
            'unit9el3' => $unit9el3,
            'unit9el4' => $unit9el4,
            'unit10el1' => $unit10el1,
            'unit10el2' => $unit10el2,
            'unit10el3' => $unit10el3,
            'unit10el4' => $unit10el4,
            'unit10el5' => $unit10el5,
            'unit11el1' => $unit11el1,
            'unit11el2' => $unit11el2,
            'unit11el3' => $unit11el3,
            'unit11el4' => $unit11el4,
            'unit11el5' => $unit11el5,
            'unit12el1' => $unit12el1,
            'unit12el2' => $unit12el2,
            'unit13el1' => $unit13el1,
            'unit13el2' => $unit13el2,
            'unit13el3' => $unit13el3,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit5el3' => $buktiunit5el3,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit7el1' => $buktiunit7el1,
            'buktiunit7el2' => $buktiunit7el2,
            'buktiunit7el3' => $buktiunit7el3,
            'buktiunit7el4' => $buktiunit7el4,
            'buktiunit7el5' => $buktiunit7el5,
            'buktiunit8el1' => $buktiunit8el1,
            'buktiunit8el2' => $buktiunit8el2,
            'buktiunit8el3' => $buktiunit8el3,
            'buktiunit8el4' => $buktiunit8el4,
            'buktiunit8el5' => $buktiunit8el5,
            'buktiunit8el6' => $buktiunit8el6,
            'buktiunit8el7' => $buktiunit8el7,
            'buktiunit8el8' => $buktiunit8el8,
            'buktiunit9el1' => $buktiunit9el1,
            'buktiunit9el2' => $buktiunit9el2,
            'buktiunit9el3' => $buktiunit9el3,
            'buktiunit9el4' => $buktiunit9el4,
            'buktiunit10el1' => $buktiunit10el1,
            'buktiunit10el2' => $buktiunit10el2,
            'buktiunit10el3' => $buktiunit10el3,
            'buktiunit10el4' => $buktiunit10el4,
            'buktiunit10el5' => $buktiunit10el5,
            'buktiunit11el1' => $buktiunit11el1,
            'buktiunit11el2' => $buktiunit11el2,
            'buktiunit11el3' => $buktiunit11el3,
            'buktiunit11el4' => $buktiunit11el4,
            'buktiunit11el5' => $buktiunit11el5,
            'buktiunit12el1' => $buktiunit12el1,
            'buktiunit12el2' => $buktiunit12el2,
            'buktiunit13el1' => $buktiunit13el1,
            'buktiunit13el2' => $buktiunit13el2,
            'buktiunit13el3' => $buktiunit13el3,
        );

        $this->web->insert_data($data, 'tbl_pbo');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_pemweb() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit3el3 = $this->input->post('unit3el3');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit4el3 = $this->input->post('unit4el3');
        $unit4el4 = $this->input->post('unit4el4');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit5el3 = $this->input->post('unit5el3');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit7el1 = $this->input->post('unit7el1');
        $unit7el2 = $this->input->post('unit7el2');
        $unit8el1 = $this->input->post('unit8el1');
        $unit8el2 = $this->input->post('unit8el2');
        $unit9el1 = $this->input->post('unit9el1');
        $unit9el2 = $this->input->post('unit9el2');
        $unit9el3 = $this->input->post('unit9el3');
        $unit10el1 = $this->input->post('unit10el1');
        $unit10el2 = $this->input->post('unit10el2');
        $unit11el1 = $this->input->post('unit11el1');
        $unit11el2 = $this->input->post('unit11el2');
        $unit11el3 = $this->input->post('unit11el3');
        $unit11el4 = $this->input->post('unit11el4');
        $unit11el5 = $this->input->post('unit11el5');
        $unit12el1 = $this->input->post('unit12el1');
        $unit12el2 = $this->input->post('unit12el2');
        $unit12el3 = $this->input->post('unit12el3');
        $unit12el4 = $this->input->post('unit12el4');
        $unit12el5 = $this->input->post('unit12el5');
        $unit12el6 = $this->input->post('unit12el6');
        $unit12el7 = $this->input->post('unit12el7');
        $unit12el8 = $this->input->post('unit12el8');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit3el3 = $this->input->post('buktiunit3el3');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit4el3 = $this->input->post('buktiunit4el3');
        $buktiunit4el4 = $this->input->post('buktiunit4el4');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit5el3 = $this->input->post('buktiunit5el3');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit7el1 = $this->input->post('buktiunit7el1');
        $buktiunit7el2 = $this->input->post('buktiunit7el2');
        $buktiunit8el1 = $this->input->post('buktiunit8el1');
        $buktiunit8el2 = $this->input->post('buktiunit8el2');
        $buktiunit9el1 = $this->input->post('buktiunit9el1');
        $buktiunit9el2 = $this->input->post('buktiunit9el2');
        $buktiunit9el3 = $this->input->post('buktiunit9el3');
        $buktiunit10el1 = $this->input->post('buktiunit10el1');
        $buktiunit10el2 = $this->input->post('buktiunit10el2');
        $buktiunit11el1 = $this->input->post('buktiunit11el1');
        $buktiunit11el2 = $this->input->post('buktiunit11el2');
        $buktiunit11el3 = $this->input->post('buktiunit11el3');
        $buktiunit11el4 = $this->input->post('buktiunit11el4');
        $buktiunit11el5 = $this->input->post('buktiunit11el5');
        $buktiunit12el1 = $this->input->post('buktiunit12el1');
        $buktiunit12el2 = $this->input->post('buktiunit12el2');
        $buktiunit12el3 = $this->input->post('buktiunit12el3');
        $buktiunit12el4 = $this->input->post('buktiunit12el4');
        $buktiunit12el5 = $this->input->post('buktiunit12el5');
        $buktiunit12el6 = $this->input->post('buktiunit12el6');
        $buktiunit12el7 = $this->input->post('buktiunit12el7');
        $buktiunit12el8 = $this->input->post('buktiunit12el8');

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit3el3' => $unit3el3,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit4el3' => $unit4el3,
            'unit4el4' => $unit4el4,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit5el3' => $unit5el3,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit7el1' => $unit7el1,
            'unit7el2' => $unit7el2,
            'unit8el1' => $unit8el1,
            'unit8el2' => $unit8el2,
            'unit9el1' => $unit9el1,
            'unit9el2' => $unit9el2,
            'unit9el3' => $unit9el3,
            'unit10el1' => $unit10el1,
            'unit10el2' => $unit10el2,
            'unit11el1' => $unit11el1,
            'unit11el2' => $unit11el2,
            'unit11el3' => $unit11el3,
            'unit11el4' => $unit11el4,
            'unit11el5' => $unit11el5,
            'unit12el1' => $unit12el1,
            'unit12el2' => $unit12el2,
            'unit12el3' => $unit12el3,
            'unit12el4' => $unit12el4,
            'unit12el5' => $unit12el5,
            'unit12el6' => $unit12el6,
            'unit12el7' => $unit12el7,
            'unit12el8' => $unit12el8,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit3el3' => $buktiunit3el3,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit4el3' => $buktiunit4el3,
            'buktiunit4el4' => $buktiunit4el4,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit5el3' => $buktiunit5el3,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit7el1' => $buktiunit7el1,
            'buktiunit7el2' => $buktiunit7el2,
            'buktiunit8el1' => $buktiunit8el1,
            'buktiunit8el2' => $buktiunit8el2,
            'buktiunit9el1' => $buktiunit9el1,
            'buktiunit9el2' => $buktiunit9el2,
            'buktiunit9el3' => $buktiunit9el3,
            'buktiunit10el1' => $buktiunit10el1,
            'buktiunit10el2' => $buktiunit10el2,
            'buktiunit11el1' => $buktiunit11el1,
            'buktiunit11el2' => $buktiunit11el2,
            'buktiunit11el3' => $buktiunit11el3,
            'buktiunit11el4' => $buktiunit11el4,
            'buktiunit11el5' => $buktiunit11el5,
            'buktiunit12el1' => $buktiunit12el1,
            'buktiunit12el2' => $buktiunit12el2,
            'buktiunit12el3' => $buktiunit12el3,
            'buktiunit12el4' => $buktiunit12el4,
            'buktiunit12el5' => $buktiunit12el5,
            'buktiunit12el6' => $buktiunit12el6,
            'buktiunit12el7' => $buktiunit12el7,
            'buktiunit12el8' => $buktiunit12el8
        );
        
        $this->web->insert_data($data, 'tbl_pemweb');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }

    public function tambah_formapl2_pemdas() {
        $id_siswa = $this->input->post('id_siswa');
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $unit1el1 = $this->input->post('unit1el1');
        $unit1el2 = $this->input->post('unit1el2');
        $unit1el3 = $this->input->post('unit1el3');
        $unit2el1 = $this->input->post('unit2el1');
        $unit2el2 = $this->input->post('unit2el2');
        $unit2el3 = $this->input->post('unit2el3');
        $unit3el1 = $this->input->post('unit3el1');
        $unit3el2 = $this->input->post('unit3el2');
        $unit4el1 = $this->input->post('unit4el1');
        $unit4el2 = $this->input->post('unit4el2');
        $unit5el1 = $this->input->post('unit5el1');
        $unit5el2 = $this->input->post('unit5el2');
        $unit6el1 = $this->input->post('unit6el1');
        $unit6el2 = $this->input->post('unit6el2');
        $unit7el1 = $this->input->post('unit7el1');
        $unit7el2 = $this->input->post('unit7el2');
        $unit8el1 = $this->input->post('unit8el1');
        $unit8el2 = $this->input->post('unit8el2');
        $unit8el3 = $this->input->post('unit8el3');
        $unit8el4 = $this->input->post('unit8el4');
        $unit8el5 = $this->input->post('unit8el5');
        $unit8el6 = $this->input->post('unit8el6');
        $unit9el1 = $this->input->post('unit9el1');
        $unit9el2 = $this->input->post('unit9el2');
        $unit9el3 = $this->input->post('unit9el3');
        $unit9el4 = $this->input->post('unit9el4');
        $unit9el5 = $this->input->post('unit9el5');
        $unit10el1 = $this->input->post('unit10el1');
        $unit10el2 = $this->input->post('unit10el2');
        $unit10el3 = $this->input->post('unit10el3');
        $buktiunit1el1 = $this->input->post('buktiunit1el1');
        $buktiunit1el2 = $this->input->post('buktiunit1el2');
        $buktiunit1el3 = $this->input->post('buktiunit1el3');
        $buktiunit2el1 = $this->input->post('buktiunit2el1');
        $buktiunit2el2 = $this->input->post('buktiunit2el2');
        $buktiunit2el3 = $this->input->post('buktiunit2el3');
        $buktiunit3el1 = $this->input->post('buktiunit3el1');
        $buktiunit3el2 = $this->input->post('buktiunit3el2');
        $buktiunit4el1 = $this->input->post('buktiunit4el1');
        $buktiunit4el2 = $this->input->post('buktiunit4el2');
        $buktiunit5el1 = $this->input->post('buktiunit5el1');
        $buktiunit5el2 = $this->input->post('buktiunit5el2');
        $buktiunit6el1 = $this->input->post('buktiunit6el1');
        $buktiunit6el2 = $this->input->post('buktiunit6el2');
        $buktiunit7el1 = $this->input->post('buktiunit7el1');
        $buktiunit7el2 = $this->input->post('buktiunit7el2');
        $buktiunit8el1 = $this->input->post('buktiunit8el1');
        $buktiunit8el2 = $this->input->post('buktiunit8el2');
        $buktiunit8el3 = $this->input->post('buktiunit8el3');
        $buktiunit8el4 = $this->input->post('buktiunit8el4');
        $buktiunit8el5 = $this->input->post('buktiunit8el5');
        $buktiunit8el6 = $this->input->post('buktiunit8el6');
        $buktiunit9el1 = $this->input->post('buktiunit9el1');
        $buktiunit9el2 = $this->input->post('buktiunit9el2');
        $buktiunit9el3 = $this->input->post('buktiunit9el3');
        $buktiunit9el4 = $this->input->post('buktiunit9el4');
        $buktiunit9el5 = $this->input->post('buktiunit9el5');
        $buktiunit10el1 = $this->input->post('buktiunit10el1');
        $buktiunit10el2 = $this->input->post('buktiunit10el2');
        $buktiunit10el3 = $this->input->post('buktiunit10el3');
        

        $data = array(
            'id_siswa' => $id_siswa,
            'no_pendaftaran' => $no_pendaftaran,
            'unit1el1' => $unit1el1,
            'unit1el2' => $unit1el2,
            'unit1el3' => $unit1el3,
            'unit2el1' => $unit2el1,
            'unit2el2' => $unit2el2,
            'unit2el3' => $unit2el3,
            'unit3el1' => $unit3el1,
            'unit3el2' => $unit3el2,
            'unit4el1' => $unit4el1,
            'unit4el2' => $unit4el2,
            'unit5el1' => $unit5el1,
            'unit5el2' => $unit5el2,
            'unit6el1' => $unit6el1,
            'unit6el2' => $unit6el2,
            'unit7el1' => $unit7el1,
            'unit7el2' => $unit7el2,
            'unit8el1' => $unit8el1,
            'unit8el2' => $unit8el2,
            'unit8el3' => $unit8el3,
            'unit8el4' => $unit8el4,
            'unit8el5' => $unit8el5,
            'unit8el6' => $unit8el6,
            'unit9el1' => $unit9el1,
            'unit9el2' => $unit9el2,
            'unit9el3' => $unit9el3,
            'unit9el4' => $unit9el4,
            'unit9el5' => $unit9el5,
            'unit10el1' => $unit10el1,
            'unit10el2' => $unit10el2,
            'unit10el3' => $unit10el3,
            'buktiunit1el1' => $buktiunit1el1,
            'buktiunit1el2' => $buktiunit1el2,
            'buktiunit1el3' => $buktiunit1el3,
            'buktiunit2el1' => $buktiunit2el1,
            'buktiunit2el2' => $buktiunit2el2,
            'buktiunit2el3' => $buktiunit2el3,
            'buktiunit3el1' => $buktiunit3el1,
            'buktiunit3el2' => $buktiunit3el2,
            'buktiunit4el1' => $buktiunit4el1,
            'buktiunit4el2' => $buktiunit4el2,
            'buktiunit5el1' => $buktiunit5el1,
            'buktiunit5el2' => $buktiunit5el2,
            'buktiunit6el1' => $buktiunit6el1,
            'buktiunit6el2' => $buktiunit6el2,
            'buktiunit7el1' => $buktiunit7el1,
            'buktiunit7el2' => $buktiunit7el2,
            'buktiunit8el1' => $buktiunit8el1,
            'buktiunit8el2' => $buktiunit8el2,
            'buktiunit8el3' => $buktiunit8el3,
            'buktiunit8el4' => $buktiunit8el4,
            'buktiunit8el5' => $buktiunit8el5,
            'buktiunit8el6' => $buktiunit8el6,
            'buktiunit9el1' => $buktiunit9el1,
            'buktiunit9el2' => $buktiunit9el2,
            'buktiunit9el3' => $buktiunit9el3,
            'buktiunit9el4' => $buktiunit9el4,
            'buktiunit9el5' => $buktiunit9el5,
            'buktiunit10el1' => $buktiunit10el1,
            'buktiunit10el2' => $buktiunit10el2,
            'buktiunit10el3' => $buktiunit10el3
        );
        
        $this->web->insert_data($data, 'tbl_pemdas');
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMKN 6 Jakarta');
        redirect('panel_siswa');
    }
}
?>