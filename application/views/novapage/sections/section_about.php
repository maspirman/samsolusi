<?php
$this->load->helper('text');
$get_section_about    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_about'))->row_array();
if(isset($get_section_about['value'])){
	if(!empty($get_section_about['value'])){
		$section_about = json_decode($get_section_about['value'],true);
	}
}

?> 

<div id="<?php echo $item ;?>" class="section section-about">
    <?php 
    $skema_warna = 'default';
    switch ($section_about['skema_warna']) {
        case 'dark':
        $skema_warna = 'dark';
        break;
        case 'light':
        $skema_warna = 'light';
        break;            
        default:             
        $skema_warna = 'default';
        break;
    }
    ?> 



    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="image-one wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><div class="image-box"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-12.png" alt=""></div></div>
                        <div class="image-two wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms"><div class=""><img class="lazy-image" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/resource/image-spacer-for-validation.png" data-src="asset/img_novapage/images/<?php echo $section_about['gambar'];?>" alt=""></div></div>
                        <div class="logo"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/logo-sam.png" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title">
                       <?php if( !empty($section_about['judul'])) { ?>
                        <h2>
                            <?php echo strtoupper($section_about['judul']);?>
                        </h2>
                    <?php } ?>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                    <div class="text"><?php echo $section_about['deskripsi'];?></div>
                </div>
                <div class="author-box">
                   <div class="link-btn"><a href="<?php echo $url_about;?>" class="theme-btn btn-style-one">
                    <span class="btn-title">
                     <?php echo (empty(trim($section_about['link_label'])) ? 'Selengkapnya' : $section_about['link_label']);?>
                 </span>
             </a></div>
         </div>
     </div>
 </div>
</div>
</section>
