<?php
$get_section_testimonial    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_testimonial'))->row_array();
if(isset($get_section_testimonial['value'])){
	if(!empty($get_section_testimonial['value'])){
		$section_testimonial = json_decode($get_section_testimonial['value'],true);
	}
}

if(!empty($section_testimonial['jumlah'])) {
    // $section_testimonial['jumlah'] =1;
    $get_testimoni = $this->db->query("
        SELECT 
        t.id_testimoni as id,
        t.nama as nama,
        t.profesi as profesi,
        t.testimoni as testimoni,
        t.photo as photo
        FROM 
        tbl_novapage_testimoni t
        ORDER BY nama ASC LIMIT 0,".$section_testimonial['jumlah']
    )->result_array(); 
} 
?>




<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="auto-container">
       <div class="sec-title text-center">
        <h2> <?php echo strtoupper($section_testimonial['judul']);?></h2>
        <div class="text-decoration">
            <span class="left"></span>
            <span class="right"></span>
        </div>
    </div>

    <div class="testimonial-outer">
        <div class="testimonial-carousel">
            <div class="row m-0">
                <div class="col-xl-6 p-0">
                    <!-- Swiper -->
                    <div class="swiper-container testimonial-thumbs">
                        <div class="swiper-wrapper">
                           <?php foreach($get_testimoni as $i => $testi) {?>
                            <div class="swiper-slide">
                                <div class="author-thumb"><img src="<?php echo base_url();?>asset/img_novapage/testimoni/<?php echo $testi['photo'];?>" alt=""></div>
                                <!-- <div class="logo"><img src="assets/images/resource/client-5.png" alt=""></div> -->
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-0">
                <div class="swiper-container testimonial-content wow fadeInUp" data-wow-delay="300ms" style="background-image: url(assets/images/background/bg-2.jpg);">
                    <div class="swiper-wrapper">
                      <?php foreach($get_testimoni as $i => $testi) {?>
                        <div class="swiper-slide">
                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon"><span class="flaticon-blog"></span></div>
                                    <div class="text"><?php echo $testi['testimoni'];?></div>
                                    <div class="rating">
                                        <span class="flaticon-star"></span>
                                        <span class="flaticon-star"></span>
                                        <span class="flaticon-star"></span>
                                        <span class="flaticon-star"></span>
                                        <span class="flaticon-star"></span>
                                    </div>
                                    <div class="author-title"><?php echo $testi['nama'];?>, <span class="designation"><?php echo $testi['profesi'];?>.</span></div>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>
                </div>
                <div class="swiper-nav-button">
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>
                    <div class="swiper-button-prev"><i class="flaticon-right-arrow"></i></div>
                </div>                    
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

