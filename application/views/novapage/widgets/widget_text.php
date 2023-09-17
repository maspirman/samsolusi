
<?php  
if( isset($widget_setting['judul']) ) {
	if( !empty(trim($widget_setting['judul']))) {
		?>	
		<h5 class="card-header">	
			<?php echo $widget_setting['judul'];?>
		</h5>
		<?php
	}
} 
?>   
<div class="content-text" style="color:white; text-align: left;">
	<?php			
	if( isset($widget_setting['teks']) ) {
		if( !empty(trim($widget_setting['teks']))) {
			echo $widget_setting['teks'];
		}
	} 
	?>  
	<br>
</div> 
