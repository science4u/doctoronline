<!DOCTYPE html>
<html lang="en">

<head>
<!-- Head serve para METADADOS:-->
<title>Detalhes de membros</title>
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
                    <h1>Doctor's Profile</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis enim sit repudiandae, itaque impedit laboriosam fugit dignissimos debitis quod corrupti!</p>
                </div>
            </div>
        </section>
        <!-- fimm de banner -->

        <!-- member full detail -->
        <section class="member-detail">
            <div class="container">
                <div class="page-nav">
                    <span class="heading-nav"><a href="index.html">Home</a> | Team Member</span>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="images/team-member3.jpg" alt="medihere team member" class="img-responsive" title="Dr. M. A. Kulsum">
                    </div>
                    <div class="col-md-7 detail-content">
                        <h3>Dr. M. A. Kulsum</h3>
                        <p>medihere Senior Specialist</p>
                        <ul>
                            <li> <span><strong>Speciality : </strong> Dental Specialist.</span> </li>
                            <li> <span><strong>Degrees :</strong> M.B.B.S, F.C.P.S.</span></li>
                            <li> <span><strong>Experience :</strong> 15 years of experience.</span></li>
                            <li> <span><strong>Training :</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ducimus, harum, rerum sapiente quo sint aut libero vel fugiat, sequi nihil reiciendis maxime laboriosam praesentium atque quidem blanditiis necessitatibus quia voluptates, quos. Harum molestiae, facere dicta quis perspiciatis ipsa dolorum atque nam, distinctio, nesciunt eligendi sit non ad saepe qui!</span></li>
                            <li> <span><strong>Work days :</strong> Monday, Wednesday, friday 10am - 5pm.</span></li>
                        </ul>
                        <div class="member-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- member details ends -->

     <!-- Início de footer (inclui newsletter)-->
     <div class="footer">
                <?php include 'footer.php';?>
    </div>
    <!-- #FIM de footer-->
    </main>
    <!-- Fim de página  -->

</body>

</html>
