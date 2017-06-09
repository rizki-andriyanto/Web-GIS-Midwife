<?php  
		$nama = $record['name_subdistrict']; 
		$id = $record['id_subdistrict'];
		$content = $record['content'];
		$jumlah_desa = $record['amount_village'];
		$jumlah_populasi = $record['amount_population'];
		$provinsi = $record['province'];
		$luas = $record['area'];
		$kabupaten = $record['district'];
?>
<header id="header">
	<a href="<?php echo base_url() ?>detail/show_detail_subdistrict/<?php echo $id; ?>" class="logo"><strong>DETAIL KECAMATAN</strong> Pelayanan Kebidanan Berbasis Sistem Informasi Geografis</a>
	<ul class="icons">
		<li><a href="https://www.facebook.com/Rizki8Andriyanto" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="https://www.instagram.com/rizki8andriyanto/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
	</ul>
</header><br>

					
	<div class="table-wrapper">
		<table>
			<thead>
				<tr>
					<th>Nama Kecamatan</th>
					<th>Keterangan</th>
					<th>Jumlah Desa</th>
					<th>Jumlah Populasi</th>
					<th>Provinsi</th>
					<th>Luas Wilayah</th>
					<th>Kabupaten</th>

					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $nama; ?></td>
					<td><?php echo $content; ?></td>
					<td><?php echo $jumlah_desa; ?> Desa</td>
					<td><?php echo $jumlah_populasi; ?> Jiwa</td>
					<td><?php echo $provinsi; ?></td>
					<td><?php echo $luas; ?> Km<sup>2</sup></td>
					<td><?php echo $kabupaten; ?></td>
					
				</tr>

			</tbody>
			
		</table>
	</div>

<!-- Image -->
	<!-- <h3>GALERI</h3>
	<span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span>
	<div class="box alt">
		<div class="row 80% uniform">
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u$"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div> -->
			<!-- Break -->
			<!-- <div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u$"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div> -->
			<!-- Break -->
			<!-- <div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div>
			<div class="4u$"><span class="image fit"><img src="<?php echo base_url() ?>assets-map/foto/hospital/<?php echo $foto; ?>" alt="" /></span></div> -->
		<!-- </div> -->
	<!-- </div> -->
