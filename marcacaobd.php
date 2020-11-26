<!DOCTYPE html PUBLIC "#">
<html>
<head>
<!-- esta metatag serve para fazer o redirecionamento para outra página na url indicada, 
content é "0" porque é imediato  -->
<meta HTTP-EQUIV="REFRESH" content="0; url=appointment-confirmation.php"> 
</head>
<body>
	<?php
# Passa os valores do formulário (marcacoes.php) para a base de dados // testado
		$nome1=$_POST['primeiro_nome'];
		$nome2=$_POST['ultimo_nome'];
		$email=$_POST['email'];
		$telefone=$_POST['telefone'];
		$data=$_POST['data'];
		$hora=$_POST['hora'];
		$dataN=$_POST['dataN'];
		$mensagem=$_POST['mensagem'];
		$especialidade=$_POST['especialidade'];

		    
		    $body .= "Primeiro nome: " . $nome1 . "\n"; 
		    $body .= "Último Nome: " . $nome2 . "\n"; 
		    $body .= "Email: " . $email . "\n"; 
		    $body .= "Contacto telefónico: " . $telefone . "\n"; 
			$body .= "Data pretendida: " . $data . "\n"; 
			$body .= "Hora: " . $hora . "\n"; 
		    $body .= "Data de Nascimento: " . $dataN . "\n"; 
			$body .= "Mensagem: " . $mensagem . "\n"; 
			$body .= "Especialidade: " . $especialidade . "\n"; 
			
		    
			//*************Envio de e-mail:****************

			//! Nota: só se consegue testar num servidor web
			mail("silvahumberto@hotmail.com","New email",$body);
			
			//aceder base de dados
			$servidor = "localhost"; 
			$utilizador = "root";
			$senha = ""; 
			$bd = "registration"; //nome da base de dados; pode ser alterado
  
			$conexao = mysqli_connect($servidor, $utilizador, $senha, $bd) or die (mysqli_error("Erro na ligação à base de dados")); 
			
			//Guarda dados na BD, na tabela book_nr MySQL			
			$query="insert into book_nr (Primeiro_nome, Ultimo_nome, Email, Contacto, Data, Hora, DataN, Mensagem, Especialidade)
			values('$nome1','$nome2','$email','$telefone','$data','$hora','$dataN','$mensagem','$especialidade')";
			
			$resultado=mysqli_query($conexao,$query); //testado

			// inserir em pacientes (não registado pelo próprio)
			$query2="insert into patients (UserID, Name, ContactNumber, Email)
			values('','$nome1 $nome2','$telefone','$email')";

			$resultado2=mysqli_query($conexao,$query2);//testado

			// igualar o UserID a patientID
			$query3="select UserID from patients where Name='$nome1 $nome2' and ContactNumber='$telefone'";//testado



			//**************
			$resultado3 = mysqli_query($conexao,$query3); //não testado

			mysqli_field_seek($resultado3 , 0);
			
			$resultadoarray=mysqli_fetch_row($resultado3);

			$patientID=$resultadoarray[0];

			// inserir em bookapp (999 criei para poder adicionar na tabela "médico sem especialidade")
			$query4="insert into bookapp (Date, Time, patientID, docID)
				values('$data','$hora','$patientID','999')";

			//$query4="insert into bookapp (AppoID,Date, Time, patientID, docID) values('0','2020-12-05','14:30','14','999')";
			//insert into bookapp (Date, Time, patientID,docID) values('2020-11-29','16:30','18','999')
			
			$resultado4=mysqli_query($conexao,$query4);
	
			
			mysqli_free_result($resultado);
			mysqli_free_result($resultado2);
			mysqli_free_result($resultado3);
			mysqli_free_result($resultado4);


			mysqli_close($conexao);


		?>





</body>
</html>

