<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YouTube KenkPlay MDL</title>
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="assets/css/material.red.css">
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
	<script src="https://code.jquery.com/jquery.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="assets/css/app.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="mdl-layout layout-white mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	<header class="mdl-layout__header">
	  <div class="mdl-layout__header-row">
	  	<span class="mdl-layout-title visible-xs"><a href="#"><img src="kenkplay.png" width="60" height="" alt=""></a></span>
	    <div class="mdl-layout-spacer"></div>

	    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
	                mdl-textfield--floating-label mdl-textfield--align-right-0">
	      <label class="mdl-button mdl-js-button mdl-button--icon"
	             for="fixed-header-drawer-exp">
	        <i class="material-icons">search</i>
	      </label>
	      <div class="mdl-textfield__expandable-holder">
	        <input class="mdl-textfield__input" type="text" name="sample"
	               id="fixed-header-drawer-exp" />
	      </div>
	    </div>

	    <div class="mdl-layout-spacer"></div>

	    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored btn-icon"><i class="material-icons ">cloud_upload</i> <span class="hidden-xs">Upload</span></button>

	    <button id="dropdown-menu" class="mdl-button mdl-js-button mdl-button--icon" style="margin-left: 20px">
		    <i class="material-icons">more_vert</i>
		</button>
		<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="dropdown-menu">
		    <li class="mdl-menu__item">Mi Perfil</li>
		    <li class="mdl-menu__item">Configurar</li>
		    <li class="mdl-menu__item">Salir</li>
		</ul>

	  </div>
	</header>
	<div class="mdl-layout__drawer">
	  <span class="mdl-layout-title "><a href="#"><img src="kenkplay.png" width="70" height="" alt=""></a> <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored btn-toggle hidden-xs"><i class="material-icons">list</i></button> </span>
	  <nav class="mdl-navigation">
	    <h3 class="mdl-navigation__link navigation-title" >Explorar</h3>
	    <a class="mdl-navigation__link active" href="#"><i class="material-icons">home</i> Qué ver</a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">account_box</i> Mi Canal</a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">video_library</i> Suscripciones</a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">history</i> Historial</a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">timer</i> Ver mas tarde <span class="mdl-badge" data-badge="6"></span></a>

	    <h3 class="mdl-navigation__link navigation-title" >Suscripciones</h3>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">account_circle</i> Keny Kalín Romero</a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">account_circle</i> Bacheli Acuña </a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">account_circle</i> J. Roimer Ruiz </a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">account_circle</i> Marco Vidaure </a>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">account_circle</i> Kenyk Romero</a>
	    <hr>
	    <a class="mdl-navigation__link" href="#"><i class="material-icons">cloud_upload</i> Subir un Vídeo</a>
	    <br>
	  </nav>
	</div>
	<main class="mdl-layout__content">
    <div class="page-content">
    	<div class="mdl-tabs mdl-js-tabs ">

		    <div class="mdl-tabs__tab-bar bg-white">
		        <a href="#tab1" class="mdl-tabs__tab"><i class="material-icons visible-xs">home</i> <span class="hidden-xs">Inicio</span></a>
		        <a href="#tab1" class="mdl-tabs__tab"><i class="material-icons visible-xs">music_note</i> <span class="hidden-xs">Electro</span></a>
		        <a href="#tab1" class="mdl-tabs__tab"><i class="material-icons visible-xs">volume_up</i> <span class="hidden-xs">Reguetón</span></a>
		        <a href="#tab1" class="mdl-tabs__tab"><i class="material-icons visible-xs">queue_music</i> <span class="hidden-xs">Baladas</span></a>
		        <a href="#tab1" class="mdl-tabs__tab"><i class="material-icons visible-xs">play_arrow</i> <span class="hidden-xs">Rock</span></a>
		    </div>

			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-tablet">
					<div class="video-container">
				        <iframe width="640" height="405" src="https://www.youtube.com/embed/RgKAFK5djSk" frameborder="0" allowfullscreen></iframe>
				    </div>
				    <h1 class="video-title hidden">Wiz Khalifa - See You Again ft. Charlie Puth</h1>
				</div>
				<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet">
					<div class=" mdl-shadow--2dp panel-white">
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--12-col">
								<ul class="img-list">
									<li>
										<img src="https://i.ytimg.com/vi/RgKAFK5djSk/mqdefault.jpg" alt="" width="100" height="70">
										<div class="img-list-content">
											<h3 class="img-list-title"><a href="#">Wiz Khalifa - See You Again ft. Charlie Puth</a></h3>
											<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#" data-video="RgKAFK5djSk"> Reproducir</a>
										</div>
									</li>
									<li>
										<img src="https://i.ytimg.com/vi/9w9dXWU5nMI/mqdefault.jpg" alt="" width="100" height="70">
										<div class="img-list-content">
											<h3 class="img-list-title"><a href="#">Prince Royce - Back It Up</a></h3>
											<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#" data-video="9w9dXWU5nMI"> Reproducir</a>
										</div>
									</li>
									<li>
										<img src="https://i.ytimg.com/vi/SB8-YY2DyHI/mqdefault.jpg" alt="" width="100" height="70">
										<div class="img-list-content">
											<h3 class="img-list-title"><a href="#">Plan B - Mi Vecinita</a></h3>
											<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#" data-video="SB8-YY2DyHI"> Reproducir</a>
										</div>
									</li>
									<li>
										<img src="https://i.ytimg.com/vi/RgKAFK5djSk/mqdefault.jpg" alt="" width="100" height="70">
										<div class="img-list-content">
											<h3 class="img-list-title"><a href="#">Wiz Khalifa - See You Again ft. Charlie Puth</a></h3>
											<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="#" data-video="RgKAFK5djSk"> Reproducir</a>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

	    	<div class="mdl-tabs__panel is-active" id="tab1">

				<div class="p-content">
					<div class=" mdl-shadow--2dp panel-white">
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--12-col">
								<h2 class="section-title">Nuevos</h2>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/RgKAFK5djSk/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="#" data-video="RgKAFK5djSk">Wiz Khalifa - See You Again ft. Charlie Puth</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button id="dropdown" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="dropdown">
									    <li class="mdl-menu__item">Facebook</li>
									    <li class="mdl-menu__item">Twitter</li>
									</ul>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/9w9dXWU5nMI/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="https://www.youtube.com/watch?v=9w9dXWU5nMI" data-video="9w9dXWU5nMI">Prince Royce - Back It Up</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/SB8-YY2DyHI/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="#" data-video="SB8-YY2DyHI">Plan B - Mi Vecinita</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/RgKAFK5djSk/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="#" data-video="RgKAFK5djSk">Wiz Khalifa - See You Again ft. Charlie Puth</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button id="dropdown" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/9w9dXWU5nMI/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="https://www.youtube.com/watch?v=9w9dXWU5nMI" data-video="9w9dXWU5nMI">Prince Royce - Back It Up</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/SB8-YY2DyHI/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="#" data-video="SB8-YY2DyHI">Plan B - Mi Vecinita</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="p-content">
					<div class=" mdl-shadow--2dp panel-white">
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--12-col">
								<h2 class="section-title">Recomendados</h2>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/RgKAFK5djSk/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="#" data-video="RgKAFK5djSk">Wiz Khalifa - See You Again ft. Charlie Puth</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button id="dropdown" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/9w9dXWU5nMI/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="https://www.youtube.com/watch?v=9w9dXWU5nMI" data-video="9w9dXWU5nMI">Prince Royce - Back It Up</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/SB8-YY2DyHI/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="#" data-video="SB8-YY2DyHI">Plan B - Mi Vecinita</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--6-col-phone">
								<div class="mdl-card mdl-shadow--2dp card-wide">
								  <div class="mdl-card__title" style="background:url('https://i.ytimg.com/vi/9w9dXWU5nMI/hqdefault.jpg') center / cover">
								    <h3 class="mdl-card__title-text"><a href="https://www.youtube.com/watch?v=9w9dXWU5nMI" data-video="9w9dXWU5nMI">Prince Royce - Back It Up</a></h3>
								  </div>
								  <div class="mdl-card__menu">
								    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								      <i class="material-icons">share</i>
								    </button>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>

	    	</div>
		</div>

		<footer class="mdl-mega-footer">
			<div class="mdl-mega-footer--bottom-section">
			    <div class="mdl-logo"><a href="#"><img src="kenkplay.png" width="100" height="" alt=""></a></div>
			    <span style=" position: relative;top: 10px">Power by: Keny Kalín Romero Acuña</span>
		  	</div>
		  	<hr>
			<div class="mdl-mega-footer--bottom-section">
				<div class="mdl-logo">YouTube</div>
				<ul class="mdl-mega-footer--link-list">
				  <li><a href="#">Acerca de</a></li>
				  <li><a href="#">Prensa</a></li>
				  <li><a href="#">Derechos de Autor</a></li>
				  <li><a href="#">Creadores</a></li>
				  <li><a href="#">Publicidad</a></li>
				  <li><a href="#">Desarrolladores</a></li>
				  <li><a href="#">+YouTube</a></li>
				  <br>
				  <li><a href="#">Condiciones</a></li>
				  <li><a href="#">Privacidad</a></li>
				  <li><a href="#">Política y Seguridad</a></li>
				  <li><a href="#">Enviar Comentarios</a></li>
				  <li><a href="#">!Prueba algo Nuevo¡</a></li>
				  <li> &copy; 2015 YouTube, LLC</li>
				</ul>
			</div>

		</footer>
    </div>

  	</main>
</div>
</body>
<script>
$(document).ready(function() {
	var btnOverlay = $(".btn-toggle");
	btnOverlay.on('click', function(event) {
		event.preventDefault();
		$(".mdl-layout--fixed-header").toggleClass("mdl-layout--fixed-drawer");
		$(".title-toggle").toggleClass("hidden");
	});
	$("a[data-video]").on('click', function(event) {
		event.preventDefault();
		$(".video-container iframe").attr('src', 'https://www.youtube.com/embed/'+$(this).data("video"));
	});
});
</script>
</html>