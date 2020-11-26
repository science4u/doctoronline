<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Newsletter e Footer</title>
</head>

<body>
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="newsletter-contents">
                    <div class="col-md-6 clearfix">
                        <form action="newsletter_signup.php" method="POST"> <!-- Define o método -->
                            <input class="col-md-9 col-sm-9 col-xs-9" type="email" placeholder="Introduza o Email" name="email">
                            <input class="col-md-3 col-sm-3 col-xs-3" type="submit" value="Submeter">

                        </form>
                    </div>
                    <div class="col-md-6 clearfix">
                        <h3>Subscreva a nossa newsletter.<br>Fique actualizado!</h3>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #FIM de newsletter -->

                                <?php
                                //incluir a ligação a servidor; $mysqli indica a conexão a bd                         
                                (include 'backoffice/datalayer/server.php');
                                //indice do artigo 
                                // apresento 3 últimos artigos
                                // ultimo post 
                                $query= "select * from artigos" ;
                                $result=mysqli_query($mysqli,$query);
                            
                                $row=mysqli_fetch_all($result);
                                //contar numero de linhas (=numero de posts)
                                $num_rows = mysqli_num_rows($result);
                                     
                               // printf ($row[$num_rows-1][1]); // titulo1
                                
                                ?>



        <!-- Início de footer -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 footer-widget1">
                            <h3>Posts populares</h3>
                            <ul class="popular-posts">

                                <li>
                                    <a href="blog-single3.php">
                                        <img src="images/news_covid.jpg" alt="#">
                                    </a>
                                    <h4><a href="blog-single3.php"><?php printf ($row[$num_rows-1][1]); // titulo ?></a></h4>
                                    <span><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-1][3]); // data ?></span>
                                </li>

                                <li>
                                    <a href="blog-single2.php">
                                        <img src="images/news_cirurgy.jpg" alt="#">
                                    </a>
                                    <h4><a href="blog-single2.php"><?php printf ($row[$num_rows-2][1]); // titulo ?></a></h4>
                                    <span><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-2][3]); // data ?></span>
                                </li>

                                <li>
                                    <a href="blog-single1.php">
                                        <img src="images/news_dentist.jpg" alt="#">
                                    </a>
                                    <h4><a href="blog-single1.php"><?php echo ($row[$num_rows-3][1]); // titulo ?></a></h4>
                                    <span><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-3][3]); // data ?></span>
                                </li>

                                <li>
                                <a href="blog.php" class="btn btn-info text-right">Ver todos os posts <i class="fa fa-angle-right"></i></a>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="col-md-4 footer-widget2">
                            <h3>Contactos</h3>
                            <span>Rua das Naus, nº25 </span>
                            <br>
                            <span>8500-560 Portimão</span>
                            <br>
                            <span>mail@doctoronline.com</span>
                            <br>
                            <span>+351 282123456</span>

                            <div class="footer-socials">
                                <h4>Siga-nos nas redes sociais</h4>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>

               

                    </div>
                </div>
            </div>
            <div id="back-top">
                <a class="back-top" href="#slider"><i class="fa fa-angle-up"></i></a>
            </div>
            <div class="footer-bottom text-center">
                <p>Copyright &copy; 2020 <a href="https://doctorOnline.com/">DoctorOnline</a>. Todos os direitos reservados</p>
            </div>
        </footer>
    </main>
    <!-- #FIM de footer-->

</body>

</html>
