<!-- Section -->
								<section>
									<header class="major">
										<h2>Rumah Sakit Bersalin</h2>
									</header>
									<p>Daftar Rumah Sakit Bersalin Di Kabupaten Jombang</p>
									<?php foreach($groups3 as $row) : 
							        	 
							         $hospitals = $row->nama_hospital;
							         $id = $row->id_hospital; ?>
							     	<ul class="contact">
										<li class="fa-hospital-o"><a href="<?php echo base_url("detail/show_detail_hospital/$id");  ?>"><?php echo $hospitals; ?></a></li>
									</ul>
							 	 	<?php endforeach; ?> 
								</section>

