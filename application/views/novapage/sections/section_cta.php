<?php
$get_section_cta    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_cta'))->row_array();
if(isset($get_section_cta['value'])){
	if(!empty($get_section_cta['value'])){
		$section_cta = json_decode($get_section_cta['value'],true);
	}
}

?>

<div id="<?php echo $item ;?>" class="section section-cta "  
    <?php 
    $skema_warna = 'default';
    switch ($section_cta['skema_warna']) {
        case 'image':
        $skema_warna = 'bg-image';
        ?>
        style="background:url('<?php echo base_url('asset/img_novapage/images/'.$section_cta['background']);?>');
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
        >


        <!-- CTA Section Two -->
        <section class="cta-section-two style-two" style="padding:0; background-image: url('<?php echo base_url('asset/img_novapage/images/'.$section_cta['background']);?>');">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img style="margin-bottom: -3rem;" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/cta.png">
                    </div>
                    <div class="col-lg-8">
                        <div class="wrapper-box" style="color:#FFF;">
                            <h3 class="mb-4"><?php echo $section_cta['text'];?></h3>
                            <a href="<?php echo $section_cta['url'];?>" class="theme-btn btn-style-two"><span class="btn-title"><?php echo $section_cta['label'];?></span></a>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>


    </div>