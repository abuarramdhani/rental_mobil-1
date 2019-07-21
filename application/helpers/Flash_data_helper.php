<?php

function instance()
{
    return get_instance();
}

function FlassData($message, $tipeAlert='danger')
{
    return '<div class="alert alert-'.$tipeAlert.' alert-dismissible fade show" role="alert">
            '.$message.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}

function view_helpers($path, $path_tambahan='', $data='')
{
    instance()->load->view('template/header',$data);
    instance()->load->view($path, $data);
    instance()->load->view('template/footer');
    $path_tambahan;
}

function getDataMobil()
{
    $ci = get_instance();
    return $ci->db->get_where('tb_mobil',['STATUS_SEWA' => 0, 'STATUS_MOBIL' => 1])->result_array();
}

function getDataUser()
{
    $ci = get_instance();
    return $ci->db->get_where('tb_users',['GROUP_USER' => 2])->result_array();
}