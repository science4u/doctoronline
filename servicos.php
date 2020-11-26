<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Serviços</title>
</head>

<body>
          <!--  Secção do menu (Header) -->
            <div class="menu">
            <?php include 'menu.php';?>
            </div>
        <!--  # FIM Secção do menu (Header)-->
   
        <!--  banner -->
        <section id="banner" class="banner text-center">
            <div class="container">
                <div class="row">
                    <h1><br>Serviços DoctorOnline</h1>
                    <p></p>
                </div>
            </div>
        </section>
        <!-- fim de banner -->

        <!-- Serviços -->
        <section class="services" id="service">
            <div class="container">
                <div class="page-nav"><!-- link de navegação na página -->
                    <span class="heading-nav"><a href="index.php">Home</a> | Serviços</span>
                </div>
                <!-- Texto sobre Serviços -->
                <div>
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2>Serviços</h2>
                        <h3>As nossas especialidades e serviços.</h3>
                        <p> “Damos-lhe acesso a cuidados de saúde privados onde quer que esteja e que se adequem ao seu estilo de vida.”
                        <p> O nosso objetivo é fornecer o melhor atendimento médico aos nossos pacientes através de um forte relacionamento com a nossa equipa de especialistas,
                            e garantir ao paciente os últimos avanços tecnológicos para aceder seus próprios registos de saúde, fazer reservas e pagamentos online, tornando o processo mais simples e eficiente.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/services1.png" alt="#" class="img-responsive" title="Serviços">
                    </div>
                </div>
                </div>

                <!-- Quadro com especialidades -->
                <div class="row">
                    <div class="col-md-12 single-services">
                                <!-- Lista especialidades/serviços-->  
                                    <?php include ('especialidades.inc.php'); ?>
                                <!-- #Fim Especialidades Serviços-->
                    </div>
                </div>


            </div>
        </section>

        <div class="hospital text-center sp-hospital">
            <div class="container">
                <div class="row">
                    <h2>As nossas instalações</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum doloribus, vel ipsum assumenda, placeat quia.</p>
                    <img src="images/hospital.jpg" alt="#" class="img-responsive" title="Medihere Hospital">
                </div>
            </div>
        </div>

           <!-- Secção de equipa -->
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
        <!-- #Fim de secção de equipa -->

     <!-- Início de footer (inclui newsletter)-->
     <div class="footer">
             <?php include 'footer.php';?>
    </div>
    <!-- #FIM de footer-->
</main>
<!-- main page ends -->


</html>
