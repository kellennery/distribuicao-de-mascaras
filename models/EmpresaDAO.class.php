<?php
if(!class_exists('PDOConnection')){ require_once 'PDOConnection.class.php';}
if(!class_exists('Empresa')){ require_once 'Empresa.class.php';}
/**
 * Classe DAO de acesso a dados a entidade Empresa
 * 
 * @package Model.DAO
 * @category DAO
 * @since   2020-05-21
 * @version 1.6
 * @author  Kellen Nery
 * 
 * 
 * @edit    2020-05-20<br />
 *          Kellen Nery <kellen.nery@bio.fiocruz.br>
 *          Implementação de Documentação
 *          #1.06
 */ 
class EmpresaDAO extends PDOConnection {

    /**
     *  contrutor da classe EmpresaDAO
     *
     *  @param string $p_NomeTabela O nome da tabela a ser mapeada
     *  @param string $p_ChavePrimaria O nome da chave primária da tabela a ser mapeada
     *  @param string $p_NomeContador O nome do contador da tabela a ser mapeada
     * 
     *  @return void
     */    
    function __construct($p_NomeTabela='empresa', $p_ChavePrimaria='id_empresa', $p_NomeContador=''){
        try{
            parent::__construct($p_NomeTabela, $p_ChavePrimaria, $p_NomeContador);
        } catch (PDOException $ex){ throw $ex; }
    }
    
    /**
     * Método interna para carregar objeto com os dados do registro.
     *
     *   @param object $p_Item O Objeto do tipo Registro do Banco de Dados
     *   @return object|null $Modelo O Objeto do tipo do Modelo desta classe
     */
    private static function carregarModelo($p_Item){
        try{
            if ($p_Item) {
                $obj = new Empresa();
                $obj->setId($p_Item['id_empresa']);
                $obj->setIdMatriz((isset($p_Item['id_matriz'])) ? $p_Item['id_matriz']: '');
                $obj->setNomeMatriz((isset($p_Item['nome_matriz'])) ? $p_Item['nome_matriz']: '');
                $obj->setIdTipoEmpresa((isset($p_Item['id_tipo_empresa'])) ? $p_Item['id_tipo_empresa']: '');
                $obj->setNomeTipoEmpresa((isset($p_Item['nome_tipo_empresa'])) ? $p_Item['nome_tipo_empresa']: '');
                $obj->setChave($p_Item['chave']);
                $obj->setCNPJ((isset($p_Item['cnpj']))? $p_Item['cnpj']: '');
                $obj->setSigla($p_Item['sigla']);
                $obj->setNome($p_Item['nome']);
                $obj->setRazaoSocial((isset($p_Item['razao_social'])) ? $p_Item['razao_social']: '');
                $obj->setImagem($p_Item['imagem']);
                
                $obj->setTelefone(trim($p_Item['telefone']));
                $obj->setFax(trim($p_Item['fax']));
                $obj->setOutro(trim($p_Item['outro']));
                $obj->setEmail(trim($p_Item['email']));
                $obj->setSite(trim($p_Item['site']));
                $obj->setObservacao((isset($p_Item['observacao']))? trim($p_Item['observacao']): '');
                
                $obj->setExecutivo((isset($p_Item['executivo_nome'])) ? trim($p_Item['executivo_nome']): '');
                $obj->setExecutivoTelefone((isset($p_Item['executivo_telefone'])) ? trim($p_Item['executivo_telefone']): '');
                $obj->setExecutivoEmail((isset($p_Item['executivo_email'])) ? trim($p_Item['executivo_email']): '');
                $obj->setContato((isset($p_Item['contato_nome'])) ?trim($p_Item['contato_nome']): '');
                $obj->setContatoTelefone((isset($p_Item['contato_telefone'])) ? trim($p_Item['contato_telefone']): '');
                $obj->setContatoEmail((isset($p_Item['contato_email'])) ?trim($p_Item['contato_email']): '');
                
                $obj->setAtivo($p_Item['ativo']);
                $obj->setRevisao(isset($p_Item['revisao'])? $p_Item['revisao']: 0);
                $obj->setIdUsuarioCadastro($p_Item['id_usuario_cadastro']);
                $obj->setNomeUsuarioCadastro((isset($p_Item['nome_usuario_cadastro']))? $p_Item['nome_usuario_cadastro']: '');
                $obj->setDataCadastro($p_Item['data_cadastro']);
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
            $query = "INSERT INTO cad_empresa "
                    ."(data_cadastro, id_usuario_cadastro, revisao,      acao, data_acao, id_usuario_acao, id_tipo_empresa, id_matriz,  chave,  cnpj, razao_social,  sigla,  nome,  telefone,  fax,  outro,  email,  site,  observacao, executivo_nome, executivo_telefone, executivo_email, contato_nome, contato_telefone, contato_email,  ativo)"
                    ." VALUES "
                    ."(        ".$this::NOW.",  :IdUsuarioCadastro,       1, 'incluir',     ".$this::NOW.",  :IdUsuarioAcao,  :IdTipoEmpresa, :IdMatriz, :Chave, :CNPJ, :RazaoSocial, :Sigla, :Nome, :Telefone, :Fax, :Outro, :Email, :Site, :Observacao, :ExecutivoNome, :ExecutivoTelefone, :ExecutivoEmail, :ContatoNome, :ContatoTelefone, :ContatoEmail, :Ativo)";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;
            
            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioCadastro', $this->_idUsuario);
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario);
            $stmt->bindValue(':IdTipoEmpresa', $obj->getIdTipoEmpresa());
            $stmt->bindValue(':IdMatriz', $obj->getIdMatriz());
            $stmt->bindValue(':Chave', $obj->getChave());
            $stmt->bindValue(':CNPJ', $obj->getCNPJ());
            $stmt->bindValue(':RazaoSocial', $obj->getRazaoSocial());
            $stmt->bindValue(':Sigla', $obj->getSigla());
            $stmt->bindValue(':Nome', $obj->getNome());
            //$stmt->bindValue(':Imagem', $obj->getImagem());
            $stmt->bindValue(':Telefone', $obj->getTelefone());
            $stmt->bindValue(':Fax', $obj->getFax());
            $stmt->bindValue(':Outro', $obj->getOutro());
            $stmt->bindValue(':Email', $obj->getEmail());
            $stmt->bindValue(':Site', $obj->getSite());
            $stmt->bindValue(':Observacao', $obj->getObservacao());
            $stmt->bindValue(':ExecutivoNome', $obj->getExecutivo());
            $stmt->bindValue(':ExecutivoTelefone', $obj->getExecutivoTelefone());
            $stmt->bindValue(':ExecutivoEmail', $obj->getExecutivoEmail());
            $stmt->bindValue(':ContatoNome', $obj->getContato());
            $stmt->bindValue(':ContatoTelefone', $obj->getContatoTelefone());
            $stmt->bindValue(':ContatoEmail', $obj->getContatoEmail());
            $stmt->bindValue(':Ativo', $obj->getAtivo());

            // Executo a query preparada
            if (!$stmt->execute()){
                $this->_erro = $stmt->errorInfo();
                $this->_query = $stmt->queryString;
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            } else{
                $Id = $this->_conexao->lastInsertId(); // MYSQL
                if (!$Id){
                    $Id = $this->_conexao->lastInsertId('cad_empresa_id_empresa_seq'); // POSTGRSQL
                }
                $obj->setId($Id); 
                return true;
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    
    /**
     * Método para retornar um registro pelo Identificador do registro.
     *
     *   @param int $p_Id O Identificador do registro
     *   
     *   @return object $obj O Objeto do tipo do Modelo desta classe
     */
    public function retornar($p_Id){
        try{
            // Preparo a query
            $query = "SELECT c.*, m.nome nome_matriz, ti.nome nome_tipo_empresa "
                    ." , u1.nome AS nome_usuario_cadastro, u2.nome AS nome_usuario_acao "
                    ." FROM cad_empresa c "
                    ." LEFT JOIN cad_empresa m ON c.id_matriz=m.id_empresa "
                    ." LEFT JOIN cad_tipo_empresa ti ON c.id_tipo_empresa=ti.id_tipo_empresa "
                    ." LEFT JOIN cad_usuario u1 ON u1.id_usuario=c.id_usuario_cadastro "
                    ." LEFT JOIN cad_usuario u2 ON u2.id_usuario=c.id_usuario_acao "
                    ." WHERE c.id_empresa=:Id ";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;
            
            // Passa os paramentros para a query 
            $stmt->bindValue(':Id', $p_Id, PDO::PARAM_INT);

            // Executa a query preparada
            $stmt->execute();
     
            // Pega o resultado da query executada
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            if($item){
                return self::carregarModelo($item);
            } else{
                return null;
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para atualizar um registro.
     *
     *   @param object $obj O Objeto do tipo do Modelo desta classe
     *   
     *   @return boolean $Resultado Flag que indica que a operação foi conclu?da com sucesso
     */
    public function atualizar($obj){
        try{
            // Preparo a query
            $query = "UPDATE cad_empresa SET "
                    ." acao='editar', data_acao=".$this::NOW.", id_usuario_acao=:IdUsuarioAcao "
                    .", id_tipo_empresa=:IdTipoEmpresa, id_matriz=:IdMatriz, chave=:Chave, cnpj=:CNPJ "
                    .", razao_social=:RazaoSocial, sigla=:Sigla, nome=:Nome "
                    .", telefone=:Telefone, fax=:Fax, outro=:Outro "
                    .", email=:Email, site=:Site, observacao=:Observacao"
                    .", executivo_nome=:ExecutivoNome, executivo_telefone=:ExecutivoTelefone, executivo_email=:ExecutivoEmail "
                    .", contato_nome=:ContatoNome, contato_telefone=:ContatoTelefone, contato_email=:ContatoEmail "
                    .", ativo=:Ativo, revisao=revisao+1 "
                    ." WHERE id_empresa=:Id";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;
            
            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario);
            $stmt->bindValue(':IdTipoEmpresa', $obj->getIdTipoEmpresa());
            $stmt->bindValue(':IdMatriz', $obj->getIdMatriz());
            $stmt->bindValue(':Chave', $obj->getChave());
            $stmt->bindValue(':CNPJ', $obj->getCNPJ());
            $stmt->bindValue(':RazaoSocial', $obj->getRazaoSocial());
            $stmt->bindValue(':Sigla', $obj->getSigla());
            $stmt->bindValue(':Nome', $obj->getNome());
            //$stmt->bindValue(':Imagem', $obj->getImagem());
            $stmt->bindValue(':Telefone', $obj->getTelefone());
            $stmt->bindValue(':Fax', $obj->getFax());
            $stmt->bindValue(':Outro', $obj->getOutro());
            $stmt->bindValue(':Email', $obj->getEmail());
            $stmt->bindValue(':Site', $obj->getSite());
            $stmt->bindValue(':Observacao', $obj->getObservacao());
            $stmt->bindValue(':ExecutivoNome', $obj->getExecutivo());
            $stmt->bindValue(':ExecutivoTelefone', $obj->getExecutivoTelefone());
            $stmt->bindValue(':ExecutivoEmail', $obj->getExecutivoEmail());
            $stmt->bindValue(':ContatoNome', $obj->getContato());
            $stmt->bindValue(':ContatoTelefone', $obj->getContatoTelefone());
            $stmt->bindValue(':ContatoEmail', $obj->getContatoEmail());
            $stmt->bindValue(':Ativo', $obj->getAtivo());
            $stmt->bindValue(':Id', $obj->getId());

            // Executa a query preparada
            if (!$stmt->execute()){
                $this->_erro = $stmt->errorInfo();
                $this->_query = $stmt->queryString;
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            } else{
                return true;
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     * Método para atualizar Imagem do registro.
     *
     * @param int $p_Id O Identificador do registro 
     * @param string $p_Imagem O Nome da Imagem do registro 
     * 
     * @return boolean Flag que indica que a operação foi concluída com sucesso
     */
    public function atualizarImagem($p_Id, $p_Imagem=null){
        try{
            // Preparo a query 
            $stmt = $this->_conexao->prepare("UPDATE cad_empresa SET imagem=:Imagem WHERE id_empresa=:Id");
            // Passa os paramentros para a query 
            $stmt->bindValue(':Imagem', $p_Imagem);
            $stmt->bindValue(':Id', $p_Id);

            // Executa a query preparada
            if (!$stmt->execute()){
                $this->_erro = $stmt->errorInfo();
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            } else{
                return true;
            }
        } catch (PDOException $ex){ throw $ex; }
    }
    
    /**
     * Método para excluir o registro.
     *
     *   @param int $p_Id O Identificador do registro desta classe
     *   
     *   @return boolean Flag que indica que a operação foi concluída com sucesso
     */
    public function excluir($p_Id){
        try{
            // Preparo a query
            $query = " UPDATE cad_empresa "
                    ." SET acao='excluir', data_acao=".$this::NOW.", id_usuario_acao=:IdUsuarioAcao, deletado=true "
                    ." WHERE id_empresa=:Id";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;
            
            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario);
            $stmt->bindValue(':Id', $p_Id);

            // Executa a query preparada
            if (!$stmt->execute()){
                $this->_erro = $stmt->errorInfo();
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            } else {
                return true;
            }
        } catch (PDOException $ex){ throw $ex; }
    }
     
    /**
     * Método para listar os registros
     *
     * @param int $p_Pagina A Página do registros a ser retornarda
     * @param int $p_Linhas A Quantidade de registro a ser retornardo
     * @param int $p_Ordem O nome do campo a ser Ordendado
     * @param int $p_Direcao A direção da ordenação (ASC ou DESC)
     * @param int $p_IdTipoEmpresa O Id do tipo de Empresa
     * @param int $p_IdEmpresa O Id da Empresa
     * @param int $p_IdMatriz O Id da Matriz
     * @param string $p_Nome O nome da empresa 
     * @param string $p_UF Chave do Estado (exemplo: BR-RJ)
     * @param int $p_IdPais O Id do Pais
     * @param bool $p_Ativo Flag de empresa Ativa
     *      
     * @return array $listagem O um Array de Objetos do tipo do Modelo desta classe
     */
    public function listar($p_Pagina=null, $p_Linhas=null, $p_Ordem=null, $p_Direcao=null, $p_IdTipoEmpresa=null, $p_IdEmpresa=null, $p_IdMatriz=null, $p_Nome=null, $p_Ativo=null){
        try{
            $filtro='';
            if($p_IdTipoEmpresa){ $filtro .= " AND e.id_tipo_empresa IN($p_IdTipoEmpresa) ";}
            if($p_IdEmpresa) {
                if($p_IdEmpresa > 0) {
                    $filtro .= " AND e.id_empresa=$p_IdEmpresa ";
                } else {
                    $filtro .= " AND e.id_empresa<>".abs($p_IdEmpresa);
                }
            }
            if($p_IdMatriz){ $filtro .= " AND e.id_matriz=$p_IdMatriz";}
            //if($p_Nome) $filtro .= " AND (c.nome like '%$p_Nome%' OR c.razao_social like '%$p_Nome%') ";
            if($p_Nome){
                $nome=str_replace(' ', '%', $nome);
                $filtro .= " AND (upper(e.nome) like upper('%$p_Nome%') OR upper(e.razao_social) like upper('%$p_Nome%')) ";
            }            
            if(($p_Ativo===1)||($p_Ativo===true)||($p_Ativo==='true')){
                $filtro .= " AND e.ativo='".$this::SIM."' ";
            }else if(($p_Ativo===0)||($p_Ativo===false)||($p_Ativo==='false')){
                $filtro .= " AND e.ativo='".$this::NAO."' ";
            }
            if(!$p_Ordem){ $p_Ordem = 'e.nome';}
            
            $query = "SELECT e.*, ti.nome nome_tipo_empresa "
                    ." , u1.nome AS nome_usuario_acao "
                    ." FROM cad_empresa e "
                    ." LEFT JOIN cad_tipo_empresa ti ON e.id_tipo_empresa=ti.id_tipo_empresa "
                    ." LEFT JOIN cad_usuario u1 ON e.id_usuario_acao=u1.id_usuario "
                    ." WHERE e.deletado=false  $filtro "
                    ." ORDER BY $p_Ordem $p_Direcao";
            // Paginacao
            if ($p_Linhas){
                $queryCount = "SELECT count(*) AS count
                            FROM cad_empresa e
                            WHERE e.deletado=false $filtro ";
                $rsCount = $this->_conexao->prepare($queryCount);
                $rsCount->execute();
                $item = $rsCount->fetch(PDO::FETCH_ASSOC);
                if($item){
                    self::setTotalRegistros($item['count']);
                }
                $query .= " LIMIT $p_Linhas OFFSET $p_Pagina;"; 
            }
            
            // Preparo a query
            //$rs = $this->_conexao->query($query);
            $stmt = $this->_conexao->prepare($query);

            // Executa a query
            $stmt->execute();
            $this->_query = $stmt->queryString;
            $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($rs){
                $listagem = array();
                foreach ($rs as $item){
                    $listagem[] = self::carregarModelo($item);
                }
                return $listagem;
                
            } else {
                $this->_erro = $this->_conexao->errorInfo();
                $this->_query = $stmt->queryString;
                //throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            }
            
        } catch (PDOException $ex){ throw $ex; }
    }

}