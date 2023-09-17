<div class="footer-logo">
	<?php
	$zoom_logo = 100;
	if( isset($widget_setting['zoom']) ) {  
		$zoom_logo = ((int) $widget_setting['zoom'] * 10);
	} 
	$logo_website = $this->model_utama->view('logo')->row_array();	 
	$base_path = FCPATH;
	if ( $logo_website['gambar'] !== '' &&  file_exists( $base_path ."asset/logo/".$logo_website['gambar'] ) ){
		$img_src = base_url() ."asset/logo/".$logo_website['gambar'] ;
		?> 
		<a href="<?php echo base_url(); ?>"><img class="lazy-image loaded" style="filter: brightness(0) invert(1);" src="<?php echo $img_src ;?>" data-src="<?php echo $img_src ;?>" alt="" data-was-processed="true"></a>
		<?php
	} 
	?>
</div>

