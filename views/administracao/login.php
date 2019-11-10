<!doctype html>
<html lang="pt-BR">
	<head>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/head.php"; ?>
	</head>
	<body>
		<div class="container-background">
			<div class="d-flex w-100 h-100 justify-content-center align-items-center bg-white bg-none">
				<form class="p-4" action="/administracao/login/entrar" method="post" enctype="application/x-www-form-urlencoded" id="login">
					<h2 class="mb-3">Login</h2>
<?php if(isset($status) && $status == 2) { ?>
					<div class="alert alert-danger" role="alert">
						Login ou senha inválido(s)
					</div>
<?php } elseif(isset($status) && $status == 3) { ?>
					<div class="alert alert-success" role="alert">
						Desconectado com successo!
					</div>
<?php } ?>
					<div class="form-group">
						<input class="form-control" type="text" name="email" placeholder="exemplo@exemplo.com">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" placeholder="******">
					</div>
					<button type="submit" class="btn btn-outline-dark">Entrar</button>
				</form>
			</div>
		</div>
<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "inc/scripts.php"; ?>
	</body>
</html>