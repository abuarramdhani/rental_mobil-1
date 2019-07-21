<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->helper('Flash_data');
        $this->load->model('Rental_model','data_rental');
        
        if (!$this->session->userdata('id_user')) {
            $this->session->set_flashdata('message', FlassData('Anda belum login!!'));
            redirect('login');
        }
    }
    
    public function index()
    {
        $aksesPage = $this->uri->segment(1);
        $dataPage = '';
        
        if($aksesPage == 'mobil'){

            $dataPage = $this->data_rental->getDataPagination('mobil', 'tb_mobil', 'ID_MOBIL');
        }elseif ($aksesPage == 'pesanan') {

            $dataPage = $this->data_rental->getDataPagination('pesanan', 'tb_transaksi', 'ID');
        }elseif ($aksesPage == 'peminjaman'){

            $dataPage = $this->data_rental->getDataPagination('peminjaman', 'tb_transaksi', 'ID');
        }elseif($aksesPage == 'transaksi'){

            $dataPage = $this->data_rental->getDataPagination('transaksi', 'tb_transaksi', 'ID');
        }elseif($aksesPage == 'users'){
            if ($this->session->userdata('role_id') != 1) {
                $this->session->set_flashdata('message', FlassData('Akses Ditolak'));
                redirect('mobil');
            }
            $dataPage = $this->data_rental->getDataPagination('users', 'tb_users', 'ID_USER');
        }elseif($aksesPage == 'track'){
            $dataPage = $this->data_rental->getALlDataMobil();
        }

        view_helpers('home/'.$aksesPage,instance()->load->view('template/navbar'), $dataPage);
    }

    public function tambah_or_edit_mobil()
    {
        $listName = ['nama','merk','deskripsi','tahun','kapasitas','harga','warna','plat'];
        $validation = $this->form_validation;
        $validation->set_rules($this->data_rental->rules($listName));

        $this->uri->segment(2) == 'tambah-mobil' ? $url = 'tambah_mobil' : $url = 'edit_mobil';
        
        $url == 'tambah_mobil' ? $data = '' : $data['mobil'] = $this->db->get_where('tb_mobil',['ID_MOBIL'=>$this->uri->segment(3)])->row_array();

        if ($validation->run() == FALSE) {
            view_helpers('edit/'.$url, instance()->load->view('template/navbar'), $data);
        } else {
            
            $validation = $this->data_rental->uploadGambar('image_mobil','input_mobil', $url);
            
            if($validation == 0){
                $this->session->set_flashdata('message', FlassData('Maaf File/Ukuran Gambar Tidak Sesuai'));
                redirect('mobil');
            }else{
                $this->session->set_flashdata('message', FlassData('Data Berhasil Ditambahkan/Diubah','success'));
                redirect('mobil'); //selesai proses di redirect
            }
        }        
    }

    public function tambah_or_edit_pesanan()
    {
        $listName = ['sewa'];
        $validation = $this->form_validation;
        $validation->set_rules($this->data_rental->rules($listName));

        $this->uri->segment(2) == 'tambah-pesanan' ? $url = 'tambah_pesanan' : $url = 'bayar_pesanan';
        
        if ($validation->run() == FALSE) {
            view_helpers('edit/'.$url, instance()->load->view('template/navbar'));
        } else {            
            $this->data_rental->input_pesanan();
            $this->session->set_flashdata('message', FlassData('Data Berhasil Ditambahkan/Diubah','success'));
            redirect('pesanan'); //selesai proses di redirect
        } 
    }

    public function bayar_proses()
    {
        if($this->uri->segment(2) == 'bayar'){
            $validation = $this->data_rental->uploadGambar('bukti_bayar','bayar_pesanan', ' ');

            if($validation == 0){
                $this->session->set_flashdata('message', FlassData('Maaf File/Ukuran Gambar Tidak Sesuai'));
                redirect('pesanan');
            }else{
                $this->session->set_flashdata('message', FlassData('Bukti Pembayaran Berhasil Ditambahkan','success'));
                redirect('pesanan'); //selesai proses di redirect
            }    
        }elseif($this->uri->segment(2) == 'proses-pesanan'){
            $this->data_rental->proses_pesanan('diproses', '1');
            $this->session->set_flashdata('message', FlassData('Berhasil Diproses','success'));
            redirect('pesanan');
        }else{
            $this->data_rental->proses_pesanan('selesai', '0');
            $this->session->set_flashdata('message', FlassData('Pesanan Selesai','success'));
            redirect('pesanan');
        }
    }

    public function tambah_or_edit_user()
    {
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('message', FlassData('Akses Ditolak'));
            redirect('mobil');
        }
        $listName = ['username','nama','nik','email','telp','alamat'];
        $validation = $this->form_validation;
        $validation->set_rules($this->data_rental->rules($listName));

        $this->uri->segment(2) == 'tambah-user' ? $url = 'tambah_user' : $url = 'edit_user';

        $url == 'tambah_user' ? $data = '' : $data['user'] = $this->db->get_where('tb_users',['ID_USER'=>$this->uri->segment(3)])->row_array();
        
        if ($validation->run() == FALSE) {
            view_helpers('edit/'.$url, instance()->load->view('template/navbar'), $data);
        } else {            
            $this->data_rental->input_user();
            $this->session->set_flashdata('message', FlassData('Data Berhasil Ditambahkan/Diubah','success'));
            redirect('users'); //selesai proses di redirect
        } 
    }

    public function delete_user()
    {
        $this->db->delete('tb_users',['ID_USER'=>$this->uri->segment(3)]);
        $this->session->set_flashdata('message', FlassData('Data Berhasil Dihapus','success'));
        redirect('users');
    }

    public function getDetailOrDelete()
    {
        if($this->uri->segment(2) == 'detail-mobil'){
            $data['mobil'] = $this->db->get_where('tb_mobil',['ID_MOBIL'=>$this->uri->segment(3)])->row_array();
            $data['gallery'] = $this->db->get_where('tb_gallery_mobil',['ID_MOBIL'=>$this->uri->segment(3)])->row_array();
            view_helpers('detail-delete/detail-mobil',instance()->load->view('template/navbar'), $data);
        }else{
            $this->db->delete('tb_gallery_mobil',['ID_MOBIL'=>$this->uri->segment(3)]);
            $this->db->delete('tb_mobil',['ID_MOBIL'=>$this->uri->segment(3)]);
            $this->session->set_flashdata('message', FlassData('Data Berhasil Dihapus','success'));
            redirect('mobil');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Home.php */
