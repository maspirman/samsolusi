<?php 
// get lokasi menu utama
$get_lokasi_menu    = $this->model_utama->view_where('tbl_novapage',array('key' => 'lokasi_menu'))->row_array();
if(isset($get_lokasi_menu['value'])){
	if(!empty($get_lokasi_menu['value'])){
		$lokasi_menu = json_decode($get_lokasi_menu['value'],true);
	}
} 
$menu_utama_id = '';
if(isset($lokasi_menu['menu_utama'])) {
	$menu_utama_id = $lokasi_menu['menu_utama'];
}


/**
 * menata menu secara hirarki
 * menu
 * -sub menu
 * --sub menu 
 * ---dst
 * @param $menu_parent_id ( menu id)
 * @param $state_menu_id (menu id (kondisi paling awal))
 * @param $class_menu ( style menu)
 * @param $home_icon ( true => menampilkan icon home)
 * @param $deep ( true jika => menu hirarki)
 */
function build_nav_menu($menu_parent_id = 0 ,$state_menu_id, $class_menu ='menu-navbar',$home_icon = true , $deep = true){
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


		$list_menu .= '<ul class="navigation clearfix">';
		

		foreach($get_menus as $menu_item) {	  
			// filter http link
			$ahref_ttr ='';
			$base_url = base_url($menu_item['link']);
			if(preg_match("/^http/", $menu_item['link'])) {
				$ahref_ttr = 'target="_BLANK"';
				$base_url = $menu_item['link'];
			}
			// create link			
			$a_link_menu = '<a '. $ahref_ttr .' href="'. $base_url .'">';
			$a_link_menu .= $menu_item['nama_menu'];
			$a_link_menu .= '</a>';
			// end
			
			$get_child = array();

			if($deep == true) {
				$get_child = build_nav_menu($menu_item['id_menu'],$state_menu_id);
			}
			if(!empty($get_child) && $deep == true) {
				$list_menu .= '<li class="dropdown" id="menu-item-'.$menu_item['id_menu'].'">';
				$list_menu .= $a_link_menu;
				$list_menu .= $get_child;
				$list_menu .= '</li>';
			} else {
				$list_menu .= '<li  id="menu-item-'.$menu_item['id_menu'].'">';
				$list_menu .= $a_link_menu;
				$list_menu .= '</li>';
			}
		}
		$list_menu .= '</ul>';
	}
	return $list_menu;
}

$class_menu_landingpage = 'scroll';
$CI = & get_instance();
if(  $CI->uri->segment(1)=='main' OR $CI->uri->segment(1)=='') {
	$class_menu_landingpage = 'landingpage';
} 
?> 




<!-- Main Header -->
<header class="main-header header-style-one">
	<!-- Header Top -->
	<div class="header-top">
		<div class="auto-container">
			<div class="inner">
				<div class="top-left">
					<!-- <div class="text" id="google_translate_element"></div> -->
				</div>
				<div class="top-right">
					<ul class="contact-info">
						<li><a href="https://web.whatsapp.com/send?phone=6281287709708&text=Halo%20Kak,%20Saya%20mau%20bertanya%20tentang%20jasa%20di%20samsolusi.com?"><i class="flaticon-phone"></i>+62 812-8770-9708
						</a></li>
						<li><a href="https://web.whatsapp.com/send?phone=6282115210851&text=Halo%20Kak,%20Saya%20mau%20bertanya%20tentang%20jasa%20di%20samsolusi.com?"><i class="flaticon-phone"></i>+62 821-1521-0851</a></li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<!-- Header Upper -->
	<div class="header-upper">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<!--Logo-->
				<div class="logo-box">
					<?php
			//menampilkan identias website  
					$base_path = FCPATH;
					$id_website = $this->model_utama->view('identitas')->row_array();	
					$logo_website = $this->model_utama->view('logo')->row_array();				
					?>  
					<div class="logo">
						<a href="<?php echo base_url();?>">
							<?php					
							if ( $logo_website['gambar'] !== '' &&  file_exists( $base_path ."asset/logo/".$logo_website['gambar'] ) ){
								$img_src = base_url() ."asset/logo/".$logo_website['gambar'] ;
								?>
								
								<img  src="<?php echo $img_src ;?>" alt="<?php echo $id_website['nama_website']; ?>">
								
								<?php
							} else {
								?> 
								<?php echo $id_website['nama_website']; ?> 
								<?php
							}
							?>
							
						</a></div>
					</div>
					<!--Nav Box-->
					<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-bar.png" alt=""></div>

						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md navbar-light">
							<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
								<?php 
								echo build_nav_menu($menu_utama_id,$menu_utama_id);  
								?>	
								

							</div>
						</nav>
						<!-- Main Menu End-->

						<div class="navbar-right-info">
							<div class="link-btn"><a href="https://web.whatsapp.com/send?phone=6282115210851&text=Halo%20Kak,%20Saya%20mau%20bertanya%20tentang%20jasa%20di%20samsolusi.com?" class="theme-btn btn-style-one"><span class="btn-title">Hubungi Kami</span></a></div>
							
							<!--Sidemenu Navigation Toggler-->
							<div class="sidemenu-nav-toggler"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-bar.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Header Upper-->

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container clearfix">
						<!--Logo-->
						<div class="logo-box">
							<div class="logo"><a href="index-2.html"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/logo-sam.png" alt=""></a></div>
						</div>
						<!--Nav Box-->
						<div class="nav-outer clearfix">
							<!--Mobile Navigation Toggler-->
							<div class="mobile-nav-toggler"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-bar.png" alt=""></div>

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md navbar-light">
							</nav>
							<!-- Main Menu End-->

							<div class="navbar-right-info">
								<div class="link-btn"><a href="https://web.whatsapp.com/send?phone=6281287709708&text=Halo%20Kak,%20Saya%20mau%20bertanya%20tentang%20jasa%20di%20samsolusi.com?" class="theme-btn btn-style-one"><span class="btn-title">Hubungi Kami</span></a></div>
								
								<!--Sidemenu Navigation Toggler-->
								<div class="sidemenu-nav-toggler"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-bar.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-remove"></span></div>

			<nav class="menu-box">
				<div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-sam-white.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
				</div>
			</nav>
		</div><!-- End Mobile Menu -->

		<div class="nav-overlay">
			<div class="cursor"></div>
			<div class="cursor-follower"></div>
		</div>
	</header>
	<!-- End Main Header -->

	<!-- Hidden Sidebar -->
	<section class="hidden-sidebar close-sidebar">
		<?php
		$this->load->helper('text');
		$get_section_about    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_about'))->row_array();
		if(isset($get_section_about['value'])){
			if(!empty($get_section_about['value'])){
				$section_about = json_decode($get_section_about['value'],true);
			}
		}

		?> 
		<div class="wrapper-box">
			<div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
			<div class="logo"><a href="#"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/logo-sam.png" alt=""></a></div>
			<div class="content">
				<div class="about-widget-two sidebar-widget">
					<h3>Samsolusi.com <br>Powered by PT SANTARA ABADI MAKMUR</h3>
					<div class="text"><?php echo $section_about['deskripsi'];?></div>
				</div>
				<!-- News Widget -->
				<div class="news-widget sidebar-widget">
					<div class="widget-title">News & Updates</div>
					<div class="post-wrapper">
						<div class="image"><a href="blog-details.html"><img src="assets/images/resource/news-1.jpg" alt=""></a></div>
						<div class="category">Business Plans</div>
						<h4><a href="blog-details.html">How to Manage Business’s <br>Online Reputation</a></h4>
					</div>
					<div class="post-wrapper">
						<div class="image"><a href="blog-details.html"><img src="assets/images/resource/news-2.jpg" alt=""></a></div>
						<div class="category">Marketing Stratergy</div>
						<h4><a href="blog-details.html">Inside our Daily Routines as a <br>Good Consultant</a></h4>
					</div>
				</div>
				<!-- Newsletter Widget -->
				<div class="newsletter-widget">
					<div class="widget-title">Newsletter Subscription</div>
					<form action="#">
						<input type="email" placeholder="Enter Email Address">
						<button class="theme-btn btn-style-one"><span class="btn-title">Subscribe Us</span></button>
					</form>
				</div>
			</div>
		</div>
	</section>

	