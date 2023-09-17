<?php 
$base_path = FCPATH;

$get_section_team    = $this->model_utama->view_where('tbl_novapage',array('key' => 'section_team'))->row_array();
if(isset($get_section_team['value'])){
	if(!empty($get_section_team['value'])){
		$section_team = json_decode($get_section_team['value'],true);
	}
}

?>
<!-- Page Title -->
<section class="page-title" style="background-image: url('<?php echo base_url('template/novapage/new/assets/images/background/bg-17.jpg');?>');">
	<div class="auto-container">
		<div class="content-box">
			<div class="content-wrapper">
				<div class="title">
					<h1><?php echo ($section_team['judul'] !='' ? $section_team['judul'] : 'Team');?></h1>
				</div>

			</div>                    
		</div>
	</div>
</section>
<!-- Page Title -->

<!--  Team Section Two -->
<section class="team-section-two">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h2>Each member of our <br> team is a specialist in his or her field</h2>
			<div class="text-decoration">
				<span class="left"></span>
				<span class="right"></span>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($get_teams->result_array() as $team) {	 
				if ($team['photo'] !== '' &&  file_exists( $base_path ."asset/img_novapage/team/".($team['photo']) ) ){
					$img_src = base_url()."asset/img_novapage/team/". $team['photo'];
				}
				?>
				<div class="team-block-one col-lg-3 col-md-6">
					<div class="inner-box">
						<div class="image"><img src="<?php echo $img_src;?>" alt="<?php echo  $team['team'];?>" alt=""></div>
						<div class="lower-content">
							<div class="designation"><?php echo $team['jabatan'];?></div>
							<h4><?php echo $team['nama'];?></h4>
							<ul class="list">
								<a href="https://facebook.com/<?php echo $team['socmed_fb'];?>">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
								<a href="https://twitter.com/<?php echo $team['socmed_twitter'];?>">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>

								<a href="https://instagram.com/<?php echo $team['socmed_ig'];?>">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>

								<a href="https://linkedin.com/<?php echo $team['socmed_linkedin'];?>">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</a>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>


<div class="pagination">
	<?php echo $this->pagination->create_links(); ?>
</div> 