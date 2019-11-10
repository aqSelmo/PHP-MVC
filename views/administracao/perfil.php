<!doctype html>
<html lang="pt-BR">
	<head>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/head.php"; ?>
	</head>
	<body>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/sidebar.php"; ?>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/navbar.php"; ?>	
		<div class="container-fluid">
			<div class="d-block border shadow p-3 m-3">
				<p class="lead">Editar <?=CONTROLLER?></p>
				<form action="perfil/salvar" method="post" enctype="application/x-www-form-urlencoded">
					<div class="row py-4">
						<div class="col-3">
							<div class="form-group">
								<label for="title">Título</label>
								<input type="text" name="title" class="form-control rounded-0 border border-secondary" value="<?=$alterar['title']?>">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label for="title">Email</label>
								<input type="text" name="address" class="form-control rounded-0 border border-secondary" value="<?=$alterar['email']?>">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label for="title">Endereço</label>
								<input type="text" name="address" class="form-control rounded-0 border border-secondary" value="<?=$alterar['address']?>">
							</div>
						</div>
					</div>
					<input type="hidden" value="<?=(isset($alterar['id']) && $alterar['id'] ? $alterar['id'] : "")?>">
				</form>
			</div>
		</div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/scripts.php"; ?>
	</body>
</html>