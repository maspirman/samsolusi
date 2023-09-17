<?php
$this->load->helper('text');
$get_section_berita    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_berita'))->row_array();
if(isset($get_section_berita['value'])){
	if(!empty($get_section_berita['value'])){
		$section_berita = json_decode($get_section_berita['value'],true);
	}
} 
// get berita
$where = '';
if(!empty($section_berita['kategori'])) {
    $where = ' AND b.id_kategori = "'.$section_berita['kategori'].'"';
}

if(!empty($section_berita['jumlah'])) {
    $get_berita = $this->db->query("
        SELECT 
        b.id_berita as id,
        b.judul as judul,                
        b.judul_seo as judul_seo,       
        b.isi_berita as isi_berita, 
        b.gambar as gambar,                    
        b.tanggal as tanggal,
        k.nama_kategori as nama_kategori,
        k.kategori_seo as kategori_seo,
        u.nama_lengkap as nama_lengkap
        FROM 
        berita b 
        JOIN users u on u.username = b.username 
        JOIN kategori k on k.id_kategori = b.id_kategori
        WHERE
        b.status = 'Y' ".
        $where .
        "ORDER BY tanggal DESC LIMIT 0,".$section_berita['jumlah'])->result_array(); 
}
?>




<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="center-column">
            <div class="outer-box">
                <div class="outer-container">
                    <div class="row m-0 justify-content-between align-items-end">
                        <div class="sec-title" style="margin-left: 10px;">
                            <?php if( !empty($section_berita['judul'])) { ?>
                                <h2>
                                    <?php echo strtoupper($section_berita['judul']);?>
                                </h2>
                            <?php }; ?>
                            <div class="text-decoration">
                                <span class="left"></span>
                                <span class="right"></span>
                            </div>
                        </div>

                        <div class="swiper-nav-button">
                            <div class="link-btn text-center" style="margin-right: 10px;"><a href="<?php echo base_url();?>berita" class="theme-btn btn-style-one"><span class="btn-title">Semua Berita</span></a></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev"><i class="flaticon-right-arrow"></i></div>
                            <div class="swiper-button-next"><i class="flaticon-right-arrow"></i></div>
                        </div>
                    </div>
                </div>
                <div class="news-carousel-wrapper">
                    <div class="swiper-container news-carousel">
                        <div class="swiper-wrapper">
                         <?php foreach($get_berita as $berita) {?>
                             <?php
                             $img_src= base_url().'asset/foto_berita/small_no-image.jpg';
                             if ($berita['gambar'] !==''){
                                $img_src =base_url().'asset/foto_berita/'.$berita['gambar'];
                            } 
                            ?> 
                            <div class="swiper-slide">
                                <!-- News Block -->
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img class="lazy-image mb-30" src="<?php echo $img_src;?>" data-src="<?php echo $img_src;?>" alt="" >
                                        </div>
                                        <div class="row m-0 justify-content-between">
                                         <div class="date"><strong><?php echo substr(tgl_indo($berita['tanggal']),0,2); ?></strong><?php echo substr(tgl_indo($berita['tanggal']),3,3); ?> <br><?php echo substr(tgl_indo($berita['tanggal']),-4); ?></div>
                                         <div class="author"><div class="title"><?php echo $berita['nama_lengkap']; ?> </div><img src="assets/images/resource/author-thumb-1.jpg" alt=""></div>
                                     </div>
                                     <div class="category"><a class="text-white" href="<?php echo base_url()."kategori/detail/".$berita['kategori_seo']; ?>"><?php echo $berita['nama_kategori']; ?></a></div>
                                     <h4><a href="<?php echo base_url($berita['judul_seo']);?>"><?php echo $berita['judul'];?></a></h4>
                                     <div class="read-more-btn"><a href="<?php echo base_url($berita['judul_seo']);?>">Lanjutkan Membaca<i>>></i></a></div>
                                 </div>
                             </div>
                         </div>
                     <?php }; ?>
                 </div>
                 <div class="swiper-scrollbar"></div>
             </div>
         </div>                                          
     </div>                    
 </div>
</div>
</section>

