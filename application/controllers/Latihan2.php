<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan2 extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('input_matakuliah.php');
    }

    public function cetak()
    {
        $kodeMataKuliah = $this->input->post('kode');
        $namaMataKuliah = $this->input->post('nama');
        $sksMataKuliah = $this->input->post('sks');

        if ($sksMataKuliah == 1) {
            $sksUnggulan = "SKS reguler";
            $bobotnilai = "Nilai di bawah 60";
            $status = " Remedial";
        } else if ($sksMataKuliah == 2) {
            $sksUnggulan = "SKS reguler";
            $bobotnilai = "61 -74";
            $status = "  Tidak Remedial";
        } else if ($sksMataKuliah == 3) {
            $sksUnggulan = "SKS reguler";
            $bobotnilai = "75 -80";
            $status = "Tidak Remedial";
        } else if ($sksMataKuliah == 4) {
            $sksUnggulan = "Unggulan";
            $bobotnilai = "81 -100";
            $status = "Tidak  Remedial";
        }

        //membuat object untuk parsing data ke view yg dituju
        $data = [
            'kode' => $kodeMataKuliah,
            'nama' => $namaMataKuliah,
            'sks' => $sksMataKuliah,
            'unggulan' => $sksUnggulan,
            'range' => $bobotnilai,
            'status' => $status,
        ];

        //kirim ke view
        $this->load->view('output_matakuliah.html', $data);
    }
}
