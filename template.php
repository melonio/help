<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
	<meta http-equiv="Cache-control" content="public">

    <title>F&S Advogados</title>

	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	<link rel="shortcut icon" type="image/ico" href="https://www.fsadvogados.adv.br/favicon.ico" />

	<link rel="stylesheet" href="<?=BASE_URL ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=BASE_URL ?>assets/css/style.css">
  </head>

  <body>
	  <div class="container">
		  <div class="row">
		  	<div class="col-12 text-center text-md-left">
				<img src="assets/img/logo.png" />
			</div>
		  </div>
	  </div>

		  <?php $this->loadViewInTemplate($viewName, $viewData); ?>

	  <script type="text/javascript" src="<?=BASE_URL ?>assets/js/jquery-2.2.4.min.js"></script>
	  <script type="text/javascript" src="<?=BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>
  </body>
</hrml>
