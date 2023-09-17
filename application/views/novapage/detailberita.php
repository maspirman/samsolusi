<?php
$baca = $rows['dibaca']+1;	
$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $rows['id_berita'],'aktif' => 'Y'))->num_rows();
?>	
<div class="col-lg-8 content-side">
	<div class="blog-single-post">
		<div class="post-head mb-4"> 
			<h3><?php echo $rows['judul'] ."<br><small>$rows[sub_judul] </small>"; ?></h3>
			<ul class="post-meta">
				<li>Tanggal Upload : <?php echo tgl_indo($rows['tanggal']); ?></li>
				<li>/</li>
				<li>Oleh :  <?php echo "$rows[nama_lengkap]"; ?></li>


			</ul>
		</div> 
		<?php 
		if ($rows['gambar'] !=''){ 
			echo "<img style='width:100%' src='".base_url()."asset/foto_berita/$rows[gambar]' alt='$rows[judul]' /></a>"; 

			if ($rows['keterangan_gambar'] !=''){ 
				?>
				<label class="image-text">Keterangan Gambar : <?php echo $rows['keterangan_gambar'];?></label> 
				<?php
			}	
		}								
		?>

		<div class="text">
			<br>
			<h3><?php echo $rows['judul'] ."<br><small>$rows[sub_judul] </small>"; ?></h3>
			<p style="text-align: justify-all;">
				<?php echo $rows['isi_berita'];?>	 
				<?php
				echo "
				<div class='fb-like'  data-href='".base_url()."$rows[judul_seo]' 
				data-send='false'  data-width='600' data-show-faces='false'>
				</div> <br><br>"; 
				if ($rows['youtube']!=''){
					echo "<h4>Video Terkait:</h4>";
					if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)) {
						echo "<iframe width='100%' height='350px' id='ytplayer' type='text/html'
						src='https://www.youtube.com/embed/".$match[1]."?rel=0&showinfo=1&color=white&iv_load_policy=3'
						frameborder='0' allowfullscreen></iframe><div class='garis'></div><br/>";
					} 
				}

				?>
			</p>
		</div>

		<ul class="tag">
			<?php 
			if( !empty($rows['tag'])) {
				$tags = explode(",",$rows['tag']);							
				$hitung = count($tags);				
				?>

				<?php						
				for ($x=0; $x<=$hitung-1; $x++) {
					if ($tags[$x] != ''){
						echo "<li><a href='".base_url()."tag/detail/$tags[$x]'>#$tags[$x]</a></li>";
					}
				}
				?>

			<?php } ?>

		</ul>
		<div class="share-icon" style="width:auto;">
			<h5>Share this post with your friends</h5>
			<ul class="social-links" style="padding-left: 1px;">
				<script language="javascript">
					document.write("<li><a class='facebook' href='https://www.facebook.com/sharer/sharer.php?u=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><i class='fab fa-facebook' aria-hidden='true'></i></a></li> "+"<li><a class='twitter' href='http://twitter.com/intent/tweet?text=" + document.URL + "' target='_blank' ><i class='fab fa-twitter' aria-hidden='true'></i></a></li> "+"<li><a class='linkedin' href='https://www.linkedin.com/shareArticle?mini=true&url=" + document.URL + "' target='_blank' ><i class='fab fa-linkedin' aria-hidden='true'></i></a></li> "+"<li><a class='pinterest' href='https://pinterest.com/pin/create/button/?url=" + document.URL + "' target='_blank' ><i class='fab fa-pinterest' aria-hidden='true'></i></a></li> "+"<li><a class='twitter' href='http://instagram.com/home/?status=" + document.URL + "' target='_blank' ><i class='fab fa-instagram' aria-hidden='true'></i></a></li> ");
				</script>

			</ul>
		</div>
		<!-- Post Author -->
		<div class="author-box">
			<div class="image"><img style="width:110px;" src="<?php echo base_url().'asset/foto_user/'.$rows[foto]; ?>" alt=""></div>
			<h4><?php echo "$rows[nama_lengkap]"; ?></h4>
			<h5><a href="https://samsolusi.com">Visit: https://samsolusi.com</a></h5>
			<div class="text">Sebuah layanan perizinan yang kami sajikan dengan tujuan untuk membantu anda mendapatkan izin dalam berusaha sesuai dengan aturan pemerintah yang sah dan berlaku di Indonesia. </div>
			<ul class="social-links clearfix">
				<script language="javascript">
					document.write("<li><a href='https://www.facebook.com/sharer/sharer.php?u=" + document.URL + " ' target='_blank' class='custom-soc icon-text'><span class='fab fa-facebook' aria-hidden='true'></span></a></li> "+"<li><a href='http://twitter.com/intent/tweet?text=" + document.URL + "' target='_blank' ><span class='fab fa-twitter' aria-hidden='true'></span></a></li> "+"<li><a href='https://www.linkedin.com/shareArticle?mini=true&url=" + document.URL + "' target='_blank' ><span class='fab fa-linkedin' aria-hidden='true'></span></a></li> "+"<li><a href='https://pinterest.com/pin/create/button/?url=" + document.URL + "' target='_blank' ><span class='fab fa-pinterest' aria-hidden='true'></span></a></li> "+"<li><a href='http://instagram.com/home/?status=" + document.URL + "' target='_blank' ><span class='fab fa-instagram' aria-hidden='true'></span></a></li> "+"<li><a href='http://telegram.com/home/?status=" + document.URL + "' target='_blank' ><span class='fab fa-telegram' aria-hidden='true'></span></a></li> "+"<li><a href='https://api.whatsapp.com/send?text=" + document.URL + "' target='_blank' ><span class='fab fa-whatsapp' aria-hidden='true'></span></a></li> ");
				</script>
			</ul>
		</div>
		<!-- Blog Post Pagination -->
		<div class="blog-post-pagination">
			<div class="clearfix">

				<div class="float-left prev-post">
					<?php
					$prev = $this->db->query("SELECT * FROM berita ORDER BY tanggal asc limit 1")->row_array();?>
					<a href="<?php echo base_url()?><?php echo $prev['judul_seo']; ?>"><i class="flaticon-right"></i> Prev Post</a>

					<a href="<?php echo base_url()?><?php echo $prev['judul_seo']; ?>">
						<div class="image-box">
							<img src="<?php echo base_url()?>asset/foto_berita/<?php echo $prev['gambar']; ?>" alt="">
							<h4><?php echo $prev['judul']; ?></h4>
						</div>
					</a>
				</div>

				<div class="float-right next-post">
					<?php
					$next = $this->db->query("SELECT * FROM berita ORDER BY tanggal desc limit 1")->row_array();?>
					<a href="<?php echo base_url()?><?php echo $next['judul_seo']; ?>">Next Post <i class="flaticon-right"></i> </a>
					<a href="<?php echo base_url()?><?php echo $next['judul_seo']; ?>">
						<div class="image-box">
							<img style="max-width: 20%" src="<?php echo base_url()?>asset/foto_berita/<?php echo $next['gambar']; ?>" alt="">
							<h4><?php echo $next['judul']; ?></h4>
						</div>
					</a>
				</div>

			</div>
		</div>
		

		

		<?php include 'partials/komentar.php';?> 
	</div>

</div>





<?php

$this->load->helper('text');
$pisah_kata  = explode(",",$rows['tag']);
$jml_katakan = (integer)count($pisah_kata);
$jml_kata = $jml_katakan-1; 
$ambil_id = substr($rows['id_berita'],0,4);
$cari = "SELECT * FROM berita join kategori on kategori.id_kategori = berita.id_kategori WHERE (id_berita<'$ambil_id') and (id_berita!='$ambil_id') and (" ;
	for ($i=0; $i<=$jml_kata; $i++){
		$cari .= "tag LIKE '%$pisah_kata[$i]%'";
		if ($i < $jml_kata ){
			$cari .= " OR ";}}
			$cari .= ") ORDER BY id_berita DESC LIMIT 3";
			$hasil  = $this->db->query($cari);
			if ($hasil->num_rows()>=1) {
				?>

				<?php			
			}
		?>