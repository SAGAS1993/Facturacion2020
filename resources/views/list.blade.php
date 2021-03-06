 <!-- /.card -->
<div class="content">
  <div class="card">
    <div class="card-header ">
      <h3 class="card-title">Listado de Roles</h3>
      <!--modal de boton registar rol-->
      <button id="modal" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">
      <i class="fas fa-plus"></i>
      Crear Rol
      </button>
     <!--fin modal de boton registar rol-->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tabla-roles" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Fecha de Creación</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody id="datos">
          <tr>
          @foreach ($rol as $roles)
            <td>{{$roles->Id_Rol}}</td>
            <td>{{$roles->Nombre}}</td>
            <td>{{$roles->updated_at}}</td>
            <td>
              <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-editar" onclick="Editar('{{$roles->Id_Rol}}','{{$roles->Nombre}}')">
                <i class="fa fa-pen"></i>             
              </button>

              <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-eliminar" onclick="Eliminar('{{$roles->Id_Rol}}')">
                <i class="fa fa-times"></i>                
              </button>
             </td>
            </tr>
          @endforeach
        </tbody>

             <!--fin modal de boton registar rol-->
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabla-roles" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Fecha de Creación</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody id="datos">
                  <tr>
                  @foreach ($rol as $roles)
                  <td>{{$roles->Id_Rol}}</td>
                  <td>{{$roles->Nombre}}</td>
                   <td>{{$roles->updated_at}}</td>
                   <td><a href="#" class="btn btn-info btn-xs" onclick="Eliminar('{{$roles->Id_Rol}}','{{$roles->Nombre}}')"><i class="fa fa-pen"></i></a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                   </td>
                  </tr>
        @endforeach
      </tbody>

      </table>
    </div>
  </div>
</div>
<!-- /.card -->
<script type="text/javascript">
//iniciacion de tabls de roles
$(function () {
   $("#tabla-roles").DataTable({
    "responsive": true,
    "autoWidth": true,
    });
  });
</script>