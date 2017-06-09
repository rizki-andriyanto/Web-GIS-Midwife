<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search 1 -->
								<section id="search" class="alt">
								<!-- method search -->
									<form method="post" action="<?php echo site_url('peta');?>">
										<input type="text" name="keyword" id="query" placeholder="Cari" />
									</form>

								</section>

								

								<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?php echo base_url() ?>">Beranda</a></li>
										<li><a href="<?php echo base_url() ?>peta">Peta</a></li>
										<li>
											<span class="opener">Kecamatan</span>
											<ul>
												<?php foreach($groups6 as $row) : 

												$subdistrics = $row->name_subdistrict;
												$id = $row->id_subdistrict; ?>
												<ul class="contact">
												<li class="fa-building"><a href="<?php echo base_url("detail/show_detail_subdistrict/$id");  ?>"><?php echo $subdistrics; ?></a></li>
												</ul>
												<?php endforeach; ?>
											</ul>
										</li>
										<li>
											<span class="opener">Bidan</span>
											<ul>
												<?php foreach($groups5 as $row) : 

												$midwifes = $row->nama_midwife;
												$id = $row->id_midwife; ?>
												<ul class="contact">
												<li class="fa-stethoscope"><a href="<?php echo base_url("detail/show_detail_midwife/$id");  ?>"><?php echo $midwifes; ?></a></li>
												</ul>
												<?php endforeach; ?> 
											</ul>
										</li>
										<li>
											<span class="opener">Rumah Sakit Bersalin</span>
											<ul>
												<?php foreach($groups3 as $row) : 

												$hospitals = $row->nama_hospital;
												$id = $row->id_hospital; ?>
												<ul class="contact">
												<li class="fa-hospital-o"><a href="<?php echo base_url("detail/show_detail_hospital/$id");  ?>"><?php echo $hospitals; ?></a></li>
												</ul>
												<?php endforeach; ?>  
											</ul>
										</li>
										<li><a href="<?php echo base_url() ?>tentang">Tentang</a></li>
										<li><a href="<?php echo base_url() ?>bantuan">Bantuan</a></li>
										<li>
											<span class="opener">Setting</span>
											<ul>
												<li><a href="<?php echo base_url() ?>hospital">Rumah Sakit</a></li>
												<li><a href="<?php echo base_url() ?>midwife">Bidan</a></li>
												<li><a href="<?php echo base_url() ?>poin">Poin</a></li>
												<li><a href="<?php echo base_url() ?>subdistrict">Kecamatan</a></li>
											</ul>
										</li>
										
									</ul>
								</nav>

