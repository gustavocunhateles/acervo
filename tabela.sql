CREATE TABLE `valuexpc_test`.`acervo` ( 

	`id` INT NOT NULL , `idEditora` INT NOT NULL , `titulo` VARCHAR(100) NOT NULL , 
	`autor` VARCHAR(100) NOT NULL , `ano` INT NOT NULL , `preco` INT NOT NULL , 
	`quantidade` INT NOT NULL , `tipo` INT NOT NULL , PRIMARY KEY (`id`)
	) 
ENGINE = MyISAM;
