<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {

    public function index() {
        // Tampilkan form
        $this->load->view('tampilan');
    }

    public function penjumlahan() {
        // Ambil input POST
        $nilai1 = $this->input->post('nilai1');
        $nilai2 = $this->input->post('nilai2');

        // Load model
        $this->load->model('Latihan1_model');
        $hasil = $this->Latihan1_model->jumlah($nilai1, $nilai2);

        // Kirim ke view
        $data['hasil'] = $hasil;
        $this->load->view('tampilan', $data);
    }
}
