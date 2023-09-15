<?php
include 'getClientesQuantidade.php';
include 'getUsuariosQuantidade.php';
include 'getFornecedoresQuantidade.php';

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>Multidados TI</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
	<!-- BEGIN HEADER -->

	<?php include 'cabecalho.php'; ?>

	<!-- END HEADER -->
	<div class="clearfix">
	</div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<?php include 'menu.php'; ?>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN PAGE HEADER-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Dashboard <small>tudo que você precisa à um click.</small>
						</h3>
						<ul class="page-breadcrumb breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="index.html">Home</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li class="pull-right">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
									<i class="fa fa-calendar"></i>
									<span>
									</span>
									<i class="fa fa-angle-down"></i>
								</div>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat blue" id="card-cliente">
							<div class="visual">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="details">
								<div class="number">
									<?= $qtdClientes; ?>
								</div>
								<div class="desc">
									Clientes
								</div>
							</div>
							<a class="more" id="btn-cliente" href="#">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat green" id="card-usuario">
							<div class="visual">
								<i class="fa fa-group"></i>
							</div>
							<div class="details">
								<div class="number">
									<?= $qtdUsuarios; ?>
								</div>
								<div class="desc">
									Usuários
								</div>
							</div>
							<a class="more" href="#" id="btn-usuario">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat purple" id="card-fornecedor">
							<div class="visual">
								<i class="fa fa-globe"></i>
							</div>
							<div class="details">
								<div class="number">
									<?= $qtdFornecedores; ?>
								</div>
								<div class="desc">
									Fornecedores
								</div>
							</div>
							<a class="more" id="btn-fornecedor" href="#">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- END DASHBOARD STATS -->
				<div class="clearfix">
				</div>
				<!--Tabela-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box" id="lista">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-folder-open"></i>Tabela Simples
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body" id="dados-usuarios"></div>
						</div>
						<!-- END SAMPLE TABLE PORTLET-->
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php include 'rodape.php'; ?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/index.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
			App.init(); // initlayout and core plugins
			Index.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->




	<!-- SCRIPT PARA POPULAR A TABELA USUARIO -->
	<script>
		$(".botaoUsuario").click(function() {
			$("#lista-clientes").css("display", "none");
			$("#lista-fornecedores").css("display", "none");
			$("#lista-usuarios").css("display", "block");

		});
		$(document).ready(function() {
			// Solicita os dados completos dos clientes
			$.ajax({
				url: 'getUsuarios.php',
				type: 'POST',
				dataType: 'json',
				success: function(data) {
					// Os dados dos clientes foram obtidos com sucesso, você pode manipulá-los aqui
					// console.log(data);
					// Por exemplo, você pode iterar pelos clientes e exibir suas informações


					$('#dados-usuarios').append(
						'<div class="table-responsive ">' +
						'<table class="table table-hover">' +
						'<thead >' +
						'<th>Nome</th>' +
						'<th>CPF</th>' +
						'<th>Endereço</th>' +
						'<th>Telefone</th>' +
						'<th>Usuario </th>' +
						'</tr>' +
						'</thead>' +
						'<tbody id="lista-usuarios"></tbody>' +
						'</table>' +
						'</div>'
					);
					data.forEach(function(usuario) {
						$('#lista-usuarios').append(
							'<tr>' +
							'<td>' + usuario.nome + '</td>' +
							'<td>' + usuario.cpf + '</td>' +
							'<td>' + usuario.endereco + '</td>' +
							'<td>' + usuario.telefone + '</td>' +
							'<td>' + usuario.usuario + '</td>' +
							'</tr>'

						);
					});
				},
				error: function(error) {
					console.error(error);
				}
			});
		});
	</script>
	<!-- FIM SCRIPT PARA POPULAR A TABELA USUARIO -->

	<script>
		// SETANDO A COR DE FUNDO DA TABELA INICIANDO COM #4b8df8
		document.getElementById('lista').style = 'background: #4b8df8';


		
		document.getElementById('btn-cliente').onclick = corTabelaClientes;
		
		function corTabelaClientes() {
			var corCliente = document.getElementById('card-cliente');			
			var estiloCliente = window.getComputedStyle(corCliente);
			var corDeFundoCliente = estiloCliente.background;
			document.getElementById('lista').style = 'background: ' + corDeFundoCliente + ' !important';
		}


		
		document.getElementById('btn-usuario').onclick = corTabelaUsuarios;
		
		function corTabelaUsuarios() {
			var corUsuario = document.getElementById('card-usuario');
			var estiloUsuario = window.getComputedStyle(corUsuario);
			var corDeFundoUsuario = estiloUsuario.background;
			document.getElementById('lista').style = 'background: ' + corDeFundoUsuario + ' !important';
		}

		
		
		document.getElementById('btn-fornecedor').onclick = corTabelaFornecedores;

		function corTabelaFornecedores() {
			var corFornecedor = document.getElementById('card-fornecedor');
			var estiloFornecedor = window.getComputedStyle(corFornecedor);
			var corDeFundoFornecedor = estiloFornecedor.background;
			document.getElementById('lista').style = 'background: ' + corDeFundoFornecedor + ' !important';
		}
	</script>


</body>
<!-- END BODY -->

</html>