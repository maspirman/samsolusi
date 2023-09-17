<!DOCTYPE HTML>
<html lang = "id">
<head>
	<?php
// set tagline
	$get_tagline = $this->model_utama->view_where('tbl_novapage',array('key' => 'tagline'))->row_array();
	if(isset($get_tagline['value'])){
		if(!empty($get_tagline['value'])){
			$tagline = json_decode($get_tagline['value'],true);
		}
	}


	$tagline_header = '';
	if( isset($tagline['text'])) {
		$tagline_header = !empty($tagline['text']) ? ' | '.$tagline['text'] : '';
	}

	if( $this->uri->segment(1) !=='main' && !empty($this->uri->segment(1))) {	
	//menampilkan identias website 
		$id_website = $this->model_utama->view('identitas')->row_array();	 
		$tagline_header = ' - '. $id_website['nama_website'] . $tagline_header;
	}
	?>
	<title><?php echo $title; ?><?php echo $tagline_header;?> </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>"> 
	<meta name="robots" content="all,index,follow">
	<meta http-equiv="Content-Language" content="id-ID">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">
	<link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
	<?php if ($this->uri->segment(1)=='berita' AND $this->uri->segment(2)=='detail'){ 
		$rows = $this->model_utama->view_where('berita',array('judul_seo' => $this->uri->segment(3)))->row_array();
		echo '<meta property="og:title" content="'.$title.'" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="'.base_url().''.$this->uri->segment(3).'" />
		<meta property="og:image" content="'.base_url().'asset/foto_berita/'.$rows['gambar'].'" />
		<meta property="og:description" content="'.$description.'"/>';
	} ?>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />
	<!-- Stylesheets -->
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/css/style.css" rel="stylesheet">
	<!-- Responsive File -->
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/css/responsive.css" rel="stylesheet">
	<!-- Color File -->
	<link href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/css/color-4.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/chat/floating-wpp.css">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&amp;family=Fira+Sans:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	

	<?php include "partials/head.php"; ?>
</head>
<body>
	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="loader-wrap">
			<div class="preloader"><div class="preloader-close">Preloader Close</div></div>
			<div class="layer layer-one"><span class="overlay"></span></div>
			<div class="layer layer-two"><span class="overlay"></span></div>        
			<div class="layer layer-three"><span class="overlay"></span></div>        
		</div>
		<?php  include "partials/header.php"; 	 ?>
		<?php 

		switch ($this->uri->segment(1)) {
			case 'teams':
			case 'portfolio':
			$main_file = "front-width.php";
			break;
			case 'halaman':
			$main_file = "front-halaman.php";
			break;
			case 'layanan':
			$main_file = "front-layanan.php";
			break;
			default:

			$main_file = "front-main.php"; 
			if(  $this->uri->segment(1)=='main' OR $this->uri->segment(1)=='') {
				$main_file = "front-page.php";
			} 


			break;
		}

		include $main_file;
		?>
		
		<?php 
		include "partials/footer.php";	
		?> 
		<?php

		$get_btn_to_top = $this->model_utama->view_where('tbl_novapage',array('key' =>  'btn_back_to_top')); 
		$btn_to_top = $get_btn_to_top->row_array(); 

		if( isset($btn_to_top['value'])) {
			if( json_decode($btn_to_top['value'],true) == '1' ){
				?>
				<a id="back-to-top" href="#" style="display:none">
					<i class="fa fa-arrow-up" aria-hidden="true"></i>
				</a> 	
				<?php 
			} 
		}
		?>
	</div> 	

	

	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/jquery.fancybox.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/<?php echo template(); ?>/new/assets/js/isotope.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/owl.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/appear.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/wow.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/lazyload.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/scrollbar.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/TweenMax.min.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/swiper.min.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/jquery.lettering.min.js"></script>
	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/jquery.circleType.js"></script>

	<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/js/script.js"></script>

	<!-- chat css and js -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/chat/floating-wpp.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/chat/floating-wpp.js"></script>

	<?php include "partials/foot.php"; ?>

	<div id="myButton" style="z-index: 99 !important; margin-bottom: 4em;"></div>
	<script type="text/javascript">

		$(function () {
			$('#myButton').floatingWhatsApp({
				phone: '6282115210851',
				popupMessage: 'Hello, Apakah Ada Yang Bisa Kami Bantu?',
				message: "Halo Kak, Saya mau bertanya tentang jasa di samsolusi.com?",
				showPopup: true,
				showOnIE: false,
				headerTitle: 'Whatsapp Message!',
				position:'right',
				headerColor: 'green',
				backgroundColor: 'green',
				buttonImage: '<img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/chat/whatsapp.svg" />'
			});
		});
	</script>

	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>