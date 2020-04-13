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
            @if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <input type="text" name="nom_rol" id="nom_rol" class="form-control" placeholder="Nombre del rol" required value="{{ old('nom_rol')}}" >

            </div>

            <div class="modal-footer ">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button"  id="roles" type="submit" class="btn btn-primary">Crear Rol </button>
              <input type="submit" id="roles" class="btn btn-primary" value="Registrar Rol">
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>












 <!-- /.card -->
          <div class="content">
          <div class="card">
            <div class="card-header ">
              <h3 class="card-title">Listado de Roles</h3>
              <!--modal de boton registar rol-->
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">
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
                <tbody>
                  <tr>
                  @foreach ($rol as $roles)
                  <td>{{$roles->Id_Rol}}</td>
                  <td>{{$roles->Nombre}}</td>
                   <td>{{$roles->updated_at}}</td>
                   <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pen"></i></a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
                   </td>
                  </tr>
        @endforeach
      </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          </div>
          <!-- /.card -->

@endsection