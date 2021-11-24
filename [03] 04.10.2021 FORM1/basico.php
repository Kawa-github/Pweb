<html>
	<head>
		<title>Introdução PHP</title>
	</head>
	
	<body>
		<h2>FOLHA DE PAGAMENTO</h2>
		<h3><i><u>Proventos</u></i></h3>
		
		<?php
		// salvar como basico.php
		
		/* 	Variável
			Espaço de memória, que damos um nome, 
			que consegue armazenar algum tipo de dado (valor),
			que pode ser alterado (por isso se chama variável).
		*/
		$ano = 2021;
		$imposto = 547.29;
		$nome="Ana Santos";
		$casada=false;
		
		/* 	Regras de nomes de variáveis 
			- Devem começar com o símbolo $ (cifrão / dólar)
			- 1o caractere depois do dólar, obrigatoriamente uma letra ou sublinhado
			- Depois pode colocar números
			- NÃO PODE TER ESPAÇO EM NOME DE VARIÁVEL
			- NÃO PODE TER CARACTERES ACENTUADOS (ç, ã, é, õ, ú, ä, ê, etc.)
			- NÃO PODE TER CARACTERES ESPECIAIS (*, /, -, +, ', ", $, %, (, ),  #, @)
			- Minúsculo é diferente de maiúsculo
		*/
		
		/* Criação de variáveis em PHP:
			- Não precisa informar o tipo (declarar o tipo da variável)
			- O tipo é definido no momento em que se atribui um valor p/a variável
			- Uma variável pode ter seu valor mudado para outro tipo de dado
		*/
		
		$salario  = 15297.20; // separador de casa decimal é o ponto (padrão inglês)
		$premio   = 1820.12; 
		$bonus    = 982.20; 
		$periodos = 2; // períodos trabalhados manhã/noite
		
		$salarioBruto =  	$salario +
							$premio +
							($bonus * $periodos);
		
		
		echo "Salário: R$ " . number_format($salario, 
											2, 
											",", 
											".");
		echo "<br>";
		echo "Prêmio: R$ " . number_format( $premio, 2, ",", ".");
		echo "<br>";
		echo "Períodos trabalhados: $periodos<br>";
		
		echo "Bônus Total: " . number_format( ($bonus*$periodos) , 2, ",", ".");
		echo "<br>";
		echo "Salário Bruto: R$ " . number_format( $salarioBruto, 2, ",", ".");
	?>
	
	
	
	
	<h3><i><u>Descontos</u></i></h3>
	<?php
			// Calcular 8% de INSS s/ salário bruto
			// e salvar na variável $inss
			$inss = $salarioBruto * 8/100 ;
			
			// Calcular o Imposto de Renda 
			// (cálculo) Salário Bruto - INSS 
			// vezes 27,5% e salvar na variável $ir
			
			$ir = ($salarioBruto - $inss) * 27.5/100;
			
			// Cálculo do Salário Líquido:
			// Salário Bruto - inss - ir
			$salarioLiquido = $salarioBruto - $inss - $ir;
			
			// Mostrando na tela
			echo "INSS : R$ " . number_format($inss, 2, ",", ".") ;
			echo "<br>IR: R$ " . number_format($ir , 2,",", ".") ;
			echo "<br>";
			
			echo "Total de descontos: R$ " . 
					number_format($inss + $ir, 2, ",", ".");
			
			echo "<br>Salário Líquido: <b>R$ " . number_format($salarioLiquido,2, ",", ".") ."</b>";
		?>
	</body>
</html>
