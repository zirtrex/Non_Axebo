<?php
namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Admin\Entity\Usuario;

class UsuarioTable extends AbstractTableGateway
{

    protected $table = 'usuario';
    
    public function __construct($sm)
    {
    	$this->adapter = $sm->get('Zend\Db\Adapter\Adapter');
    	$this->initialize();
    }
    
    public function obtenerUsuarios()
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
    
        $select->from('usuario')
            ->columns(array('codUsuario', 'usuario', 'rol', 'numeroIntentos', 'token', 'ultimoIngreso', 'estado'))
            ->where(array('estado' => '1'));
    
        $statement = $sql->prepareStatementForSqlObject($select);
        $resultSet = $statement->execute();
         
        return $resultSet;
    }
    
    public function obtenerUsuariosPagination(Select $select = null)
    {
        if (null === $select)
            $select = new Select();
        
        $select->from('usuario')
        		->columns(array('codUsuario', 'usuario', 'rol', 'numeroIntentos', 'token', 'ultimoIngreso', 'estado'))
        		->where(array('estado' => '1'));
        
        $resultSet = $this->selectWith($select);
        $resultSet->buffer();
        return $resultSet;
    }
    
    public function obtenerUsuario($codUsuario)
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
    
        $select->from('usuario')
            ->columns(array('codUsuario', 'usuario', 'clave', 'rol', 'numeroIntentos', 'token', 'ultimoIngreso', 'estado'))
            ->where(array('codUsuario' => $codUsuario));
    
    
        $statement = $sql->prepareStatementForSqlObject($select);
        $resultSet = $statement->execute();
    
        return $resultSet->current();
    }
    
    public function obtenerUsuarioPorToken($nombreVista /*vw_administrador o vw_docente*/, $token)
    {
    	$sql = new Sql($this->adapter);
    	$select = $sql->select();
    
    	$select->from($nombreVista)
	    	->columns(array('codUsuario', 'usuario', 'rol', 'numeroIntentos', 'token', 'ultimoIngreso', 'correo'))
	    	->where(array('token' => $token));
    
    
    	$statement = $sql->prepareStatementForSqlObject($select);
    	$resultSet = $statement->execute();
    
    	return $resultSet->current();
    }
    
    public function obtenerUsuarioPorCorreo($nombreVista /* vw_administrador o vw_docente*/, $correo)
    {
    	$sql = new Sql($this->adapter);
    	$select = $sql->select();
    
    	$select->from($nombreVista)
    	->columns(array('codUsuario', 'usuario', 'rol', 'numeroIntentos', 'token', 'ultimoIngreso', 'correo'))
    	->where(array('correo' => $correo));
    
    
    	$statement = $sql->prepareStatementForSqlObject($select);
    	$resultSet = $statement->execute();
    
    	return $resultSet->current();
    }
    
    public function buscar($texto = "%")
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
    
        $select->from('usuario')
                  ->columns(array('*'))
                  ->where(new \Zend\Db\Sql\Predicate\Like('usuario', "%" . $texto . "%"));
    
        $statement = $sql->prepareStatementForSqlObject($select);
        $resultSet = $statement->execute();
    
        return $resultSet;
    }

    public function insertar(Usuario $usuario)
    {
    	$data = array(
    			'usuario'			=> $usuario->getUsuario(),
    			'clave'				=> md5($usuario->getClave()),
    			'rol'				=> $usuario->getRol(),
    			'numeroIntentos'	=> $usuario->getnumeroIntentos(),
    			'token'				=> $usuario->getToken(),
    			'ultimoIngreso'		=> $usuario->getultimoIngreso(),
    			'estado'			=>'1'
    	);

        try{
            $this->insert($data);
            return $this->lastInsertValue;
        }catch (\Exception $e){
            throw new \Exception($e->getPrevious()->getMessage(),$e->getPrevious()->getCode(), $e->getPrevious()->getPrevious());
        }
    }
    
    public function actualizar(Usuario $usuario)
    {
    	$data = array(
    			'usuario'			=> $usuario->getUsuario(),
    			'clave'				=> md5($usuario->getClave()),
    			'rol'				=> $usuario->getRol(),
    			'numeroIntentos'	=> $usuario->getnumeroIntentos(),
    			'token'				=> $usuario->getToken(),
    			'ultimoIngreso'		=> $usuario->getultimoIngreso(),
    			'estado'			=> '1'
    	);

        try{
            $id = (int) $usuario->getCodUsuario();
            $this->update($data, array('codUsuario' => $id));
            return true;
        }catch (\Exception $e){
            throw new \Exception($e->getPrevious()->getMessage(),$e->getPrevious()->getCode(), $e->getPrevious()->getPrevious());
        }  

        return false;
    }
    
    public function actualizarToken(Usuario $usuario)
    {
    	$data = array(
    			'token'=>$usuario->getToken(),
    	);
    
    	try{
    		$id = (int) $usuario->getCodUsuario();
    		$this->update($data, array('codUsuario' => $id));
    		return true;
    	}catch (\Exception $e){
    		throw new \Exception($e->getPrevious()->getMessage(),$e->getPrevious()->getCode(), $e->getPrevious()->getPrevious());
    	}
    
    	return false;
    }

    public function eliminar($codUsuario)
    {
        $data = array('estado' => '0');

        try{
            $id = (int) $codUsuario;
            $this->update($data, array('codUsuario' => $id));
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
