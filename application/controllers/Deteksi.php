<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deteksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model yang akan kita buat nanti
        $this->load->model('M_deteksi');
    }

    // Fungsi untuk menampilkan halaman utama (beranda)
    public function index()
    {
        $data['title'] = 'Beranda - Sistem Deteksi Emosi';
        $this->load->view('template/v_header', $data);
        $this->load->view('v_beranda');
        $this->load->view('template/v_footer');
    }

    // Fungsi untuk menampilkan dan memproses halaman prediksi
    public function prediksi()
    {
        $data['title'] = 'Coba Prediksi - Sistem Deteksi Emosi';
        $data['hasil'] = null; // Inisialisasi hasil agar tidak error saat pertama kali load

        // Cek apakah ada data yang dikirim melalui form (metode POST)
        if ($this->input->post('chat_input')) {
            $text = $this->input->post('chat_input', TRUE); // TRUE untuk XSS Filtering

            // Panggil fungsi prediksi dari model
            $data['hasil'] = $this->M_deteksi->get_emotion_prediction($text);
            $data['text_input'] = $text; // Kirim kembali teks inputan
        }

        $this->load->view('template/v_header', $data);
        $this->load->view('v_prediksi', $data); // Kirim data ke view
        $this->load->view('template/v_footer');
    }
}