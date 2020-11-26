<!DOCTYPE html>
<html lang="pt">

<head>
<!-- Head serve para METADADOS:-->
<title>Contactos</title>
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
                    <h1><br>Onde estamos</h1>
                    <p>Para maior comodidade faça o registo por favor!</p>
                </div>
            </div>
        </section>
        <!-- fim de banner  -->

        <div class="contact">
            <div class="container">
                <div class="page-nav">
                    <span class="heading-nav"><a href="index.php">Home</a> | Contactos</span>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h3>Contactos:</h3>
                        <span>Rua das Naus, nº25 </span>
                        <br>
                        <span>8500-560 Portimão</span>
                        <br>
                        <span>mail@doctoronline.com</span>
                        <br>
                        <span>+351 282123456</span>

                        <div class="socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>                                                 
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <form action="contacto-confirmacao.php" method="post">
                            <input name="name" type="text" placeholder="Nome" required>
                            <input name="phone" type="text" placeholder="Contacto telefónico">
                            <input name="email" type="email" placeholder="Email" required>
                            <input name="subject" type="text" placeholder="Assunto">
                            <textarea name="message" rows="7" placeholder="Mensagem" required></textarea>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Mapa -->
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4498.267069582507!2d-8.536935113881999!3d37.134739897160934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2spt!4v1602696039703!5m2!1spt-PT!2spt"
                 width="100%" height="600" frameborder="0%" style="border:0px; padding:0px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    <!-- #FIM Mapa -->

    <!-- Início de footer (inclui newsletter)-->
         <div class="footer">
                <?php include 'footer.php';?>
            </div>
    <!-- #FIM de footer-->
</main>
<!-- main page ends -->

</body>

</html>
