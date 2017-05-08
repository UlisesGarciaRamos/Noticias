<!DOCTYPE html>
<html>
<head>
<title>Noticias del Puerto </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]> ULISES GARCIA RAMOS
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <div class="box_wrapper">
    <header id="header">
      <div class="header_top">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
                <li><a href="login.html">Ingresa</a></li>
                <li><a href="#">Archivo</a></li>
                <li><a href="#">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="header_search">
          <button id="searchIcon"><i class="fa fa-search"></i></button>
          <div id="shide">
            <div id="search-hide">
              <form action="#">
                <input type="text" size="40" placeholder="Search here ...">
              </form>
              <button class="remove"><span><i class="fa fa-times"></i></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="logo_area"><a class="logo" href="index.html"><b>S</b>Extras <span>Noticias internacionales</span></a></div>
        
      </div>
    </header>
    <div class="latest_newsarea"> <span>Ultimas noticias</span>
      <ul id="ticker01" class="news_sticker">
        <li><a href="#">Noticia 1</a></li>
        <li><a href="#">Noticia 2</a></li>
        <li><a href="#">Noticia 3</a></li>
        <li><a href="#">Noticia 4</a></li>
        <li><a href="#">Noticia 5</a></li>
        <li><a href="#">Noticia 6</a></li>
        <li><a href="#">Noticia 7</a></li>
        <li><a href="#">Noticia 8</a></li>
        <li><a href="#">Noticia 9</a></li>
      </ul>
    </div>
              
			   <footer id="footer">
      <div class="footer_top">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Seguir por correo electronico</h2>
            <div class="subscribe_area">
              <p>"Suscribete aqui para estar siempre informado, al escribir tu correo electronico se te enviar� un link para suscribirte"</p>
              <form action="#">
                <div class="subscribe_mail">
                  <input class="form-control" type="email" placeholder="Email Address">
                  <i class="fa fa-envelope"></i></div>
                <input class="submit_btn" type="submit" value="Suscribir">
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Noticias populares</h2>
            <ul class="catg3_snav ppost_nav">
              <li>
                <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/hotel.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Se suicida lanzandose de un hotel</a></div>
                </div>
             </li>
              <li>
                <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="images/mar.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> En el mar, la vida es mas sabrosa dicen los expertos</a></div>
                </div>
             </li>
              <li>
                <div class="media"> <a class="media-left" href="#"> <img src="images/tiburon.jpg" alt=""> </a>
                  <div class="media-body"> <a class="catg_title" href="#"> Tiburon tiburon, tiburon a la vista</a></div>
                </div>
             </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInRight">
            <h2>Etiquetas</h2>
            <ul class="footer_labels">
              <li><a href="#">Comedia</a></li>
              <li><a href="#">Artes</a></li>
              <li><a href="#">Cinema</a></li>
              <li><a href="#">Naturaleza</a></li>
              <li><a href="#">Deportes</a></li>
              <li><a href="#">Turismo</a></li>
              <li><a href="#">Videos</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInRight">
            <h2>Formulario de contacto</h2>
            <form action="php/Contacto.php" method="post" class="contact_form">
              <label>Nombre</label>
              <input class="form-control" type="text" maxlength="100" required="required" name="nombre">
              <label>Email</label>
              <input class="form-control" type="email" maxlength="100" required="required" name="email">
              <label>Mensaje</label>
              <textarea class="form-control" cols="30" rows="10" name="mensaje"></textarea>
              <input class="send_btn" type="submit" value="Enviar">
            </form>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="footer_bottom_left">
          <p>Copyright &copy; 2017</p>
        </div>
        <div class="footer_bottom_right">
          <ul>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Googel+" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Rss" href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>