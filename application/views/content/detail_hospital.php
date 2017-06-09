<?php  
		$nama = $record['nama_hospital']; 
		$id = $record['id_hospital'];
		$x = $record['x'];
		$y = $record['y'];
		$foto = $record['foto'];
		$address = $record['alamat'];
		$phone = $record['no_telpon'];
		$zippost = $record['id_post'];
		$kecamatan = $record['kecamatan'];
		$fg1 = $record['fg1'];



?>
<header id="header">
	<a href="<?php echo base_url() ?>detail/show_detail_hospital/<?php echo $id; ?>" class="logo"><strong>DETAIL RUMAH SAKIT BERSALIN</strong> Pelayanan Kebidanan Berbasis Sistem Informasi Geografis</a>
	<ul class="icons">
		<li><a href="https://www.facebook.com/Rizki8Andriyanto" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="https://www.instagram.com/rizki8andriyanto/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
	</ul>
</header><br>

					
	<div class="table-wrapper">
		<table>
			<thead>
				<tr>
					<th>Nama Rumah Sakit</th>
					<th>No. Telp</th>
					<th>Alamat</th>
					<th>Kecamatan</th>
					<th>Kode Pos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $nama; ?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $address; ?></td>
					<td><?php echo $kecamatan; ?></td>
					<td><?php echo $zippost; ?></td>
				</tr>

			</tbody>
			
		</table>
	</div>

<!-- Image -->
	<h3>GALERI</h3>
	<span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span>
	<div class="box alt">
		<div class="row 80% uniform">
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u$"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<!-- Break -->
			<!-- <div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u$"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div> -->
			<!-- Break -->
			<!-- <div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u$"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div> -->
		</div>
	</div>
