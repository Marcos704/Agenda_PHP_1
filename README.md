
<div align="center">
<h1>Grupo Logos</h1>
<h5>🛠Desafio proposto para a vaga de programador Júnior🛠</h5>
<small>Marcos704</small>
</div>

<br>

## ✔Criar uma Agenda Eletrônica

> (Requisitos) - Aplicação

```
   1. Gravar informações; 
      Nome
      Telefone
      Endereço
   2. Consultar informações;
   3. Listar informações;
   4. Alterar informações;
   5. Deletar informações;
```
## ✔Funcionalidades

> (Funcionalidades) - Aplicação

```
1. Cadastrar Informações
2. Consultar Informações
3. Listar Informações
4. Aleterar Informações
5. Excluir Informações
```
## 💻 Pré-requisitos para instalação do sistema

> Antes de começar, verifique se você atendeu aos seguintes requisitos:
```
1. Versão do php 8.0 ou +
2. Última versão da base de dados
3. Última vesão do sistema.

4. Sistema Operacional Windows ou Linux
5. Servidor Local 'XAMPP' ou qualquer outro de preferência
```

## 📟 Criação do banco de dados

> Siga os passos para criação do banco de dados:

Banco de dados - SCRIPT:

-- Script para criação do banco de dados do sistema.


> 1º Passo, criar o banco de dados. Basta executar esse comando .:
```

CREATE DATABASE agenda_db;

```
> 2º Passo, criar a tabela de contatos. Basta executar esse comando 
```
--
-- Estrutura da tabela `tbcontatos`
--

CREATE TABLE `tbcontatos` (
  `idContato` int(11) NOT NULL COMMENT 'id do contato',
  `nomeContato` varchar(255) NOT NULL COMMENT 'nome do contato',
  `telefoneContato` varchar(15) NOT NULL COMMENT 'telefone do contato',
  `enderecoContato` varchar(255) NOT NULL COMMENT 'endereco do contato'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabela de contatos';

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  ADD PRIMARY KEY (`idContato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id do contato';
COMMIT;

```
📟 Configurações inicias
> Antes de inicar o projeto, verifique as informações no arquivo de configurações
```
1. Caminho do arquivo de configurações:
   system/config/config.php
   
2. Definir o usuário de acesso ao banco de dados
   define("USUARIO", "{Usuario}");
   
3. Definir a senha de acesso ao banco de dados
   define("SENHA", "{Senha}");
```
📟 Prints do sistema
> Listar Informações
<hr>

<div align="center">
<img src="https://i.ibb.co/J7ZzmXt/Screenshot-1.png">
</div>

> Criar Contato
<hr>

<div align="center">
<img src="https://i.ibb.co/rFrKFGj/Screenshot-2.png>">
</div>

> Visualizar Contatos
<hr>

<div align="center">
<img src="https://i.ibb.co/wM4Vt6T/Screenshot-3.png">
</div>

> Visualizar Informações
<hr>

<div align="center">
<img src="https://i.ibb.co/wLvzDD7/Screenshot-4.png">
</div>

<hr>

📟 Demo
> Vídeo de apresentação do sistema

<div align="center">
   
https://user-images.githubusercontent.com/57381889/215138397-61d96e81-b9bd-4cce-a3c3-32153746318d.mp4

</div>

