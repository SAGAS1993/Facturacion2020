<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="home" class="nav-link @yield('active1')">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview @yield('menu-open')">
            <a href="#" class="nav-link @yield('active2') @yield('active3') @yield('active4') @yield('active5')">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registro_usuarios" class="nav-link @yield('active2')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="roles" class="nav-link @yield('active3')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lista_usuarios" class="nav-link @yield('active4')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="permisos" class="nav-link @yield('active5')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permisos</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>