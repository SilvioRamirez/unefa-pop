<h1 class="text-center">Resultados de la busqueda</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="?controller=estudiante">Estudiante </a></li> 
  <li class="breadcrumb-item active">Busqueda</li>
</ol>
<table class="table table-hover table-sm table-responsive-sm" id="t_estudiantes">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Semestre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Fecha</th>
            <th>Duración</th>
            <th>Descripción</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Buscar($_REQUEST['cedula']) as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->cedula; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->sexo; ?></td>
            <td><?php echo $r->semestre; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td><?php echo $r->duracion; ?></td>
            <td><?php echo $r->descripcion; ?></td>
            <td>
                <a  class="btn btn-warning" href="?controller=estudiante&accion=registro&id=<?php echo $r->id; ?>"><i class="fa fa-edit"></i> Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?controller=estudiante&accion=Eliminar&id=<?php echo $r->id; ?>"><i class="fa fa-trash"></i> Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

