<br>
<ul class="social-links clearfix">
	<?php
	$sosmed = $this->model_utama->view('identitas')->row_array();
	$pecahd = explode(",", $sosmed['facebook']);
	?>
	<li><a target="_BLANK" href="<?php echo $pecahd[0]; ?>" class="social-icon"><span class="fab fa-facebook" aria-hidden="true"></span></a></li>
	<li><a target="_BLANK" href="<?php echo $pecahd[1]; ?>" class="social-icon"><span class="fab fa-twitter" aria-hidden="true"></span></a></li>
	<li><a target="_BLANK" href="<?php echo $pecahd[2]; ?>" class="social-icon"><span class="fab fa-instagram" aria-hidden="true"></span></a></li>
	<li><a target="_BLANK" href="<?php echo $pecahd[3]; ?>" class="social-icon"><span class="fab fa-youtube" aria-hidden="true"></span></a></li>

	
	
	<?php

	if( isset($widget_setting['teks']) ) {
		if( !empty(trim($widget_setting['teks']))) {
			?>	 
			<div class="social-text"><?php echo $widget_setting['teks'];?></div> 
			<?php
		}
	} 
	?> 
</ul>
