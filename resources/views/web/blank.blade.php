<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Agendamentos</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />


		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="{{ asset('js/custom.js') }}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					 <a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
					<div id="userbox" class="userbox">
					{{-- 	<a href="{{ route('login.logout') }}" data-toggle="dropdown">
							 <figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure> 
							 <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">{{ auth()->user()->name }}</span>
								<span class="role">{{ auth()->user()->email }}</span>
							</div>
			
			
						</a> --}}
			
						<a class="btn btn-success" href="{{ route('logout') }}">Sair do programa</a>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Menu de opções
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Início</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Administração TI</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													 Usuários
												</a>
											</li>
											<li>
												<a href="{{ route('sala.index') }}">
													 Salas
												</a>
											</li>
											<li>
												<a href="{{ route('programa.index') }}">
													 Programas
												</a>
											</li>
											<li>
												<a href="{{ route('aula.index') }}">
													 Aulas
												</a>
											</li>
											<li>
												<a href="{{ route('agendamento.index') }}">
													 Agendamentos
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Agendar aulas</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-typography.html">
													 Laboratório 01 (menor)
												</a>
											</li>
											<li>
												<a href="ui-elements-icons.html">
													 Laboratório 02 (maior)
												</a>
											</li>

										</ul>
									</li>
									<li class="nav-parent ">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Consultar agendamentos</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="forms-basic.html">
													 Laboratório 01
												</a>
											</li>
											<li>
												<a href="forms-advanced.html">
													 Laboratório 02
												</a>
										</ul>
									</li>	
								</ul>
							</nav>
					</div>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Agendamento de Informática</h2>
					
						<div class="right-wrapper pull-right">
							<ul class="breadcrumbs">
								<li><span>{{Request::url()}}&nbsp; </span></li>
							</ul>			
						</div>
					</header>

					<!-- start: page -->
					@yield('content')
					<!-- end: page -->
				</section>
			</div>
			
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>