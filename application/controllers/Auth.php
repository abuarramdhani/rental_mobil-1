<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model','auth');
    } 

    public function index()
    {
        $this->load->helper('Flash_data');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            view_helpers('login/index');
        } else {
            $berhasil = $this->auth->toLogin();
            
            if($berhasil['verifikasi'] == 0){
                // Jika gagal
                $this->session->set_flashdata('message', FlassData($berhasil['message']));
                redirect('login');
            }else{
                // Jika berhasil
                $this->session->set_userdata($berhasil['data_session']);
                $this->session->set_flashdata('message', FlassData($berhasil['message'], 'success'));
                redirect('mobil');
            }
        }
    }

}

/* End of file Login.php */
