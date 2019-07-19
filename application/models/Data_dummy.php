<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dummy extends CI_Model {

    public function test()
    {
        $data = [
            'USERNAME' => 'test',
            'NAME' => 'user test',
            'NIK' => 123456,
            'EMAIL' => 'user@test.com',
            'NO_TELP' => '0812121212',
            'JENIS_KELAMIN' => 'L',
            'ALAMAT' => 'Bandung',
            'PASSWORD' => password_hash('test',PASSWORD_DEFAULT),
            'ACTIVATED' => 1,
            'CREATED' => date('Y-m-d H-i-s',time()),
            'GROUP_USER' => 1,
            'LAST_LOGIN' => date('Y-m-d H-i-s',time()),
            'LAST_UPDATE' => date('Y-m-d H-i-s',time())
        ];

        $this->db->insert('tb_users', $data);
    }    

}

/* End of file Data_dummy.php */
