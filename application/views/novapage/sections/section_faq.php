<?php 

$get_section_faq    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_faq'))->row_array();
if(isset($get_section_faq['value'])){
	if(!empty($get_section_faq['value'])){
		$section_faq = json_decode($get_section_faq['value'],true);
	}
}
$get_section_services    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_services'))->row_array();
if(isset($get_section_services['value'])){
    if(!empty($get_section_services['value'])){
        $section_services = json_decode($get_section_services['value'],true);
    }
} 

$get_section_services    = $this->model_utama->view_where('tbl_novapage',array('key' => 'whatsapp_chat'))->row_array();
if(isset($get_section_services['value'])){
    if(!empty($get_section_services['value'])){
        $section_services = json_decode($get_section_services['value'],true);
    }
} 

?>


<!-- Why Choose us -->
<section class="why-choose-us-section">
    <!-- <div class="pattern" style="background:url <?php echo base_url('asset/img_novapage/images/shape/pattern-3.png');?>;"></div> -->
    <div class="side-image"><img src="<?php echo base_url('asset/img_novapage/images/'.$section_faq['background']);?>" alt=""></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="sec-title light">
                    <?php if( !empty($section_faq['judul'])) { ?>
                        <h2 class="card-header section-title">
                            <?php echo strtoupper($section_faq['judul']);?>
                        </h2>
                    <?php } ?>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                </div>
                <ul class="features-list">
                   <?php foreach( $section_faq['item'] as $faq ): ?> 
                    <li class="single-feature-item">
                        <h5><?php   echo $faq['tanya'];  ?></h5>
                        <span class="text"><?php echo $faq['jawaban']; ?></span>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-lg-6">
            <div class="consult-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Samsolusi.com/sendemail.php" class="contact-form">
                    <h2><?php echo $section_faq['deskripsi'];?></h2>
                    <div class="row clearfix">
                        <div class="col-md-6 form-group">
                            <img src="">
                        </div>

                        <div class="col-md-6 form-group">
                            <img src="">
                        </div>

                        <div class="col-md-6 form-group">
                         <p>Marketing 1</p>
                     </div>

                     <div class="col-md-6 form-group">
                         <p>Marketing 2</p>
                     </div>

                     <div class="col-md-6 form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Kirim</span></button>
                    </div>
                    <div class="col-md-6 form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Kirim</span></button>
                    </div>


                </div>
            </form>
        </div>
    </div>                
</div>
</div>
</section>

<?php include 'section_process.php'; ?>
