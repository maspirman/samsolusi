 <div class="widget widget_categories">
 	<?php 			
 	$tampilkan_jumlah_berita = 0;
 	if( isset($widget_setting['judul']) ) {
 		if( !empty(trim($widget_setting['judul']))) {
 			?>					
 			<h3 class="widget-title">
 				<?php echo $widget_setting['judul'];?>
 			</h3>
 			<?php
 		}
 	}
 	if( isset($widget_setting['tampilkan_jumlah_berita']) ) {
 		$tampilkan_jumlah_berita = (int) $widget_setting['tampilkan_jumlah_berita'];
 	}
 	?>
 	<div class="widget-content">
 		<ul class="categories-list clearfix">
 			<?php
 			$kategori = $this->db->query("
 				SELECT 
 				cat.nama_kategori as nama_kategori,
 				cat.kategori_seo as kategori_seo,
 				count(b.id_kategori) as jml_berita 
 				FROM 
 				kategori cat
 				LEFT JOIN berita b ON b.id_kategori = cat.id_kategori  and b.status = 'Y'
 				WHERE 
 				cat.aktif='Y' 
 				group by cat.id_kategori 
 				ORDER BY cat.nama_kategori ASC
 				");
 			$list_data = $kategori->result_array();
 			if(!empty($list_data)) { 
 				foreach($list_data as $i => $item_kategori){
 					if( $item_kategori['jml_berita'] > 0) { 
 						?>
 						<li>
 							<a href="<?php echo base_url()."kategori/detail/".$item_kategori['kategori_seo'];?>">  
 								<?php echo $item_kategori['nama_kategori'];?> 
 								<?php if($tampilkan_jumlah_berita){?> 
 									(<?php echo $item_kategori['jml_berita'];?>) 
 								<?php } ?>
 							</a>
 						</li>
 						<?php
 					}
 				}
 			}
 			?>
 		</li>
 	</ul>
 </div>
</div>
