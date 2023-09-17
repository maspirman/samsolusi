 <aside class="col-lg-4 sidebar" >
 	<div class="blog-sidebar footer-widget about-widget-two" style="background-color: #111c3f; color: white;">
 		
 		<?php

 		$get_setting_sidebar    = $this->model_utama->view_where('tbl_novapage',array('key' => 'setting_sidebar'))->row_array(); 

 		$sidebar = array();
 		if(isset($get_setting_sidebar['value'])) {

 			if(!empty($get_setting_sidebar['value'])){

 				$setting_sidebar = json_decode($get_setting_sidebar['value'],true); 
 				if(!empty($setting_sidebar)) {
 					$number = 0;
 					foreach($setting_sidebar as $i => $widget_id){ 
 						$id = key($widget_id); 
 						$sidebar[$number]['widget_id'] = $id;
 						$sidebar[$number]['widget_setting'] = $widget_id[$id];
 						$number++; 
 					}

 				}

 			}

 		} 

 		foreach($sidebar as $i => $item) {
 			$file_sidebar = VIEWPATH . template().'/widgets/' . $item['widget_id'] . '.php';

 			if( file_exists($file_sidebar)) { 
 				$widget_setting = $item['widget_setting'];
 				echo "<br>";
 				include $file_sidebar;
 			}
 		}

 		?>
 	</div>
 	<div class="contact-form-section">
 		<div class="live-contact">
 			<div class="image"><img style="border:1px solid #FFF;" src="<?php echo base_url(); ?>template/novapage/new/assets/images/resource/image-40.jpg" alt=""></div>
 			<div class="content">
 				<br>

 				<h4 style="text-shadow:2px 2px 3px #000;">Diskusi Live</h4>
 				<div class="text" style="text-shadow:2px 2px 3px #000;">Mari diskusikan masalah anda, kami akan membantu anda mengatasinya.</div>
 				<div class="link-btn mb-1"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Marketing 1</span></a></div>
 				<div class="link-btn mb-1"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Marketing 2</span></a></div>
 			</div>
 		</div>
 	</div>

 </aside>
