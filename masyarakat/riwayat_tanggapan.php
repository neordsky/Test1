	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
						RIWAYAT PENGADUAN
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>JUDUL</th>
									<th>ISI</th>
									<th>FOTO</th>
									<th>STATUS</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								include '../config/koneksi.php';
								$no = 1;
								$nik = $_SESSION['nik'];
								$query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE nik='$_GET[nik]' ORDER BY id_pengaduan DESC");
								while ($data = mysqli_fetch_array($query)) { ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['judul_laporan'] ?></td>
										<td><?php echo $data['isi_laporan'] ?></td>
										<td><img src="../assets/img/<?php echo $data['foto'] ?>" width="100"></td>
										<td>
											<?php 
											if ($data['status'] == 'proses') {
												echo "<span class='badge bg-warning'>Proses</span>";
											} elseif ($data['status'] == 'selesai'){
												echo "<span class='badge bg-success'>Selesai</span>";
												echo "<br><a href='index.php?page=tanggapan&id_pengaduan=$data[id_pengaduan]'> Lihat Tanggapan </a>";
											} elseif ($data['status'] == 'tolak'){
												echo "<span class='badge bg-danger'>Tolak</span>";
											} else {
												echo "<span class='badge bg-danger'>Menunggu</span>";
											}


											?>
										</td>
										<td>
											<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?php echo $data['id_pengaduan']  ?>">
												Hapus
											</button>

											<!-- Modal Hapus-->
											<div class="modal fade" id="hapusModal<?php echo $data['id_pengaduan']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<form action="edit_data.php" method="POST">
															<input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan']?>">
															<div class="modal-body">
																Apakah anda yakin akan menghapus data <br> <?php echo $data['judul_laporan'] ?>
															</div>
															<div class="modal-footer" style="background-color: #FFF17F">
																<button type="submit" class="btn btn-danger" name="hapus_pengaduan">Hapus</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</td>

									</tr>

								<?php } ?>

							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>