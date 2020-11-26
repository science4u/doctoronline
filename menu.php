<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O seu médico online">
    <meta name="keywords" content="Médicos, clínicas, saúde, doutor, medicina" />
    <meta name="clinica" content="DoctorOnline">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">
    <title>DoctorOnline &amp;</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- preloader css -->
    <link rel="stylesheet" href="css/introLoader.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <!-- owl carousel styles -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
    <!-- date picker css: serve para os formulários datas-->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- main style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>
    <!-- modernizr -->
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Document Wrapper
    ============================================= -->
    <main id="wrapper">

        <!-- // Preloader markup -->
        <div id="element" class="introLoading"></div>

                <!-- Header
        ============================================= -->
        <header id="header" class="navbar-fixed-top">
            <div id="header-wrap">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Logo e "toogle" são agrupados para melhor exibição em telemóvel -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo ============================================= -->
                                <div id="logo">
                                    <a href="index.php" class="doctoronline-logo"><img src="images/logo.png" alt="DoctorOnline Logo" height="110" width="250" title="DoctorOnline"></a>
                                </div>
                                <!-- # FIM Logo -->
                            </div>

                            <!-- Menu principal -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <!-- Lista itens de Menu começa aqui -->
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="active" href="index.php">Home</a></li>
                                        
                                        <li class="dropdown">
                                                <a class="dropdown" href="sobre.php">Sobre nós
                                                </span></a> <!-- caret: seta para indicar sub-menus -->
                                              
                                        </li>
                                                                                                                    
                                    
                                    <!-- Este é o 2º nivel: dropdown-menu -->
                                        <li class="dropdown">
                                                <a class="dropdown" href="servicos.php">Os nossos serviços
                                                <span class="caret"></span></a> <!-- caret: seta para indicar sub-menus -->
                                                <ul class="dropdown-menu">
                                                <li><a href="clinicageral.php">Clínica Geral</a></li>
                                                <li><a href="cardiologia.php">Cardiologia</a></li>
                                                <li><a href="meddentaria.php">Medicina Dentária</a></li>
                                                <li><a href="#">Preços</a></li>
                                                </ul>
                                        </li>
                                            <!-- Fim do 2º nivel: dropdown-menu --> 


                                    <li><a href="marcacoes.php">Marcações</a></li> 
                                    <li><a href="consultas.php">Consultas online</a></li>
                                    <li><a href="contactos.php">Onde estamos </a></li>
                                    <li><a href="backoffice/applicationlayer/login.php">LOGIN</a></li>  <!-- verificado -->
                                </ul>
                        </div>
                        <!-- # FIM Menu principal -->
                        <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </header>

    <!-- ===================== FIM de header ===================== -->

    <!-- Jquery and javascript files -->
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <!-- date picker js -->
    <script type="text/javascript" src="js/datepicker.js"></script>
    <!-- bootstrap 3.3.6 js -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- owl carousel js-->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <!-- smooth scroll js -->
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <!-- preloader js -->
    <script type="text/javascript" src="js/jquery.introLoader.pack.min.js"></script>
    <!-- custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
