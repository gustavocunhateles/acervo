<!doctype html>
<html>
<!--Gustavo Cunha Teles-->

<head>
<meta charset="utf-8">
<title>Pesquisar obra</title>
</head>

<body>

	<!--Trazendo todas as obras para o usuário saber quais existem-->
	<?php 
		//Dados para conexão
		$servidor = "br900";
		$usuario = "valuexpc_root";
		$senha = "value";
		$dbname = "valuexpc_test";
		
		//Criar a conexao
		$connect = mysqli_connect($servidor, $usuario, $senha, $dbname);
		
		//Erro
		if(mysqli_connect_error()):
			echo "Falha na conexao: ".mysqli_connect_error();
		endif;
		
		//Captura os valores 
		extract($_POST);
		$titulo = $_POST['titulo'];
		
		//Consulta
		$sql = "SELECT * FROM acervo WHERE titulo= '".$titulo."' ";
		
		//Transformando numa consulta dentro do banco de dados
		$resultado = mysqli_query($connect,$sql);
		
	?>
	    	
    	<div>
        	<fieldset>
        	   			
            		<h2>Resultado da pesquisa</h2>
    	
			<table border="10">
			
				<!--Cabeçalho com as colunas-->
				<tr>
					<th>Código</th>
					<th>Editora</th>
					<th>Título</th>
					<th>Autor</th>
					<th>Ano</th>
					<th>Preço</th>
					<th>Quantidade</th>
					<th>Tipo</th>
				</tr>
				
				<!--Associando cada informação do php com o myqsl-->
				<?php while($res = mysqli_fetch_array($resultado)) { ?>
				
				<tr>
					<td><?php echo $res["id"];?></td><!--Id da obra-->
					<td><?php echo $res["idEditora"];?></td><!--Id da editora-->
					<td><?php echo $res["titulo"];?></td><!--Nome do título-->
					<td><?php echo $res["autor"];?></td><!--Nome do autor-->
					<td><?php echo $res["ano"];?></td><!--Ano de publicação-->
					<td><?php echo $res["preco"];?></td><!--Preço-->
					<td><?php echo $res["quantidade"];?></td><!--Quantidade-->
					<td><?php echo $res["tipo"];?></td><!--Tipo-->
				</tr>
				
				<?php } ?>
				
			</table>
			
			<br><br>
			<button type="button" class="btn btn-link"><a href="index.php">Menu Principal</a></button>
		
		</fieldset>
	</div> 
			
</body>
</html>