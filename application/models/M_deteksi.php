<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_deteksi extends CI_Model {

    // Fungsi ini mensimulasikan prediksi emosi dari sebuah teks
    public function get_emotion_prediction($text)
    {
        // Ubah teks menjadi huruf kecil untuk memudahkan pengecekan
        $lower_text = strtolower($text);
        
        // Logika simulasi sederhana (ganti dengan logika model ML Anda jika memungkinkan)
        if (strpos($lower_text, 'senang') !== false || strpos($lower_text, 'bahagia') !== false || strpos($lower_text, 'berhasil') !== false) {
            return "Senang 😊";
        } elseif (strpos($lower_text, 'sedih') !== false || strpos($lower_text, 'kecewa') !== false || strpos($lower_text, 'gagal') !== false) {
            return "Sedih 😢";
        } elseif (strpos($lower_text, 'marah') !== false || strpos($lower_text, 'kesal') !== false || strpos($lower_text, 'benci') !== false) {
            return "Marah 😠";
        } elseif (strpos($lower_text, 'takut') !== false || strpos($lower_text, 'khawatir') !== false) {
            return "Takut 😨";
        } else {
            return "Netral 😐";
        }
    }
}