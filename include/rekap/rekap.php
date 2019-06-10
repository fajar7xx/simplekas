<!-- Content Row -->
<div class="row">
	<!-- Area Chart -->
	<div class="col-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Rekapitulasi</h6>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<table  style="width:100%" class="table table-striped table-bordered kas">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Keterangan</th>
							<th>Jenis</th>
							<th>Masuk</th>
							<th>Keluar</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						$no = 1;
						$total = 0;
						$keluar = 0;
						$query = "SELECT * FROM kas";
						$sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));
						while($data = mysqli_fetch_assoc($sql)):
						?>
							<tr>
								<td><?=$no++;?></td>
								<td><?= date('d F Y' , strtotime($data['tgl']));?></td>
								<td><?=$data['keterangan'];?></td>
								<td><?=$data['jenis'];?></td>
								<td><?=number_format($data['jumlah']);?></td>
								<td><?=number_format($data['keluar']);?></td>
							</tr>
						<?php
							$total+=$data['jumlah'];
							$keluar+=$data['keluar'];
							$saldo = $total - $keluar;  
						endwhile;
						?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4" class="text-right font-weight-bold">Total kas Masuk</td>
							<td colspan="2"><?=number_format($total);?></td>
						</tr>
						<tr>
							<td colspan="4" class="text-right font-weight-bold">Total kas keluar</td>
							<td colspan="2"><?=number_format($keluar);?></td>
						</tr>
						<tr>
							<td colspan="4" class="text-right font-weight-bold">Total Saldo terakhir</td>
							<td colspan="2"><?=number_format($saldo);?></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>