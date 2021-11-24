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
			/* 
			Objetivo: Listar os pets cadastrados no banco SGP 
			
			Sequencia de passos:
			1 - Conectar no MYSQL - mysqli_connect(p1, p2, p3)
			2 - Abrir o banco sgp- mysqli_select_db(p1, p2)
			3 - Colocar o comando de seleção de dados numa variável
			4 - Enviar o comando (da variável) p/ O MYSQL
			    - recebo um record set
			5 - Contar quantas linhas foram obtidas (do record set)
			    - Se estiver vazio (0 linhas), interrompo a página
			6 - Listar cada linha de dados na tela
			
			*/

			// 1 - Conectar no MYSQL - mysqli_connect(p1, p2, p3)
			$servidor 	= "localhost";
			$usuario	= "root";
			$senha		= "";
			$banco		= "sgp";
			
			$con = mysqli_connect($servidor, $usuario, $senha);
			
			// 2 - Abrir o banco sgp- mysqli_select_db(p1, p2)
			
			$ok = mysqli_select_db($con, $banco);
			// true => conseguiu abrir o banco
			// false=> não conseguiu
			
			if(!$ok)
			{
				// não conseguiu
				die("Erro na abertura do banco:<br>" . mysqli_error($con));
			}
			
			/*
			Operadores Lógicos / booleanos
			&& 	AND		E
			||	OR 		OU
			!	NOT 	NÃO
			
			!=
			==
			
			NÃO É VERDADEIRA 
			
			
			== comparação de valor
			=== comparação de valor e tipo
			
			JAVA / C / Phyton / JavaScript
			==============================
			int n1=0;
			float n2=0;
			
			(n1==n2)	=> verdadeiro, pq ambos estão com o valor 0 (zero)
			(n1===n2)	=> falso, pq as variáveis são de tipos diferentes
			uma é inteiro, a outra é float (real/ponto flutuante/casa decimal)
			*/	

			// 3 - Colocar o comando de seleção de dados numa variável			
			$sql = "SELECT * FROM pets";
			
			/* Exemplo de comando sql mais complexo
			$sql = "SELECT 	id, 
							nome, 
							cpf, 
							rg, 
							ddd, 
							telefone, 
							celular, 
							email, 
							endereco, 
							bairro, 
							cidade, 
							cep, 
							uf 
					FROM clientes ";
			*/
			
			// - Exibir o comando na tela
			// p/ testar no console do MYSQL
			// e depois eu escondo o comando abaixo
			//die($sql);
			
			// 4 - Enviar o comando (da variável) p/ O MYSQL
			// recebo um record set
			$registros = mysqli_query($con, $sql);
			
			/* Meu record set (conjunto de registros) $registros:
			+----+----------+------+------+---------------+-------+
			| id | nome     | sexo | tipo | nomeDono      | idade |
			+----+----------+------+------+---------------+-------+
			|  1 | Nina     | F    | G    | Carlos Majer  |     7 |
			|  2 | Neguinho | M    | G    | Carlos Majer  |    13 |
			|  3 | Soneca   | M    | C    | Ana Cristina  |     3 |
			|  4 | Vicenzo  | M    | R    | Manoel        |     5 |
			|  5 | Preguica | M    | P    | Ana Cristina  |     1 |
			|  7 | Mimosa   | F    | C    | Renata Santos |     3 |
			|  8 | Ligeiro  | M    | P    | Mariana       |     4 |
			+----+----------+------+------+---------------+-------+
			*/
			
			// 5 - Contar quantas linhas foram obtidas (do record set)
			$linhas = mysqli_num_rows($registros);
			
		    // - Se estiver vazio (0 linhas), interrompo a página
			if($linhas<1)
			{
				die("Tabela está vazia - Sistema Finalizado!");
			}
			
			// Se chegou até aqui, mostro quantos registros tem
			echo "Encontrados <b>$linhas</b> Pets<hr>";
			
			
		?>

		
	</body>

</html>		