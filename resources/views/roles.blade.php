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

    <section class="content">
      <div class="container-fluid">
        <h1>Hola roles</h1>
        <div id="alert"></div>
        <form id="frm_roles" action="" method="post">
          <input type="text" name="nom_rol" id="nom_rol" placeholder="Nombre del rol." required>
          <button id="roles" type="submit" class="btn_save"><i class="fas fa-save"></i> Guardar</button>
        </form>

        <p>
        @foreach ($a as $nombre)
        {{$nombre->Nombre}}

        @endforeach
        </p>
      </div>
    </section>
@endsection