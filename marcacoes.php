<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Marcações</title>
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
                    <h1><br>Marcações</h1>
                    <p></p>
                </div>
            </div>
        </section>
       <!--#fim de banner  -->
    <!-- marcações -->
        <section class="service"style="margin-bottom:0px;">
            <div class="container">
                <div class="page-nav"><!-- link de navegação na página -->
                    <span class="heading-nav"><a href="index.php">Home</a> | Marcações</span>
                </div>
        </section>
 

        <!--lista de especialidades está em SQL -->
        <?php

        //incluir a ligação a servidor; $mysqli indica a conexão a bd                         
        (include 'backoffice/datalayer/server.php');
        
        $query= "select * from category";
        //fazer consulta a bd
        $result=mysqli_query($mysqli,$query);
        //retorna array com os resultados    
        //$row=mysqli_fetch_row($result);
        //$col = mysqli_fetch_array($result, MYSQLI_ASSOC);

        ?>

  <!-- !! Secção de marcação: formulário com método Post -->
  <section class="appointment text-center" id="appointment">
            <div class="container">
                <div class="row">
                    <h2><br>Faça aqui o seu pedido de marcação</h2>
                    
                    <div class="col-md-6">
                        <br>
                        <img src="images/appointment3.jpg" alt="#" height="800" width="535" class="img-responsive" title="Appointment with our great Doctors">
                    </div>
                    <div class="col-md-6">
                        <!-- Formulário: os dados são enviados para marcacaobd.php -->
                        <form action="marcacaobd.php" method="post" class="form-horizontal"> 
                            <!-- primeiro nome -->
                            <div class="col-md-6 col-sm-6">
                                <input name="primeiro_nome" type="text" placeholder="Primeiro Nome" class="form-control" required>
                            </div>
                            <!-- último nome -->
                            <div class="col-md-6 col-sm-6">
                                <input name="ultimo_nome" type="text" placeholder="Último Nome" class="form-control" required>
                            </div>
                            <!-- email  -->
                            <div class="col-md-6 col-sm-6">
                                <input name="email" type="email" placeholder="Email" class="form-control" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input name="telefone" type="text" placeholder="Contacto telefónico" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                 <!-- !!! seleciona a data pelo plugin datepicker -->
                                 <!-- !!! alterei para não precisar do plugin-->
                                 <br><label><h3>Data pretendida</h3></label>
                                <input type="date" id="date" name="data" placeholder="Data pretendida"  class="form-control" required>
                                <label><h3><br>Hora pretendida</h3></label>
                                <input type="time" id="time" name="hora" placeholder="Hora pretendida" class="form-control" min="09:00" max="18:00">
                            </div>
                            

                            <div class="col-md-6 col-sm-6">
                                <label><h3><br>Data de nascimento</h3></label>
                                <input type="date" id="date" name="dataN" placeholder="Data de nascimento" class="form-control" required>
                                
                            </div>


                            <div class="col-md-6 col-sm-6">
                                <select name="especialidade" class="form-control" REQUIRED>
                         <!-- código php dentro do html para ir buscar a lista de especialidades (em mySQL) para o utilizador escolher; Qual a vantagem ligar a BD? "mais consultas=menos eficiente" mas caso sejam adicionadas novas especialidades está actualizado-->
                                <option value="" disabled selected>Escolha especialidade:</option>   
                            <?php   while ($row=mysqli_fetch_assoc($result)) { ?>
						       
                                        <option>
                                        
                                            <?php echo $row['category_name'];?> 

                                        </option>

                                <?php } ?>                             
                                </select>
                            </div>


                            <div class="col-md-12 clearfix">
                                <textarea name="mensagem" id="appointment-message" rows="8" placeholder="Deixe aqui a sua mensagem (opcional). Obrigado." class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Submeter" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM de Secção de marcação: formulário com método Post -->

   <!-- !!  botão para formulário de registo com método Post -->
   <section class="appointment text-center" id="marcacoes">
        <div class="container">
            <div class="row">
                    <div class="col-md-12"> 
                    <h2>Faça aqui o seu registo</h2>
                    <p>Caso pretenda controlar o seu agendamento e outras informações relativas aos nossos serviços proceda por favor ao seu registo.</p>
                            
                    <a href="backoffice/applicationlayer/register.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registar</a> <!-- Nota: botão usa estilos de bootstrap.min.css -->
            </div>
        </div>
       
    </section>




  <!-- Serviços -->
  <section class="services" id="service">
            <div class="container">

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
                        <p></p>
                    </div>
                    <div id="team-slide" class="owl-carousel">
                        <!-- member 1 -->
                        <div class="item">
                            <div class="member-image">
                                <img src="images/team-member1.jpg" alt="Team Member" title="Miguel Ferreira">
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
                                <img src="images/team-member2.jpg" alt="Team Member" title="Jubaida Banu">
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
                                <img src="images/team-member3.jpg" alt="Team Member" title="M. A. Kulsum">
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
                                <img src="images/team-member4.jpg" alt="Team Member" title="D. P. Jorina">
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
                                <img src="images/team-member5.jpg" alt="Team Member" title="M. C. Jalil">
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
