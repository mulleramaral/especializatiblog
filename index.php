<!DOCTYPE html>
<html>
    <head>
        <title>Blog EspecializaTi</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Css Personalizado -->
        <link rel="stylesheet" href="css/especializati.css">

        <!-- Css Personalizado -->
        <link rel="stylesheet" href="css/especializatireset.css">

        <!-- Css Personalizado Responsive -->
        <link rel="stylesheet" href="css/especializati-responsive.css">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="imgs/favicon.png">
        <meta name="viewport" content="width=device-width,user-scalable=no;initial-scale=1">
    </head>
<body>
    <header class="top">
        <div class="container">
            <div class="logo col-md-6">
                <img src="imgs/logo-especializati.png" alt="EspecializaTi" class="logo">
            </div>

            <div class="form col-md-6">
                <form action="" class="form form-search form-inline">
                    <input type="text" name="pesquisar" placeholder="Pesaquisar" class="form-control">
                    <button>
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </form>
            </div>
        </div> <!-- Fim Container -->
    </header>  <!-- Fim Header TOP -->

    <div class="menu">
        <div class="container container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?pg=categoria">PHP</a></li>
                            <li><a href="?pg=categoria">JavaScript</a></li>
                            <li><a href="?pg=categoria">jQuery</a></li>
                            <li><a href="?pg=categoria">Ajax</a></li>
                            <li><a href="?pg=categoria">SEO</a></li>
                        </ul>
                    </li>

                    <li><a href="?pg=empresa">Empresa</a></li>
                    <li><a href="?pg=contato">Contato</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> <!-- End Menu -->

    <div class="container">
        <?php
            if(!$_GET){
                include 'pages/home.php';
            } else if(isset($_GET['pg']) && file_exists("pages/{$_GET['pg']}.php")){
                include "pages/{$_GET['pg']}.php";
            }else{
                include "pages/404.php";
            }
        ?>
    </div><!-- End Container -->

    <footer class="footer">
        <p class="footer">Todos os direitos reservados - EspecializaTi <?= date('Y')?></p>
    </footer>

    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>