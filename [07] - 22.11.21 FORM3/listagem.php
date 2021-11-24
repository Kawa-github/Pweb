<!doctype html> <!-- salvar como listagem.php -->
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>SGP - Listagem de Pets</title>
	</head>

	<body>
		<h1>Sistema de Gerenciamento de Pets</h1>
		<hr>
		<h2>Listagem de Pets</h2>
		<?php 
/* 	Objetivo:
				=========
				Listar os registros/cadastros da tabela pets
			
				Sequencia de passos:
				====================
				
				1 - Conectar no MYSQL 
				2 - Abrir/selecionar o banco de dados SGP
				3 - Inserir o comando de seleção de dados numa variável
				4 - Enviar o comando de seleção para o MYSQL
				5 - Receber um record set (conjunto de registro)
				6 - Contar quantas linhas existem no record set
					- Se tiver menos que 1, a tabela está vazia.
					  Não tem porque listar. Aviso o(a) usuário(a) e
					  encerro o programa.
					- Caso contrário mostro o número de registros de pets existentes
				7 - Varrer e exibir na tela este conjunto de dados
			   
			*/
			
			// 1 - Conectar no MYSQL 
			$servidor	= "localhost";
			$usuario	= "root";
			$senha		= "";
			
			$conexao = mysqli_connect($servidor, $usuario, $senha);
			
			// 2 - Abrir/selecionar o banco de dados SGP
			mysqli_select_db($conexao, "sgp") or 
				die(
					"Erro na abertura do banco de dados:<br>" . mysqli_error($conexao)
				);
				
			// 3 - Inserir o comando de seleção de dados numa variável
			$comandoSQL = "SELECT * FROM pets";
			
			// em seguida, mostramos a variável na tela, copiamos e 
			// testamos se o comando está certo (no console do MYSQL)
			// die($comandoSQL);
			
			// Se funcionou, esconde o comando
			
			// 4 - Enviar o comando de seleção para o MYSQL
			$registros = mysqli_query($conexao, $comandoSQL) or 
			die( "Erro na seleção de dados:<br>" . mysqli_error($conexao) );
			
			// $con = mysqli_connect("localhost","root","");
			// $sql = mysqli_query($con,$sql);
							
			// O que é $registros é um objeto complexo
			// do tipo Record Set (Conjunto de registros)
			// são os cadastros da tabela (pets)
			
			/*	Meu $registros é assim:
				+----+----------+------+------+--------------+-------+
				| id | nome     | sexo | tipo | nomeDono     | idade |
				+----+----------+------+------+--------------+-------+
				|  1 | Nina     | F    | G    | Carlos Majer |     7 |
				|  3 | Soneca   | M    | C    | Ana          |     2 |
				|  2 | Neguinho | M    | G    | Carlos Majer |    13 |
				|  5 | Ligeiro  | M    | P    | Ana          |     2 |
				|  4 | Mimosa   | F    | C    | Cristina     |     3 |
				+----+----------+------+------+--------------+-------+
			*/
			
			// A função mysqli_num_rows() entra num objeto do tipo
			// record set, conta e devolve o número de linhas / registros
			// existentes (número inteiro)
			
			$linhas = mysqli_num_rows($registros);
			
			// if($linhas<1)
			// {
			// 	// - Se tiver menos que 1 linha, a tabela está vazia.
			// 	//	  Não tem porque listar. Aviso o(a) usuário(a) e
			// 	//	  encerro o programa.	
			// 	die("Cadastro de Pets está vazio. Sistema Encerrado!");
			// }
			
			// Mostrar o número de registros de pets existentes

			$linhas = mysqli_num_rows($registros) >= 1 ? "$linhas" : "não há dados para exibir"; //exibindo com operador ternário
			echo "<b>$linhas</b> Pets cadastrados<hr>";
			

				// 7 - Varrer e exibir na tela este conjunto de dados
			
			// Conceito: Variável 
			// ==================
			// um espaço de memória que tem um nome e 
			// consegue armazenar um certo valor, que pode ser 
			// posteriormente alterado (variado)
			// Exemplo: $nome="Ana";
			
			// Conceito: Matriz
			// ================
			// um espaço de memória que tem um nome e 
			// consegue armazenar diversos valores, em posições diferentes,
			// que podem ser  posteriormente alterados (variados)
		
			// $nomes["id"] = "Ana";
			// $nomes["nome"] = "Carlos";
			// $nomes["sexo"] = "Luís";
			// $nomes["tipo"] = "Cláudia";
			// $nomes["idade"] = "Roberto";
			// $nomes["idade"] = "Carlos";


			
				// Exibindo os pets cadastrados linha a linha
			for ($n=0; $n<$linhas; $n++)
			{
				$dados = mysqli_fetch_array($registros); //faz uma busca de arrays/matriz
				
				echo "ID: " 	. $dados["id"] . "<br>";
				echo "Nome: " 	. $dados["nome"] . "<br>";
				echo "Sexo: "	. $dados["sexo"] . "<br>";
				echo "Tipo: "	. $dados["tipo"] . "<br>";
				echo "Idade: "	. $dados["idade"] . "<br>";
				echo "Dono: "	. $dados["nomeDono"] . "<hr>";
			}

			// $busca = "Roberto";
			// $achou=false;
			
			// for($n=0; $n<sizeof($nomes); $n++)
			// {
			// 	if($nomes[$n] == $busca)
			// 	{
			// 		$achou=true;
			// 	}
			// }
				
			// if($achou)
			// 	echo "Achou";
			// else
			// 	echo "Não achou";
			
		?>
	</body>
	</html>