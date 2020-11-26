<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Blog</title>
</head>

<body>

        <!--  Secção do menu (Header) -->
        <div class="menu">
            <?php include 'menu.php';?>
        </div>
        <!--  # FIM Secção do menu (Header)-->

        <!-- Blog page banner -->
        <section id="banner" class="banner text-center">
            <div class="container">
                <div class="row">
                    <h1>Blog DoctorOnline</h1>
                    <p></p>
                </div>
            </div>
        </section>
        <!-- banner ends -->

        <!-- blog Page content -->
        <section class="blog">
            <div class="container">
                <div class="page-nav">
                    <span class="heading-nav"><a href="index.html">Home</a> | Blog</span>
                </div>
                <div class="row">
                    <!-- blog content -->
                    <div class="col-md-9 blog-content">
        
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
                                     
                              
                                
                                ?>
                        <!--  post 3 -->
                        <article class="single-post">
                            <div class="post-thumb">
                                <a href="blog-single3.php"> <img src="images/news_covid.jpg" alt="#" title=<?php printf ($row[$num_rows-1][1]); // titulo ?>></a>
                            </div>


                            <div class="post-content">
                                <h2><a href="blog-single3.php"><?php printf ($row[$num_rows-1][1]); // titulo ?></a></h2>
                                <p>Quais os testes disponíveis atualmente em Portugal? Os testes disponíveis, atualmente, em Portugal são: Testes Moleculares de Amplificação de Ácidos Nucleicos (TAAN): são o método de referência para o diagnóstico e rastreio e confirmam a presença do vírus SARS-CoV-2 responsável pela doença COVID-19. São testes feitos com amostras recolhidas, através de zaragatoa, da região do nariz e/ou da garganta. Os seus resultados devem ser conhecidos no prazo máximo de 24 horas após a prescrição Testes Rápidos de Antigénio (TRAg):
                                <a href="blog-single3.php">Ler mais... <i class="fa fa-angle-double-right"></i></a></p>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-date"><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-1][3]); // data ?></li>
                                        <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                        <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 0 comentários</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <!-- post 2-->
                        <article class="single-post">
                            <div class="post-thumb">
                                <a href="blog-single2.php"> <img src="images/news_cirurgy.jpg" alt="#" title=<?php printf ($row[$num_rows-2][1]); // titulo ?>></a>
                            </div>
                            <div class="post-content">
                                <h2><a href="blog-single2.php"><?php printf ($row[$num_rows-2][1]); // titulo ?></a></h2>
                                <p>A cirurgia pode melhorar sua vida Dependendo da sua patologia, a cirurgia eliminará parte da bexiga (urostomia), parte do intestino delgado (ileostomia) ou parte do intestino grosso (colostomia). Durante o procedimento cirúrgico, o cirurgião irá construir um estoma - uma abertura artificial para o exterior através da parede abdominal - que permitirá a eliminação dos efluentes digestivos ou urinários. Na maioria dos casos, a construção do estoma soluciona o seu problema de saúde permitindo uma vida perfeitamente normal. O que é um estoma? <a href="blog-single.html">Ler mais...<i class="fa fa-angle-double-right"></i></a></p>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-date"><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-2][3]); // data ?></li>
                                        <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                        <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 0 comentários</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <!--  post 1-->
                        <article class="single-post">
                            <div class="post-thumb">
                                <a href="blog-single1.php   "> <img src="images/news_dentist.jpg" alt="#" title=<?php printf ($row[$num_rows-3][1]); // titulo ?>></a>
                            </div>
                            <div class="post-content">
                                <h2><a href="blog-single1.php"><?php printf ($row[$num_rows-3][1]); // titulo ?></a></h2>
                                <p>A Medicina Dentária, é a área da saúde humana que estuda e trata do sistema estomatognático - compreende a face, pescoço e cavidade bucal, abrangendo ossos, musculatura mastigatória, articulações, dentes e tecido - saúde oral. Por saúde oral, entende-se a ausência de doença estomatológica, bem como a correcta função, estabilidade e até mesmo estética de todo o sistema estomatognático. <a href="blog-single.html">Ler mais... <i class="fa fa-angle-double-right"></i></a></p>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-date"><i class="fa fa-calendar"></i> <?php printf ($row[$num_rows-3][3]); // data ?></li>
                                        <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                        <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 0 comentários</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <!-- single post -->
                     
                   

                        <!-- ========post pagination======== -->
                        <div class="post-pagination">
                            <nav>
                                <ul class="pagination">
                                    <li class="disabled">
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- // Blog content ends here -->

                    <!-- // blog sidebar -->
                    <aside class="col-md-3 right-sidebar">
                        <!-- widget -->
                        <form action="?">
                            <input type="search" placeholder="Procurar...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>

                        <!-- widget -->
                        <h3>Categorias</h3>
                        <ul class="categories">
                            <li>
                                <a href="#"> <i class="fa fa-angle-right"></i> Dentistas</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Cardiologia</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Otorrinolaringologia</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Emergências</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> </a>Neurologia</li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Cardiologia</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Clínica Geral</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Exames laboratoriais</a></li>
                        </ul>

                        <!-- widget -->
                        <h3>Posts recentes</h3>
                        <ul class="recent-post-widget">
                            <li>
                                <a href="blog-single3.php">
                                    <img src="images/news_covid.jpg" alt="#">
                                    <h4><?php printf ($row[$num_rows-1][1]); // titulo ?></h4>
                                    <span><i class="fa fa-calendar"></i> <?php printf ($row[$num_rows-1][3]); // data ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-single2.php">
                                    <img src="images/news_cirurgy.jpg" alt="#">
                                    <h4><?php printf ($row[$num_rows-2][1]); // titulo ?></h4>
                                    <span><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-2][3]); // data ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="blog-single1.php">
                                    <img src="images/news_dentist.jpg" alt="#">
                                    <h4><?php printf ($row[$num_rows-3][1]); // titulo ?></h4>
                                    <span><i class="fa fa-calendar"></i> <?php printf ($row[$num_rows-3][3]); // data ?></span>
                                </a>
                            </li>
                          
                        </ul>

                        <!-- widget -->
                        <h3>Tags</h3>
                        <ul class="list-inline tags">
                            <li><a href="#">dentista</a></li>
                            <li><a href="#">medicina</a></li>
                            <li><a href="#">doctorOnline</a></li>
                            <li><a href="#">tratamento</a></li>
                            <li><a href="#">ossos</a></li>
                            <li><a href="#">coração</a></li>
                            <li><a href="#">cancro</a></li>
                            <li><a href="#">cérebro</a></li>
                            <li><a href="#">olhos</a></li>
                            <li><a href="#">estômago</a></li>
                            <li><a href="#">testes laboratoriais</a></li>
                            <li><a href="#">rins</a></li>
                            <li><a href="#">fígado</a></li>
                            <li><a href="#">diabetes</a></li>
                            <li><a href="#">cardiologia</a></li>
                            <li><a href="#">intestino</a></li>
                            <li><a href="#">pulmão</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>
        <!-- // Blog page content ends -->


     <!-- Início de footer (inclui newsletter)-->
     <div class="footer">
                <?php include 'footer.php';?>
            </div>
    <!-- #FIM de footer-->
    
    </main>
    <!-- main page ends -->

</body>

</html>
