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
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Ajax</a></li>
                            <li><a href="#">SEO</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Contato</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> <!-- End Menu -->

    <div class="container">
        <div class="slide">
            <div class="col-md-8">
                <article class="img-big">
                    <a href="" title="">
                        <img src="imgs/img1.jpg" alt="" class="img-slide-big">
                        <h1 class="text-slide">
                            Uma nova maneira de trabalhar com HTML5 - Acesse o curso HTML5
                        </h1>
                    </a>
                </article>
            </div>

            <div class="col-md-4">
                <article class="img-small col-md-12 col-sm-6 col-xm12">
                    <a href="" title="">
                        <img src="imgs/img2.jpg" alt="" class="img-slide-small">
                        <h1 class="text-slide">
                            Um nome para o titulo aqui
                        </h1>
                    </a>
                </article>

                <article class="img-small col-md-12 col-sm-6 col-xm12">
                    <a href="" title="">
                        <img src="imgs/img3.jpg" alt="" class="img-slide-small">
                        <h1 class="text-slide">
                            O título do post pode vir bem aqui...
                        </h1>
                    </a>
                </article>
            </div>
        </div>
        <!-- Fim do Slide -->

        <section class="content">
            <div class="col-md-8">
                <?php for ($i = 1; $i <= 10;$i++){?>
                <article class="post">
                    <div class="image-post col-md-4 text-center">
                        <img src="imgs/img1.jpg" alt="Nome Post" class="img-post">
                    </div>

                    <div class="description-post col-md-8">
                        <h2 class="title-post">Titulo do post pode vir bem aqui...</h2>

                        <p class="description-post">
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração
                        </p>

                        <a class="btn-post">Ir <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </article>
                <?php }?>
            </div>
            <div class="col-md-4"></div>
        </section>

    </div><!-- End Container -->

    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>