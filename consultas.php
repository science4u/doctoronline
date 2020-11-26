<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Consultas Online</title>
</head>
<body>

       <!--  Secção do menu (Header) -->
       <div class="menu">
            <?php include 'menu.php';?>
        </div>
        <!--  # FIM Secção do menu (Header)-->

        <!-- banner -->
        <section id="banner" class="banner text-center">
            <div class="container">
                <div class="row">
                    <h1><br>Serviços DoctorOnline</h1>
                   
                </div>
            </div>
        </section>
         <!-- fim de banner  -->

        <!-- Consultas online -->
        <section class="services" id="service">
            <div class="container">
                <div class="page-nav"><!-- link de navegação na página -->
                    <span class="heading-nav"><a href="index.php">Home</a> | Serviços</span>
                </div>

                  <!-- Texto sobre Consultas online-->
                  <div>
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h2>Consultas Online</h2>
                        <h3>Saiba mais sobres este serviço</h3>
                        <p>Como funcionam as consultas online?
                        </p><br>
                        <p> Tenha uma assistência médica sem no conforto da sua casa e em segurança. 
                            Em algumas situações poderá ser necessário deslocar-se posteriormente a uma das nossas clínicas ou enviaremos um médico a sua casa.
                            Necessário dispositivo com ligação à internet: Smartphone, Tablet ou Computador.
                            </p><br>
                            <p> 1-  Reserve sua consulta de vídeo online;

                            <p>2-  Receba um e-mail de confirmação com o link do vídeo;

                            <p>3-  Clique no link para iniciar a consulta;

                            <p>4-  Faça a sua consulta por vídeo com um dos nossos médicos;

                            <p>5-  A maioria das dúvidas pode ser resolvida por meio de uma videochamada, no entanto, se nosso médico precisar examiná-lo pessoalmente, será encaminhado para a nossa clínica mais próxima para uma segunda consulta;

                            <p>6-  As consultas online terão um desconto face às consultas presenciais.
                        </p>
                    </div>

                     <!-- Imagem sobre Consultas online -->
                     <div class="col-md-6">
                        <img src="images/consultas.png" alt="#" class="img-responsive" title="Consultas online">
                    </div>

                <div class="row">
                    <div class="col-md-12 single-services">
                         <!-- Lista especialidades/serviços-->  
                            <?php include 'especialidades.php'; ?>
                        <!-- #Fim Especialidades Serviços-->
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
