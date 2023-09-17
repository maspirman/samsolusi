<?php
//menampilkan identias website 
$id_website = $this->model_utama->view('identitas')->row_array();	
$logo_website = $this->model_utama->view('logo')->row_array();			

// footer menu 
$get_lokasi_menu    = $this->model_utama->view_where('tbl_novapage',array('key' => 'lokasi_menu'))->row_array();
if(isset($get_lokasi_menu['value'])){
	if(!empty($get_lokasi_menu['value'])){
		$lokasi_menu = json_decode($get_lokasi_menu['value'],true);
	}
} 
$menu_footer_id = '';
if(isset($lokasi_menu['menu_footer'])) {
	$menu_footer_id = $lokasi_menu['menu_footer'];
}


function build_footer_menu($menu_parent_id ){
	// get instance CI
	$list_menu = '';
	$ci = & get_instance();
	$get_menus = $ci->db->query("
		SELECT 
		id_menu, 
		nama_menu, 
		link
		FROM 
		menu 
		WHERE 
		aktif='Ya' 
		AND 
		id_parent='". $menu_parent_id."'
		ORDER BY urutan
		")->result_array();
	if(!empty($get_menus)) {  
		$list_menu .= '<ul class="footer-menu">';  
		foreach($get_menus as $menu_item) {	  
			// filter http link
			$ahref_ttr ='';
			$base_url = base_url($menu_item['link']);
			if(preg_match("/^http/", $menu_item['link'])) {
				$ahref_ttr = 'target="_BLANK"';
				$base_url = $menu_item['link'];
			}
			// create link			
			$list_menu .= '<li class="menu-item" id="menu-item-'.$menu_item['id_menu'].'">';
			$list_menu .= '<a '. $ahref_ttr .' href="'. $base_url .'">';
			$list_menu .= $menu_item['nama_menu'];
			$list_menu .= '</a>'; 
			$list_menu .= '</li>'; 
		}
		$list_menu .= '</ul>';
	}
	return $list_menu;
}


$base_path = FCPATH;
?>



<!-- Main Footer -->
<footer class="main-footer style-four">

	<div class="pattern" style="background-image: url('<?php echo base_url('template/novapage/new/assets/images/shape/pattern-14.png');?>');"></div>
	
	<div class="auto-container">
		<?php include 'footer_widget.php'; ?>
	</div>        
	<!-- Footer Bottom -->
	<div class="footer-bottom-two" style="border-radius: 10px 10px 0 0;">
		<div class="auto-container">
			<div class="row m-0 justify-content-between">
				<ul class="menu">
					<li>
						
						<?php 
						if( isset($tagline['footer']) && isset($tagline['text'])) {
							if(!empty($tagline['text'] && $tagline['footer'] ==  '1') ){
								?>
								<a href="#">&copy; <?php echo date('Y');?> Copyright <?php echo $id_website['nama_website']; ?> - <?php echo $tagline['text'];?> </a>
								<?php
							}
						}?>

					</li>
				</ul>
				<div class="scroll-to-top-two scroll-to-target" data-target="html"><i class="flaticon-backward"></i>Powered By <a href="https://positifkreatif.id">Positifkreatif.id</a></div>
			</div>                    
		</div>
	</div>
</footer>

<?php $this->model_utama->kunjungan(); ?>
