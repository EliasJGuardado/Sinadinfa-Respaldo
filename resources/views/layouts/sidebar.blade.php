<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario Logueado</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li @click="menu=0" class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-home"></i>
              <p>
              Home
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-bars"></i>
              <p>
                Catálogos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li @click="menu=1" class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li @click="menu=3" class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-tasks"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li @click="menu=4" class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-check-square"></i>
                  <p>Marcas</p>
                </a>
              </li>
              <li @click="menu=5" class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-file-word"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>
          <li @click="menu=6" class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-sticky-note"></i>
              <p>
              Facturas
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li @click="menu=7" class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-shopping-basket"></i>
              <p>
              Productos
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li @click="menu=8" class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-shopping-bag"></i>
              <p>
              Compras
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-keycdn"></i>
              <p>
              Sistema
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li @click="menu=9" class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-folder"></i>
                  <p>Respaldo</p>
                </a>
              </li>
              <li @click="menu=10" class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-folder-open"></i>
                  <p>Restauración</p>
                </a>
              </li>
              <li @click="menu=11" class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-archive"></i>
                  <p>Archivados</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>