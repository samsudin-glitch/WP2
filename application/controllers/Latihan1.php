<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {

	public function index()
	{
        echo "Coba membuat controller baru";
	}

    public function testPenjumlahan($nilai1, $nilai2){
        $this->load->model("Model_latihan1");
        $hasil = $this->Model_latihan1->simpleSum($nilai1, $nilai2);
        //echo "Hasil penjumlahan bilangan sederhana ".$nilai1." + ".$nilai2." = ".$hasil;

        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $hasil;
        $this->load->view('latihan1.html', $data);
    }

}