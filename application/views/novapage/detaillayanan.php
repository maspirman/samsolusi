<?php 
$base_path = FCPATH;
?>
<!-- Service Details -->
<section class="services-details">
	<div class="auto-container">
		<div class="row">


			<div class="col-lg-8 content-side">
				<!--Theme Carousel-->
				<div>
					<div class="slide">
						<div class="image-slide">
							<?php $img_src = base_url()."asset/foto_statis/". $rows['gambar']; ?>
							<img style="background-size: cover;" src="<?php echo $img_src;?>" alt="<?php echo  $rows['gambar'];?>" alt="">
							<div class="content">
								<h4><?php echo $rows['judul']; ?></h4>
							</div>
						</div>
					</div>
				</div>
				<?php 
				$url =  $_SERVER["REQUEST_URI"];
				$link= base_url().$url; 
				$urlcek=base_url().'layanan/d/'.$rows[judul_seo];
				?>
				<?php
				$this->load->helper('text'); 
				$get_section_services    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_services'))->row_array();
				if(isset($get_section_services['value'])){
					if(!empty($get_section_services['value'])){
						$section_services = json_decode($get_section_services['value'],true);
					}
				} 
				?>

				

				<?php $item = $section_services['item'][0]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>

				<?php $item = $section_services['item'][1]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][2]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][3]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][4]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][5]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][6]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][7]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][8]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][9]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][10]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][11]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>


				<?php $item = $section_services['item'][12]; ?>
				<?php  $jud= substr($rows['judul'], 5); ?>
				<?php if(($item['judul'] == $jud)) { ?>
					<?php 
					$url_link = '#';
					if( $item['link_halaman'] !=='') {
						$url_link = base_url('layanan/d/'.$item['link_halaman']);
					}
					?>
					<div class="row mb-5">
						<div class="col-md-5">
							<h2><?php echo $jud; ?></h2>
							<div class="icon"><span class="flaticon-chart"></span></div>
						</div>
						<div class="col-md-7">
							<div class="text"><p><?php echo $rows['isi_halaman']; ?> </p></div>
							<ul class="list">
								<?php
								$sub = explode(",", $item['sub_service']);
								$i=0;
								if (count($sub)!=0){
									foreach ($sub as $sub_ser){
										?>
										<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
									<?php }
								}; ?>


							</ul>
						</div>
					</div>

				<?php } ?>





				<?php  $jud= $rows['judul']; ?>
				<?php if($jud == 'Semua Layanan') { ?>
					<?php foreach($section_services['item'] as $item) { ?>
						<?php 
						$url_link = '#';
						if( $item['link_halaman'] !=='') {
							$url_link = base_url('layanan/d/'.$item['link_halaman']);
						}
						?>
						<div class="row mb-5">
							<div class="col-md-5">
								<h2><?php echo $item['judul']; ?></h2>
								<div class="icon"><span class="flaticon-chart"></span></div>
							</div>
							<div class="col-md-7">
								<div class="text"><p><?php echo $item['deskripsi']; ?> </p></div>
								<ul class="list">
									<?php
									$sub = explode(",", $item['sub_service']);
									$i=0;
									if (count($sub)!=0){
										foreach ($sub as $sub_ser){
											?>
											<li><i class="fa fa-check"></i><?php echo $sub_ser;?></li>
										<?php }
									}; ?>


								</ul>
							</div>
						</div>
					<?php } ?>
				<?php } ?>


				<?php
				$this->load->helper('text'); 

				$get_section_feature    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_feature'))->row_array();
				if(isset($get_section_feature['value'])){
					if(!empty($get_section_feature['value'])){
						$section_feature = json_decode($get_section_feature['value'],true);
					}
				} 
				?>
				<?php if( !empty($section_feature['judul'])) { ?>
					<h2><?php echo strtoupper($section_feature['judul']);?></h2>
					<p><?php echo $section_feature['deskripsi'];?></p>
				<?php } ?>
				<!--Theme Carousel-->
				<div class="theme_carousel owl-theme owl-carousel mb-4" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
					<?php  foreach ($section_feature['item'] as $item) {  ?>
						<div class="slide">
							<div class="service-block-seven">
								<div class="inner-box">
									<div class="icon"><i class="<?php echo $item['icon'];?>"> </i></div>
									<h4><?php echo $item['judul'];?></h4>
									<div class="text"><?php echo $item['deskripsi'];?></div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php
				$get_section_client = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_client'))->row_array();
				if(isset($get_section_client['value'])){
					if(!empty($get_section_client['value'])){
						$section_client = json_decode($get_section_client['value'],true);
					}
				} ?>
				<?php 
				// get client logo 
				$get_client = array();
				if(isset($section_client['jumlah'])) {
					$get_client = $this->db->query("
						SELECT 
						client.id_client as id,
						client.nama as nama,
						client.logo as logo
						FROM 
						tbl_novapage_client client 
						ORDER BY client.nama ASC 
						LIMIT 0,".$section_client['jumlah']
					)->result_array(); 
				}
				?>

				<section class="award-section-three" style="background-color:#ebf0f9;">
					<div class="pattern" style="background-image: url(<?php echo base_url(); ?>/template/novapage/new/assets/images/shape/pattern-13.png);"></div>
					<div class="auto-container">
						<div class="sec-title text-center">
							<?php if( !empty($section_client['judul'])) { ?>
								<h2>
									<?php echo strtoupper($section_client['judul']);?>
								</h2>
								<?php } ?>            <div class="text-decoration">
									<span class="left"></span>
									<span class="right"></span>
								</div>
							</div>
							<div class="row">
								<div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "4" }}}'>
									<?php foreach($get_client as $item) {?>
										<?php 
										if ($item['logo'] !==''){
											$img_src =base_url().'asset/img_novapage/client/'.$item['logo'];
										} 
										?>
										<div class="award-block-three">
											<div class="inner-box">
												<div class="image"><img src="<?php echo $img_src;?>" alt=""></div>
												<p><?php echo $item['nama'];?></p>                            
											</div>
										</div>
									<?php }; ?>
								</div>
							</div>                
						</div>
					</section>

				</div>
				<aside class="col-lg-4">
					<div class="service-sidebar">
						<div class="widget widget_categories_two">
							<div class="widget-content">
								<ul class="categories-list clearfix">
									<?php foreach($section_services['item'] as $item) { ?>
										<?php 
										$url_link = '#';
										if( $item['link_halaman'] !=='') {
											$url_link = base_url('layanan/d/'.$item['link_halaman']);
										}
										?>
										<li><a href="<?php echo $url_link; ?>"><?php echo $item['judul'];?> <span></span></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="widget widget_brochur" style="background-image: url(<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/background/bg-27.jpg);">
							<div class="widget-content">
								<div class="icon"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-60.png" alt=""></div>
								<h5>Case Studies</h5>
								<h4>Audit & Assuarance</h4>
								<a href="#"><i class="flaticon-right"></i>Download (2.5 mb)</a>
							</div>
						</div>
						<div class="widget widget_contact" style="background-image: url(<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/resource/image-40.jpg);">
							<div class="widget-content">
								<img style="shadow:2px 2px 3px #000;" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-55.png" alt="">
								<h4 style="text-shadow:2px 2px 3px #000;">Butuh Bantuan?</h4>
								<div style="text-shadow:2px 2px 3px #000;" class="phone-number"><a href="tel:+1 80055544678">+1 800 555 44 678</a></div>
								<div style="text-shadow:2px 2px 3px #000;" class="email"><a href="mailto:supportteam@Samsolusi.com">supportteam@Samsolusi.com</a></div>
								<div class="link-btn"><a href="#" class="theme-btn btn-style-one">
									<span class="btn-title">Hubungi Kami</span>
								</a></div>
							</div>
						</div>
					</div>
				</aside>

			</div>
		</div>
	</section>

	<?php
	$iiklan = $this->model_utama->view_where_ordering_limit('iklantengah',array('posisi'=>'hal_statis'),'id_iklantengah','ASC',0,5);
	foreach ($iiklan->result_array() as $ia) {
		echo "<a href='$ia[url]' target='_blank'>";
		$string = $ia['gambar'];
		if ($ia['gambar'] != ''){
			if(preg_match("/swf\z/i", $string)) {
				echo "<embed style='margin-top:-10px' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' width='100%' height=90px quality='high' type='application/x-shockwave-flash'>";
			} else {
				echo "<img style='margin-top:-10px; margin-bottom:5px' width='100%' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' title='$ia[judul]' />";
			}
		}
		echo "</a>";
		if (trim($ia['source']) != ''){ echo "$ia[source]"; }
	}
?>