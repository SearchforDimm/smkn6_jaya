<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Model_web extends CI_Model
{

    function web_utama()
    {
        return $this->db->get_where('tbl_web', "id_web='1'")->row();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function insert_datasignature($datasignature, $table)
    {
        $this->db->insert($table, $datasignature);
    }

    function pendaftaran($menu = '', $data = '')
    {
        switch ($menu) {
            case 'daftar':
                $no_pendaftaran = $this->input->post('nis');
                $nama_lengkap = $this->input->post('nama_lengkap');
                $nisn = $this->input->post('nisn');
                $nik = $this->input->post('nik');
                $pd_terakhir = $this->input->post('pd_terakhir');
                $jk = $this->input->post('jk');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tgl_lahir = $this->input->post('tgl_lahir');
                $bln_lahir = $this->input->post('bln_lahir');
                $thn_lahir = $this->input->post('thn_lahir');
                $no_hp_siswa = $this->input->post('no_hp_siswa');
                $email = $this->input->post('email');
                // $kebangsaan = $this->input->post('kebangsaan');
                $nama_perusahaan = $this->input->post('nama_perusahaan');
                $jabatan = $this->input->post('jabatan');
                $alamat_perusahaan = $this->input->post('alamat_perusahaan');
                $no_telp_perusahaan = $this->input->post('no_telp_perusahaan');
                // $no_fax = $this->input->post('no_fax');
                $email_perusahaan = $this->input->post('email_perusahaan');
                $tujuan_asesmen = $this->input->post('tujuan_asesmen');
                $id_komp = $this->input->post('id_komp');
                $jenis_tinggal = $this->input->post('jenis_tinggal');
                $alamat_siswa = $this->input->post('alamat_siswa');
                // $desa = $this->input->post('desa');
                $kec = $this->input->post('kec');
                $kab = $this->input->post('kab');
                $prov = $this->input->post('prov');
                $kode_pos = $this->input->post('kode_pos');
                $tgl_siswa = $this->input->post('tgl_siswa');
                // $kartu_pelajar = $_FILES['kartu_pelajar']['name'];
                // if ($kartu_pelajar = '') {
                // } else {
                // 	$config['upload_path'] = FCPATH . "assets/upload";
                // 	$config['allowed_types'] = 'jpg|jpeg|png|rar|zip|pdf|tiff';
                //     $config['max_size']    = 10240;
                //     $config['file_name']    =  'KARTU_PELAJAR-' . date('dmy') . '-' . $no_pendaftaran;
                // 	$this->load->library('upload', $config);
                // 	$this->upload->initialize($config);

                //     if (!$this->upload->do_upload('kartu_pelajar')) {
                //         $this->session->set_flashdata('msgkesalahan', 'Maaf kesalahan dalam menginput file kartu pelajar.');
                //         redirect('web/pendaftaran');
                //     } else {
                //         $kartu_pelajar = $this->upload->data('file_name');
                //     }
                // }
                // $raport = $_FILES['raport']['name'];
                // if ($raport = '') {
                // } else {
                // 	$config['upload_path'] = FCPATH . "assets/upload";
                //     $config['max_size']    = 10240;
                //     $config['file_name']    =  'RAPORT-' . date('dmy') . '-' . $no_pendaftaran;
                // 	$config['allowed_types'] = 'jpg|jpeg|png|rar|zip|pdf|tiff';

                // 	$this->load->library('upload', $config);
                // 	$this->upload->initialize($config);

                //     if (!$this->upload->do_upload('raport')) {
                //         $this->session->set_flashdata('msgkesalahan', 'Maaf kesalahan dalam menginput file raport.');
                //         redirect('web/pendaftaran');
                //     } else {
                //         $raport = $this->upload->data('file_name');
                //     }
                // }
                // $kartu_keluarga = $_FILES['kartu_keluarga']['name'];
                // if ($kartu_keluarga = '') {
                // } else {
                // 	$config['upload_path'] = FCPATH . "assets/upload";
                // 	$config['allowed_types'] = 'jpg|jpeg|png|rar|zip|pdf|tiff';
                //     $config['max_size']    = 10240;
                //     $config['file_name']    =  'KARTU_KELUARGA-' . date('dmy') . '-' . $no_pendaftaran;
                // 	$this->load->library('upload', $config);
                // 	$this->upload->initialize($config);

                //     if (!$this->upload->do_upload('kartu_keluarga')) {
                //         $this->session->set_flashdata('msgkesalahan', 'Maaf kesalahan dalam menginput file kartu keluarga.');
                //         redirect('web/pendaftaran');
                //     } else {
                //         $kartu_keluarga = $this->upload->data('file_name');
                //     }
                // }
                // $pas_photo = $_FILES['pas_photo']['name'];
                // if ($pas_photo = '') {
                // } else {
                // 	$config['upload_path'] = FCPATH . "assets/upload";
                // 	$config['allowed_types'] = 'jpg|jpeg|png|rar|zip|pdf|tiff';
                //     $config['file_name']    =  'PAS_PHOTO-' . date('dmy') . '-' . $no_pendaftaran;
                //     $config['max_size']    = 10240;
                // 	$this->load->library('upload', $config);
                // 	$this->upload->initialize($config);

                //     if (!$this->upload->do_upload('pas_photo')) {
                //         $this->session->set_flashdata('msgkesalahan', 'Maaf kesalahan dalam menginput file pas photo.');
                //         redirect('web/pendaftaran');
                //     } else {
                //         $pas_photo = $this->upload->data('file_name');
                //     }
                // }
                // $sertifikat_pendukung = $_FILES['sertifikat_pendukung']['name'];
                // if ($sertifikat_pendukung = '') {
                // } else {
                // 	$config['upload_path'] = FCPATH . "assets/upload";
                // 	$config['allowed_types'] = 'jpg|jpeg|png|rar|zip|pdf|tiff';
                //     $config['max_size']    = 10240;
                //     $config['file_name']    =  'SERTIFIKAT_PENDUKUNG-' . date('dmy') . '-'  . $no_pendaftaran;
                // 	$this->load->library('upload', $config);
                // 	$this->upload->initialize($config);

                //     if (!$this->upload->do_upload('sertifikat_pendukung')) {
                //         $this->session->set_flashdata('msgkesalahan', 'Maaf kesalahan dalam menginput file sertifikat pendukung.');
                //         redirect('web/pendaftaran');
                //     } else {
                //         $sertifikat_pendukung = $this->upload->data('file_name');
                //     }
                // }
                $data = array(
                    'no_pendaftaran' => $no_pendaftaran,
                    'nama_lengkap' => $nama_lengkap,
                    'nisn' => $nisn,
                    'nis' => $no_pendaftaran,
                    'password' => $nisn,
                    'nik' => $nik,
                    'pd_terakhir' => $pd_terakhir,
                    'jk' => $jk,
                    'tempat_lahir' => $tempat_lahir,
                    'tgl_lahir' => $tgl_lahir . '-' . $bln_lahir . '-' . $thn_lahir,
                    'no_hp_siswa' => $no_hp_siswa,
                    'email' => $email,
                    'nama_perusahaan' => $nama_perusahaan,
                    // 'kebangsaan' => $kebangsaan,
                    'jabatan' => $jabatan,
                    'alamat_perusahaan' => $alamat_perusahaan,
                    'no_telp_perusahaan' => $no_telp_perusahaan,
                    // 'no_fax' => $no_fax,
                    'email_perusahaan' => $email_perusahaan,
                    'tujuan_asesmen' => $tujuan_asesmen,
                    'id_komp' => $id_komp,
                    'jenis_tinggal' => $jenis_tinggal,
                    'alamat_siswa' => $alamat_siswa,
                    // 'desa' => $desa,
                    'kec' => $kec,
                    'kab' => $kab,
                    'prov' => $prov,
                    'kode_pos' => $kode_pos,
                    // 'kartu_pelajar' => $kartu_pelajar,
                    // 'raport' => $raport,
                    // 'kartu_keluarga' => $kartu_keluarga,
                    // 'pas_photo' => $pas_photo,
                    // 'sertifikat_pendukung' => $sertifikat_pendukung,
                    'tgl_siswa' => $tgl_siswa
                );
                return $this->db->insert('tbl_siswa', $data);
                break;

            case 'id_baru':
                $no_max = $this->db->select_max('no_pendaftaran', 'kode')->get('tbl_siswa')->row();
                $no_max = $no_max->kode;
                $no_max = (int) substr($no_max, 6) + 1;
                return date('Y-') . sprintf("%06s", time());
                break;

            case 'status_ppdb':
                return $this->db->get_where('tbl_web', "id_web='1'")->row();
                break;

            case 'v_pdd':
                return $this->db->order_by('id_pdd', 'ASC')->get('tbl_pdd')->result();
                break;

            case 'v_komp':
                return $this->db->order_by('id_komp', 'ASC')->get('tbl_komp')->result();
                break;

            default:
                # code...
                break;
        }
    }

    function auth($menu = '', $data = '')
    {
        switch ($menu) {
            case 'cek-masuk':
                $query = $this->db->where("no_pendaftaran", $data['username'])->where("password", $data['password'])->get('tbl_siswa');
                return array(
                    'res'    => $query->row(),
                    'sum'    => $query->num_rows()
                );
                break;

            default:
                # code...
                break;
        }
    }

    public function downloadBukti($id)
    {
        $query = $this->db->get_where('tbl_siswa', array('id_siswa' => $id));
        return $query->row_array();
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id_asesi($id)
    {
        $hasil = $this->db->where('id_siswa', $id)->get('tbl_siswa');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }


    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_single_signs()
    {
        $datas = array(
            'rowno' => $_POST['rowno']
        );

        return $this->db->get_where('signature', $datas)->num_rows();
    }


    public function insert_single_signature($image, $no_pendaftaran)
    {

        $check = $this->get_single_signs();
        if ($check == 0) {
            $data = array(
                'no_pendaftaran' => $no_pendaftaran,
                'img' => $image,
                'rowno' => $_POST['rowno']
            );

            $this->db->insert('signature', $data);
            $this->session->set_flashdata('msg', 'Data Pesan berhasil diubah!');
            redirect('panel_admin/data_pesan');
        } else {

            $data = array('img' => $image, 'no_pendaftaran' => $no_pendaftaran);

            $this->db
                ->where('rowno', $_POST['rowno'])
                ->update('signature', $data);
            $this->session->set_flashdata('msg', 'Data Pesan berhasil diubah!');
            redirect('panel_admin/data_pesan');
        }

        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
