<?php
if(!class_exists('PDOConnection')){ require_once 'PDOConnection.class.php';}
if(!class_exists('Modulo')){ require_once 'Modulo.class.php';}
/**
 * Classe DAO de acesso a dados a entidade Módulo
 */
class ModuloDAO extends PDOConnection {
    
    /**
     *   Método interna para carregar objeto com os dados do registro.
     *
     *   @param object $p_Item O Objeto do tipo Registro do Banco de Dados
     *   @return object O Objeto do tipo do Modelo desta classe
     */
    private static function carregarModelo($p_Item){
        try{
            if ($p_Item) {
                $obj = new Modulo();
                $obj->setId($p_Item['id_modulo']);
                $obj->setIdModuloPai($p_Item['id_modulo_pai']);
                $obj->setNomeModuloPai((isset($p_Item['nome_modulo_pai']))? $p_Item['nome_modulo_pai']: '');
                $obj->setChave($p_Item['chave']);
                $obj->setVisao((isset($p_Item['visao']))? $p_Item['visao']: '');
                $obj->setControle((isset($p_Item['controle']))? $p_Item['controle']: '');
                $obj->setClasse($p_Item['classe']);
                $obj->setNome($p_Item['nome']);
                $obj->setDescricao($p_Item['descricao']);
                $obj->setImagem($p_Item['imagem']);
                $obj->setNivel($p_Item['nivel']);
                $obj->setPublico($p_Item['publico']);
                $obj->setOrdem((isset($p_Item['ordem']))? $p_Item['ordem']: 0);
                $obj->setVisitas((isset($p_Item['visitas']))? $p_Item['visitas']: 0);
                $obj->setParametros((isset($p_Item['parametros']))? $p_Item['parametros']: '{}');
                $obj->setFuncoes((isset($p_Item['funcoes']))? $p_Item['funcoes']: 0);
                $obj->setAtivo($p_Item['ativo']);
               
                $obj->setAcao($p_Item['acao']);
                $obj->setRevisao((isset($p_Item['revisao']))? $p_Item['revisao']: 0);
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
     *   Método para gravar um registro novo.
     *
     *   @param object $p_Obj O Objeto do tipo do Modelo desta classe
     *   @return boolean Flag que indica que a operacaoo foi concluida com sucesso
     */
    public function salvar($p_Obj){
        try{
            // Preparo a query
            $query = "INSERT INTO cad_modulo (acao,  data_acao, id_usuario_acao, id_modulo_pai,  chave,  classe,  visao,  controle,  nome,  descricao,  imagem,  nivel,  ordem,  parametros,  publico,  ativo, revisao)"
                                    ."VALUES ('incluir', ".$this::NOW.",  :IdUsuarioAcao,  :IdModuloPai, :Chave, :Classe, :Visao, :Controle, :Nome, :Descricao, :Imagem, :Nivel, :Ordem, :Parametros, :Publico, :Ativo,       1)";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;

            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario );
            $stmt->bindValue(':IdModuloPai', $p_Obj->getIdModuloPai());
            $stmt->bindValue(':Chave', $p_Obj->getChave());
            $stmt->bindValue(':Classe', $p_Obj->getClasse());
            $stmt->bindValue(':Visao', $p_Obj->getVisao());
            $stmt->bindValue(':Controle', $p_Obj->getControle());
            $stmt->bindValue(':Nome', $p_Obj->getNome());
            $stmt->bindValue(':Descricao', $p_Obj->getDescricao());
            $stmt->bindValue(':Imagem', $p_Obj->getImagem());
            $stmt->bindValue(':Nivel', $p_Obj->getNivel());
            $stmt->bindValue(':Ordem', $p_Obj->getOrdem());
            $stmt->bindValue(':Parametros', $p_Obj->getParametros());
            $stmt->bindValue(':Publico', $p_Obj->getPublico());
            $stmt->bindValue(':Ativo', $obj->getAtivo());

            // Executo a query preparada
            if ($stmt->execute()){
                $Id = $this->_conexao->lastInsertId(); // MYSQL
                if (!$Id){
                    $Id = $this->_conexao->lastInsertId('cad_modulo_id_modulo_seq'); // POSTGRSQL
                }
                $p_Obj->setId($Id); 
                return true;
            } else{
                $this->_erro = $stmt->errorInfo();
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     *   Método para retornar um registro pelo Identificador do registro.
     *
     *   @param int $p_Id O Identificador do registro
     *   @return object O Objeto do tipo do Modelo desta classe
     */
    public function retornar($p_Id){
        try{
            $filtro = '';
            if($p_Id){
                // Prepara o filtro
                if(is_numeric($p_Id)){
                    $filtro .= " AND m.id_modulo=:Id ";
                } else {
                    $filtro .= " AND m.chave=:Id ";
                }
                
                // Preparo a query
                $query = "SELECT m.*, mp.nome AS nome_modulo_pai , u1.nome AS nome_usuario_acao "
                        ." FROM cad_modulo m "
                        ." LEFT JOIN cad_modulo mp ON mp.id_modulo=m.id_modulo_pai "
                        ." LEFT JOIN cad_usuario u1 ON u1.id_usuario=m.id_usuario_acao "
                        ." WHERE m.deletado='".$this::NAO."' $filtro ";
                $stmt = $this->_conexao->prepare($query);
                $this->_query = $query;
                
                // Passa os paramentros para a query 
                $stmt->bindValue(':Id', $p_Id);

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
     *   Método para retornar um registro pelo Identificador do registro.
     *
     *   @param int $p_Chave O Identificador do registro
     *   @return object O Objeto do tipo do Modelo desta classe
     */
    public function retornarPorChave($p_Chave){
        try{
            // Preparo a query
            $query = "SELECT m.*, mp.nome AS nome_modulo_pai , u1.nome AS nome_usuario_acao "
                    ." FROM cad_modulo m "
                    ." LEFT JOIN cad_modulo mp ON mp.id_modulo=m.id_modulo_pai "
                    ." LEFT JOIN cad_usuario u1 ON u1.id_usuario=m.id_usuario_acao "
                    ." WHERE m.chave=:Chave";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;

            // Passa os paramentros para a query 
            $stmt->bindValue(':Chave', $p_Chave);

            // Executo a query preparada
            $stmt->execute();
     
            // Pega o resultado da query executada
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
            if($item){
                return self::carregarModelo($item);
            } else{ return null; }
        } catch (PDOException $ex){ throw $ex; }
    }
    
    /**
     *   Método para atualizar um registro.
     *
     *   @param object $p_Obj O Objeto do tipo do Modelo desta classe
     *   @return boolean Flag que indica que a operação foi concluída com sucesso
     */
    public function atualizar($p_Obj){
        try{
            // Preparo a query
            $query = "UPDATE cad_modulo "
                    ." SET acao='alterar', data_acao=".$this::NOW.", id_usuario_acao=:IdUsuarioAcao" 
                    .", id_modulo_pai=:IdModuloPai, chave=:Chave, classe=:Classe"
                    .", visao=:Visao, controle=:Controle"
                    .", nome=:Nome, descricao=:Descricao, imagem=:Imagem"
                    .", nivel=:Nivel, ordem=:Ordem, parametros=:Parametros"
                    .", publico=:Publico, ativo=:Ativo, revisao=(revisao+1)"
                    ."  WHERE id_modulo=:Id";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;
            
            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario );
            $stmt->bindValue(':IdModuloPai', $p_Obj->getIdModuloPai());
            $stmt->bindValue(':Chave', $p_Obj->getChave());
            $stmt->bindValue(':Classe', $p_Obj->getClasse());
            $stmt->bindValue(':Visao', $p_Obj->getVisao());
            $stmt->bindValue(':Controle', $p_Obj->getControle());
            $stmt->bindValue(':Nome', $p_Obj->getNome());
            $stmt->bindValue(':Descricao', $p_Obj->getDescricao());
            $stmt->bindValue(':Imagem', $p_Obj->getImagem());
            $stmt->bindValue(':Nivel', $p_Obj->getNivel());
            $stmt->bindValue(':Ordem', $p_Obj->getOrdem());
            $stmt->bindValue(':Parametros', $p_Obj->getParametros());
            $stmt->bindValue(':Publico', $p_Obj->getPublico());
            $stmt->bindValue(':Ativo', $obj->getAtivo());
            $stmt->bindValue(':Id', $p_Obj->getId());

            // Executa a query preparada
            if ($stmt->execute()){
                return true;
            } else {  
                $this->_erro = $stmt->errorInfo();
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            }
        } catch (PDOException $ex){ throw $ex; }
    }
    
    /**
     *   Método para excluir o registro.
     *
     *   @param int $p_Id O Identificador do registro desta classe
     *   @return boolean TRUE $Resultado Flag que indica que a operação foi concluída com sucesso
     */
    public function excluir($p_Id){
        try{
            // Preparo a query
            $query = "UPDATE cad_modulo "
                    . " SET acao='excluir', data_acao=".$this::NOW.", id_usuario_acao=:IdUsuarioAcao, ativo='".$this::NAO."', deletado='".$this::SIM."' "
                    . " WHERE id_modulo=:Id";
            $stmt = $this->_conexao->prepare($query);
            $this->_query = $query;

            // Passa os paramentros para a query 
            $stmt->bindValue(':IdUsuarioAcao', $this->_idUsuario);
            $stmt->bindValue(':Id', $p_Id);

            // Executa a query preparada
            if ($stmt->execute()){
                return true;
            } else {
                $this->_erro = $stmt->errorInfo();
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            }
        } catch (PDOException $ex){ throw $ex; }
    }
        
    /**
     *   Método para listar os registros
     *
     *   @param int $p_Pagina A Pagina do registros a ser retornarda
     *   @param int $p_Linhas A Quantidade de registro a ser retornardo
     *   @param int $p_Ordem O nome do campo a ser Ordendado
     *   @param int $p_Direcao A direcao da ordenacao (ASC ou DESC)
     *   @param int $p_Nivel A Nível hieráquico do Modulo
     *   @param int $p_IdModuloPai O Identificador do Módulo Pai
     *   @param int $p_Nivel A Nível hieráquico do Modulo
     *   @param int $p_Nome A Nome do Módulo 
     *   @return array $listagem O um Array de Objetos do tipo do Modelo desta classe
     */
    public function listar($p_Pagina=null, $p_Linhas=null, $p_Ordem=null, $p_Direcao='', $p_Nivel=null, $p_IdModuloPai=null, $p_Nome=null, $p_Ativo=true){
        try{
            // Filtros
            $filtro='';
            if($p_Nivel){ $filtro .= " AND m.nivel=$p_Nivel ";}
            if($p_IdModuloPai){ $filtro .= " AND m.id_modulo_pai=$p_IdModuloPai ";}
            if($p_Nome){
                $p_Nome=str_replace(' ', '%', $p_Nome);
                $filtro .= " AND (upper(m.nome) LIKE upper('%$p_Nome%')) ";
            }
            if(($p_Ativo===1)||($p_Ativo===true)||($p_Ativo==='true')){
                $filtro .= " AND m.ativo='".$this::SIM."' ";
            }else if(($p_Ativo===0)||($p_Ativo===false)||($p_Ativo==='false')){
                $filtro .= " AND m.ativo='".$this::NAO."' ";
            }
            // Ordenação
            if($p_Ordem == 'IdModulo'){ $p_Ordem = 'm.id_modulo';}
            if($p_Ordem == 'IdModuloPai'){ $p_Ordem = 'm.id_modulo_pai';}
            if(!$p_Ordem){ $p_Ordem = ' m.ordem ';}
            
            $query = "SELECT m.*, mp.nome AS nome_modulo_pai , u1.nome AS nome_usuario_acao "
                    ." FROM cad_modulo m "
                    ." LEFT JOIN cad_modulo mp ON mp.id_modulo=m.id_modulo_pai "
                    ." LEFT JOIN cad_usuario u1 ON u1.id_usuario=m.id_usuario_acao "
                    ." WHERE m.deletado='".$this::NAO."' $filtro "
                    ." ORDER BY $p_Ordem $p_Direcao ";
            
            // Executa a query
            $this->_query = $query;
            $rs = $this->_conexao->query($query);
            if($rs){
                $listagem = array();
                foreach ($rs as $item){
                    $listagem[] = self::carregarModelo($item);
                }
                return $listagem;
            } else {
                $this->_erro = $this->_conexao->errorInfo();
            }
        } catch (Exception $ex){ throw $ex; }
    }

    /**
     *   Método para listar os registros
     *
     *   @param int $p_IdPerfil A Identificador do Perfil
     *   @param int $p_Nivel A Nível hieráquico do Modulo
     *   @param int $p_IdModuloPai O Identificador do Módulo Pai
     *   @return array $listagem O um Array de Objetos do tipo do Modelo desta classe
     */
    public function listarPorPerfil($p_IdPerfil, $p_Nivel=null, $p_IdModuloPai=null){
        try{ 
            // Filtros
            $filtro='';
            if(($p_Nivel!=null) && ($p_Nivel!='')){ $filtro .= " AND m.nivel=$p_Nivel ";}
            if($p_IdModuloPai){ $filtro .= " AND m.id_modulo_pai=$p_IdModuloPai ";}
            
            // Somentes os habilitadas
            
            $query = "SELECT DISTINCT m.* FROM cad_modulo m
                        WHERE m.deletado='".$this::NAO."' AND m.ativo='".$this::SIM."' $filtro 
                        AND m.id_modulo IN (SELECT DISTINCT f.id_modulo FROM cad_funcionalidade f 
						                    INNER JOIN cad_perfil_funcionalidade pf ON pf.id_funcionalidade=f.id_funcionalidade
                                            INNER JOIN cad_perfil p ON p.id_perfil = pf.id_perfil											
											WHERE pf.deletado='".$this::NAO."' AND p.ativo=".$this::SIM." AND pf.id_perfil=$p_IdPerfil 
                                            UNION 
											SELECT DISTINCT m.id_modulo_pai FROM cad_funcionalidade f 
											INNER JOIN cad_modulo m ON f.id_modulo=m.id_modulo 
											INNER JOIN cad_perfil_funcionalidade pf ON pf.id_funcionalidade=f.id_funcionalidade 
											INNER JOIN cad_perfil p ON p.id_perfil = pf.id_perfil
											WHERE pf.deletado='".$this::NAO."' AND p.ativo=".$this::SIM." AND pf.id_perfil=$p_IdPerfil)
                        ORDER BY m.ordem ASC ";
            
			// Todos os Modulos com as Quantidades de Funcões Habilitadas para o Perfil 
            /*
			$query = "SELECT DISTINCT m.* 
                    , (SELECT COUNT(f.id_funcionalidade) FROM cad_funcionalidade f INNER JOIN cad_perfil_funcionalidade pf ON pf.id_funcionalidade=f.id_funcionalidade WHERE f.id_modulo=m.id_modulo AND pf.deletado='".$this::NAO."' AND pf.id_perfil=$p_IdPerfil) AS funcoes
                    FROM cad_modulo m  WHERE m.deletado='".$this::NAO."' AND m.ativo='".$this::SIM."' $filtro ORDER BY m.ordem ASC ";
            */
			// Executa a query
            $this->_query = $query;
            $rs = $this->_conexao->query($query);
            if($rs){
                $listagem = array();
                foreach ($rs as $item){
                    $listagem[] = self::carregarModelo($item);
                }
                return $listagem;
            } else {
                $this->_erro = $this->_conexao->errorInfo();
            }
        } catch (PDOException $ex){ throw $ex; }
    }
    
    /**
     *   Método para registrar o contador de visitação do Módulo
     *
     *   @param int $p_Id O Identificador do registro desta classe
     *   @return boolean $Resultado Flag que indica que a operação foi concluída com sucesso
     */
    public function registrarVisita($p_Id){
        try{
            if ($p_Id){
                // Preparo a query
                $stmt = $this->_conexao->prepare("UPDATE cad_modulo SET visitas=visitas+1 WHERE id_modulo=:Id");

                // Passa os paramentros para a query 
                $stmt->bindValue(':Id', $p_Id);

                // Executa a query preparada
                if ($stmt->execute()){
                    return true;
                } else {
                    $this->_erro = $stmt->errorInfo();
                    throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
                }
            } else { return false; }
        } catch (PDOException $ex){ throw $ex; }
    }

    /**
     *   Método para registrar o contador de visitação do Módulo
     *
     *   @param int $p_Chave O Identificador do registro desta classe
     *   @return boolean $Resultado Flag que indica que a operação foi concluída com sucesso
     */
    public function registrarVisitaPorChave($p_Chave){
        try{
            // Preparo a query
            $stmt = $this->_conexao->prepare("UPDATE cad_modulo SET visitas=visitas+1 WHERE chave=:Chave");

            // Passa os paramentros para a query 
            $stmt->bindValue(':Chave', $p_Chave);

            // Executa a query preparada
            if ($stmt->execute()){
                return true;
            } else {
                $this->_erro = $stmt->errorInfo();
                throw new PDOException('<b>Erro ao executar a Query.</b><br/>['.$stmt->queryString.']<br/>'.$this->_erro[2]);
            }
        } catch (PDOException $ex){ throw $ex; }
    }
}