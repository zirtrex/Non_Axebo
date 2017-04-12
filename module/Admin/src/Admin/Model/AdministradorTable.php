<?php
namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Admin\Entity\Administrador;


class AdministradorTable extends AbstractTableGateway
{

    protected $table = 'administrador';
    
    public function __construct($sm)
    {
    	$this->adapter = $sm->get('Zend\Db\Adapter\Adapter');
    	$this->initialize();
    }
    
    public function obtenerAdministradores()
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
    
        $select->from(array('ad' => 'vw_administrador'))
                ->columns(array('*'))
                ->order('ad.codAdministrador ASC');
    
        $statement = $sql->prepareStatementForSqlObject($select);
        $resultSet = $statement->execute();
    
        return $resultSet;
    }
    
    public function obtenerAdministradoresPagination(Select $select = null)
    {
        if (null === $select)
            $select = new Select();
        
        $select->from('vw_administrador');
        $resultSet = $this->selectWith($select);
        $resultSet->buffer();
        return $resultSet;
    }
    
    public function obtenerAdministrador($codAdministrador)
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
    
        $select->from(array('ad' => 'vw_administrador'))
                ->columns(array('*'))
                ->where(array('ad.codAdministrador' => $codAdministrador));
    
    
        $statement = $sql->prepareStatementForSqlObject($select);
        $resultSet = $statement->execute();
    
        return $resultSet->current();
    }
    
    public function obtenerAdministradorPorCodUsuario($codUsuario)
    {
    	$sql = new Sql($this->adapter);
    	$select = $sql->select();
    
    	$select->from(array('ad' => 'vw_administrador'))
	    	->columns(array('*'))
	    	->where(array('ad.codUsuario' => $codUsuario));
    
    	$statement = $sql->prepareStatementForSqlObject($select);
    	$resultSet = $statement->execute();
    
    	return $resultSet->current();
    }

    public function buscar($texto = "%")
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
    
        $select->from(array('ad' => 'vw_administrador'))
                  ->columns(array('*'))
                  ->where(new \Zend\Db\Sql\Predicate\Like('ad.primerApellido', "%" . $texto . "%"));
    
        $statement = $sql->prepareStatementForSqlObject($select);
        $resultSet = $statement->execute();
    
        return $resultSet;
    }

    public function insertar(Administrador $administrador)
    {
        $data = array(
               'codUsuario' => null,
               'codPersona' => $administrador->getPersona()->getCodPersona(),
               'estado'		=>'1'
            );

    	try{
    		$this->insert($data);
    		return $this->lastInsertValue;
    	}catch (\Exception $e){
    		throw new \Exception($e->getPrevious()->getMessage(),$e->getPrevious()->getCode(), $e->getPrevious()->getPrevious());
    	}
    }

    public function actualizar(Administrador $administrador)
    {
        $data = array(
                'codUsuario' => $administrador->getUsuario()->getCodUsuario()
        );
        
        try{
            $id = (int) $administrador->getCodAdministrador();        
            $this->update($data, array('codAdministrador' => $id));
            return true;
        }catch (\Exception $e){
            throw new \Exception($e->getPrevious()->getMessage(),$e->getPrevious()->getCode(), $e->getPrevious()->getPrevious());
        }  

        return false;
    }

    public function eliminar($codAdministrador)
    {
        $data = array('estado' => '0');

        try{
            $id = (int) $codAdministrador;
            $this->update($data,array('codAdministrador' => $id));
            return true;
        }catch (\Exception $e){
            throw new \Exception($e->getPrevious()->getMessage(),$e->getPrevious()->getCode(), $e->getPrevious()->getPrevious());
        }
    }
    
    //Método especial de inserción de carga masiva
    public function insertarCM(Array $data)
    {
    	try{
    		$this->insert($data);
    	}catch (\Exception $e){
    		throw new \Exception($e->getPrevious()->getMessage(),$e->getPrevious()->getCode(), $e->getPrevious()->getPrevious());
    		return false;
    	}
    	return true;
    }
}