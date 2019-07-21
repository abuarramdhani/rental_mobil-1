<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function toLogin()
    {
        $input = $this->input;
        $email = $input->post('username');
        $password = $input->post('password');

        $query = $this->db->get_where('tb_users', ['USERNAME'=>$email]);

        if($query->num_rows() > 0){

            $passwordDatabase = $query->row_array()['PASSWORD'];

            if ( password_verify($password, $passwordDatabase) ) {
                return [
                    'verifikasi' => 1,
                    'message' => 'Anda Telah Login',
                    'data_session' => [
                        'name' => $query->row_array()['NAME'],
                        'id_user' => $query->row_array()['ID_USER'],
                        'role_id' => $query->row_array()['GROUP_USER']
                    ]
                ];
            }else{
                return [
                    'verifikasi' => 0,
                    'message' => 'Password Salah'
                ];
            }
            
        }else{
            return [
                'verifikasi' => 0,
                'message' => 'User Tidak Ditemukan'
            ];
        }
    }

}

/* End of file Login.php */
