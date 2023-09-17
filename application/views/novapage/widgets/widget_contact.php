
<?php  
if( isset($widget_setting['judul']) ) {
	if( !empty(trim($widget_setting['judul']))) {
		?>	
		<h3 class="widget-title" style="color:white;">	
			<?php echo $widget_setting['judul'];?>
		</h3>
		<?php
	}
} 
?>   


<div class="text" style="color:white;">
	<?php			
	if( isset($widget_setting['alamat']) ) {
		if( !empty(trim($widget_setting['alamat']))) {
			?>

			<?php echo $widget_setting['alamat'];?>

			<?php 
		}
	} 
	?>  
</div>
<ul class="list" style="color:white;">
	<?php			
	if( isset($widget_setting['email']) ) {
		if( !empty(trim($widget_setting['email']))) {
			?>				
			<li>Email :  <a href="mailto:<?php echo $widget_setting['email'];?>"><?php echo $widget_setting['email'];?></a></li>


			<?php
		}
	} 
	?>   
	<?php			
	if( isset($widget_setting['telp']) ) {
		if( !empty(trim($widget_setting['telp']))) {
			?>


			<li style="color:white;">Whatsapp :  <a href="wa.me/:<?php echo $widget_setting['telp'];?>"><?php echo $widget_setting['telp'];?></a></li>
			<?php 
		}
	} 
	?>  


</ul>


