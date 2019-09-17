<?php    	
	//Captura os valores 
	extract($_POST);
	$op = $_POST['op'];

	if($op==1){	
		//Redirecionamento
		echo "<meta http-equiv='refresh' content='0;url=inserir.html'>";	
	}
	
	if($op==2){		
		//Redirecionamento
		echo "<meta http-equiv='refresh' content='0;url=atualizar.php'>";
	}
	
	if($op==3){			
		//Redirecionamento
		echo "<meta http-equiv='refresh' content='0;url=pesquisar.html'>";
	} 
	
	if($op==4){			
		//Redirecionamento
		echo "<meta http-equiv='refresh' content='0;url=listar.php'>";
	}       
?>
