<div class="container col-md-10">


<h1 class="text-center">
    <?php echo $estudiante->id != null ? $estudiante->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="?controller=estudiante">Estudiante </a></li> 
  <li class="breadcrumb-item active"><?php echo $estudiante->id != null ? $estudiante->nombre : ' Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?controller=estudiante&accion=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $estudiante->id; ?>" />
      <div class="form-group">
        <label>Cedula</label>
        <input type="text" name="cedula" value="<?php echo $estudiante->cedula; ?>" class="form-control" placeholder="Ingrese su cedula" required>
    </div>
    
    <div class="form-group">
        <label>Nombres</label>
        <input type="text" name="nombre" value="<?php echo $estudiante->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellido" value="<?php echo $estudiante->apellido; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="sexo" value="<?php echo $estudiante->sexo; ?>" class="form-control" placeholder="Ingrese su sexo" required>
    </div>

    <div class="form-group">
        <label>Semestre</label>
        <input type="text" name="semestre" value="<?php echo $estudiante->semestre; ?>" class="form-control" placeholder="Ingrese su semestre" required>
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $estudiante->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" required>
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $estudiante->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>

    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="fecha" value="<?php echo $estudiante->fecha; ?>" class="form-control" placeholder="Ingrese su fecha" required>
    </div>

    <div class="form-group">
        <label>Duración</label>
        <input type="text" name="duracion" value="<?php echo $estudiante->duracion; ?>" class="form-control" placeholder="Ingrese su duracion" required>
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="descripcion" value="<?php echo $estudiante->descripcion; ?>" class="form-control" placeholder="Ingrese su descripción" required>
    </div>

    <hr>
        <button class="btn btn-primary btn-block"><i class="fa fa-save"></i> Guardar</button>
    <hr>
    
</form>
    
</div>
<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>