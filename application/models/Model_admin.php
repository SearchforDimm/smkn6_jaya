<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Model_admin extends CI_Model
{

	function base($menu = '', $data = '')
	{
		switch ($menu) {
			case 'bio':
				// var_dump($data); exit;
				return $this->db->get_where('tbl_user', "username='$data'")->row();
				break;

			case 'status-ppdb':
				return $this->db->get_where('tbl_web', "id_web='1'")->row();
				break;

			default:
				# code...
				break;
		}
	}

	function ppdb_status($option, $date)
	{
		switch ($option) {
			case 'tutup':
				$data = array(
					'status_ppdb'	=> 'tutup',
					'tgl_diubah'	=> $date
				);
				return $this->db->update('tbl_web', $data, array('id_web' => '1'));;
				break;

			case 'buka':
				$data = array(
					'status_ppdb'	=> 'buka',
					'tgl_diubah'	=> $date
				);
				return $this->db->update('tbl_web', $data, array('id_web' => '1'));;
				break;

			default:
				# code...
				break;
		}
	}

	function auth($data)
	{
		$query = $this->db->where("username", $data['username'])->where("password", $data['password'])->get('tbl_user');
		return array(
			'res'	=> $query->row(),
			'sum'	=> $query->num_rows()
		);
	}

	function get_announce()
	{
		return $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();
	}

	function set_announce($act = null, $id = '')
	{
		switch ($act) {
			case 'lulus':
				$data = array(
					'status_pendaftaran'	=> 'lulus'
				);
				return $this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				break;

			case 'tdk_lulus':
				$data = array(
					'status_pendaftaran'	=> 'tidak lulus'
				);
				return $this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				break;

			case 'batal':
				$data = array(
					'status_pendaftaran'	=> null
				);
				return $this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				break;

			case 'thn':
				return $id;
				break;

			default:
				return date('Y');
				break;
		}
	}

	function about_me($menu = '', $data = '')
	{
		switch ($menu) {
			case 'update':
				$old_user = $data['old_user'];
				$data = array(
					'username'		=> $data['username'],
					'nama_lengkap'	=> $data['nama_lengkap'],
					'alamat'		=> $data['alamat'],
					'telp'			=> $data['telp'],
					'email'			=> $data['email'],
					'website'		=> $data['website'],
					'kab_sekolah'	=> $data['kab_sekolah'],
					'ketua_panitia'	=> $data['ketua_panitia'],
					'nip_ketua'		=> $data['nip_ketua'],
					'th_pelajaran'	=> $data['th_pelajaran'],
					'no_surat'		=> $data['no_surat'],
					'kepsek'		=> $data['kepsek'],
					'nip_kepsek'	=> $data['nip_kepsek']
				);
				return $this->db->update('tbl_user', $data, array('username' => $old_user));
				break;

			case 'update-pass':
				$old_user = $data['old_user'];
				$data = array(
					'password'		=> $data['password']
				);
				return $this->db->update('tbl_user', $data, array('username' => $old_user));
				break;

			default:
				# code...
				break;
		}
	}

	function verifikasi($menu = '', $thn = '', $status = '')
	{
		switch ($menu) {
			case 'siswa':
				$res = $this->db->like('tgl_siswa', "$thn", 'after')->order_by('id_siswa', 'DESC')->get('tbl_siswa');
				return (object) array(
					'bar'	=> $res->row(),
					'sum'	=> $res->num_rows(),
					'ori'	=> $res
				);
				break;

			case 'materi':
				return $this->db->get_where('tbl_verifikasi', "id_verifikasi='1'")->row();
				break;

			case 'acc':
				switch ($thn) {
					case 'total':
						return $this->db->like('tgl_siswa', "$thn", 'after')->get("tbl_siswa")->num_rows();
						break;

					case 'diverifikasi':
						return $this->db->like('tgl_siswa', "$thn", 'after')->where('status_verifikasi', '1')->get("tbl_siswa")->num_rows();
						break;

					case 'diterima':
						return $this->db->like('tgl_siswa', "$thn", 'after')->where('status_pendaftaran', 'lulus')->get("tbl_siswa")->num_rows();
						break;

					case 'tidak diterima':
						return $this->db->like('tgl_siswa', "$thn", 'after')->where('status_pendaftaran', 'tidak lulus')->get("tbl_siswa")->num_rows();
						break;

					default:
						# code...
						break;
				}
				break;

			default:
				# code...
				break;
		}
	}

	function get_val($menu = '', $id = '')
	{
		switch ($menu) {
			default:
				# code...
				break;
		}
	}

	function update($menu = '', $data = '')
	{
		switch ($menu) {
			case 'teks-verifikasi':
				$this->db->update('tbl_verifikasi', $data, array('id_verifikasi' => "1"));
				break;

			case 'change-stu-verif':
				$param = array(
					'status_verifikasi' => $data['status_verifikasi']
				);
				$this->db->update('tbl_siswa', $param, array('no_pendaftaran' => $data['id']));
				break;

			case 'announce-edited':
				$data = (object) $data;
				$data = array(
					'ket_pengumuman'	=> $data->post('ket_pengumuman')
				);
				$this->db->update('tbl_pengumuman', $data, array('id_pengumuman' => "1"));
				break;

			default:
				# code...
				break;
		}
	}

	public function get_countpemrogramandasar()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='1'";
        $result = $this->db->query($sql);
        return $result->row();
    }

	public function get_countpemrogramanweb()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='2'";
        $result = $this->db->query($sql);
        return $result->row();
    }

	public function get_countpemrogramanobjek()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='3'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countinstalasi()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='4'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countkonfigurasiperangkat()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='5'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countkonfigurasirouting()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='6'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countdesaingrafis()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='7'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countpercetakan()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='8'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countanimasi()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='9'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countpengolahan()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='10'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countpengoperasian()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='11'";
        $result = $this->db->query($sql);
        return $result->row();
    }
	
	public function get_countpelayanan()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp ='12'";
        $result = $this->db->query($sql);
        return $result->row();
    }

	public function get_countrpl()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp >='1' AND id_komp <='3'";
        $result = $this->db->query($sql);
        return $result->row();
    }

	public function get_counttkj()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp >='4' AND id_komp <='6'";
        $result = $this->db->query($sql);
        return $result->row();
    }

	public function get_countmm()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp >='7' AND id_komp <='10'";
        $result = $this->db->query($sql);
        return $result->row();
    }

	public function get_countpkm()
    {
        $sql = "SELECT count(*) FROM tbl_siswa WHERE id_komp >='11' AND id_komp <='12'";
        $result = $this->db->query($sql);
        return $result->row();
    }
}
