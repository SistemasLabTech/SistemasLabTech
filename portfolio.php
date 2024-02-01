<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './static/head.php'; ?>
</head>
<body>
    <?php include './static/loader.php'; ?>
	<?php include './static/topbar.php'; ?>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="https://www.mepacsa.com/images/logo-foot.png"  alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a  href="index.php">Inicio</a></li>
                        <li><a href="about-us.php">Acerca de</a></li>
                        <li><a href="services.php">Nuestro servicios</a></li>
                        <li><a  class="active" href="portfolio.php">Infraestructura</a></li>
						<li><a href="contact.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php include './components/Infraestructura/Banner.php'; ?>
    <?php include './components/Infraestructura/Portafolio.php'; ?>
    <?php include './static/footer.php'; ?>  
</body>
</html>