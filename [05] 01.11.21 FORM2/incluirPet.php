<!doctype html> <!-- salvar como novoPet.html -->
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>SGP - Inserção de Pet</title>
	</head>
	<body>
		<h1>Sistema de Gerenciamento de Pets</h1>
		<hr>
		<h2>Inclusão de Pet</h2>
		<?php
			// salvar como incluirPet.php
			
			// 1 - Receber os dados do formulário
			
			// VARIÁVEL
			// ========
			// Espaço em memória que se dá um nome e que 
			// consegue armazenar um valor que pode ser 
			// posteriormente alterado (variado)
			
			// Exemplos:
			// $idade=5;
			// ...
			// $idade=20;
			
			// MATRIZ
			// ======
			// Espaço em memória que se dá um nome e que 
			// consegue armazenar diversos valores em posições
			// diferentes e que podem ter estes valores alterados
			//
			// $nome[0] = "Ana";
			// $nome[1] = "Cláudio";
			// $nome[2] = "Roberta";
			
			// $nome[0] = "Márcia Cláudia";
			
			// $salarios[0] = 1500;
			// $salarios[1] = 2150;
			// $salarios[2] = 1980;
			
			/*
				$_POST["nome"] ou $_GET["nome"] - depende do method do <form>

				1 - Recebendo os dados em variáveis
			*/
			$nome		=	$_GET["nome"];
			$sexo		=	$_GET["sexo"];
			$tipo		=	$_GET["tipo"];
			$nomeDono	=	$_GET["nomeDono"];
			$idade		=	$_GET["idade"];
			
			/*
				2 - Validação básica de dados
			*/
			
			/*
				= operador de atribuição - coloca um valor no elemento à esquerda
				== operador de comparação - compara valor da esquerda com valor da direita
			*/

			// Validando o nome do pet (não pode ficar vazio)
			if ($nome=="") 
				die("<b>Nome</b> do Pet deve ser informado!");
			
			// Validando o nome do Dono do pet (não pode ficar vazio)	
			if ($nomeDono=="")
				die("<b>Nome do Dono</b> do Pet deve ser informado!");
			
			// Validando o tipo do pet (não podeser escolha = ficar vazio)	
			if ($tipo=="")
				die("<b>Tipo</b> do Pet deve ser selecionado!");

			
			/*
				3 - Exibir os dados na tela
			*/
			echo "O nome do Pet é: <b>$nome</b> <br>";
			echo "Seu sexo é <b>$sexo</b> <br>";
			echo "Tipo: <b>$tipo</b> <br>";
			echo "Idade: <b>$idade</b> <br>" ;
			echo "Nome do dono: <b>$nomeDono</b> <hr>";
			
			// 4 - Abrindo o banco de dados
			// .1 - Conexão com servidor MYSQL

			// Função mysqli_connect(p1, p2, p3)
			
			// Conecta o PHP com um servidor MYSQL 
			
			// Parâmetros (String)
			// ===================
			// p1	-	Endereço do servidor MYSQL a ser conectado
			// p2	-	Usuário existente neste servidor
			// p3 	-	Senha deste usuário
			
			// Retorna um objeto de conexão
			
			$con = mysqli_connect("localhost" , "root", "");
			
			// Exemplo de outra conexão:
			// $conexao2 = mysqli_connect("www.site.com.br", "admin", "123");
			
			
			// .2 - Abertura do banco de dados
			
			// Função mysqli_select_db(p1, p2)
			// Abre um banco de dados existente na conexão informada

			// Parâmetros
			// ==========
			// p1 - Um objeto de conexão existente
			// p2 - Nome do banco de dados existente a ser aberto
			
			mysqli_select_db($con, "sgp") or 
				die("Erro na abertura do banco de dados." . mysqli_error($con));
			
			// Toda função nativa do PHP para acessar e manipular dados no MYSQL
			// começa com o prefixo mysqli_
			
			// Existem funções obsoletas (não mais em uso) 
			// que devem ser evitadas
			// que começam com o prefixo mysql_
			
			
			// 3. Criar uma variável com o comando de inclusão SQL
			
			$comandoSQL = "INSERT INTO pets
							(nome, sexo, tipo, nomeDono, idade) 
							VALUES 
							('$nome', '$sexo', '$tipo', '$nomeDono', $idade)";
			
			// Mostrar o comando sql na tela 
			// e testar para ver se está funcionando no console
			// e se funcionar, escondo ele
			// die($comandoSQL);
			
			// 4. Enviar o comando para o MYSQL executar
			// Função mysqli_query(p1, p2)
			// p1 = objeto de conexão existente
			// p2 = o comando SQL a ser executado
			
			// mysqli_query($con,$comandoSQL) or mysqli_error($con);
			
			mysqli_query($con, $comandoSQL) or 
				die("Erro na inserção do Pet: " . mysqli_error($con) );
			
			echo "Pet <b>$nome</b> incluído com sucesso!";
			
			
		?>
	</body>
</html>