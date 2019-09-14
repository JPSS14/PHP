<?php
	
	if (isset($_POST["nome"])){
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$ndia = $_POST["ndia"];
		$nano = $_POST["nano"]; 
		$nmes = $_POST["nmes"];
		
		
		
	}
	
?>

<!DOCTYPE html>						 <!--obrigatorio para identificar que é html5-->  

<html>

	<head>
		<meta charset="UTF-8">      <!--obrigatorio para determinar o padrão de letras-->  
		<link rel="stylesheet" href="css.css"> <!-- -->
        <title>teste</title>
        
	</head>
	
	<body>
		
		<?php
		 echo (date("y")+2000);
			if (isset($_POST["nome"])){
				
               
				$ano = 2019;
				$dia = 13;
				$mes = 9;
				$totalano = ($ano - $nano);
				$totalmes = ($totalano * 12);
				$totaldias = (($totalmes * 30)+$dia);
				
		?>
			<form class="box" action="index.php" method="post">
		
			<input type="text" name="nome" placeholder="Nome" value="<?php echo $nome?>">
			
			<input type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo $sobrenome?>">
		
			<input type="text" name="ndia" placeholder="dd" value="<?php echo ($ndia)?>"> 
			<input type="text" name="nmes" placeholder="mm" value="<?php echo $nmes?>"> 
			<input type="text" name="nano" placeholder="aaaa" value="<?php echo $nano?>">
			
			<input type="text" name="idade" value="<?php echo $totalano?>">
		
			<input type="text" name="meses" placeholder="meses" value="<?php echo $totalmes?>">
		
			<input type="text" name="dias" placeholder="Dias" value="<?php echo $totaldias?>">
			
			<input type="submit" value="Enviar">
			
			
		
		</form>
	
		<?php 
			}else{
		?>
	
		<form class="box" action="index.php" method="post">
		
			<input type="text" name="nome" placeholder="Nome">
			
			<input type="text" name="sobrenome" placeholder="Sobrenome">
			<br>
			<input type="text" name="ndia" placeholder="dd"> 
			<input type="text" name="nmes" placeholder="mm"> 
			<input type="text" name="nano" placeholder="aaaa">
			<br>
			<input type="text" name="idade" placeholder="idade" disabled>
			<br>
			<input type="text" name="meses" placeholder="meses" disabled>
			<br>
			<input type="text" name="dias" placeholder="Dias" disabled>
			
			<input type="submit" value="Enviar">
			
			
		
		</form>
		
		<?php 	
				}
		?>
		
		
		
	
		
	</body>

</html>