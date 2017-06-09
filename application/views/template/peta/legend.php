
		<br><br>		
		<center><div id="map"></div></center>

			<!-- poin hospital -->
		<?php foreach($groups as $row) : 
		$hospital_poin = $row->foto; ?>
		<?php endforeach; ?>
			<!-- end -->

			<!-- poin midwife  -->
		<?php foreach($groups2 as $row) : 
		$midwife_poin = $row->foto; ?>
		<?php endforeach; ?>
	<!-- end -->
	<!-- spasi -->
			<?php $spasi1 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?>
			<?php $spasi2 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?>
			<?php $spasi3 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?>
			<?php $spasi4 = '&nbsp;&nbsp;' ?>
			<!-- end -->

		<script type='text/javascript'>
			var rsLayer = new L.LayerGroup();
			var midwifeLayer = new L.LayerGroup();
			// icon hospital
			var hospitalico = L.icon({
				iconUrl: '<?php echo base_url() ?>assets-map/poin/<?php echo''.$hospital_poin.'' ?>',
				// shadowUrl: '<?php echo base_url() ?>assets-map/poin/marker-shadow.png',
				iconSize:     [20, 20], // size of the icon
				shadowSize:   [10, 14], // size of the shadow
				iconAnchor:   [5, 5], // point of the icon which will correspond to marker's location
				shadowAnchor: [4, 12],  // the same for the shadow
				popupAnchor:  [-3, -16] // point from which the popup should open relative to the iconAnchor
			});
			// perulangan hospital 
			<?php foreach($results2 as $row) : 
			$nama = $row->nama_hospital; 
			$id = $row->id_hospital;
			$x = $row->x;
			$y = $row->y;
			$foto = $row->foto;
			$address = $row->alamat;
			$phone = $row->no_telpon;
			$zippost = $row->id_post;
			$kecamatan = $row->kecamatan;

				echo" var rsMarker = new L.Marker
				.Text(new L.LatLng(".$y.' , '.$x."), '".$nama."',{icon: hospitalico})
				.bindPopup('<center><strong>".$nama."</center><br>Alamat".$spasi1.":".$spasi4."".$address." Kecamatan ".$kecamatan." - Jombang<br><br>Telp".$spasi2.":".$spasi4."".$phone."<br><br>Kode Pos".$spasi3.":".$spasi4."".$zippost."</strong><br><br><center><img width=\"200px;\" src=\"".base_url()."assets-map/foto/hospital/".$foto."\"><br>".anchor('detail/show_detail_hospital/'.$id,'<i class="fa fa-eye fa-2x" aria-hidden="true"></i>',array('style'=>'color:blue;'))."</center>');";
				echo ' rsLayer.addLayer(rsMarker); ';
			?>
			<?php endforeach; ?>
			// icon midwife

			var midwifeico = L.icon({
				iconUrl: '<?php echo base_url() ?>assets-map/poin/<?php echo''.$midwife_poin.'' ?>',
				// shadowUrl: '<?php echo base_url() ?>assets-map/poin/marker-shadow.png',
				iconSize:     [20, 20], // size of the icon
				shadowSize:   [10, 14], // size of the shadow
				iconAnchor:   [5, 5], // point of the icon which will correspond to marker's location
				shadowAnchor: [4, 12],  // the same for the shadow
				popupAnchor:  [-3, -16] // point from which the popup should open relative to the iconAnchor
			});
			// perulangan midwife
			

			<?php foreach($results as $row) : 
			$nama = $row->nama_midwife; 
			// $nama = '<i style="color:#f56a6a;font-size:30px;font-family:calibri ;">'.$row->nama_midwife.'</i> ';
			$id = $row->id_midwife;
			$x = $row->x;
			$y = $row->y;
			$foto = $row->foto;
			$address = $row->alamat;
			$phone = $row->no_telpon;
			$zippost = $row->id_post;
			$kecamatan = $row->kecamatan;
			

				echo" var midwifeMarker = new L.Marker
				.Text(new L.LatLng(".$y.' , '.$x."), '".$nama."',{icon: midwifeico})
				.bindPopup('<center><strong>".$nama."</center><br>Alamat".$spasi1.":".$spasi4."".$address." Kecamatan ".$kecamatan." - Jombang<br><br>Telp".$spasi2.":".$spasi4."".$phone."<br><br>Kode Pos".$spasi3.":".$spasi4."".$zippost."</strong><br><br><center><img width=\"200px;\" src=\"".base_url()."assets-map/foto/midwife/".$foto."\"><br>".anchor('detail/show_detail_midwife/'.$id,'<i class="fa fa-eye fa-2x" aria-hidden="true"></i>',array('style'=>'color:blue;'))."</center>');";
				
				echo ' midwifeLayer.addLayer(midwifeMarker); ';
			?>				
			<?php endforeach; ?>

			var	googleRoadmap = new L.Google('ROADMAP');
			var cloudmade = new L.TileLayer('http://{s}.tile.cloudmade.com/4c09f91134dc40008537e4bbdf6b606e/22677/256/{z}/{x}/{y}.png');
			var mpn = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
			var	qst = new L.TileLayer('http://otile1.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png');
			var	googleSatellite = new L.Google('SATELLITE');
			var	googleHybrid = new L.Google('HYBRID');
			var bingMap = new L.BingLayer('AqTGBsziZHIJYYxgivLBf0hVdrAk9mWO5cQcb8Yux8sW5M8c8opEC2lZqKR1ZZXf');
			
			var map = new L.Map('map', {center: new L.LatLng(-7.611766, 112.202501),
			zoom: 13, 
			layers: [googleRoadmap, rsLayer , midwifeLayer ]});

			map.addControl(new L.Control.Scale());
			map.addControl(new L.Control.Layers({'Cloudmade':cloudmade, 'Mapnik':mpn, 'MapQuest':qst, 'Google Roadmap':googleRoadmap, 'Google Satellite':googleSatellite, 'Google Hybrid':googleHybrid, 'BING':bingMap},
			{'Rumah Sakit Bersalin':rsLayer , 'Bidan':midwifeLayer }));
			
			map.on('click', onMapClick);

			var popup = new L.Popup();

			function onMapClick(e) {
				var latlngStr = '(' + e.latlng.lat + ', ' + e.latlng.lng + ')';

				popup.setLatLng(e.latlng);
				popup.setContent("Koordinat Anda " + latlngStr);

				map.openPopup(popup);
			}
		</script>

<section>
		<table width="" border="0" style="text-align:center; font-weight:bold;font-size:10px;" >
			<tr>
		    	<td width="100px;"><h2> Rumah Sakit </h2></td>  
		    	<td width="100px;"><h2>Bidan</h2></td>
		  	</tr>

			<tr>
				<td>
				<?php foreach($groups as $row) : 
			  	$poins = $row->foto; ?>
			 	
				<?php  echo '<img width="60px;" src="'.base_url().'images/'.$poins.'">'?>
				<?php endforeach; ?>
				</td>
		 		
		 		<td>
				<?php foreach($groups2 as $row) : 
			  	$poins = $row->foto; ?>
			 	<?php endforeach; ?>
				<?php  echo'<img width="60px;" src="'.base_url().'images/'.$poins.'">'?>
				</td>
			</tr>
		</table>

</section>
