<?php 
$get_section_hero    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_hero'))->row_array();
if(isset($get_section_hero['value'])){
	if(!empty($get_section_hero['value'])){
		$section_hero = json_decode($get_section_hero['value'],true);
	}
} 
?>
<?php if( !empty($section_hero['item'])) {?>


    <!-- Banner Section -->
    <section class="banner-section style-one">
      <div class="banner-carousel theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
       <?php foreach($section_hero['item'] as $i =>  $item) {?>
         <!-- Slide Item -->
         <div class="slide-item">
            <div class="image-layer lazy-image" data-bg="url('<?php echo base_url('asset/img_novapage/images/'.$item['gambar']);?>')"></div>

            <div class="auto-container">
                <div class="content-box justify-content-end">
                    <div>
                        <h2 style="text-shadow:2px 2px 3px #000;"><?php echo $item['judul'];?></h2>
                        <h3 style="text-shadow:2px 2px 3px #000;"><?php echo strip_tags($item['deskripsi']);?></h3>
                        
                        <div class="btn-box">
                           <?php 
                           $url_link = '#';
                           if( $item['tipe_link'] =='halaman') {
                            $url_link = base_url('halaman/detail/'.$item['link_halaman']);
                        } else {
                            $url_link = $item['link_url'];
                        }
                        ?>
                        <a href="<?php echo $url_link;?>" class="theme-btn btn-style-one"><span class="btn-title"> <?php echo (empty(trim($item['link_label'])) ? 'Selengkapnya' : $item['link_label']);?></span></a>
                        <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Hubungi Kami</span></a>
                    </div>
                </div>
            </div>                      
        </div>
    </div>
<?php }?>
</section>
<?php }?> 
<!--End Banner Section -->

