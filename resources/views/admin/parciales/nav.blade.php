  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Usuario</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
{{--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Principal</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Agencia Aduanal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('agentes.index') }}"><i class="fa fa-circle-o"></i>Agentes</a></li>
            <li><a href="{{ route('agencias.index') }}"><i class="fa fa-circle-o"></i>Agencias</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Operaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Fonatrac</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Itzamana</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Dga's</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Comunicados</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Convenios</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Previos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Modulacion</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Juntas Tecnicas</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>