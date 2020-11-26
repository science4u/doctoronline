<!DOCTYPE html>
<html lang="pt">



<body>

        <!--  Secção do menu (Header) -->
        <div class="menu">
            <?php include 'menu.php';?>
        </div>
        <!-- # FIM Secção do menu (Header)-->

        
    <div class="confirmation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 jumbotron style='margin-top:100px;'">

                            <?php 

                            //aceder base de dados
                            $servidor = "localhost"; 
                            $utilizador = "root";
                            $senha = ""; 
                            $bd = "registration"; //nome da base de dados; pode ser alterado
                            $table = "newsletter";

                            //$first_name= $_POST['firstname']; 
                            //$last_name= $_POST['lastname']; 
                            $email= $_POST['email']; 
                            $Iduser="";

                            
                            // Conexão à base de dados 
                            
                            $conexao = mysqli_connect($servidor, $utilizador, $senha, $bd) 
                            or die (mysqli_error("Erro na ligação à base de dados")); 
                            
                            //$query= "INSERT INTO $table  ". "VALUES ('$first_name', '$last_name', '$email')"; 
                            $query= "INSERT INTO $table  "."VALUES ('$Iduser', '$email')"; 
                            

                            //Consulta base de dados
                            $resultado=mysqli_query ($conexao, $query) or die ("Erro na consulta a base de dados."); 

                            echo '<h2><br>Obrigado! Foi adicionado com sucesso.</h2>' . '<br>'; 
                            //Fecha a ligação
                            mysqli_close($conexao); 
                            
                            ?> 
                 <span> Voltar atrás. <strong><a href="index.php">Home</a></strong></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>