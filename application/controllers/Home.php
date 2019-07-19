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
        $listName = ['nama','merk','deskripsi','tahun','kapasitas','harga','warna','plat'];
        $validation = $this->form_validation;
        $validation->set_rules($this->data_rental->rules($this->data_rental->rules($listName)));

   
        if ($validation->run() == FALSE) {
            $dataPage = $this->data_rental->getDataPagination('mobil', 'tb_mobil', 'ID_MOBIL');
            view_helpers('home/index',instance()->load->view('template/navbar'), $dataPage);
        } else {
        }
    }

    public function pesanan()
    {
        view_helpers('home/pesanan',instance()->load->view('template/navbar'));
    }

    public function proses_peminjaman()
    {
        view_helpers('home/proses_peminjaman',instance()->load->view('template/navbar'));
    }

    public function histori_transaksi()
    {
        view_helpers('home/histori_transaksi',instance()->load->view('template/navbar'));
    }

    public function users()
    {
        view_helpers('home/user',instance()->load->view('template/navbar'));
    }

    public function track_mobil()
    {
        view_helpers('home/track_mobil',instance()->load->view('template/navbar'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Home.php */
