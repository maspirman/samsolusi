<?php
$id_website = $this->model_utama->view('identitas')->row_array();
$get_section_contact    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_contact'))->row_array();
if(isset($get_section_contact['value'])){
	if(!empty($get_section_contact['value'])){
		$section_contact = json_decode($get_section_contact['value'],true);
	}
}

/**
 * untuk generate captcha
 */
$this->load->helper('captcha');
$vals = array(
    'img_path'	 => './captcha/',
    'img_url'	 => base_url().'captcha/',
    'font_size'     => 17,
    'img_width'	 => '150',
    'img_height' => 29,
    'border' => 0, 
    'word_length'   => 5,
    'expiration' => 7200
);

$security_code = create_captcha($vals);    
$this->session->set_userdata('captcha_contact', $security_code['word']); 
?>


<div id="<?php echo $item ;?>" class="section section-contact">
    <?php 
    $skema_warna = 'default';
    switch ($section_contact['skema_warna']) {
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
    <?php
// set whatsapp
    $get_whatsapp = $this->model_utama->view_where('tbl_novapage',array('key' => 'whatsapp_chat'))->row_array();
    if(isset($get_whatsapp['value'])){
        if(!empty($get_whatsapp['value'])){
            $whatsapp = json_decode($get_whatsapp['value'],true);
        }
    };?>




    <!-- Contact Details Section -->
    <section class="contact-details-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <?php if( !empty($section_contact['judul'])) { ?>
                    <h2 class="card-header section-title">
                        <?php echo strtoupper($section_contact['judul']);?>
                    </h2>
                <?php } ?>
                <div class="text"><?php echo $section_contact['deskripsi'];?></div>
                <div class="text-decoration">
                    <span class="left"></span>
                    <span class="right"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 contact-info-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-46.png" alt=""></div>
                            <h5>Alamat Kami</h5>
                            <h4>Kantor</h4>
                        </div>                            
                        <ul>
                            <li><?php echo $section_contact['text'];?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 contact-info-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-47.png" alt=""></div>
                            <h5>24/7 Layanan</h5>
                            <h4>Hubungi Kami</h4>
                        </div>                            
                        <ul style="text-align:center;">
                           <li>Whatsapp / Telp</li>
                           <li><a href="https://web.whatsapp.com/send?phone=6281287709708&text=Halo%20Kak,%20Saya%20mau%20bertanya%20tentang%20jasa%20di%20samsolusi.com?">+62 821-1521-0851</a></li>
                           <li><a href="https://web.whatsapp.com/send?phone=6282115210851&text=Halo%20Kak,%20Saya%20mau%20bertanya%20tentang%20jasa%20di%20samsolusi.com?">+62 812-8770-9708</a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-lg-3 contact-info-block">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-48.png" alt=""></div>
                        <h5>Kirim Email</h5>
                        <h4>Email Kami @</h4>
                    </div>                            
                    <ul style="text-align:center;">
                        <li><a href="mailto:admin@samsolusi.com">admin@samsolusi.com</a></li>
                        <li><a href="mailto:marketing@samsolusi.com">marketing@samsolusi.com</a></li>
                        <li><a href="mailto:technical@samsolusi.com">technical@samsolusi.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 contact-info-block">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><img src="<?php echo base_url(); ?>template/<?php echo template(); ?>/new/assets/images/icons/icon-49.png" alt=""></div>
                        <h5>Buka-Tutup</h5>
                        <h4>Kunjungan</h4>
                    </div>                            
                    <ul style="text-align:center;">
                        <li>Senin - Jum'at <br> 09.00 - 16.00</li>
                    </ul>
                </div>
            </div>
        </div>            
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section" id="contact_section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <div class="live-contact">
                    <div class="image"><img src="<?php echo base_url(); ?>template/novapage/new/assets/images/resource/image-40.jpg" alt=""></div>
                    <div class="content">
                        <div class="icon"><span class="flaticon-support-1"></span></div>
                        <h4>Diskusi Live</h4>
                        <div class="text">Mari diskusikan masalah anda, kami akan membantu anda mengatasinya.</div>
                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Whatsapp Chat</span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="sec-title">
                    <h2><?php echo $section_contact['deskripsi'];?></h2>
                    <div class="text-decoration">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                </div>
                <?php  
                $alert = $this->session->flashdata('contact_message');   
                if( !empty($alert) && isset($alert['success'])) {?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?php echo $alert['success'];?>
                    </div>
                    <?php
                }
                if( !empty($alert) && isset($alert['warning'])) {?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?php echo $alert['warning'];?>
                    </div>
                    <?php
                }
                ?>

                <?php echo form_open(base_url('contact-us'),array('class' => 'contact-form'));?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Nama *</label>
                        <input type="text" required  class="form-control" name="nama"  placeholder="Nama Anda">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Email *</label>
                        <input type="text" required class="form-control" name="email" placeholder="emailanda@mail.com">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Nomor Whatsapp *</label>
                        <input type="text" name="hp" class="form-control" placeholder="085321XXXXX" required="">
                    </div>


                    <div class="col-md-12 form-group">
                        <label>Pesan *</label>
                        <textarea name="pesan" required rows="5" class="form-control"></textarea>
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Kode Keamanan *</label> <br>
                        <?php echo $security_code['image']; ?>
                    </div>

                    <div class="col-md-8 form-group">
                        <br>
                        <input name='security_code' maxlength=6 type="text" class="required form-control" placeholder="Masukkkan kode keamanan">
                    </div>


                    <div class="col-md-12 form-group">
                        <div class="row m-0 justify-content-between">
                            <div class="note mb-30">
                                <p>*Kami tidak membagikan informasi Anda dengan pihak ketiga mana pun..</p>
                            </div>
                            <button name="kirim" class="theme-btn btn-style-one mb-30" type="submit" name="submit-form"><span class="btn-title">Kirim Pesan</span></button>
                        </div>                                
                    </div>



                </div>
                <?php echo form_close();?> 

            </div>
        </div>
    </div>
</section>


<!-- Map Section -->
<section class="map-section">
    <!--Map Outer-->
    <div class="map-outer center-column">
        <div class="google-map text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1751426117103!2d106.83872951476926!3d-6.240633695482708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c09753d66f%3A0xc80a23bc8ba0219d!2sBidakara%20Tower%202!5e0!3m2!1sen!2sid!4v1671792306600!5m2!1sen!2sid" width="1400" height="450" style="border:0; text-align: center;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="auto-container">
        <div class="contact-info">
            <div class="theme_carousel owl-carousel owl-theme" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 600000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-discussion"></span></div>
                        <h4>Indonesia</h4>
                        <h5>HEAD OFFICE</h5>
                    </div>
                    <h3>DKI Jakarta</h3>
                    <ul>
                        <li>Menara Bidakara 2 Annex Building (Bina Sentra) Lantai 4 Unit 02, Jl. Gatot Subroto Kav. 71-73, Kota Adm. Jakarta Selatan, DKI Jakarta</li>
                        <li>Mon - Sat: 09.00 to 06.00 Sun:Closed</li>
                        <li><a href="tel:+6282115210851">+62 8211 5210 851</a></li>
                        <li><a href="mailto:support@samsolusi.com">support@samsolusi.com</a></li>
                    </ul>
                    <a href="https://www.google.com/maps/place/Bidakara+Tower+2/@-6.2406337,106.8387295,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f3c09753d66f:0xc80a23bc8ba0219d!8m2!3d-6.2406337!4d106.8409182" class="link-btn">Get Direction</a>
                </div>

            </div>                
        </div>
    </div>
</section>


</div> 

<?php if(isset($section_contact['embeded_code']) && !empty($section_contact['embeded_code'])) { ?>
    <div class="google-map-source">
        <?php echo $section_contact['embeded_code'];?>
    </div>
<?php }?>

</div> 