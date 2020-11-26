<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Head serve para METADADOS:-->
    <title>Index</title>
</head>

<body>
        <!--  Secção do menu (Header) -->
        <div class="menu">
            <?php include 'menu.php';?>
            </div>
        <!--  # FIM Secção do menu (Header)-->

            <!--  slider section-->
        <section class="slider" id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slide.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated rotateInUpRight">Bem-vindo(a) a DoctorOnline</h1>
                            <p class="animated bounceInDown">Encontre aqui cuidados de saúde primários de excelência. O nosso lema é "Uma vida com saúde".</p>
                            <a class="animated tada" href="#">Ler Mais...</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slide1.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated bounceInLeft">Nós cuidamos de si</h1>
                            <p class="animated bounceInRight">Trabalhamos com dedicação para lhe fornecer serviços de saúde de qualidade.</p>
                            <a class="animated bounceInUp" href="#">Ler Mais...</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slide2.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated lightSpeedIn">Nós prometemos os melhores cuidados</h1>
                            <p class="animated slideInDown">Estamos atentos às mais recentes tecnologias na área da saúde.</p>
                            <a class="animated rotateIn" href="#">Ler Mais...</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slide3.jpg" alt="#" />
                        <div class="carousel-caption">
                            <h1 class="animated zoomIn">A sua saúde importa</h1>
                            <p class="animated rollIn">Todos juntos pela sua saúde, procuramos ter uma abordagem moderna e flexível nos serviços que prestamos!</p>
                            <a class="animated zoomInUp" href="#">Ler Mais...</a>
                        </div>
                    </div>
                </div>

                <!-- Controlos -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" area-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" area-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- fim de slider  -->

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

        <!-- Os nossos serviços -->
        <section class="services" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Os nossos serviços</h2>
                        <p>Estamos a comemorar 5 anos de assistência médica, 5 anos de atendimento excepcional ao paciente, 5 anos de crescimento e inovação. 

                            A nossa rede de clínicas e oferta de serviços cresceram. Agora oferecemos um novo serviço de vídeoconsultas online e uma variedade de serviços de cuidados secundários, incluindo fisioterapia, dermatologia, serviços de imagem, entre outros.
                            
                            Também temos serviços de análises clínicas e exames de imagiologia. </p>
                        <div class="row">
                            <div class="col-md-12 single-services">
                              <!-- Lista especialidades/serviços-->  
                                <?php include ('especialidades.inc.php'); ?>
                                <!-- #Fim Especialidades Serviços-->
                     <!-- Secção lateral com menu estilo acordeão-->           
                    <div class="col-md-4 service-tb">
                        <img src="images/service1.jpg" alt="Serviços" class="img-responsive" title="Our Services Images">
                        <h3>Porquê usar os nossos serviços</h3>
                        <div class="panel-group" id="general-questions">
                            <div class="panel faq-panel">
                                <div class="faq-heading">
                                    <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#general-questions" href="#gf1" aria-expanded="false">
                                   Uma equipa dedicada e profissional <i class="indicator glyphicon  pull-right glyphicon-plus"></i>
                                </a>
                              </h4>
                                </div>
                                <div id="gf1" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                                    <div class="panel-body">
                                    Temos orgulho em cuidar de famílias inteiras, desde os bebés aos avós, com o tempo, o cuidado e a atenção de que precisam, fornecendo informações atualizadas sobre as diferentes áreas da medicina, através do desenvolvimento profissional contínuo da nossa equipa. 
                                    Também acreditamos na medicina preventiva e oferecemos exames de saúde diariamente.
                                    </div>
                                </div>
                            </div>

                            <div class="panel faq-panel">
                                <div class="faq-heading">
                                    <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#general-questions" href="#gf2" aria-expanded="false">
                                   Serviços de consultas online  <i class="indicator glyphicon pull-right glyphicon-plus"></i>
                                </a>
                              </h4>
                                </div>
                                <div id="gf2" role="tablist" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                    O nosso objetivo é fornecer o melhor atendimento médico aos nossos pacientes através de um moderno relacionamento com a nossa equipa de especialistas, e garantir ao paciente os últimos avanços tecnológicos para aceder seus próprios registos de saúde, fazer reservas e pagamentos online, tornando o processo mais simples e eficiente.
                                    </div>
                                </div>
                            </div>

                            <div class="panel faq-panel">
                                <div class="faq-heading">
                                    <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#general-questions" href="#gf3" aria-expanded="false">
                                   Confiança e experiência  <i class="indicator glyphicon glyphicon-plus pull-right"></i>
                                </a>
                              </h4>
                                </div>
                                <div id="gf3" role="tablist" class="panel-collapse collapse" aria-expanded="false">
                                    <div class="panel-body">
                                    Na DoctorOnline, temos mais de 10 anos de experiência privada em Clínica Geral e escolhemos especialistas de alto calibre em todas as áreas médicas para garantir que os nossos pacientes tenham acesso ao “melhor médico”.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service section ends -->

        <!-- team section -->
        <section class="team" id="team">
            <div class="container">
                <div class="row">
                    <div class="team-heading text-center">
                        <h2>Conheça alguns dos nossos médicos</h2>
                        <p>Temos uma equipa de profissionais dedicados e empenhados com o objectivo de lhe proporcionar serviços de saúde de qualidade.</p>
                        <p>Conheça alguns dos nossos médicos:</p>
                    </div>
                    <div id="team-slide" class="owl-carousel">
                        <!-- member 1 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member1.jpg" alt="Membro de equipa" title="John Smith">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.php">Ver perfil</a>
                                </div>
                            </div>
                            <h3>João Ferreira</h3>
                            <h4>Cardiologia</h4>
                        </div>
                        <!-- member 2 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member2.jpg" alt="Membro de equipar" title="Jubaida Banu">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.php">Ver perfil</a>
                                </div>
                            </div>
                            <h3>J. Martins</h3>
                            <h4>Ortopedia</h4>
                        </div>
                        <!-- member 3 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member3.jpg" alt="Membro de equipa" title="M. A. Kulsum">
                                <div class="item-cap">
                                    <div class="item-socials">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="tt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gp" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <a class="btn btn-info" href="member-detail.php">Ver perfil</a>
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
                                    <a class="btn btn-info" href="member-detail.php">Ver perfil</a>
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
                                    <a class="btn btn-info" href="member-detail.php">Ver perfil</a>
                                </div>
                            </div>
                            <h3>M. Andrade</h3>
                            <h4>Hematologia/h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM secção de equipa -->

        <!-- about section -->
        <section class="home-about text-center">
            <div class="aboverlay"></div>
            <div class="container">
                <div class="row">
                    <div class="about-heading">
                        <h2>O que os pacientes dizem sobre nós</h2>
                        <span>Alguns testemunhos dos nossos clientes.</span>
                    </div>
                    <div id="about-content" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="images/patient1.jpg" alt="The Last of us">
                            <p>Uma equipa fantástica sempre pronta a ajudar. Uso frequentemeente os serviços médicos da DoctorOnline pois sofro de diabetes.</p>
                            <h3>Maria Sousa <span>(Secretária administrativa)</span></h3>
                            <h4>Paciente Regular</h4>
                        </div>
                        <div class="item">
                            <img src="images/patient2.jpg" alt="The Last of us">
                            <p>Utilizei pela primeira vez o serviço de consultas on-line para a minha filha. Achei bastante prático pois deram as melhores instruções e não foi sequer preciso deslocar-nos. Recomendo.</p>
                            <h3>José Ferreira <span>(Director comercial)</span></h3>
                            <h4>Paciente esporádico</h4>
                        </div>
                        <div class="item">
                            <img src="images/patient3.jpg" alt="The Last of us">
                            <p>Adorei o profissionalismo e a simpatia com que me atenderam. Também recorri aos serviços de análises clínicas. Muito profissionais e rápidos.</p>
                            <h3>Maria Carvalho <span>(Contabilista )</span></h3>
                            <h4>Paciente esporádica</h4>
                        </div>
                        <div class="item">
                            <img src="images/patient4.jpg" alt="The Last of us">
                            <p>Necessito usar com regularidade os serviços desta clínica porque estou a fazer tratamentos dentários complexos. São uma equipa dedicada que nos fazem sentir uma família.</p>
                            <h3>Tomás Ribeiro <span>( Designer gráfico )</span></h3>
                            <h4>Paciente habitual</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section ends -->




        <!-- Início de footer (inclui newsletter)-->
            <div class="footer">
                <?php include 'footer.php';?>
            </div>
        <!-- #FIM de footer-->

    <!-- main page ends -->
</body>

</html>
