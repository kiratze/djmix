<!DOCTYPE html>
<html class="no-js" lang="">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ==================================================================================================== -->
  <!-- F U E N T E S  G O O G L E  -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
  <!-- ==================================================================================================== -->
  <!-- dependencias FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  <!-- ==================================================================================================== -->
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" href="imagenes/ico.png">
  <!-- ==================================================================================================== -->
  <!-- NORMALIZE -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- ==================================================================================================== -->
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!-- ==================================================================================================== -->
  <!-- A N I M A T E  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">



	<title>Djmix Argentina</title>
	
</head>
<body>

	<div class="container">

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle d-flex justify-content-center"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="btn-close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="modal-tit">Bienvenido</h1>
        
         <form>
          <div class="form-group-modal">
            <label for="exampleInputEmail1" class="color-label">Email:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@gmail.com">
                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie.</small>
          </div><br><br>

          <div class="form-group-modal">
            <label for="exampleInputPassword1" class="color-label">Contraseña:</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
         Recordarme al iniciar sesión
        </label>
          </div>

         </form>

      </div>
      <div class="modal-footer d-flex justify-content-center align-items-initial">
        <button type="submit" class="btn btn-primary btn-modal">Entrar</button>
      </div>
    </div>
  </div>
</div>


 <!-- N A B V A R  B O O T S T R A P-->

  <nav class="navbar sticky-top navbar-expand-lg">
  <a class="navbar-brand" href="#"><div class="logo">Djmix <h6>Argentina</h6></div></a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="Index.html">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Eventos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">EVENTO</a>
          <div class="dropdato">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem voluptate et sit fugit soluta. Praesentium et, similique qui quam cupiditate, esse odit ab quisquam sunt nemo fugiat, pariatur, voluptas iusto.</div>
          <a class="dropdown-item" href="#">EVENTO NUMERO TAL</a>
          <a class="dropdown-item" href="#">EVENTO</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Galeria.html">Galería</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <!-- Button trigger modal 
        <button type="button" class="btm" data-toggle="modal" data-target="#exampleModalCenter"><a class="nav-link" href="#">Iniciar sesión</a></button>-->
      </li>
    </ul>
  </div>
</nav>


<!-- T E R M I N A   E L   N A V B A R -->


	<section class="p-part">
    <div id="player">

<div id="player-controles">
<audio id="player_html5" autoplay="" src="http://198.7.59.204:31560/;">Seu navegador não tem suporte a HTML5</audio><img src="http://i684.photobucket.com/albums/vv202/abimaelterrucazo/1_zpsbndvigua.png~original" width="100" height="50" align="absmiddle" onclick="document.getElementById(&#39;player_html5&#39;).play();" style="cursor:pointer" />&nbsp;<img src="http://i684.photobucket.com/albums/vv202/abimaelterrucazo/2_zpsx5s2z48j.png~original" width="100" height="50" align="absmiddle" onclick="document.getElementById(&#39;player_html5&#39;).pause();" style="cursor:pointer" />&nbsp;<img src="http://i684.photobucket.com/albums/vv202/abimaelterrucazo/3_zpsgkcpxlrx.png~original" width="100" height="50" align="top" onclick="document.getElementById(&#39;player_html5&#39;).volume += 0.1;" style="cursor:pointer" />&nbsp;<img src="http://i684.photobucket.com/albums/vv202/abimaelterrucazo/4_zpsejtzubt8.png~original" width="100" height="50" align="top" onclick="document.getElementById(&#39;player_html5&#39;).volume -= 0.1;" style="cursor:pointer" />
<script>
// Volume Inicial player HTML5
document.getElementById("player_html5").volume=1.0;
</script>
</div>

<div id="player-vu-meter"><img src="http://player.srvstm.com/img/img-player-vu-meter.gif" width="410" height="30" /></div></div>

		<div class="p-part transmision animated infinite flash"><a href="#" style="color: #fff; font-style:none; text-decoration: none;">Transmisión en vivo</a></div>

		</section>

<!-- QUIENES SOMOS -->

    <section class="s-part d-flex">
    	<article class="f-cir col-3">
    	    <div class="circle"> 
    		     <div class="circleimg"></div>
    	    </div>
    	</article>
    	<article class="contenido col-xl-9">
    		<h1 class="titulo">¿Quiénes somos?</h1>
        <br>
    	Este sitio fue creado para difundir la escena de los Dj de Argentina. Si querés formar parte de nuestra comunidad, ponete en contacto con nosotros.</article>
    </section>

<!-- CANAL DE DJMIX -->

    <section class="t-part">
    	<h1 class="titulo">Canal de Djmix Argentina</h1><br>
             <div class="row">
              <div class="cont-video col-xl-4 col-md-5"><iframe width="100%" height="315" src="https://www.youtube.com/embed/3Dmii6XrE3A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>

              <div class="cont-video col-xl-4 col-md-5"><iframe width="100%" height="315" src="https://www.youtube.com/embed/tC0bPtJ0S-A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>

              <div class="cont-video col-xl-4 col-md-5"><iframe width="100%" height="315" src="https://www.youtube.com/embed/MJ3skZqxzuQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>



                    
            </div>   
    	      
    </section>

<!-- WIDGET DE FB Y TWITTER -->
    <section class="widget-t-f"> 
      <h1 class="titulo">Fan-page</h1><br><br>

      <div class="row">
        <div class="col-xl-6 col-md-6">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdjmix708090Argentina%2F&tabs=timeline&width=500px&height=450px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="100%" height="450px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>

        <div class="col-xl-6 col-md-6">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDjmixArgentina%2F&tabs=timeline&width=500px&height=450px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="450px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>

      </div>
      
    </section>

<!-- CONTACTO Y NEWSLETTER -->

    <section class="container contact" id="contacto">
    	<div class="row">
    	<div class="contacto col-md-6">
            <h2 class="subtitle">Datos de contacto</h2>
    		<p>Aquí encontrarás nuestros datos de contacto. <br><br>
    		<strong>Teléfono:</strong> +5491140784186 <br><br>
    		<strong>Email:</strong> Djmixargentina@gmail.com<br><br>

            <h2 class="subtitle">Redes sociales</h2>
                <ul class="socialIcons">
                    <li><a href="https://www.facebook.com/DjmixArgentina/" class="social-fb"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCuIMg577z7md-HR3VMnCNKA" class="social-yt"></a></li>
                </ul>
            </p>

    		

    	
    	</div>
    	<div class="cajanewsl col-md-6">
            <h2 class="subtitle">Newsletter</h2>
            <p>Envíanos tus consultas</p>
            <form id="nwsl" class="box-news" action="send.php" method="post">
                <div class="form-group">
                   <label for="campoNombre">Nombre:</label>
                   <input type="text" class="form-control" id="campoNombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                   <label for="campoEmail">Email:</label>
                   <input type="email" class="form-control" id="campoEmail" placeholder="Email@gmail.com" required>
                </div>
                <div class="form-group">
                   <label for="campoMensaje">Mensaje</label>
                   <textarea class="form-control" id="campoMensaje" rows="3" placeholder="Envíanos tus dudas y/o comentarios" required></textarea>
                </div>  
            
                <button type="submit" class="btn btn-primary" value="Registrarse">Enviar</button>
            </form>




  
    		</div>
    		</div>


                         



    </section>
    <footer class="fo d-flex justify-content-center">
        <div class="copyright"> 2018 - Todos los derechos reservados</div>
    </footer>
 


	</div>


<!-- Javascript -->
<!-- B O O T S T R A P -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


<!-- WIDGET DE FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>