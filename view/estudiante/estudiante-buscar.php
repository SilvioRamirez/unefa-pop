<div class="container col-md-10">


<h1 class="text-center">Busqueda de estudiantes</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="?controller=estudiante">Estudiante </a></li> 
  <li class="breadcrumb-item active">Busqueda</li>
</ol>

<form id="frm-alumno" action="?controller=estudiante&accion=mostrar" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Cedula</label>
        <input type="text" name="cedula" value="" class="form-control" placeholder="Ingrese su cedula" required>
    </div>

    <hr>
        <button class="btn btn-primary btn-block"><i class="fa fa-search"></i> Buscar</button>

</form>
    
</div>
<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>