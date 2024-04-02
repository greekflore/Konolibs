<?php
	include 'header.php';
	include 'koneksi.php';
?>

 <title>Data Penerbit</title>
 
<style>
	tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #0582ca;
    }
</style>
<center><font face="Britannic Bold" color="#457B9D"><h1 align="center">Tabel Data Penerbit</h1></font></center>
<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-2 mb-2" style="min-height: 530px;">
			<div class="card">
			  <div class="card-header">
				Data Kategori
			  </div>
			  <div class="card-body">
				<div class="row">
					<div class="col mb-3">
						<form class="form-inline float-right" method="GET">
							<input type="text" class="form-control" name="keyword">
							<input type="submit" class="btn btn-primary" name="cari" value="Cari">
						</form>
					</div>
				</div>
				
				<table border="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Penerbit</th>
							<th>Nama Penerbit</th>
							<th>Kota</th>
						</tr>
					</thead>
							    <tbody>
									<?php
									$sql = "SELECT * FROM penerbit ORDER BY id_penerbit";
									if (isset($_GET['cari'])) {
										$keyword=$_GET['keyword'];
										$sql = "SELECT * FROM penerbit WHERE nama_penerbit LIKE '%$keyword%'";
									}
									$no  = 1;
									foreach ($koneksi->query($sql) as $data) ://satu-satu, no++ untuk otomatis habis 1 langsung 2//
									?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['id_penerbit'] ?></td>
											<td><?php echo $data['nama_penerbit'] ?></td>
											<td><?php echo $data['kota'] ?></td>
										</tr>
									<?php
									endforeach;
									?>
								</tbody>
						</table>
					</div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>


<?php
	include 'footer.html'
?>;