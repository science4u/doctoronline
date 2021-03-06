<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Especialidade de Cardiologia</title>
</head>

<body>

        <!--  Secção do menu (Header) -->
        <div class="menu">
            <?php include 'menu.php';?>
        </div>
        <!--  # FIM Secção do menu (Header)-->

        <!-- Banner -->
        <section id="banner" class="banner text-center">
            <div class="container">
                <div class="row">
                    <h1>Serviços DoctorOnline</h1>
                    <p>O nosso lema é uma vida com saúde!</p>
                </div>
            </div>
        </section>
        <!-- Fim de banner -->

        <!-- Serviço de Cardiologia -->
        <section class="services" id="cardiologia">
            <div class="container">
                <div class="page-nav"><!-- link de navegação na página -->
                    <span class="heading-nav"><a href="index.php">Home</a> | Serviços</span>
                </div>
                    <!-- Texto sobre Serviço de Cardiologia -->
                    <div>
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <h2>Serviços e Especialidades</h2>
                                <h3>Serviço de Cardiologia</h3>
                                <p> A cardiologia é uma especialidade médica e um ramo da medicina interna que se preocupa com as doenças do coração. Lida com o diagnóstico e tratamento de doenças como defeitos cardíacos congénitos, doença arterial coronária, eletrofisiologia, 
                                    insuficiência cardíaca e doença cardíaca valvular. As subespecialidades do campo da cardiologia incluem eletrofisiologia cardíaca, ecocardiografia, cardiologia intervencionista e cardiologia nuclear.

                                Entre as doenças da área da Cardiologia estão, entre outras:
                                <p>Arritmias cardíacas;
                                <p>Hipertensão arterial;
                                <p>Doença coronária;
                                <p>Insuficiência cardíaca;
                                <p>Enfarte do miocárdio;
                                <p>Miocardiopatias.
                                </p>
                            </div>
                            <!-- Imagem sobre Serviço de Cardiologia -->
                            <div class="col-md-6">
                                <img src="images/cardiologia.png" alt="#" class="img-responsive" title="Cardiologia">
                            </div>

                        </div>
                    </div>
            <!-- !! Secção de botão marcação: botão para formulário com método Post -->
                <section class="appointment text-center" id="marcacoes">
                    <div class="container">
                            <div class="row">
                                <div class="col-md-12"> 
                                    <h2>Faça aqui a sua marcação</h2>
                                    <p>Caso pretenda controlar o seu agendamento e outras informações relativas aos nossos serviços proceda por favor ao seu registo.</p>
                                
                                     <a href="marcacoes.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Marcações</a> <!-- Nota: botão usa estilos de bootstrap.min.css -->
                        
                                </div>
                            </div>

                        </div>
            
                </section>
            <!-- FIM de Secção botão de marcação: formulário com método Post -->
                <div class="row">
                    <div class="col-md-12 single-services">
                    <h2>Outros Serviços e Especialidades:</h2>

                            <!-- Quadro com especialidades -->
                            <div class="row">
                                    <div class="col-md-12 single-services">
                                                <!-- Lista especialidades/serviços-->  
                                                    <?php include ('especialidades.inc.php'); ?>
                                                <!-- #Fim Especialidades Serviços-->
                                    </div>
                                </div>


                    </div>
                </div>
            </div>
        </section>


           <!-- Secção equipa médica -->
           <section class="team" id="team">
            <div class="container">
                <div class="row">
                    <div class="team-heading text-center">
                        <h2>Conheça alguns dos nossos médicos</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, praesentium fugiat, laborum neque ex nemo nisi nesciunt quae eum quod.</p>
                    </div>
                    <div id="team-slide" class="owl-carousel">
                        <!-- member 1 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member1.jpg" alt="medihere Team Member" title="John Smith">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.html">View Profile</a>
                                </div>
                            </div>
                            <h3>João Ferreira</h3>
                            <h4>Cardiologia</h4>
                        </div>
                        <!-- member 2 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member2.jpg" alt="medihere Team Member" title="Jubaida Banu">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.html">View Profile</a>
                                </div>
                            </div>
                            <h3>J. Martins</h3>
                            <h4>Ortopedia</h4>
                        </div>
                        <!-- member 3 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member3.jpg" alt="medihere Team Member" title="M. A. Kulsum">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.html">View Profile</a>
                                </div>
                            </div>
                            <h3>M. A. Silva</h3>
                            <h4>Dentista</h4>
                        </div>
                        <!-- member 4 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member4.jpg" alt="medihere Team Member" title="D. P. Jorina">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.html">View Profile</a>
                                </div>
                            </div>
                            <h3>D. P. Alves</h3>
                            <h4>Neurologia</h4>
                        </div>
                        <!-- member 5 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member5.jpg" alt="medihere Team Member" title="M. C. Jalil">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.html">View Profile</a>
                                </div>
                            </div>
                            <h3>M. Andrade</h3>
                            <h4>Hematologia/h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- # FIM Secção equipa médica -->

     <!-- Início de footer (inclui newsletter)-->
     <div class="footer">
                <?php include 'footer.php';?>
            </div>
    <!-- #FIM de footer-->
</main>
<!-- main page ends -->

</body>

</html>
