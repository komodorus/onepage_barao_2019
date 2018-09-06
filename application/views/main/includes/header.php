<!doctype html>
<html lang="pt-br">
  <head>
    <title><?php echo $this->router->fetch_class() == 'curso' ? ucwords(mb_strtolower($curso->curso_nome)) . ' | Barão de Mauá' : 'Vestibular | Barão de Mauá' ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">
    
    <meta name="description" content="<?php echo isset($curso)? $curso->curso_description : 'Vestibular 2019 Barão de Mauá Ribeirão Preto. Cursos de: medicina, administração, psicologia, medicina veterinária, pedagogia e outros. Inscreva-se agora!' ?>">
    <meta name="keywords" content="<?php echo isset($curso)? $curso->curso_keywords : 'faculdades em ribeirão preto, faculdade ribeirão preto, melhores faculdades ribeirão preto, resultado vestibular barão de maua, resultado vestibular 2018 barão de maua, resultado vestibular medicina barão de maua' ?>">
    
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KN7MG58');
    </script>
    <!-- End Google Tag Manager -->


    <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flipclock.css'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-theme@0.1.0-beta.10/dist/select2-bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  </head>
  <body id="home" class="bg-dark-blue">  
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KN7MG58" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

      <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-gradient-dark-blue-green shadow">
        <a  href="https://vestibular.baraodemaua.br/cadastro.php" class="d-none text-center d-lg-block font-open-sans font-weight-bold letter-spacing-2 h4 bg-purple <?php echo $this->router->fetch_class() == 'curso' ? 'btn_curso_post' : '' ?>" id="inscrevase">Inscreva-se</a>
        <div id="nav-fluid" class="container">
            <h1 class="d-none">Vestibular barão de maua 2019</h1>
            <a class="navbar-brand logo-img d-block d-lg-none" href="<?php echo $this->router->fetch_class() == 'home' ? '#home' : base_url() ?>">
                <img src="<?php echo base_url('assets/img/logo-mobile.svg') ?>" alt="Barão de maua" class="img-fluid" height="auto" >
            </a>
            <a class="navbar-brand logo-img p-3 d-none d-lg-block" href="<?php echo $this->router->fetch_class() == 'home' ? '#home' : base_url() ?>">
                <img src="<?php echo base_url('assets/img/logo.svg') ?>" alt="Barão de maua" class="img-fluid p-3" height="auto" >
            </a>
            <a href="https://vestibular.baraodemaua.br/cadastro.php" id="nav-inscreva" class="navbar-brand text-white p-2 mt-2 d-inline-block d-lg-none rounded text-uppercase font-open-sans font-weight-bold letter-spacing-1 h4 bg-purple <?php echo $this->router->fetch_class() == 'curso' ? 'btn_curso_post' : '' ?>">
                Inscreva-se
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-3"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-3">
                        <a class="text-right nav-link text-uppercase text-white font-montserrat" href="<?php echo $this->router->fetch_class() == 'home' ? '#home' : base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="text-right nav-link text-uppercase text-white font-montserrat" href="<?php echo $this->router->fetch_class() == 'home' ? '#clock' : base_url('#clock') ?>">vestibular</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="text-right nav-link text-uppercase text-white font-montserrat" href="<?php echo $this->router->fetch_class() == 'home' ? '#cursos' : base_url('#cursos') ?>">cursos</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
