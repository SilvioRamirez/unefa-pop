<?php
class estudiante
{
	private $pdo;
    
    public $id;
    public $cedula;
    public $nombre;
    public $apellido;  
    public $sexo;
    public $semestre;
    public $direccion;
    public $telefono;
    public $fecha;
    public $duracion;
    public $descripcion;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estudiante");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Buscar($cedula)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estudiante WHERE cedula LIKE '%$cedula%' ORDER BY id");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM estudiante WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM estudiante WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE estudiante SET 
						cedula		= ?, 
						nombre		= ?,
                        apellido	= ?,
                        sexo 		= ?,
                        semestre 	= ?,
                        direccion 	= ?,
                        telefono 	= ?,
                        fecha 		= ?,
                        duracion 	= ?,
                        descripcion	= ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->cedula, 
                        $data->nombre,                        
                        $data->apellido,
                        $data->sexo,
                        $data->semestre, 
                        $data->direccion, 
                        $data->telefono, 
                        $data->fecha, 
                        $data->duracion, 
                        $data->descripcion,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(estudiante $data)
	{
		try 
		{
		$sql = "INSERT INTO estudiante (
										cedula,
										nombre,
										apellido,
										sexo,
										semestre,
										direccion,
										telefono,
										fecha,
										duracion,
										descripcion
										) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->cedula, 
                    $data->nombre,
                    $data->apellido, 
                    $data->sexo,
                    $data->semestre, 
                    $data->direccion, 
                    $data->telefono, 
                    $data->fecha, 
                    $data->duracion, 
                    $data->descripcion 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}