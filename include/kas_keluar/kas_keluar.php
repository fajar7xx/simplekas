<!-- Content Row -->
<div class="row">
	<!-- Area Chart -->
	<div class="col-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Kas Keluar</h6>
				<div class="float-right">
					<a href="#" class="btn btn-outline-info">Print</a>
					<a href="#" data-toggle="modal" data-target="#kasKeluarModal" class="btn btn-outline-success">Pengeluaran</a>
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
						$query = "SELECT * FROM kas WHERE jenis = 'keluar'";
						$sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));
						while($data = mysqli_fetch_assoc($sql)):
						?>
							<tr>
								<td><?=$no++;?></td>
								<td><?=$data['keterangan'];?></td>
								<td><?= date('d F Y' , strtotime($data['tgl']));?></td>
								<td><?=number_format($data['keluar']);?></td>
								<td>
									<a href="#" data-toggle="modal" data-target="#editKasKeluarModal" id="edit_data2"  data-id="<?=$data['kd_kas'];?>" data-ket="<?=$data['keterangan'];?>" data-keluar="<?=$data['keluar'];?>" data-tgl="<?=$data['tgl'];?>" class="btn btn-primary btn-sm">Edit</a>
									<a href="<?=base_url('include/kas_keluar/proses.php?hapus&kd=' . $data['kd_kas']);?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini!')">Hapus</a>
								</td>
							</tr>
						<?php
							$total+=$data['keluar'];  
						endwhile;
						?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3" class="text-right font-weight-bold">Total kas keluar</td>
							<td colspan="2"><?=number_format($total);?></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>