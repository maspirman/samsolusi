<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Feed extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
		$this->load->model('Sitemap_model');
		$berita = $this->Sitemap_model->getPosts();
		$this->load->helper(['xml', 'text']);
	}


	/**
	 * Index
	 * @return Void
	 */
	public function index() {
		$this->load->model('Sitemap_model');
		$berita = $this->Sitemap_model->getPosts();
		$meta = $this->Sitemap_model->getidentiti();
		$this->vars['feed_name'] = base_url();
		$this->vars['encoding'] = 'utf-8';
		$this->vars['feed_url'] = base_url().'/feed';
		$this->vars['page_description'] = $meta;
		$this->vars['page_language'] = 'en-en';
		$this->vars['creator_email'] = 'admin@positifkreatif.id';
		$this->vars['berita'] = $berita;

		
		header('Content-Type: text/xml; charset=utf-8', true);

		$this->load->view('feed', $this->vars);
		
	}
}
