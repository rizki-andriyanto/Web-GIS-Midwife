<!-- Section -->
								<section>
									<header class="major">
										<h2>Kecamatan</h2>
									</header>
									<p>Daftar Kecamatan Di Kabupaten Jombang</p>
							        <?php foreach($groups as $row) : 
							        	 
							         $subdistrics = $row->name_subdistrict;
							         $id = $row->id_subdistrict; ?>
							     	<ul class="contact">
										<li class="fa-building"><a href="<?php echo base_url("detail/show_detail_subdistrict/$id");  ?>"><?php echo $subdistrics; ?></a></li>
									</ul>
							 	 	<?php endforeach; ?> 
							    </section>


							    