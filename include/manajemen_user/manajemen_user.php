<!-- Content Row -->
<div class="row">
	<!-- Area Chart -->
	<div class="col-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Manajemen User</h6>
				<div class="float-right">
					<a href="#" data-toggle="modal" data-target="#tambahAdmin" class="btn btn-outline-success">Tambah Pengguna</a>
				</div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<table  style="width:100%" class="table table-striped table-bordered kas">
					<thead>
						<tr>
							<th>No</th>
							<th>Email</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php  
						$no = 1;
						$query = "SELECT * FROM admin";
						$sql = mysqli_query($conn, $query)or die("Error: " . mysqli_error($conn));
						while($data = mysqli_fetch_assoc($sql)):
						?>
							<tr>
								<td><?=$no++;?></td>
								<td><?= $data['email'];?></td>
								<td><?=$data['username'];?></td>
								<td><?=$data['nama'];?></td>
								<td><?=$data['level'];?></td>
								<td>
									<div class="btn-group btn-group-sm" role="group" aria-label="grupbtn">
										<a href="" class="btn btn-primary">View</a>
										<a href="" class="btn btn-primary">Edit</a>
										<a href="" class="btn btn-primary">Disable</a>
										<a href="" class="btn btn-primary">Delete</a>
									</div>
								</td>
							</tr>
						<?php
						endwhile;
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>