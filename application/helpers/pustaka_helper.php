<?php

function cek_login()
{
    $CI = &get_instance();

    if (!$CI->session->userdata('email')) {
        $CI->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses Ditolak. Anda belum login!</div>');
        redirect('autentifikasi');
    } else {
        $role_id = $CI->session->userdata('role_id');
    }
}
