<div class="col-md-12">
	<h3>Daftar Mahasiswa</h3>

</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Praktikum 7</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?= $judul ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"><?= $judul ?></h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<!-- mulai nampilin data dari database -->
				<div class="col-md-12">
					<a href="<?php echo site_url('mahasiswa/create') ?>" class="btn btn-success mb-3" rel="noopener noreferrer">Add Mahasiswa</a>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Gender</th>
								<th>IPK</th>
								<th>Predikat</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 1;
							foreach ($list_mhs as $mhs) {
							?>
								<tr>
									<td><?= $nomor ?></td>
									<td><?= $mhs->nim ?></td>
									<td><?= $mhs->nama ?></td>
									<td><?= $mhs->gender ?></td>
									<td><?= $mhs->ipk ?></td>
									<td><?= $mhs->predikat() ?></td>
								</tr>
							<?php
								$nomor++;
							}
							?>
						</tbody>
					</table>
				</div>

			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<p> Muhamad Sayib Roziq - 0110221023</p>
			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
