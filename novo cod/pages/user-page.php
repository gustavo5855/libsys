﻿<!doctype html>
<html>

	<head>
		<?=
		/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
		simplesmente não fazer o email e digitar na barra de endereço do seu navegador
		o caminho para a página principal do site (sistema), burlando assim a obrigação de
		fazer um email, com isso se ele não estiver feito o email não será criado a session,
		então ao verificar que a session não existe a página redireciona o mesmo
		para a index.php.*/
		session_start();
		if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['password']) == true))
		{
		unset($_SESSION['user']);
		unset($_SESSION['password']);
		header('location:index.html');
		}
		$nome = $_SESSION['nome'];
		$email = $_SESSION['user'];
		$idade = $_SESSION['idade'];
		$senha = $_SESSION['password'];
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>LibSys</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="../css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="../css/style.css" rel="stylesheet">
		<!-- More dependences -->
		<!-- More dependences -->
		<!-- Icon -->
		<link rel="shortcut icon" href="https://banner2.kisspng.com/20180319/ijw/kisspng-black-white-computer-icons-book-png-book-icon-5ab02df11585d6.9013344215214955370882.jpg" />
	</head>

	<body>

		<!--Main Navigation-->
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2E2E2E">
				<div class="container">
					<a class="navbar-brand h1 mb-0" href="#">
						<img src="https://drive.google.com/uc?id=1A9hBkYD_Nkb2W9dg7z31jt87jcnSbRcU" height="30" alt="Logo do site">
					</a>
					<!--</div>-->
					<!--<div class="container">-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSite">
						<ul class="navbar-nav ml-auto mr-auto">
							<li class="nav-item">
								<a href="#" class="nav-link">Início</a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Vender Livros</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="">Cadastrar Livros</a>
									<a class="dropdown-item" href="">Livros Cadastrados</a>
									<a class="dropdown-item" href="">Editar Livro</a>
								</div>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">Livros Comprados</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Livros Vendidos</a>
							</li>
						</ul>

						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navdrop">
									<i class="fa fa-user ml-2"></i>
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editar-cadastro">Editar Cadastro</a>
									<a class="dropdown-item" href="../index.html">Sair</a>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</nav>

			
			<!-- Modal popup editar cadastro -->
			<div class="modal fade" id="editar-cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Editar Cadastro</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="cad.php" id="formcad" name="formcad">
								<div class="modal-body">
									<!-- nome do usuario -->
									<div class="form-group">
										<label for="user" class="col-form-label">Nome:</label>
										<input name="nome" type="text" class="form-control" id="nome" value="<?=$nome?>">
									</div>
									<!-- email -->
									<div class="form-group">
										<label for="email" class="col-form-label">Email:</label>
										<input name="email" type="email" class="form-control" id="email" value="<?=$email?>">
									</div>
									<!-- idade -->
									<div class="form-group">
										<label for="idade" class="col-form-label">Idade:</label>
										<input name="idade" type="text" class="form-control" id="idade" value="<?=$idade?>">
									</div>
									<!-- senha -->
									<div class="form-group">
										<label for="senha" class="col-form-label">Senha:</label>
										<input name="senha" type="password" class="form-control" id="senha" value="<?=$senha?>">
									</div>

								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-secondary" data-dismiss="modal" value="Sair" />
									<input type="submit" class="btn btn-primary" value="Inscrever-se" />
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Modal popup cadastro -->
				<!--Mask-->
				<!--Carousel Wrapper-->
				<section id="bannerzinho">
					<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
						<!--Indicators-->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-1z" data-slide-to="1"></li>
							<li data-target="#carousel-example-1z" data-slide-to="2"></li>
						</ol>
						<!--/.Indicators-->
						<!--Slides-->
						<div class="carousel-inner" role="listbox">
							<!--First slide-->
							<div class="carousel-item active">
								<img class="d-block w-100" src="https://drive.google.com/uc?id=1v5fF3kfRGyfryCVjuB0VO1BI4XpZprxS" alt="First slide">
							</div>
							<!--/First slide-->
							<!--Second slide-->
							<div class="carousel-item">
								<img class="d-block w-100" src="http://www.imagemeprotocolo.com/wp-content/uploads/2017/11/geral_06-1920x300.jpg" alt="Second slide">
							</div>
							<!--/Second slide-->
							<!--Third slide-->
							<div class="carousel-item">
								<img class="d-block w-100" src="https://drive.google.com/uc?id=1EP-dbPVjd7atmkLyvyBPUzM6EUn5XBeo" alt="Third slide">
							</div>
							<!--/Third slide-->
						</div>
						<!--/.Slides-->
						<!--Controls-->
						<a class="carousel-control-prev" href="#carousel-example-1z" style="margin-left:-5%;" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-example-1z" style="margin-right:-5%;" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						<!--/.Controls-->
					</div>

					<div>
						<ul class="nav nav-pills mb-3 pull-right tab-ul-right" id="pills-tab" role="tablist" style="margin-top: 10px; border: 1px solid lightgray">
							<li class="nav-item">
								<a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
									<i class="fa fa-rocket fa-3x prefix icon-right" aria-hidden="true"></i>
									<p class="pull-right">PRONTA ENTREGA</p>
									<span class="subtitle"> teste</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
									<i class="fa fa-shopping-cart fa-3x prefix icon-right" aria-hidden="true"></i>
									<p class="pull-right">PAGAMENTO FÁCIL</p>
									<span class="subtitle"> teste</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
									<i class="fa fa-th-large fa-3x prefix icon-right" aria-hidden="true"></i>
									<p class="pull-right">DESIGN MODERNO</p>
									<span class="subtitle"> teste</span>
								</a>
							</li>
						</ul>
					</div>
				</section>
				<!--/.Carousel Wrapper-->
				<!--Mask-->
				<!-- bloco -->
				<!-- bloco -->


		</header>
		<!--Main Navigation-->
    
		<!--Main Layout-->
		<main style="margin-top: -42%;">

			<!-- menu categorias -->
			<!-- Grid row -->
			<!-- card -->
			<!-- categorias

		<div id="categorias" class="text-center">
			<h2 id="title" class="display-4 font-bold gray-text mb-2">Categorias</h2>
			<ul class="nav nav-tabs md-tabs nav-justified col-md-12 justify-content-center" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="didatic-tab" data-toggle="tab" href="#didatic" role="tab" aria-controls="didatic" aria-selected="true">Didáticos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="fantasia-tab" data-toggle="tab" href="#fantasia" role="tab" aria-controls="fantasia" aria-selected="false">Fantasia</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="infantil-tab" data-toggle="tab" href="#infantil" role="tab" aria-controls="infantil" aria-selected="false">Infantil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="geral-tab" data-toggle="tab" href="#geral" role="tab" aria-controls="geral" aria-selected="false">Geral</a>
				</li>
			</ul>
			<div class="tab-content col-md-15 text-center" id="myTabContent">

				<div class="tab-pane fade show active" id="didatic" role="tabpanel" aria-labelledby="didatic-tab" style="margin-top:2%;">
					<div class="row justify-content-center row-cards-margin">

						<div class="row col-md-15">

							<div class="col-md-3">

								<div class="card align-items-center anuncio">

									<div class="view overlay">
										<img src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" class="card-img-top" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>

									<div class="card-body text-center">

										<a href="" class="grey-text"><h5>Shirt</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Denim shirt<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>120$</strong></h4>
									</div>

								</div>

							</div>

							<div class="col-lg-4 col-md-5 mb-lg-1 mb-2">

								<div class="card align-items-center anuncio">

									<div class="view overlay">
										<img src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" class="card-img-top" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>

									<div class="card-body text-center">

										<a href="" class="grey-text"><h5>Shirt</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Denim shirt<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>120$</strong></h4>
									</div>

								</div>

							</div>

							<div class="col-lg-4 col-md-1 mb-lg-1 mb-2">

								<div class="card align-items-center anuncio">

									<div class="view overlay">
										<img src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" class="card-img-top" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>

									<div class="card-body text-center">

										<a href="" class="grey-text"><h5>Shirt</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Denim shirt<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>120$</strong></h4>
									</div>

								</div>

							</div>

							<div class="col-lg-4 col-md-1 mb-lg-1 mb-2">

								<div class="card align-items-center anuncio">

									<div class="view overlay">
										<img src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" class="card-img-top" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>

									<div class="card-body text-center">

										<a href="" class="grey-text"><h5>Shirt</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Denim shirt<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>120$</strong></h4>
									</div>

								</div>

							</div>


						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="fantasia" role="tabpanel" aria-labelledby="fantasia-tab" style="margin-top:2%;">
					<div class="row justify-content-center row-cards-margin">

					</div>
				</div>

				<div class="tab-pane fade" id="infantil" role="tabpanel" aria-labelledby="infantil-tab" style="margin-top:2%;">
					<div class="row justify-content-center row-cards-margin">

					</div>
				</div>

				<div class="tab-pane fade" id="geral" role="tabpanel" aria-labelledby="geral-tab" style="margin-top:2%;">
					<div class="row justify-content-center row-cards-margin">

					</div>
				</div>
			</div>
		</div>
		categorias -->
			<div id="categoria-didatico" class="banner-categoria justify-content-center">
				<section>
					<img class="d-block w-100" src="https://drive.google.com/uc?id=1zr5EXbItMpW2tNHkkKC-aAsHxj5g_Lfk" alt="Didático">
					<!-- Card deck -->
					<div class="card-deck" style="margin-top: 2%; padding-left:15%;">

						<div class="row col-md-10 justify-content-center">

							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
						</div>
					</div>
					<!-- Card deck -->
				</section>
			</div>

			<div id="categoria-fantasia" class="banner-categoria justify-content-center">
				<section>
					<img class="d-block w-100" src="https://drive.google.com/uc?id=1jd5LWtK1wIiTjlsJyHNh4HpEnCHsK86b" alt="Didático">
					<!-- Card deck -->
					<div class="card-deck" style="margin-top: 2%; padding-left:15%;">

						<div class="row col-md-10 justify-content-center">

							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
						</div>
					</div>
					<!-- Card deck -->
				</section>
			</div>

			<!-- categoria infantil -->
			<div id="categoria-infantil" class="banner-categoria justify-content-center">
				<section>
					<img class="d-block w-100" src="https://drive.google.com/uc?id=1MaCVIuJk9Ir-x3VHS_us75Yx5FH68MKq" alt="Didático">
					<!-- Card deck -->
					<div class="card-deck" style="margin-top: 2%; padding-left:15%;">

						<div class="row col-md-10 justify-content-center">

							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
						</div>
					</div>
					<!-- Card deck -->
				</section>
			</div>
			<!-- categoria infantil -->
			<!-- categoria geral -->
			<div id="categoria-geral" class="banner-categoria justify-content-center">
				<section>
					<img class="d-block w-100" src="https://drive.google.com/uc?id=1qZNQn0z8jbQB7w3zk5egr-p4wpkDVR2Y" alt="Didático">
					<!-- Card deck -->
					<div class="card-deck" style="margin-top: 2%; padding-left:15%;">

						<div class="row col-md-10 justify-content-center">

							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
							<!-- Card -->
							<div class="col-md-3">
								<div class="card mb-4">
									<div class="view overlay">
										<img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/pt/d/d9/Capa_do_livro_Como_Ser_um_Pirata.jpg" alt="">
										<a><div class="mask rgba-white-slight"></div></a>
									</div>
									<div class="card-body text-center">
										<a href="" class="grey-text"><h5>Cressida Cowell</h5></a>
										<h5>
											<strong>
												<a href="" class="dark-grey-text">Como ser um pirata<span class="badge badge-pill danger-color">NEW</span></a>
											</strong>
										</h5>
										<h4 class="font-weight-bold blue-text"><strong>R$59,99</strong></h4>
									</div>
								</div>
							</div>
							<!-- Card -->
						</div>
					</div>
					<!-- Card deck -->
				</section>
			</div>
			<!-- categoria geral -->
		</main>
		<!--Main Layout-->

		<!--Footer-->
		<footer class="page-footer font-small unique-color-dark pt-3">

			<!-- Footer Elements -->
			<div class="container">

				<!-- Call to action -->
				<ul class="list-unstyled list-inline text-center py-2">
					<li class="list-inline-item">
						<!-- mensagem do footer -->
						<h5 class="mb-1">LibSys, o mundo da leitura perto de você</h5>
					</li>
				
				</ul>
				<!-- Call to action -->

			</div>
			<!-- Footer Elements -->
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">
				© 2018 Copyright
				<a href="../index.html"> LibSys Online</a>
			</div>
			<!-- Copyright -->

		</footer>
		<!--Footer-->

		<!-- SCRIPTS -->
		<!-- JQuery -->
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="../js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="../js/mdb.min.js"></script>
		</body>
	
	</html>