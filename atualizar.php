<!doctype html>
<html>
<!--Gustavo Cunha Teles-->

<head>
<meta charset="utf-8">
<title>Atualizar obra</title>
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
		
		//Consulta
		$sql = "SELECT * FROM acervo";
		
		//Transformando numa consulta dentro do banco de dados
		$resultado = mysqli_query($connect,$sql);
		
	?>
	    	
    	<div>
        	<fieldset>
        	   			
            		<h2>Obras</h2>
    	
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
		
		</fieldset>
	</div>

<div>
	<!--Formulário para armazenar os valores digitados-->
        <form name="atualizar" method="post" enctype="multipart/form-data" action="atualizar2.php" class="form">
        
            <!--Campo que contém os labels e o botão-->	
            <fieldset class="f">
            	
            	<h2>Atualizar obra</h2>
            	
                <label>
                <span class="span">Id da obra</span><br/>
                <input type="text" name="id"/>
                </label>
                
                <label>
                <br/><br/><span>Id da editora</span><br/>
                <input type="text" name="idEditora" class="in"/>
                </label>
                
                <label>
                <br/><br/><span>Título da obra</span><br/>
                <input type="text" name="titulo"/>
                </label>
                
                <label>
                <br/><br/><span>Autor da obra</span><br/>
                <input type="text" name="autor"/>
                </label>
                
                <label>
                <br/><br/><span>Ano da obra</span><br/>
                <input type="text" name="ano"/>
                </label>
                
                <label>
                <br/><br/><span>Preço da obra</span><br/>
                <input type="text" name="preco"/>
                </label>
                
                <label>
                <br/><br/><span>Quantidade da obra</span><br/>
                <input type="text" name="quantidade"/>
                </label>
                
                <label>
                <br/><br/><span>Tipo da obra</span><br/>
                <input type="text" name="tipo"/>
                </label>
                
                <!--Botão de cálculo-->
                <br><br><input type="submit" name="envia" value="Atualizar" class="btn">
            	<button type="button" class="btn btn-link"><a href="index.php">Menu Principal</a></button>
            </fieldset>
        
        </form>
</div> 
    
</body>
</html>