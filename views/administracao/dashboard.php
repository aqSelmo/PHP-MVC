<!doctype html>
<html lang="pt-BR">
	<head>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/head.php"; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
	</head>
	<body>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/sidebar.php"; ?>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/navbar.php"; ?>
		<div class="container-fluid">
			<div class="m-3">
				<div class="row">
					<div class="col-8">
						<div class="row mb-3">
							<div class="col-6">
								<div class="d-flex p-3 border shadow">
									<span>Visitas</span>
								</div>
							</div>
							<div class="col-6">
								<div class="d-flex p-3 border shadow">
									<span>Visitas</span>
								</div>
							</div>
						</div>
						<div class="border shadow">
							<div class="row">
								<div class="col-6">
									<div class="p-3">
										<canvas id="chartBar"></canvas>
									</div>
								</div>
								<div class="col-6">
									<div class="p-3">
										<canvas id="chartPolar"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="border shadow py-4 h-100">
							<div class="d-flex flex-column align-items-center justify-content-center h-100">
								<a class="mb-3" href="uploads" data-fancybox data-caption="<?=$administrador['title']?>">
									<div class="admin-avatar-dashboard border rounded-circle overflow-hidden">
										<img class="w-100 h-100" src="uploads/">
									</div>
								</a>
								<a class="btn bg-1 rounded-0 text-light" href="perfil/alterar/<?=$administrador['id']?>">Editar perfil</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/scripts.php"; ?>
	</body>
</html>