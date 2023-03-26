<?php // pertemuan 3
class Latihan1 extends CI_Controller {
	public function index() {
		echo "Selamat Datang.. selamat belajar web Programming";
		// $this->load->view('view-latihan');
	}

	public function jumlah($n1, $n2) {
		$this->load->model('Model_latihan1');

		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1,$n2);

		$this->load->view('view-latihan', $data);
		/*$hasil = $this->Model_latihan1->jumlah($n1, $n2);
		echo "Hasil Penjumlahan dari ".$n1." + ". $n2 ." = ".$hasil;*/
	}
}

 ?>