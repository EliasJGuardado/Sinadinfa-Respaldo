<div class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/sss.png" class="img-circle elevation-2" alt="User Image">
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
                        Inicio
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="fa fa-list"></i>
                    <p>
                        Catálogos
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li @click="menu=1" class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table" aria-hidden="true"></i>
                            <p>Categorías</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            <p>Productos</p>
                        </a>
                        <a href="#" class="nav-link">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <p>Compras</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <p>Marcas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                            <p>Facturas</p>
                        </a>
                    </li>

                </ul>

            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="fas fa-user-friends" aria-hidden="true"></i>
                    <p>
                       Clientes
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="fa fa-file-word"></i>
                    <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-file-alt" aria-hidden="true"></i>
                            <p>Reporte 1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-file" aria-hidden="true"></i>
                            <p>Reporte 2</p>
                        </a>
                    </li>
                </ul>

            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="fas fa-user-circle" aria-hidden="true"></i>
                    <p>
                        Usuarios
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link active">
                  <i class="fa fa-cogs"></i>
                  <p>
                      Sistema
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>

              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-cloud-download-alt" aria-hidden="true"></i>
                          <p>Exportar</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                          <p>Importar</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <p>Archivados</p>
                    </a>
                </li>
              </ul>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
