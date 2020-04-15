@extends('layouts.app')
@section('menu-open')
menu-open
@endsection
@section('active3')
active
@endsection
@section('contenido')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Roles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item"><a href="#">Roles</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




 <div class="modal fade" id="modal-default" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ingrese un nombre al Rol</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">

          <form method="POST" id="frm_roles" action="{{ url('roles') }}" >
             @csrf

          <input type="text" name="nom_rol" id="nom_rol" class="form-control" placeholder="Nombre del rol" required value="{{ old('nom_rol')}}" >

            </div>

            <div class="modal-footer ">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button"  id="roles" type="submit" class="btn btn-primary">Crear Rol </button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<div class="content">
<div id="list-roles">

</div>
</div>

















@endsection