

<!-- Section -->
								<section>
									<header class="major">
										<h2>Bidan</h2>
									</header>
									<p>Daftar Nama Bidan Di Kabupaten Jombang</p>
									<?php foreach($groups5 as $row) : 
							        	 
							         $midwifes = $row->nama_midwife;
							         $id = $row->id_midwife; ?>
							     	<ul class="contact">
										<li class="fa-stethoscope"><a href="<?php echo base_url("detail/show_detail_midwife/$id");  ?>"><?php echo $midwifes; ?></a></li>
									</ul>
							 	 	<?php endforeach; ?> 
								</section>

								