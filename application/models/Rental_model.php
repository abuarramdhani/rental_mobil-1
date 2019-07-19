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
                'label' => 'Nama',
				'rules' => 'required|trim'
            ];
            array_push($peraturan, $isi);
        }
        return $peraturan;
    }

}

/* End of file Rental_model.php */
