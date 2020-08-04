<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/sb-admin-2/css/sb-admin-2.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.css') }}">
</head>
<body id="page-top">

<div id="wrapper">
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
			<div class="sidebar-brand-icon">
				<i class="fas fa-desktop"></i>
			</div>
			<div class="sidebar-brand-text mx-3">Cliente 01</div>
		</a>

		<hr class="sidebar-divider my-0">

		<li class="nav-item">
			<a class="nav-link" href="{{ route('home') }}">
				<i class="fas fa-fw fa-home"></i>
				<span>Página Inicial</span>
			</a>
		</li>

		<hr class="sidebar-divider">

		<div class="sidebar-heading">
			Controle Geral
		</div>

		<li class="nav-item">
			<a class="nav-link" href="{{ route('home') }}">
				<i class="far fa-fw fa-chart-bar"></i>
				<span>Vendas</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="{{ route('home') }}">
				<i class="fas fa-fw fa-database"></i>
				<span>Produtos</span>
			</a>
		</li>

		<hr class="sidebar-divider">

		<div class="sidebar-heading">
			Controle Supervisor
		</div>

		<li class="nav-item">
			<a class="nav-link" href="{{ route('home') }}">
				<i class="fas fa-fw fa-chart-line"></i>
				<span>Relatórios</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="{{ route('home') }}">
				<i class="fas fa-fw fa-users-cog"></i>
				<span>Usuários</span>
			</a>
		</li>

		<hr class="sidebar-divider d-none d-md-block">

		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>

	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
							<img class="img-profile rounded-circle" src="{{ asset('assets/imgs/user.svg') }}">
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Perfil
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Configurações da Conta
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
								Logs de Atividade
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Sair
							</a>
						</div>
					</li>
				</ul>
			</nav>

			<div class="container-fluid">
				@yield('content')
			</div>

		</div>

		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Minhas Vendas 2020</span>
				</div>
			</div>
		</footer>

	</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/sb-admin-2/js/sb-admin-2.js') }}"></script>

</body>
</html>
