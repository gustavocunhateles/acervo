<!doctype html>
<html>
<!--Gustavo Cunha Teles-->

<head>
<meta charset="utf-8">
<title>Inserção de obra</title>
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
	$sql = "INSERT INTO acervo (id, idEditora, titulo, autor, ano, preco, quantidade, tipo) 
	VALUES ('".$id."', '".$idEditora."', '".$titulo."', '".$autor."', '".$ano."', '".$preco."', '".$quantidade."', '".$tipo."')";

        if ($connect->query($sql) === TRUE):	
?>      
        	<fieldset>
            		<h2>Inserção de nova obra</h2>     
	        	<?php echo "Obra inserida com sucesso!"; ?>
	        	<br><br>
	        	<button type="button" class="btn btn-link"><a href="index.php">Menu Principal</a></button>	
	        </fieldset>

<?php	else: ?>
		<fieldset>
            		<h2>Inserção de obra</h2>     
	        	<?php echo "Consulta: <br>". $sql . "<br><br>Erro: <br>" . $connect->error; ?>
	        	<br><br>
	        	<button type="button" class="btn btn-link"><a href="inserir.html">Voltar</a></button>
	        </fieldset>
    		
<?php	endif;?>

 
</body>

</html>


