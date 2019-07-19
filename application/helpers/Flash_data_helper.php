<?php

function instance()
{
    return get_instance();
}

function FlassData($message)
{
    return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
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