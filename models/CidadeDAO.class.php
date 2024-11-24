<?php
if(!class_exists('PDOConnection')){ require_once 'PDOConnection.class.php';}
if(!class_exists('Cidade')){ require_once 'Cidade.class.php';}
/**
 * Classe DAO de acesso a dados Cidade
 * 
 * @package Model.DAO
 * @category DAO
 * @since   2015-05-21
 * @version 1.6
 * @author  Kellen Nery
 * 
 * 
 * @edit    2020-12-01<br />
 *          Kellen Nery <kellen.nery@bio.fiocruz.br>
 *          Implementação de Melhoria 
 *          #1.15
 */
class CidadeDAO extends PDOConnection {

    /**
     *  contrutor da classe CidadeDAO
     *
     *  @param string $p_NomeTabela O nome da tabela a ser mapeada
     *  @param string $p_ChavePrimaria O nome da chave primária da tabela a ser mapeada
     *  @param string $p_NomeContador O nome do contador da tabela a ser mapeada
     * 
     *  @return void
     */    
    function __construct($p_NomeTabela='cidade', $p_ChavePrimaria='id', $p_NomeContador=''){
        try{
            parent::__construct($p_NomeTabela, $p_ChavePrimaria, $p_NomeContador);
        } catch (PDOException $ex){ throw $ex; }
    }
    
    /**
     * Método interna para carregar objeto com os dados do registro.
     *
     *   @param object $Item O Objeto do tipo Registro do Banco de Dados
     *   @return object $Modelo O Objeto do tipo do Modelo desta classe
     */
    private static function carregarModelo($p_Item){
        try{
            if ($p_Item) {
                $obj = new Cidade();
                $obj->setId($p_Item['id']);
                $obj->setIdEstado($p_Item['id_estado']);
                $obj->setSiglaEstado(isset($p_Item['sigla_estado'])? $p_Item['sigla_estado']: '');
                $obj->setNomeEstado(isset($p_Item['nome_estado'])? $p_Item['nome_estado']: '');
                $obj->setNome($p_Item['nome']);
                
                $obj->setAtivo($p_Item['ativo']);
                $obj->setRevisao(isset($p_Item['revisao'])? $p_Item['revisao']: 0);
                $obj->setAcao($p_Item['acao']);
                $obj->setIdUsuarioAcao($p_Item['id_usuario_acao']);
                $obj->setNomeUsuarioAcao((isset($p_Item['nome_usuario_acao']))? $p_Item['nome_usuario_acao']: '');
                $obj->setDataAcao($p_Item['data_acao']);
                return $obj;
            } else {
                return null;
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para gravar um registro novo.
     *
     *   @param object $obj O Objeto do tipo do Modelo desta classe
     *   @return boolean $Resultado Flag que indica que a operacaoo foi concluida com sucesso
     */
    public function salvar($obj){
        try{
            // Preparo a query
            $query = "INSERT INTO ".$this->_nomeTabela."  (     acao, data_acao, id_usuario_acao, id_estado, sigla_estado, id_regiao,  codigo,  sigla,  nome,  ativo, revisao)"
                                    ." VALUES ('incluir', ".$this::NOW.",  :IdUsuarioAcao, :IdEstado, :SiglaEstado, :IdRegiao, :Codigo, :Sigla, :Nome, :Ativo,       1)";
            $this->_query = $query;
            $stmt = $this->_conexao->prepare($query);
            
            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario);
            $stmt->bindValue(':IdEstado',     $obj->getIdEstado());
            $stmt->bindValue(':SiglaEstado',  $obj->getSiglaEstado());
            if ($obj->getIdRegiao()) { $stmt->bindValue(':IdRegiao', $obj->getIdRegiao());} else { $stmt->bindValue(':IdRegiao', null); }
            $stmt->bindValue(':Codigo',     $obj->getCodigo());
            $stmt->bindValue(':Sigla',      $obj->getSigla());
            $stmt->bindValue(':Nome',       $obj->getNome());
            $stmt->bindValue(':Ativo',      $obj->getAtivo());

            // Executo a query preparada
            if ($stmt->execute()){
                $Id = $this->_conexao->lastInsertId(); // MYSQL
                if (!$Id){ 
                    $Id = $this->_conexao->lastInsertId('cad_cidade_id_cidade_seq'); // POSTGRSQL
                } 
                $obj->setId($Id); 
                return true;
            } else {
                $arrError = $stmt->errorInfo();
                $this->_erro = $arrError[0];
                $this->_mensagem = 'PDO-'.$arrError[2];
                return null;
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para retornar um registro pelo Identificador do registro.
     *
     *   @param int|string $p_Id O Identificador ou Código do registro
     *   @return object $Modelo O Objeto do tipo do Modelo desta classe
     */
    public function retornar($p_Id){
        try{
            $filtro = '';
            if($p_Id){
                // Prepara o filtro
                if(is_numeric($p_Id)){
                    $filtro .= " AND e.id_cidade=$p_Id ";
                } else {
                    $filtro .= " AND e.codigo='$p_Id' ";
                }
                
                // Preparo a query
                $query = "SELECT e.*, p.nome AS nome_estado"
                        ." FROM ".$this->_nomeTabela." e "
                        ." INNER JOIN ".$this::PREFIXO."estado p ON p.id_estado=e.id_estado "
                        ." WHERE e.deletado='".$this::NAO."' $filtro";
                $this->_query = $query;
                $stmt = $this->_conexao->prepare($query);

                // Executo a query preparada
                $stmt->execute();

                // Pega o resultado da query executada
                $item = $stmt->fetch(PDO::FETCH_ASSOC);
                if($item){
                    return self::carregarModelo($item);
                } else { 
                    $arrError = $stmt->errorInfo();
                    $this->_erro = $arrError[0];
                    $this->_mensagem = 'PDO-'.$arrError[2];
                    return null; 
                }
            } else { return null; }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para retornar um registro pelo Identificador do registro.
     *
     *   @param int $p_Sigla A Sigla do registro
     *   @return object $Modelo O Objeto do tipo do Modelo desta classe
     */
    public function retornarPorSigla($p_Sigla){
        try{
            // Preparo a query
            $query = "SELECT e.*, p.nome AS nome_estado"
                    ." FROM ".$this->_nomeTabela." e "
                    ." INNER JOIN ".$this::PREFIXO."estado p ON p.id_estado=e.id_estado "
                    ." WHERE e.sigla=:Sigla";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;

            // Passa os paramentros para a query 
            $stmt->bindValue(':Sigla', $p_Sigla);

            // Executo a query preparada
            $stmt->execute();
     
            // Pega o resultado da query executada
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            if($item){
                return self::carregarModelo($item);
            } else {
                $arrError = $stmt->errorInfo();
                $this->_erro = $arrError[0];
                $this->_mensagem = 'PDO-'.$arrError[2];
                return null;
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para atualizar um registro.
     *
     *   @param object $Modelo O Objeto do tipo do Modelo desta classe
     *   @return boolean $Resultado Flag que indica que a opera??o foi conclu?da com sucesso
     */
    public function atualizar($obj){
        try{
            // Preparo a query 
            $query = "UPDATE ".$this->_nomeTabela." "
                    ." SET acao='editar', data_acao=".$this::NOW.", id_usuario_acao=:IdUsuarioAcao, codigo=:Codigo"
                    .", id_estado=:IdEstado, sigla_estado=:SiglaEstado, id_regiao=:IdRegiao, sigla=:Sigla, nome=:Nome, ativo=:Ativo, revisao=(revisao+1)"
                    ." WHERE id_cidade=:Id";
            $this->_query = $query;
            $stmt = $this->_conexao->prepare($query);
            
            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario);
            $stmt->bindValue(':Codigo',     $obj->getCodigo());
            $stmt->bindValue(':IdEstado',     $obj->getIdEstado());
            $stmt->bindValue(':SiglaEstado',  $obj->getSiglaEstado());
            if ($obj->getIdRegiao()) { $stmt->bindValue(':IdRegiao', $obj->getIdRegiao());} else { $stmt->bindValue(':IdRegiao', null); }
            $stmt->bindValue(':Sigla',      $obj->getSigla());
            $stmt->bindValue(':Nome',       $obj->getNome());
            $stmt->bindValue(':Ativo', 		$obj->getAtivo());
            $stmt->bindValue(':Id',         $obj->getId());

            // Executa a query preparada
            if ($stmt->execute()){
                return true;
            } else {
                $arrError = $stmt->errorInfo();
                $this->_erro = $arrError[0];
                $this->_mensagem = 'PDO-'.$arrError[2];
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para excluir o registro.
     *
     *   @param int $p_Id O Identificador do registro desta classe
     *   @return boolean TRUE $Resultado Flag que indica que a operação foi concluída com sucesso
     */
    public function excluir($p_Id){
        try{
            // Preparo a query
            $query = "UPDATE ".$this->_nomeTabela." SET acao='excluir', data_acao=".$this::NOW.", id_usuario_acao=:IdUsuarioAcao, deletado='".$this::SIM."', codigo=null WHERE id_cidade=:Id";
            $this->_query = $query;
            
            $stmt = $this->_conexao->prepare($query);
            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario);
            $stmt->bindValue(':Id', $p_Id);

            // Executa a query preparada
            if ($stmt->execute()){
                return true;
            } else {
                $arrError = $stmt->errorInfo();
                $this->_erro = $arrError[0];
                $this->_mensagem = 'PDO-'.$arrError[2];
                return null;
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para listar os registros
     *
     *   @param int $page A Pagina do registros a ser retornarda
     *   @param int $rows A Quantidade de registro a ser retornardo
     *   @param int $sidx O nome do campo a ser Ordendado
     *   @param int $sord A direcao da ordenacao (ASC ou DESC)
     *   @param int|string $p_estado O Estado que deseja filtrar
     *   @param int|string $p_Regiao A Região que deseja filtrar
     *   @param string $p_Nome Parte do nome que deseja filtrar
     *   @return array $listagem O um Array de Objetos do tipo do Modelo desta classe
     */
    public function listar($page=null, $rows=null, $sidx=null, $sord=null, $p_Estado=null, $p_Nome=null){
        try{
            $filtro='';
            if($sidx=='IdCidade'){ $sidx='id_cidade';}
            if($sidx=='SiglaEstado'){ $sidx='t.sigla';}
            if($sidx=='NomeEstado'){ $sidx='t.nome';}
            if($sidx=='NomeRegiao'){ $sidx='r.nome';}
            if($p_Estado){
                if(is_numeric($p_Estado)){
                    $filtro .= " AND t.id_estado=$p_Estado ";
                } else if(strlen($p_Estado)==3){
                    $filtro .= " AND t.sigla3='$p_Estado' ";
                } else {
                    $filtro .= " AND (t.codigo='$p_Estado' OR t.sigla='$p_Estado')";
                }
            } 
            if($p_Nome) {
                $p_Nome=str_replace(' ', '%', $p_Nome);
                $filtro .= " AND (lower(e.nome) LIKE lower('%$p_Nome%'))";
            }
            
            $query = "SELECT t.*, e.nome nome_estado "
                    ." FROM ".$this->_nomeTabela." t "
                    ." INNER JOIN cad_estado e ON t.id_estado=e.id_estado "
                    ." WHERE t.deletado='".$this::NAO."' $filtro "
                    ." ORDER BY $sidx $sord";
            $this->_query = $query;
                        
            // Paginacao
            if ($rows){
                $queryCount= "SELECT count(t.*) AS count "
                            ." FROM ".$this->_nomeTabela." t "
                            ." INNER JOIN cad_estado e ON t.id_estado=e.id_estado "
                            ." WHERE e.deletado='".$this::NAO."' $filtro ";
                $rsCount = $this->_conexao->prepare($queryCount);
                $rsCount->execute();
                $item = $rsCount->fetch(PDO::FETCH_ASSOC);                
                if($item){
                    self::setTotalRegistros($item['count']);
                }
                //$query .= self::definirPaginacao($page, $rows);
                $query .= " LIMIT $p_Linhas OFFSET $p_Pagina;"; 
            }
            
            // Preparo a query
            $stmt = $this->_conexao->prepare($query);

            // Executa a query preparada
            if ($stmt->execute()){
                $this->_query = $stmt->queryString;
                $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if($rs){
                    $listagem = array();
                    foreach ($rs as $item){
                        $listagem[] = self::carregarModelo($item);
                    }
                    return $listagem;
                } else {
                    $arrError = $stmt->errorInfo();
                    $this->_erro = ($arrError[0])? $arrError[0]: $arrError[1];
                    $this->_mensagem = 'PDO-'.$arrError[2];
                    return null;
                }
            } else {
                $arrError = $stmt->errorInfo();
                $this->_erro = ($arrError[0])? $arrError[0]: $arrError[1];
                $this->_mensagem = 'PDO-'.$arrError[2];
            }
        } catch (PDOException $ex){ throw $ex; }
    }
}