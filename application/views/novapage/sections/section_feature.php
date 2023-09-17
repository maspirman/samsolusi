<?php
$this->load->helper('text'); 

$get_section_feature    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_feature'))->row_array();
if(isset($get_section_feature['value'])){
	if(!empty($get_section_feature['value'])){
		$section_feature = json_decode($get_section_feature['value'],true);
	}
} 
?>

<?php 
$skema_warna = 'default';
switch ($section_feature['skema_warna']) {
    case 'image':
    $skema_warna = 'bg-image';
    ?>
    style="background:url('<?php echo base_url('asset/img_novapage/images/'.$section_feature['background']);?>');
    background-attachment: fixed; 
    background-size:cover;
    background-repeat:no-repeat"
    <?php
    break;
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
<section class="feature-section-six" id="<?php echo $item ;?>">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="row">
                <?php if(!empty($section_feature['item'])) { ?>
                    <?php foreach($section_feature['item'] as $item) { ?>
                        <?php 
                        $url_link = '#';
                        if( $item['link_halaman'] !=='') {
                            $url_link = base_url('halaman/detail/'.$item['link_halaman']);
                        }
                        ?>
                        <div class="col-lg-4 feature-block-six">
                            <div class="inner-box">
                                <div class="icon"><i class="<?php echo $item['icon'];?>"></i></div>
                                <h4><?php echo $item['judul'];?></h4>
                                <div class="text"><?php echo $item['deskripsi'];?></div>

                            </div>
                        </div>
                    <?php }; ?>
                <?php } ?>

            </div> 
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 pr-5">
                <div class="sec-title style-two">

                    <h4><span class="flaticon-endless"></span> Samsolusi.com</h4>
                    <?php if( !empty($section_feature['judul'])) { ?>
                        <h2><?php echo strtoupper($section_feature['judul']);?></h2>
                    <?php } ?>
                    
                </div>

                <div class="content-block">
                    <div class="image"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/resource/award.png" alt=""></div>
                    <div class="text">
                        <?php if( !empty($section_feature['deskripsi'])) { ?>
                            <p style="text-align: justify;"> <?php echo $section_feature['deskripsi'];?></p>
                        <?php } ?>  
                    </div>
                    <!-- <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">

                    <?php 
                    $i=0;
                    foreach (array_slice($section_feature['item'], 0, 2) as $item) { 

                        ?>
                        <?php 
                        $url_link = '#';
                        if( $item['link_halaman'] !=='') {
                            $url_link = base_url('halaman/detail/'.$item['link_halaman']);
                        }
                        ?>
                        <div class="feature-block-three col-md-5" style="display: grid;">
                            <div class="inner-box">
                                <div class="image"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/resource/featured-image-1.jpg" alt=""></div>
                                <div class="lower-content">
                                    <div class="icon"><span class="flaticon-support"></span></div>
                                    <h4><?php echo $item['judul'];?></h4>
                                    <a href="<?php echo $url_link;?>" class="read-more-link">Read More</a>
                                </div>
                                <div class="overlay">
                                    <div class="top-content" style="background-image: url(<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/resource/image-50.jpg);">
                                        <div class="icon"><span class="flaticon-support"></span></div>
                                        <h4><?php echo $item['judul'];?></h4>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="text"><?php echo $item['deskripsi'];?> </div>
                                        <a href="#contact_section" class="read-more-link">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>

                </div>                        
            </div>
        </div>
    </div>
</section>


