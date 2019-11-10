		<div class="container-fluid border-bottom shadow">
			<div class="d-flex justify-content-between align-items-center py-2">
				<div class="d-flex">
					<a href="javascript:menuCollapse()">
						<i class="fa fa-bars text-dark"></i>
					</a>
					<p class="mb-0 ml-3"><?=CONTROLLER?></p>
				</div>
				<div class="d-flex align-items-center">
					<img height="30" src="/uploads/<?=$administrador['avatar']?>">
					<div class="dropdown ml-2">
						<a class="dropdown-toggle text-dark" href="#" role="button" id="minhaconta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['admin']?></a>
						<div class="dropdown-menu dropdown-menu-right rounded-0 mt-3" aria-labelledby="minhaconta">
							<a class="dropdown-item" href="/administracao/perfil">Perfil</a>
							<a class="dropdown-item" href="/administracao/login/sair">Sair</a>
						</div>
					</div>
				</div>
			</div>
		</div>