<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	public function index(){
		$this->load->model('Sitemap_model');
		$berita = $this->Sitemap_model->getberita();
		$halaman = $this->Sitemap_model->gethalaman();
		$komen = $this->Sitemap_model->getkomen();
		$testi = $this->Sitemap_model->gettesti();
		$kategori = $this->Sitemap_model->getkategori();
		$tag = $this->Sitemap_model->gettag();
		$sekilas = $this->Sitemap_model->getsekilas();


		$data = [
			'berita'   		 => $berita,
			'kategori'  	 => $kategori,
			'testimoni'  	 => $testi,
			'komentar'   	 => $komen,
			'halamanstatis'  => $halaman,
			'tag'  		 	 => $tag,
			'sekilas'  	 	 => $sekilas,
		];
		$this->load->view('sitemap', $data);
	}

}
?>