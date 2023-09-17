<div class="footer-widget links-widget-two">
	<?php  
	if( isset($widget_setting['judul']) ) {
		if( !empty(trim($widget_setting['judul']))) {
			?>		
			<h3 class="widget-title"><?php echo $widget_setting['judul'];?></h3>			

			<?php 
		}
	}  

	?>  

	<div class="widget-content">
		<div class="row">
			<div class="col-sm-7">
				<ul class="tag">
					<?php 
					$tag = $this->model_utama->view_ordering_limit('tag','id_tag','RANDOM',0,5);
					foreach ($tag->result_array() as $row) {
						?>
						<li><a href="<?php echo base_url()."tag/detail/".$row['tag_seo'];?>">#<?php echo $row['nama_tag'];?></a></li>


						<?php
					}
					?>
				</ul>
			</div>
		</div>                                    
	</div>
</div>
