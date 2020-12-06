
CREATE DATABASE IF NOT EXISTS `Restaurante` DEFAULT CHARACTER SET utf8 ;
USE `Restaurante` ;

CREATE TABLE IF NOT EXISTS `Restaurante`.`Clientes` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nomeCliente` VARCHAR(255) NOT NULL,
  `emailCliente` VARCHAR(255) NOT NULL,
  `senhaCliente` VARCHAR(64) NOT NULL,
  `bonusCliente` DECIMAL(9,2) NOT NULL,
  `cpfCliente` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`idCliente`)
  )
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `Restaurante`.`Funcionarios` (
  `idFuncionario` INT NOT NULL,
  `nomeFuncionario` VARCHAR(255) NOT NULL,
  `emailFuncionario` VARCHAR(255) NOT NULL,
  `senhaFuncionario` VARCHAR(64) NOT NULL,
  `cargo` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`idFuncionario`)
  )
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Restaurante`.`Cartoes` (
  `idCartao` INT NOT NULL AUTO_INCREMENT,
  `numeroCartao` VARCHAR(32) NOT NULL,
  `bandeiraCartao` VARCHAR(64) NOT NULL,
  `validadeCartao` VARCHAR(8) NOT NULL,
  `cvvCartao` VARCHAR(4) NOT NULL,
  `Clientes_idCliente` INT NOT NULL,
  PRIMARY KEY (`idCartao`),
    FOREIGN KEY (`Clientes_idCliente`)
    REFERENCES `Restaurante`.`Clientes` (`idCliente`)
    )
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Restaurante`.`Contas` (
  `idConta` INT NOT NULL AUTO_INCREMENT,
  `parcelas` INT(2) DEFAULT 1,
  `valorTotalDaConta` DECIMAL(9,2) NOT NULL DEFAULT 0,
    `Cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`idConta`),
      FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Restaurante`.`Clientes` (`idCliente`)
    )
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Restaurante`.`Pedidos` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `valorTotalDosItensPedido` DECIMAL(9,2) NOT NULL DEFAULT 0,
  `Funcionario_idFuncionario` INT,
  `Conta_idConta` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
    FOREIGN KEY (`Funcionario_idFuncionario`)
    REFERENCES `Restaurante`.`Funcionarios` (`idFuncionario`),
    FOREIGN KEY (`Conta_idConta`)
    REFERENCES `Restaurante`.`Contas` (`idConta`)
   )
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Restaurante`.`Produtos` (
  `idProduto` INT NOT NULL AUTO_INCREMENT,
  `nomeProduto` VARCHAR(255) NOT NULL,
  `precoProduto` DECIMAL(9,2) NOT NULL,
  `imgProduto` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idProduto`)
  )
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Restaurante`.`Comidas` (
  `ingredientes` TEXT NOT NULL,
  `Produto_idProduto` INT NOT NULL,
    FOREIGN KEY (`Produto_idProduto`)
    REFERENCES `Restaurante`.`Produtos` (`idProduto`)
   )
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Restaurante`.`Bebidas` (
  `fornecedor` VARCHAR(255) NOT NULL,
  `Produto_idProduto` INT NOT NULL,
    FOREIGN KEY (`Produto_idProduto`)
    REFERENCES `Restaurante`.`Produtos` (`idProduto`)
   )
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Restaurante`.`ItensPedidosPeloCliente` (
  `idItensPedidosPeloCliente` INT NOT NULL AUTO_INCREMENT,
  `qtdItensPedidos` INT NOT NULL,
  `statusItemPedido` TINYINT NOT NULL DEFAULT 1,
  `Pedido_idPedido` INT NOT NULL,
  `Produto_idProduto` INT NOT NULL,
   PRIMARY KEY (`idItensPedidosPeloCliente`),
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `Restaurante`.`Pedidos` (`idPedido`),
    FOREIGN KEY (`Produto_idProduto`)
    REFERENCES `Restaurante`.`Produtos` (`idProduto`)
    )
ENGINE = InnoDB;

insert into Funcionarios Values (3939, 'Fogaça', 'focaca@caldeiraofurado.com', '$2y$10$X4hnuGxR9mEG3U0.sLad6uKgdf2l817ttt1Dc0isCcDp37LE6WMla', 'Gerente');
insert into Funcionarios Values (888888, 'Jaquin', 'jacquin@caldeiraofurado.com', '$2y$10$EnR9VP/aGKxpS12oTinx.eB2XkoEfhyCO/oLPML.2Q/05LzU7L8Xu', 'cozinheiro');

DESC pedidos;
DESC Produtos;
DESC Comidas;
DESC Bebidas;
DESC Clientes;
DESC ItensPedidosPeloCliente; 
DESC Funcionarios;
DESC cartoes;
DESC Contas;

focaca@caldeiraofurado.com    | $password = "cdfunc"
jacquin@caldeiraofurado.com   | $password = "tompero";
