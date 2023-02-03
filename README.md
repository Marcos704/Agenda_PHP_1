
<div align="center">
<h1>Grupo Logos</h1>
<h5>🛠Desafio proposto para a vaga de programador Júnior🛠</h5>
<small>@Marcos704</small>
</div>

> (Desafio Grupo Logos) - Agenda Eletrônica
<br>
# Criar uma Agenda Eletrônica

```
   1. Gravar informações; (nome, telefone e endereço);
   2. Consultar/listar informações;
   3. Alterar informações;
   4. Deletar informações;
```
### ✔Funcionalidades
O projeto possui as seguintes funcionalidades.:

1. 📎 Cadastro
- Cadatro de Contato
2. 📎 Edição
- Edição de Contato
3. 📎 Lista
- Lista de Contato

## 💻 Pré-requisitos para instalação do sistema

Antes de começar, verifique se você atendeu aos seguintes requisitos:
* Você instalou a versão mais recente de `<Versão do php 8.0 ou +/ Última versão da base de dados  / Última vesão do sistema>`.
* Você tem uma máquina `<Windows / Linux>`.
* Servidor Local instalado e configurado `<Xampp>`.

## 📟 Preparando o ambiente < Agenda Eletronica >

Para instalar o < Agenda Eletronica >, siga estas etapas:

Windows:
```
1. Baixe a nova versão do projeto no github;
2. Baixe a última versão da base de dados no github;
3. Tenha a última versão do servidor local Xampp instalada;
```
## 📟 Criação do banco de dados
Para realizar os testes de sessão no < Agenda Eletronica >, siga estas etapas:

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
## 📟 Configurações inicias
```
-- Antes de inicar o projeto, verifique o arquivo de configurações do projeto.
   *Caminho 
            system/config/config.php
    *Verifique as variaveis
        define("USUARIO", "suport"); 
            -> Defina o nome de usuário de acesso ao banco de dados
        define("SENHA", "swu@660031");
            -> Defina o nome de senha de acesso ao banco de dados
```
## Prints do sistema
<h4>Tela 01</h4>
<img src="https://i.ibb.co/J7ZzmXt/Screenshot-1.png">
<h4>Tela 02</h4>
<img src="https://i.ibb.co/rFrKFGj/Screenshot-2.png>">
<h4>Tela 03</h4>
<img src="https://i.ibb.co/wM4Vt6T/Screenshot-3.png">
<h4>Tela 04</h4>
<img src="https://i.ibb.co/wLvzDD7/Screenshot-4.png">

## Demo
https://user-images.githubusercontent.com/57381889/215138397-61d96e81-b9bd-4cce-a3c3-32153746318d.mp4


