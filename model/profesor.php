<?php
class profesor
{
	private $pdo;
    
    public $id;
    public $cedula;
    public $nombre;
    public $apellido;  
    public $sexo;
    public $direccion;
    public $telefono;
    public $carreras;
    public $dias;
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

			$stm = $this->pdo->prepare("SELECT * FROM profesor");
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

			$stm = $this->pdo->prepare("SELECT * FROM profesor WHERE cedula LIKE '%$cedula%' ORDER BY id");
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
			          ->prepare("SELECT * FROM profesor WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM profesor WHERE id = ?");			          

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
			$sql = "UPDATE profesor SET 
						cedula		= ?, 
						nombre		= ?,
                        apellido	= ?,
                        sexo 		= ?,
                        direccion 	= ?,
                        telefono 	= ?,
                        carreras 	= ?,
                        dias 		= ?,
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
                        $data->direccion, 
                        $data->telefono,
                        $data->carreras, 
                        $data->dias, 
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

	public function Registrar(profesor $data)
	{
		try 
		{
		$sql = "INSERT INTO profesor (
										cedula,
										nombre,
										apellido,
										sexo,
										direccion,
										telefono,
										carreras,
										dias,
										fecha,
										duracion,
										descripcion
										) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->cedula, 
                    $data->nombre,
                    $data->apellido, 
                    $data->sexo,
                    $data->direccion, 
                    $data->telefono,
                    $data->carreras,
                    $data->dias,
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