<!--================Home Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center">
				<h2>FORMULIR PEMESANAN</h2>
				<div class="page_link">
					<a href="<?php echo base_url() ?>assets/index.html">Home</a>
					<a href="<?php echo base_url() ?>assets/about-us.html">About</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->


<!--================Made Life Area =================-->
<section class="made_life_area p_120">
	<div class="container">
		<div class="made_life_inner">
			<form action="action-input-data.php" method="POST" name="form-input-data">
				<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr height="10">
						<td width="10%"> </td>
						<td width="25%"> </td>
						<!-- <td width="65%"><font color="orange" size="2">FORM PEMESANAN AQIQAH</font></td> -->
					</tr>
					<tr height="46">
						<td> </td>
						<td>Nama Anak</td>
						<td><input class="single-input" type="text" name="nama_anak" placeholder="Nama Anak"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Tempat Lahir</td>
						<td><input class="single-input" type="text" name="tempat_lahir" placeholder="Tempat Lahir"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Tanggal Lahir</td>
						<td><input class="single-input" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Nama Ayah</td>
						<td><input class="single-input" type="text" name="nama_ayah" placeholder="Nama Ayah"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Nama Ibu</td>
						<td><input class="single-input" type="text" name="nama_ibu" placeholder="Nama Ibu"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Jenis Domba</td>
						<td><select class="single-input" name="paket">
								<option value="-">- Pilih Jenis Domba -
								<option value="Jantan">Jantan
								<option value="Betina">Betina
							</select></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Paket Domba</td>
						<td><select class="single-input" name="paket">
								<option value="-">- Pilih Paket -
								<option value="Paket A">Paket A
								<option value="Paket B">Paket B
								<option value="Paket C">Paket C
								<option value="Paket D">Paket D
								<option value="Paket E">Paket E
								<option value="Paket F">Paket F
							</select></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Jumlah Domba</td>
						<td><input class="single-input" type="text" name="jumlah_domba" placeholder="Masukan Angka"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Disaksikan Penyembelihan</td>
						<td><input class="single-input" type="text" name="telepon" placeholder="Ya/Tidak"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Dimasak ?</td>
						<td><input class="single-input" type="text" name="telepon" placeholder="Ya/Tidak"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>No. HP (WhatsApp)</td>
						<td><input class="single-input" type="text" name="telepon" placeholder="No. WhatsApp"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Email</td>
						<td><input class="single-input" type="email" name="telepon" placeholder="Email address"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Alamat Pengiriman</td>
						<td><input class="single-input" type="text" name="telepon" placeholder="Alamat"></td>
					</tr>
					<tr height="46">
						<td> </td>
						<td>Tanggal Pengiriman</td>
						<td><input class="single-input" type="date" name="telepon" placeholder="Masukan Tanggal"></td>
					</tr>
					</tr>
					<tr height="46">
						<td> </td>
						<td> </td>
						<td>
							<button type="submit" class="btn btn-info">Submit</button>
							<a href="#" class="btn btn-danger">Reset</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</section>
<!--================End Made Life Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
	<div class="container">
		<div class="impress_inner">
			<h2>Got Impressed to our features?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
			<a class="banner_btn2" href="#">Request Free Demo</a>
		</div>
	</div>
</section>
<!--================End Impress Area =================-->