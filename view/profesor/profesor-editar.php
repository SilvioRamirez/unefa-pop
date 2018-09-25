<div class="container col-md-10">


<h1 class="text-center">
    <?php echo $profesor->id != null ? $profesor->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="?controller=profesor">Profesor </a></li> 
  <li class="breadcrumb-item active"><?php echo $profesor->id != null ? $profesor->nombre : ' Nuevo Registro'; ?></li>
</ol>

<form id="frm-profesor" action="?controller=profesor&accion=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $profesor->id; ?>" />
      <div class="form-group">
        <label>Cedula</label>
        <input type="text" name="cedula" value="<?php echo $profesor->cedula; ?>" class="form-control" placeholder="Ingrese su cedula" required>
    </div>
    
    <div class="form-group">
        <label>Nombres</label>
        <input type="text" name="nombre" value="<?php echo $profesor->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellido" value="<?php echo $profesor->apellido; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>

    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="sexo" value="<?php echo $profesor->sexo; ?>" class="form-control" placeholder="Ingrese su sexo" required>
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $profesor->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" required>
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $profesor->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>

    <div class="form-group">
        <label>Carreras</label>
        <input type="text" name="carreras" value="<?php echo $profesor->carreras; ?>" class="form-control" placeholder="Ingrese sus carreras" required>
    </div>

    <div class="form-group">
        <label>Días</label>
        <input type="text" name="dias" value="<?php echo $profesor->dias; ?>" class="form-control" placeholder="Ingrese sus dias" required>
    </div>

    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="fecha" value="<?php echo $profesor->fecha; ?>" class="form-control" placeholder="Ingrese su fecha" required>
    </div>

    <div class="form-group">
        <label>Duración</label>
        <input type="text" name="duracion" value="<?php echo $profesor->duracion; ?>" class="form-control" placeholder="Ingrese su duracion" required>
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="descripcion" value="<?php echo $profesor->descripcion; ?>" class="form-control" placeholder="Ingrese su descripción" required>
    </div>

    <hr>
        <button class="btn btn-primary btn-block"><i class="fa fa-save"></i> Guardar</button>
    <hr>
</form>
    
</div>
<script>
    $(document).ready(function(){
        $("#frm-profesor").submit(function(){
            return $(this).validate();
        });
    })
</script>