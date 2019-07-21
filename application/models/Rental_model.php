<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_model extends CI_Model {

    public function getDataPagination($baseUrl, $namaTabel, $orderBy)
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url($baseUrl);
        $config['total_rows'] = $this->getJumlah($namaTabel);
        $config['per_page'] = 10;
        $config['num_links'] = 2; 

        // customisasi tampilan page
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-end">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['mulai'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['data'] = $this->getDataMobil($config["per_page"], $data['mulai'], $namaTabel, $orderBy);           
        $data['pagination'] = $this->pagination->create_links();

        return $data;
    }

    public function uploadGambar($nameUpload, $fungsi, $validation)
    {
        $config['upload_path'] = './assets/img/';
        $config['file_name'] = date('YmdHis',time());
        $config['allowed_types'] = 'jpeg|png|jpg';
        $config['max_size']  = '1024';
        $config['max_width']  = '2048';
        $config['max_height']  = '2048';
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload($nameUpload)){
            return 0;
        }else{
            $result = $this->upload->data('file_name');
            $this->$fungsi($result, $validation);
            return 1;
        }
    }

    public function getJumlah($namaTabel)
    {
        return $this->db->get($namaTabel)->num_rows();
    }

    public function getDataMobil($limit, $start, $namaTabel, $orderBy)
    {
        $this->db->order_by($orderBy,'DESC');
        return $this->db->get($namaTabel, $limit, $start);
    }

    // fungsi untuk menetapkan form validation
    public function rules($name)
    {
        $peraturan = [];

        foreach($name as $rule){
            $isi = [
                'field' => $rule,
                'label' => $rule,
				'rules' => 'required|trim'
            ];
            array_push($peraturan, $isi);
        }
        return $peraturan;
    }

    public function input_mobil($nameFile, $validation)
    {
        $input = $this->input;

        if($validation == 'tambah_mobil'){

            $date = date('Y-m-d H-i-s',time());
        }else{

            $id = $this->uri->segment(3);
            $date = $this->db->get_where('tb_mobil', ['ID_MOBIL'=>$id])->row_array()['CREATED_MOBIL'];        
        }

        $data = [
            'NAMA_MOBIL' => $input->post('nama'),
            'MERK_MOBIL' => $input->post('merk'),
            'DESKRIPSI_MOBIL' => $input->post('deskripsi'),
            'TAHUN_MOBIL' => $input->post('tahun'),
            'KAPASITAS_MOBIL' => $input->post('kapasitas'),
            'HARGA_MOBIL' => $input->post('harga'),
            'WARNA_MOBIL' => $input->post('warna'),
            'BENSIN_MOBIL' => $input->post('bbm_mobil'),
            'PLAT_NO_MOBIL' => $input->post('plat'),
            'STATUS_SEWA' => $input->post('sewa'),
            'STATUS_MOBIL' => $input->post('status'),
            'CREATED_MOBIL' => $date,
        ];
        
        if($validation == 'tambah_mobil'){
            $this->db->insert('tb_mobil', $data);
        }else{
            $id = $this->uri->segment(3);
            $this->db->update('tb_mobil', $data, ['ID_MOBIL'=>$id]);
        }

        $image = [
            'ID_MOBIL' => $this->db->insert_id(),
            'IMAGE' => $nameFile
        ];

        if($validation == 'tambah_mobil'){
            $this->db->insert('tb_gallery_mobil', $image);
        }else{
            $id = $this->uri->segment(3);
            $this->db->update('tb_gallery_mobil', ['IMAGE'=>$nameFile], ['ID_MOBIL'=>$id]);
        }
    }

    public function input_pesanan()
    {
        $input = $this->input;
        $hargaMobil = $this->db->get_where('tb_mobil', ['ID_MOBIL'=>$input->post('mobil')])->row_array()['HARGA_MOBIL'];
        
        $data = [
            'KODE_TRANSAKSI' => 'TR-'.date('YmdHis',time()),
            'ID_MOBIL' => $input->post('mobil'),
            'ID_USER' => $input->post('user'),
            'TGL_SEWA' => date('Y-m-d H-i-s',time()),
            'TGL_AKHIR_PENYEWAAN' => date('Y-m-d H-i-s',time() + (60 * 60 * 24 * $input->post('sewa'))),
            'HARGA_MOBIL' => $hargaMobil,
            'DOKUMEN' => $input->post('dokumen'),
            'SUPIR' => $input->post('supir'),
            'TOTAL' => $hargaMobil * $input->post('sewa'),
            'STATUS_TRANSAKSI' => 'Belum Dibayar'
        ];

        $this->db->insert('tb_transaksi', $data);
    }

    public function bayar_pesanan($nameFile, $validation)
    {
        $idTransaksi = $this->input->post('idTransaksi');
        
        $data = [
            'STATUS_TRANSAKSI' => 'sudah dibayar',
            'TGL_PEMBAYARAN' => date('Y-m-d H-i-s',time()),
            'BUKTI_PEMBAYARAN' => $nameFile
        ];

        $this->db->update('tb_transaksi', $data, ['ID'=>$idTransaksi]);
    }

    public function proses_pesanan($statusTransaksi, $statusMobil)
    {
        $idTransaksi = $this->uri->segment(3);
        $idMobil = $this->db->get_where('tb_transaksi',['ID'=>$idTransaksi])->row_array()['ID_MOBIL'];

        $this->db->update('tb_transaksi', ['STATUS_TRANSAKSI'=>$statusTransaksi], ['ID'=>$idTransaksi]);
        $this->db->update('tb_mobil', ['STATUS_SEWA'=>$statusMobil], ['ID_MOBIL'=>$idMobil]);
    }

    public function input_user()
    {
        $input = $this->input;

        $data = [
            'USERNAME' => $input->post('username'),
            'NAME' => $input->post('nama'),
            'NIK' => $input->post('nik'),
            'EMAIL' => $input->post('email'),
            'NO_TELP' => $input->post('telp'),
            'JENIS_KELAMIN' => $input->post('gender'),
            'ALAMAT' => $input->post('alamat'),
            'PASSWORD' => password_hash('123456', PASSWORD_DEFAULT),
            'ACTIVATED' => 1,
            'CREATED' => date('Y-m-d H-i-s',time()),
            'GROUP_USER' => $input->post('role'),
            'LAST_LOGIN' => date('Y-m-d H-i-s',time()),
            'LAST_UPDATE' => date('Y-m-d H-i-s',time())
        ];

        if($this->uri->segment(2) == 'tambah-user'){
            $this->db->insert('tb_users', $data);
        }else{
            $this->db->update('tb_users', $data, ['ID_USER'=>$this->uri->segment(3)]);
        }
    }

    public function getALlDataMobil()
    {
        $data['data'] = $this->db->get('tb_mobil')->result_array();
        return $data;
    }

}

/* End of file Rental_model.php */
