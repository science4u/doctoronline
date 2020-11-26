<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Artigo de Blog</title>
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
                    <h1>DoctorOnline Blog - Post </h1>
                    <p></p>
                </div>
            </div>
        </section>
        <!-- banner ends -->

        <!-- blog Page content -->
        <section class="blog">
            <div class="container">
                <div class="page-nav">
                    <span class="heading-nav"><a href="index.php">Home</a> | Último post</span>
                </div>
                <div class="row">
                    <!-- blog content -->
                    <div class="col-md-9 single-content">
                        <article class="post">
                            <div class="single-thumb">
                                <img src="images/news_dentist.jpg" alt="#" title="<?printf ($row[$num_rows-3][1]); // titulo?>" class="img-responsive">
                            </div>
                            <div class="post-content">
                                <h2>Título: </h2> <!-- título do artigo  -->
                                <h2><?php
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
                                     
                                printf ($row[$num_rows-3][1]); // titulo1
                                
                                ?></h2> <!-- título do artigo  -->
                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-date"><i class="fa fa-calendar"></i>
                                        <!-- data do artigo  -->
                                        Data de publicação: <?php
                                        $result3=mysqli_query($mysqli,$query);
                                            $row=mysqli_fetch_all($result3);
                                          
                                            printf ($row[$num_rows-3][3]); //data1
                                         
                                        ?>
                                        
                                    </li>
                                        <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                        <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 2 comentários</a></li>
                                    </ul>
                                </div><!-- conteúdo do artigo  -->
                                <p>
                                 <h3>  
                                     <?php 
                                        
                                            $result2=mysqli_query($mysqli,$query);
                                            $row=mysqli_fetch_all($result2);

                                            printf ($row[$num_rows-3][2]); //conteudo1
                                        ?>
                                   </h3>
                                </p>
                            </div> <!--FIM de conteúdo do artigo  -->
                        </article>

                        <!--************ Formulário de comentários ************ -->
                        <form action="?">
                            <div class="col-md-7">
                                <input type="text" placeholder="Nome" required>
                            </div>
                            <div class="col-md-7">
                                <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-7">
                                <textarea rows="8" placeholder="Comentário" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" value="Publicar">
                            </div>
                        </form>
                    </div>

                    <!-- // blog sidebar -->
                        <aside class="col-md-3 right-sidebar">
                        <!-- widget -->
                        <form action="?">
                            <input type="search" placeholder="Procurar...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>

                        <!-- widget -->
                        <h3>Categories</h3>
                        <ul class="Categorias">
                            <li>
                                <a href="#"> <i class="fa fa-angle-right"></i> Medicina Geral e Familiar</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Physical</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Psycological</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Theorilogical</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Head and Hair</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Heart Problem</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> General</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Additionals</a></li>
                        </ul>

                        <!-- widget -->
                        <h3>Posts recentes</h3>
                        <ul class="recent-post-widget">

                            <li>
                                <a href="#">
                                    <img src="images/news_covid.jpg" alt="#">
                                    <h4><?php printf ($row[$num_rows-1][1]); // titulo ?>
                                </h4>
                                    <span><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-1][3]); // data ?></span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img src="images/news_cirurgy.jpg" alt="#">
                                    <h4><?php printf ($row[$num_rows-2][1]); // titulo ?>
                                </h4>
                                    <span><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-2][3]); // data ?></span>
                                </a>
                            </li>
                           <li>
                                <a href="#">
                                    <img src="images/news_dentist.jpg" alt="#">
                                    <h4><?php echo ($row[$num_rows-3][1]); // titulo ?>
                                    </h4>
                                    <span><i class="fa fa-calendar"></i><?php printf ($row[$num_rows-3][3]); // data ?></span>
                                </a>
                            </li>
                          
                        </ul>

                
                        <!-- widget -->
                        <h3>Tags</h3>
                        <ul class="list-inline tags">
                            <li><a href="#">dentes</a></li>
                            <li><a href="#">medicina</a></li>
                            <li><a href="#">doctoronline</a></li>
                            <li><a href="#">tratamentos</a></li>
                            <li><a href="#">rins</a></li>
                            <li><a href="#">ossos</a></li>
                            <li><a href="#">coração</a></li>
                            <li><a href="#">cancro</a></li>
                            <li><a href="#">doenças</a></li>
                            <li><a href="#">olhos</a></li>
                            <li><a href="#">cérebro</a></li>
                            <li><a href="#">estômago</a></li>
                            <li><a href="#">testes</a></li>
                            <li><a href="#">coluna</a></li>
                            <li><a href="#">esqueleto</a></li>
                            <li><a href="#">ouvidos</a></li>
                            <li><a href="#">pele</a></li>
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
