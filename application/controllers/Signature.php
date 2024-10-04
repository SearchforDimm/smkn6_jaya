<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signature extends CI_Controller
{
    public function index()
	{
        $id = $this->session->userdata('no_pendaftaran');
        $data['signature'] = $this->db->query("SELECT * FROM tbl_signature WHERE no_pendaftaran = '$id'")->result();
        $cek = $data['signature'];
		if ($this->session->userdata('no_pendaftaran') == NULL) {
			redirect('');
		} elseif($cek != NULL) {
            $this->load->view('404_panel_siswa');
        }else {
			$data = array(
				'user'		=> $this->siswa->base_biodata($this->session->userdata('no_pendaftaran')),
				'judul_web'	=> "Form APL 02",
			);
			$this->load->view('siswa/signature', $data);
            }
            
	}

    Public function insert_single_signature() {

	$img = $_POST['image'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$datasignature = base64_decode($img);
	$file = 'signature-image/' . uniqid() . '.png';
	$success = file_put_contents($file, $datasignature);
	$image=str_replace('./','',$file);
    $no_pendaftaran = $this->session->userdata('no_pendaftaran');

    $data = array(
        'no_pendaftaran' => $no_pendaftaran,
        'img' => $image
    );

    $this->web->insert_data($data, 'tbl_signature');
    }

	Public function insert_ttd_asesor() {

		$img = $_POST['image'];
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$datasignature = base64_decode($img);
		$file = 'signature-image/' . uniqid() . '.png';
		$success = file_put_contents($file, $datasignature);
		$image=str_replace('./','',$file);
		$id_siswa = $_POST['id_siswa'];

		$data = array(
			'ttd_asesor' => $image
		);

        $where = array(
            'id_siswa' => $id_siswa
        );
        $this->web->update_data('tbl_siswa', $data, $where);
        $this->session->set_flashdata('msg', 'Silahkan menunggu notifikasi selanjutnya dari admin LSP SMK Plus Pelita Nusantara');
        redirect('panel_siswa');
		}
}
?>