
<div class="footer-widget post-widget">
	<?php  
	$jumlah_berita = 0;
	if( isset($widget_setting['judul']) ) {
		if( !empty(trim($widget_setting['judul']))) {
			?>					
			<h3 class="widget-title">
				<?php echo $widget_setting['judul'];?>
			</h3>
			<?php 
		}
	}

	if( isset($widget_setting['jumlah']) ) {
		$jumlah_berita = (int) $widget_setting['jumlah'];
	}  
	?>   
	<div class="widget-content">
		<?php 
		$this->load->helper('text');
		$populer = $this->model_utama->view_join_two(
			'berita',
			'users',
			'kategori',
			'username',
			'id_kategori',
			array('berita.status' => 'Y'),
			'dibaca','DESC',0, $jumlah_berita
		);
		foreach ($populer->result_array() as $berita) {
			$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $berita['id_berita']))->num_rows();
			$img_src= base_url().'asset/foto_berita/small_no-image.jpg';
			if ($berita['gambar'] !==''){
				$img_src =base_url().'asset/foto_berita/'.$berita['gambar'];
			} 
			$img_size = getimagesize($img_src);
			$class_image= ($img_size[0] > $img_size[1]) ? 'landscape':'portrait'; 
			?>
			<div class="post">
				<div class="image" style="width: 30%;"><a href="<?php echo base_url().$berita['judul_seo'];?>"><img src="<?php echo $img_src; ?>" alt=""></a></div>
				<div class="date"><?php echo tgl_indo($berita['tanggal']);?> </div>
				<h4><a href="<?php echo base_url().$berita['judul_seo'];?>"><?php echo word_limiter( strip_tags($berita['judul']),8);?>   </a></h4>
			</div>
			<?php

		}
		?> 
	</div>  
	
