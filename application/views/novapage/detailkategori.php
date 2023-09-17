<?php 
$base_path = FCPATH;
?>

<div class="col-lg-8 content-side">
	<?php if ($r == 0) {
		echo "Data Tidak Ditemukan"
	}else{ 
		
	foreach ($beritakategori->result_array() as $i => $r) {	
		$baca = $r['dibaca']+1;	
		$isi_berita =(strip_tags($r['isi_berita'])); 
		$isi = substr($isi_berita,0,220); 
		$isi = substr($isi_berita,0,strrpos($isi," ")); 
		$judul = $r['judul']; 
		$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
		$img_src = base_url()."asset/foto_berita/no-image.jpg";
		if ($r['gambar'] !== '' &&  file_exists( $base_path ."asset/foto_berita/".($r['gambar']) ) ){
			$img_src = base_url()."asset/foto_berita/". $r['gambar'];
		}
		$col = ($i == 0) ? '12' : '6';
		?>
		<div class="news-block-six">
			<div class="inner-box">
				<div class="image">
					<a href="<?php echo base_url().$r['judul_seo'];?>"><img class="lazy-image owl-lazy error" src="<?php echo $img_src; ?>" data-src="<?php echo $img_src; ?>" alt="" data-was-processed="true"></a>
				</div>
				<div class="lower-content"><br>
					<div class="category"><a class="theme-btn" href="<?php echo base_url()."kategori/detail/$r[kategori_seo]"; ?>"><?php echo "$r[nama_kategori]"; ?></a></div>
					<ul class="post-meta">
						<li><a href="#"><?php echo tgl_indo($r['tanggal']); ?> </a></li>
						<li>/</li>
						<li>By <?php echo "$r[nama_lengkap]"; ?></li>
						<li>/</li>
						<li><i class="far fa-comment-alt"></i>3 Comments</li>
					</ul>
					<h4><a href="<?php echo base_url().$r['judul_seo'];?>"><?php echo $judul;?></a></h4>
					<div class="text"><?php echo $isi;  ?> </div>
					<div class="bottom-content">
						<a href="<?php echo base_url().$r['judul_seo'];?>" class="theme-btn btn-style-one"><span class="btn-title">Selengkapnya</span></a>
						<div class="post-share-btn">
							<div class="social-links-wrapper">
								<div class="icon"><span class="flaticon-share-1"></span></div>
								<ul class="social-links">
									<script language="javascript">
										document.write("<li><a href='https://www.facebook.com/sharer/sharer.php?u=" + "<?php echo base_url().$r['judul_seo'];?>" + " ' target='_blank' class='custom-soc icon-text'><span class='fab fa-facebook' aria-hidden='true'></span></a></li> "+"<li><a href='http://twitter.com/intent/tweet?text=" + "<?php echo base_url().$r['judul_seo'];?>" + "' target='_blank' ><span class='fab fa-twitter' aria-hidden='true'></span></a></li> "+"<li><a href='https://www.linkedin.com/shareArticle?mini=true&url=" + "<?php echo base_url().$r['judul_seo'];?>" + "' target='_blank' ><span class='fab fa-linkedin' aria-hidden='true'></span></a></li> "+"<li><a href='https://pinterest.com/pin/create/button/?url=" + "<?php echo base_url().$r['judul_seo'];?>" + "' target='_blank' ><span class='fab fa-pinterest' aria-hidden='true'></span></a></li> "+"<li><a href='http://instagram.com/home/?status=" + "<?php echo base_url().$r['judul_seo'];?>" + "' target='_blank' ><span class='fab fa-instagram' aria-hidden='true'></span></a></li> "+"<li><a href='http://telegram.com/home/?status=" + "<?php echo base_url().$r['judul_seo'];?>" + "' target='_blank' ><span class='fab fa-telegram' aria-hidden='true'></span></a></li> "+"<li><a href='https://api.whatsapp.com/send?text=" + "<?php echo base_url().$r['judul_seo'];?>" + "' target='_blank' ><span class='fab fa-whatsapp' aria-hidden='true'></span></a></li> ");
									</script>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }
	}; ?>

	<div class="pagination-wrapper text-center">
		<ul class="pagination clearfix">
			<?php echo $this->pagination->create_links(); ?>
						<!-- <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><i class="fas fa-angle-right"></i></a></li> -->
					</ul>
				</div>
			</div>
			