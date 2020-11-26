<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Especialidade de Medicina Geral e Familiar</title>
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
        <!-- Fim de Banner -->

        <!-- Serviço de Medicina Geral e Familiar -->
        <section class="services" id="Medicina Geral e Familiar">
            <div class="container">
                <div class="page-nav"><!-- link de navegação na página -->
                    <span class="heading-nav"><a href="index.php">Home</a> | Serviços</span>
                    </div>
                    <!-- Texto sobre Serviço de Medicina Geral e Familiar -->
                    <div>
                    <div class="row">
                            <div class="col-md-6 text-left">
                                <h2>Serviços e Especialidades</h2>
                                <h3>Serviço de Medicina Geral e Familiar</h3>
                                <p> A Medicina Geral e Familiar é uma especialidade médica que promove cuidados de saúde a todos os que procuram o médico de família, independentemente da idade, género, etnia ou estado de saúde, de forma personalizada (a cada um o que precisa), global (abarcando todos os problemas de saúde), acessível (está junto das pessoas) e em continuidade (ao longo do tempo).
                                <p> Não aborda apenas o doente e a sua saúde física, mas procura integrá-lo no contexto da sua vida, dos seus problemas, da sua cultura, da sua comunidade, dos seus medos, crenças, expectativas e necessidades. Ao não excluir nenhuma idade na sua abordagem, ou seja, o Médico de Família faz o seguimento de um doente desde o nascimento até à morte, permite o acompanhamento durante toda a sua vida. A Medicina Geral e Familiar é ainda um elo de ligação com as outras especialidades, já que o médico vai encaminhar o doente, que necessite de cuidados mais especializados, para a especialidade mais adequada.
                            
                                </p>
                            </div>
                            <!-- Imagem sobre Serviço de Cardiologia -->
                            <div class="col-md-6">
                                <img src="images/medfam.jpg" alt="#" class="img-responsive" title="Medicina Geral e Familiar">
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
