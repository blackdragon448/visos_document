<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('theme/adminlte/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" data-api="tree">
        <li class="header">Danh mục</li>
        
        <!-- Danh mục Sản phẩm -->
        <li class="treeview {{ Request::is('danhsachnhanvien*') ? 'menu-open' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Danh sach nhan vien</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu" style="display: {{ Request::is('danhsachnhanvien*') ? 'block' : 'none' }};">
            <li class="{{ Request::is('danhsachnhanvien') ? 'active' : '' }}"><a href="{{ route('danhsachnhanvien.index') }}">Danh sách nhan vien</a></li>
            <li class="{{ Request::is('danhsachnhanvien/create') ? 'active' : '' }}"><a href="{{ route('danhsachnhanvien.create') }}">Thêm mới nhan vien</a></li>
            </ul>
            <li class="treeview {{ Request::is('danhsachnhanvien*') ? 'menu-open' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Danh sach hop dong</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu" style="display: {{ Request::is('danhsachhopdong*') ? 'block' : 'none' }};">
            
            <li class="{{ Request::is('danhsachdopdong') ? 'active' : '' }}"><a href="{{ route('danhsachhopdong.index') }}">Danh sách hop dong</a></li>
            <li class="{{ Request::is('danhsachhopdong/create') ? 'active' : '' }}"><a href="{{ route('danhsachhopdong.create') }}">Thêm mới hop dong</a></li>
            </ul>
            <li class="treeview {{ Request::is('danhsachnhanvien*') ? 'menu-open' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Danh sach nhom hop dong</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu" style="display: {{ Request::is('dsnhomhopdong*') ? 'block' : 'none' }};">
            <li class="{{ Request::is('dsnhomhopdong') ? 'active' : '' }}"><a href="{{ route('dsnhomhopdong.index') }}">Danh sách nhom hop dong</a></li>
            <li class="{{ Request::is('dsnhomhopdong/create') ? 'active' : '' }}"><a href="{{ route('dsnhomhopdong.create') }}">Thêm mới nhom hop dong</a></li>
            </ul>
            <a href="#"><i class="fa fa-link"></i> <span>Danh sach phan quyen</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu" style="display: {{ Request::is('dsphanquyen*') ? 'block' : 'none' }};">
            <li class="{{ Request::is('dsphanquyen') ? 'active' : '' }}"><a href="{{ route('dsphanquyen.index') }}">Danh sách phan quyen</a></li>
            <li class="{{ Request::is('dsphanquyen/create') ? 'active' : '' }}"><a href="{{ route('dsphanquyen.create') }}">Thêm mới phan quyen</a></li>
            </ul>

        </li>
        <!-- /.Danh mục Sản phẩm -->

        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>