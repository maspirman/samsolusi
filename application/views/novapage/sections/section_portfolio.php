<?php
$get_section_portfolio    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_portfolio'))->row_array();
if(isset($get_section_portfolio['value'])){
	if(!empty($get_section_portfolio['value'])){
		$section_portfolio = json_decode($get_section_portfolio['value'],true);
	}
} 

// get portfolio 
if( isset($section_portfolio['jumlah'])) {
    $get_portfolio = $this->db->query("
        SELECT 
        portfolio.id_portfolio as id,
        portfolio.nama_project as nama,
        portfolio.nama_client as client,
        portfolio.deskripsi as deskripsi,
        portfolio.url as url,
        portfolio.image as image
        FROM 
        tbl_novapage_portfolio portfolio
        ORDER BY portfolio.nama_project ASC 
        LIMIT 3")->result_array(); 
}
?>

<section class="portfolio-section-two">
    <div class="auto-container">
     <div class="sec-title text-center">
       <?php if( !empty($section_portfolio['judul'])) { ?>
        <h2>
            <?php echo strtoupper($section_portfolio['judul']);?>
        </h2>
    <?php } ?>
    <div class="text-decoration">
        <span class="left"></span>
        <span class="right"></span>
    </div>
</div>
<div class="row">
    <?php foreach($get_portfolio as $item) {?>
       <?php 
       if ($item['image'] !==''){
        $img_src =base_url().'asset/img_novapage/portfolio/'.$item['image'];
    } 
    ?>
    <div class="col-lg-4 col-md-6 project-block-four">
        <div class="inner-box">
            <div class="image"><img src="<?php echo $img_src;?>" alt=""></div>
            <div class="overlay">
                <h5><?php echo $item['nama'];?></h5>
                <h4>Business Leadership</h4>
            </div>
        </div>
    </div>
<?php }; ?>


</div>
<div class="link-btn text-center mb-30"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Load More</span></a></div>
</div>
</section>

