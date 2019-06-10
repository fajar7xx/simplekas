<!-- Content Row -->
<div class="row">
	<!-- Area Chart -->
	<div class="col-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Kas Masuk</h6>
				<div class="float-right">
					<a href="#" class="btn btn-outline-info">Print</a>
					<a href="#" data-toggle="modal" data-target="#kasMasukModal" class="btn btn-outline-success">Pemasukan</a>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<table  style="width:100%" class="table table-striped table-bordered kas">
					<thead>
						<tr>
							<th>No</th>
							<th>Keterangan</th>
							<th>Tangal</th>
							<th>Jumlah</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						$no = 1;
						$total = 0;
						$query = "SELECT * FROM kas WHERE jenis = 'masuk'";
						$sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));
						while($data = mysqli_fetch_assoc($sql)):
						?>
							<tr>
								<td><?=$no++;?></td>
								<td><?=$data['keterangan'];?></td>
								<td><?= date('d F Y' , strtotime($data['tgl']));?></td>
								<td><?=number_format($data['jumlah']);?></td>

								<!-- edit data kas keluar -->
								<td>
									<a href="#" data-toggle="modal" data-target="#editKasMasukModal" id="edit_data"  data-id="<?=$data['kd_kas'];?>" data-ket="<?=$data['keterangan'];?>" data-jumlah="<?=$data['jumlah'];?>" data-tgl="<?=$data['tgl'];?>" class="btn btn-primary btn-sm">Edit</a>
									<a href="<?=base_url('include/kas_masuk/proses.php?hapus&kd=' . $data['kd_kas']);?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini!')">Hapus</a>
								</td>
							</tr>
						<?php
							$total+=$data['jumlah'];  
						endwhile;
						?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3" class="text-right font-weight-bold">Total kas masuk</td>
							<td colspan="2"><?=number_format($total);?></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>