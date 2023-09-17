<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap_model extends CI_Model {

	function getberita() {
		$this->db->select('judul_seo,tanggal,jam');
		$this->db->where('status','Y');
		return $this->db->order_by('tanggal', 'desc')->get('berita')->result_array();
	}
	function gethalaman() {
		$this->db->select('judul_seo,tgl_posting');
		return $this->db->order_by('tgl_posting', 'desc')->get('halamanstatis')->result_array();
	}
	function getkomen() {
		$this->db->select('nama_komentar,isi_komentar,id_berita');
		$this->db->where('aktif','Y');
		return $this->db->order_by('tgl', 'desc')->get('komentar')->result_array();
	}
	function gettesti() {
		$this->db->select('nama,testimoni');
		return $this->db->order_by('id_testimoni', 'desc')->get('tbl_novapage_testimoni')->result_array();
	}
	function getkategori() {
		$this->db->select('kategori_seo,nama_kategori');
		$this->db->where('aktif','Y');
		return $this->db->order_by('id_kategori', 'desc')->get('kategori')->result_array();
	}
	function gettag() {
		$this->db->select('tag_seo,nama_tag');
		return $this->db->order_by('id_tag', 'desc')->get('tag')->result_array();
	}
	function getsekilas() {
		$this->db->select('info,tgl_posting');
		$this->db->where('aktif','Y');
		return $this->db->order_by('tgl_posting', 'desc')->get('sekilasinfo')->result_array();
	}
	function getPosts($limit = NULL)
	{
		return $this->db->get('berita', $limit);
	}

	function getidentiti() {
		return $this->db->get('identitas');
	}



}
?>