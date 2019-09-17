<!doctype html>
<html>
<!--Gustavo Cunha Teles-->

<head>
<meta charset="utf-8">
<title>Atualização de obra</title>
</head>

<body>

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
	$id = $_POST['id'];
	$idEditora = $_POST['idEditora'];
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$ano = $_POST['ano'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$tipo = $_POST['tipo'];
	
	//Consulta de inserção com concatenação de '" e "' para todos os campos poderem ser lidos como strings
	$sql = "UPDATE acervo SET idEditora = '".$idEditora."', titulo = '".$titulo."', autor = '".$autor."', ano = '".$ano."', preco = '".$preco."', quantidade = '".$quantidade."', tipo = '".$tipo."' WHERE id = '".$id."' ";

        if ($connect->query($sql) === TRUE):	
?>      
        	<fieldset>
            		
            		<h2>Resultado da atualização</h2>    
	        	
	        	<?php 
	           		$sql = "SELECT * FROM acervo WHERE id = '".$id."' ";
	        		$resultado = mysqli_query($connect,$sql);
	        	?>
	        	
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
        
       

<?php	else: ?>
		<fieldset>
            		<h2>Atualização de obra</h2>     
	        	<?php echo "Consulta: <br>". $sql . "<br><br>Erro: <br>" . $connect->error; ?>
	        	<br><br>
	       		<button type="button" class="btn btn-link"><a href="atualizar.php">Voltar</a></button>	
	        </fieldset>
    		
<?php	endif;?>
 
</body>

</html>


