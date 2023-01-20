<?php
require_once("config.php");
class Conexao {
    protected $db;

    
    public function conectar(){
        try {
            $opcoes = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8;SET time_zone = 'America/Sao_Paulo'",
            );
            return $this->db = new PDO("mysql:dbname=" . BANCO . ";host=" . SERVIDOR, USUARIO, SENHA, $opcoes);
          } catch(PDOException $e) {
            echo "Erro ao realizar conexão como o banco de dados".$e->getMessage();
          }
    }



    public function inserirRegistro($tabela, $data)
    {
        $this->conectar();
        foreach ($data as $k => $dados) {
            $parametros[] = "{$k}, ";
            $values[] = "'{$dados}', ";
        }
        $PA = implode($parametros);
        $PV = implode($values);
        $COLUNAS = substr($PA, 0, -2);
        $VALORES = substr($PV, 0, -2);
        $INSERT = "INSERT INTO {$tabela} ($COLUNAS) VALUES ($VALORES)";

        try {
            $query = $this->db->prepare($INSERT);
            $query->execute();
            return "SQL INFOR PASS";
        } catch (PDOException $e) {
            echo ("Type: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage());
            //throw new \PDOException($e);
        }
    }
    public function apagarRegistro($tabela, $condicaoOnde, $condicaoIgua, $isExibirLog)
    {
        $this->conectar();
        try {
            $sql = "DELETE FROM {$tabela} WHERE {$condicaoOnde}  =  '{$condicaoIgua}'";
            $query = $this->db->prepare($sql);
            $query->execute();
            if ($isExibirLog) {
                echo ("Type: SQL DELETE\n" . "\nTabela.:" . $tabela . "\nRetorno.:");
            }
            return "SQL INFOR PASS";
        } catch (PDOException $e) {
            if ($isExibirLog) {
                echo ("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
            }
            return $e->getCode();
        }
    }
    public function atualizarRegistro($tabela, $condicaoOnde, $condicaoIguaA, $data, $isExibirLog)
    {
        $this->conectar();
        try {
            $SQLSTART = "UPDATE {$tabela} SET ";
            foreach ($data as $k => $dados) {
                $SQLPARAMETERS[] = "{$k} =  '{$dados}',";
            }
            $DADOS = substr(implode($SQLPARAMETERS), 0, -2);
            $SQLEND = "' WHERE {$condicaoOnde}  =  '{$condicaoIguaA}';";
            $SQLMASTER = $SQLSTART.$DADOS.$SQLEND;
            $query = $this->db->prepare($SQLMASTER);
            $query->execute();
            if ($isExibirLog) {
               echo ("Type: SQL UPDATE\n" . "\nTabela.:" . $tabela . "\nRetorno.:");
            }
            return "SQL INFOR PASS";
        } catch (PDOException $e) {
            if ($isExibirLog) {
                echo("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
            }
            return $e->getCode();
        }
    }
    /**
     * $tabela: Nome da tablea
     * $condicaoOnde: Condicao Where (Null -> Caso não queria condição)
     * $condicaoIguaA: valor a ser verificado no Where (Null -> Caso não queria condição)
     * $tabelaJoin: Tabela join (Null -> Caso não queria condição)
     * $modoRetorno: (1->Objeto 2->Array null->Padrão = Array)
     * $isExibirLog: (1->Exibir 2->Nao)
     */
    public function obterRegistros($tabela, $condicaoOnde, $condicaoIguaA, $tabelaJoin, $modoRetorno, $isExibirLog)
    {
        if ($condicaoIguaA != null && $condicaoOnde != null) {
            try {
                $sql = "SELECT *FROM {$tabela} WHERE {$condicaoOnde}  =  '{$condicaoIguaA}'";
                $query = $this->db->prepare($sql);
                $query->execute();
                if ($isExibirLog == 1) {
                    echo("Type: SQL SELECT\n" . "\nTabela.:" . $tabela . "\nRetorno.:");
                }
                if ($modoRetorno == 1) {
                    return $query->fetchAll(PDO::FETCH_OBJ);
                } else
                if ($modoRetorno == 2) {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (PDOException $e) {
                if ($isExibirLog == 1) {
                    echo("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
                }
            }
        } else
        if ($condicaoIguaA != null && $condicaoOnde != null && $tabelaJoin != null) {
            try {
                $sql = "SELECT *FROM {$tabela} WHERE {$condicaoOnde} JOIN {$tabelaJoin} =  '{$condicaoIguaA}'";
                $query = $this->db->prepare($sql);
                $query->execute();
                if ($isExibirLog == 1) {
                    echo("Type: SQL SELECT\n" . "\nTabela.:" . $tabela . "\nRetorno.:");
                }
                if ($modoRetorno == 1) {
                    return $query->fetchAll(PDO::FETCH_OBJ);
                } else
                if ($modoRetorno == 2) {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (PDOException $e) {
                if ($isExibirLog == 1) {
                    echo("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
                }
            }
        } else {
            try {
                $sql = "SELECT *FROM {$tabela}";
                $query = $this->db->prepare($sql);
                $query->execute();
                if ($isExibirLog == 1) {
                    echo("Type: SQL SELECT Tabela.:{$tabela} Retorno.:");
                }
                if ($modoRetorno == 1) {
                    return $query->fetchAll(PDO::FETCH_OBJ);
                } else
                if ($modoRetorno == 2) {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (PDOException $e) {
                if ($isExibirLog == 1) {
                    echo("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
                }
            }
        }
    }
    /**
     * $tabela: Nome da tablea
     * $condicaoOnde: Condicao Where (Null -> Caso não queria condição)
     * $condicaoIguaA: valor a ser verificado no Where (Null -> Caso não queria condição)
     * $tabelaJoin: Tabela join (Null -> Caso não queria condição)
     * $modoRetorno: (1->Objeto 2->Array null->Padrão = Array)
     * $isExibirLog: (1->Exibir 2->Nao)
     */
    public function obterTotalRegistros($tabela, $condicaoOnde, $condicaoIguaA, $tabelaJoin,$isExibirLog)
    {
        if ($condicaoIguaA != null && $condicaoOnde != null) {
            try {
                $sql = "SELECT *FROM {$tabela} WHERE {$condicaoOnde}  =  '{$condicaoIguaA}'";
                $query = $this->db->prepare($sql);
                $query->execute();
                if ($isExibirLog == 1) {
                    echo("Type: SQL SELECT\n" . "\nTabela.:" . $tabela . "\nRetorno.:");
                }
                return count($query->fetchAll(PDO::FETCH_ASSOC));
            } catch (PDOException $e) {
                if ($isExibirLog == 1) {
                    echo("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
                }
            }
        } else
        if ($condicaoIguaA != null && $condicaoOnde != null && $tabelaJoin != null) {
            try {
                $sql = "SELECT *FROM {$tabela} WHERE {$condicaoOnde} JOIN {$tabelaJoin} =  '{$condicaoIguaA}'";
                $query = $this->db->prepare($sql);
                $query->execute();
                if ($isExibirLog == 1) {
                    echo("Type: SQL SELECT\n" . "\nTabela.:" . $tabela . "\nRetorno.:");
                }
                return count($query->fetchAll(PDO::FETCH_ASSOC));
            } catch (PDOException $e) {
                if ($isExibirLog == 1) {
                    echo("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
                }
            }
        } else {
            try {
                $sql = "SELECT *FROM {$tabela}";
                $query = $this->db->prepare($sql);
                $query->execute();
                if ($isExibirLog == 1) {
                    echo("Type: SQL SELECT Tabela.:{$tabela} Retorno.:");
                }
                return count($query->fetchAll(PDO::FETCH_ASSOC));
                
            } catch (PDOException $e) {
                if ($isExibirLog == 1) {
                    echo("\nType: SQL ERRO\nCódigo Erro.: " . $e->getCode() . "\nDescrição Erro.: " . $e->getMessage() . "\nRetorno.: ");
                }
            }
        }
    }
}