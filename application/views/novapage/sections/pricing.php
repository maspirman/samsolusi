<!-- Pricing Section -->
<section class="pricing-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2> <?php echo strtoupper($section_services['judul']);?></h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>

        <div class="pricing-content">
            <!-- Tab panes -->
            <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                <div class="fadeInUp animated active" id="price-tab-one" role="tabpanel" aria-labelledby="price-tab-one">
                    <h3>Dapatkan Layanan Terbaik Kami</h3>
                    <div class="wrapper-box">
                        <div class="row m-0">

                            <?php if(!empty($section_services['item'])) { ?>
                                <?php foreach($section_services['item'] as $item) { ?>
                                    <div class="col-lg-4 pricing-block active animated fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                        <div class="inner-box">
                                            <div class="top-content">

                                                <center><h3>Layanan Kami</h3></center>

                                            </div>
                                            <div class="lower-content">
                                                <h5><?php echo $item['judul'];?></h5>
                                                <h4><?php echo $item['deskripsi'];?></h4>
                                                <ul>

                                                   <?php
                                                   $sub = explode(",", $item['sub_service']);
                                                   if (count($sub)!=0){
                                                       foreach ($sub as $sub_ser){
                                                           ?>
                                                           <li style="font-size: 12px;"><i class="flaticon-tick"></i><?php echo $sub_ser;?></li>
                                                       <?php }
                                                   }; ?>

                                               </ul>
                                               <div class="link-btn"><a href="#" class="theme-btn btn-style-two"><span class="btn-title">Hubungi Kami</span></a></div>
                                               <!-- <div class="hint"><span>*</span> No credit card required</div> -->
                                           </div>
                                       </div>
                                   </div>
                               <?php }; ?>
                           <?php } ?>



                       </div>
                   </div>
               </div>

           </div>
       </div>

   </div>
</section>