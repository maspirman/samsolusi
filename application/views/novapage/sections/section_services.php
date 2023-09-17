<?php
$this->load->helper('text'); 
$get_section_services    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_services'))->row_array();
if(isset($get_section_services['value'])){
	if(!empty($get_section_services['value'])){
		$section_services = json_decode($get_section_services['value'],true);
	}
} 
?>


<div id="<?php echo $item ;?>" class="section section-services"
    <?php 
    $skema_warna = 'default';
    switch ($section_services['skema_warna']) {
        case 'image':
        $skema_warna = 'bg-image';
        ?>
        style="background:url('<?php echo base_url('asset/img_novapage/images/'.$section_services['background']);?>');
            background-attachment: scroll; 
            background-size:cover;
            background-position:center;
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
    ?> > 



    <section class="services-section" style="background-image: url(<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/background/bg-4.jpg);">
       <div class="pattern" style="background-image: url(<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/shape/pattern-3.png);"></div>
       <div class="auto-container">
        <div class="row m-0 align-items-center justify-content-between">
            <div class="sec-title style-two">
                <h4><span class="flaticon-endless"></span>Layanan Terbaik Kami</h4>
                <h2> <?php echo $section_services['judul'];?></h2>
                <p> <?php echo $section_services['deskripsi'];?></p>
            </div>
            <div class="link-btn mb-50"><a href="#" class="theme-btn btn-style-five"><span class="btn-title">Semua Layanan</span></a></div>
        </div>
        <div class="row">
            <?php if(!empty($section_services['item'])) { ?>
                <?php foreach($section_services['item'] as $item) { ?>
                  <?php 
                  $url_link = '#';
                  if( $item['link_halaman'] !=='') {
                    $url_link = base_url('layanan/d/'.$item['link_halaman']);
                }
                ?>
                <div class="col-lg-3 col-md-6 service-block-one" style="display: grid;">
                    <div class="inner-box">
                        <div class="icon"><div class="icon-inner"><i class="<?php echo $item['icon'];?>"></i></div></div>
                        <h4><?php echo $item['judul'];?></h4>
                        <div class="text">
                           <ul>

                             <?php
                             $sub = explode(",", $item['sub_service']);
                             $i=0;
                             if (count($sub)!=0){
                                 foreach ($sub as $sub_ser){
                                     ?>
                                     <li style="font-size: 12px;"><i class="flaticon-tick"></i><?php echo $sub_ser;?></li>
                                     <?php if (++$i == 5) break;?>
                                 <?php }
                             }; ?>

                         </ul>
                     </div>
                     <a href="<?php echo $url_link;?>" class="read-more-link"><i class="flaticon-right-arrow"></i>Read More</a>
                 </div>
             </div>
         <?php } ?>
     <?php }; ?>
 </div>
</div>
</section>




</div> 