<?php
	
	if (isset($_POST["nome"])){  // antes de carregar todo o conteudo do site este if verifica se o usuario já digitou o nome 
		$nome = $_POST["nome"];   // o isset verifica se a variavel $_POST["nome"] possui algum valor, se ela tiver algum valor
		$sobrenome = $_POST["sobrenome"]; // todas as variaveis devem receber os valores dos $_POST[""] cada $_POST representa
		$ndia = $_POST["ndia"];   // um campo do formulario
		$nano = $_POST["nano"]; 
		$nmes = $_POST["nmes"];
		
		
		
	}
	
?>

<!DOCTYPE html>						 <!--obrigatorio para identificar que é html5-->  

<html> <!-- todo codigo html deve está dentro dessa tag -->

	<head> <!-- o head é o cabeçalho do documento html, caso precise de carregar java script ou css é aqui que deverá ser feito
            pois o head é iniciado antes do contudo do site-->
		<meta charset="UTF-8">      <!--obrigatorio para determinar o padrão de letras-->  
		<link rel="stylesheet" href="css.css"> <!--adicionando  o css externo-->
        <title>teste</title>
        
	</head>
	
	<body> <!-- toda a estrutuara do site deve está dentro da tag body-->
		
		<?php
		 echo (date("y")+2000);
			if (isset($_POST["nome"])){  // verificando se o usuario digitou o nome, se ele digitou o nome devemos retornar 
                                        // esse formulário que mostra todos os resultados e os dados que o usuario inseriu
				$ano = 2019;    // variavel que recebe o ano
				$dia = 13;      // variavel que recebe o dia
				$mes = 9;       // variavel que recebe o mes
				$totalano = ($ano - $nano);     // calculo que retorna a idade do usuario
				$totalmes = ($totalano * 12);   // calculo que retorna quantos meses o usuario viveu
				$totaldias = (($totalmes * 30)+$dia);   // calculo que retorna o total de dias
				
		?>
			<form class="box" action="index.php" method="post"> <!-- o form é o formulário, ele precisa do action para dizer para onde as 
                                                                informações devem ser enviadas e o method que diz como serão enviadas-->
		
			<input type="text" name="nome" placeholder="Nome" value="<?php echo $nome?>"> <!-- o type determina o tipo de um campo ele pode
                                                                                            ser text, password, email, submit-->
			
			<input type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo $sobrenome?>"> <!-- o value recebe o valor digitado
                                                                                                        pelo usuario, nesse caso o php está 
                                                                                                        inserindo o value automaticamente-->
		
			<input type="text" name="ndia" placeholder="dd" value="<?php echo ($ndia)?>"> 
			<input type="text" name="nmes" placeholder="mm" value="<?php echo $nmes?>"> 
			<input type="text" name="nano" placeholder="aaaa" value="<?php echo $nano?>">
			
			<input type="text" name="idade" value="<?php echo $totalano?>">
		
			<input type="text" name="meses" placeholder="meses" value="<?php echo $totalmes?>">
		
			<input type="text" name="dias" placeholder="Dias" value="<?php echo $totaldias?>">
			
			<input type="submit" value="Enviar">         <!-- submit é o botão que envia os dados do formulário -->
			
			
		
		</form>
	
		<?php 
			}else{ // na linha 31 existe um if, se o usuario já digitou o nome ele executa o if, se ele não digitou então ele executa este 
                    // else
		?>
	
		<form class="box" action="index.php" method="post"> <!-- como o usuario ainda não digitou os dados entregamos a ele esse formulário
                                                            para ele preencher -->
		
			<input type="text" name="nome" placeholder="Nome">
			
			<input type="text" name="sobrenome" placeholder="Sobrenome">
			
			<input type="text" name="ndia" placeholder="dd"> 
			<input type="text" name="nmes" placeholder="mm"> 
			<input type="text" name="nano" placeholder="aaaa">
			
			<input type="text" name="idade" placeholder="idade" disabled> <!-- o disabled significa que esse campo não pode ser editado pelo
                                                                            usuario -->
			
			<input type="text" name="meses" placeholder="meses" disabled>
		
			<input type="text" name="dias" placeholder="Dias" disabled>
			
			<input type="submit" value="Enviar">
			
			
		
		</form>
		
		<?php 	
				} // esta chave fecha o else da linha 68
		?>
		
		
		
	
		
	</body> <!-- fechando o body-->

</html>     <!-- fechando o html -->