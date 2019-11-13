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
				<p class="lead mb-2">Editar <?=CONTROLLER?></p>
<?php if(isset($status) && $status) { ?>
				<div class="alert alert-success mb-1 rounded-0" role="alert">
					Dados salvos com sucesso!
				</div>
<?php } ?>
				<form action="perfil/salvar" method="post" enctype="multipart/form-data">
					<div class="row py-4">
						<div class="col-3">
							<div class="form-group">
								<label for="title">Título</label>
								<input type="text" name="titulo" class="form-control rounded-0 border border-secondary" value="<?=$alterar['title']?>">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label for="title">Email</label>
								<input type="text" name="email" class="form-control rounded-0 border border-secondary" value="<?=$alterar['email']?>">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label>Senha</label>
								<input type="password" name="senha" class="form-control rounded-0 border-secondary">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group">
								<label>Repetir senha</label>
								<input type="password" onChange="passwordVerify('senha', 'senhaVerify')" name="senhaVerify" class="form-control rounded-0 border-secondary">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group mb-0">
								<label for="title">Endereço</label>
								<input type="text" name="endereco" class="form-control rounded-0 border border-secondary" value="<?=$alterar['address']?>">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group mb-0">
								<label for="avatar">Avatar</label>
								<input type="file" name="avatar">
							</div>
						</div>
						<div class="col-3">
							<div class="form-group mb-0 d-flex flex-column align-items-start">
								<label for="avatar">Permissão</label>
<?php if($alterar['permissao'] == 1) { ?>
								<input name="permissao" type="checkbox" value="1" checked>
<?php } else { ?>
								<input name="permissao" type="checkbox" value="1">
<?php } ?>
							</div>
						</div>
						<div class="col-2 d-flex align-items-end">
							<div class="btn-group align-items-center">
								<a href="perfil" class="btn btn-danger btn-block text-light rounded-0">Novo</a>
								<button type="submit" class="btn btn-block bg-1 text-light rounded-0 mt-0">Salvar</button>
							</div>
						</div>
					</div>
					<input name="id" type="hidden" value="<?=(isset($alterar['id']) && $alterar['id'] ? $alterar['id'] : 0)?>">
				</form>
			</div>
			<div class="d-block border shadow p-3 m-3">
				<p class="lead">Fotos</p>
				<div class="row">
					<div class="col-2">
						<div class="d-block">
							<img height="150" src="/uploads/<?=$alterar['avatar']?>">
						</div>
					</div>
				</div>
			</div>
		</div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/scripts.php"; ?>
	</body>
</html>