 <div class="footer-widget links-widget-two">
 	<?php  
 	if( isset($widget_setting['judul']) ) {
 		if( !empty(trim($widget_setting['judul']))) {
 			?>		
 			<h3 class="widget-title"><?php echo $widget_setting['judul'];?></h3>			

 			<?php 
 		}
 	}  
 	$menu_sidebar_id = '';
 	if(isset($widget_setting['group_menu'])) {
 		$menu_sidebar_id = (int) $widget_setting['group_menu'];
 	}
 	?>  
 	
 	<div class="widget-content">
 		<div class="row">
 			<div class="col-sm-8">
 				<?php 
 				echo build_nav_menu( $menu_sidebar_id , $menu_sidebar_id ,'menu',false);  
 				?>	 
 			</div>
 		</div>                                    
 	</div>
 </div>
