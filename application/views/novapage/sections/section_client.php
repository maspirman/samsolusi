<?php
$get_section_client = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_client'))->row_array();
if(isset($get_section_client['value'])){
	if(!empty($get_section_client['value'])){
		$section_client = json_decode($get_section_client['value'],true);
	}
} 

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
<style>
    .award-section-three .pattern {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background-size: cover;
    }
</style>
<!-- Award Section Three -->
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
                        <h4><?php echo $item['nama'];?></h4>                            
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>                
</div>
</section>
