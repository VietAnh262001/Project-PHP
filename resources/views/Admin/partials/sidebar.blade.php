<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{url('public/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Management</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header">Admin</li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Admin User
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listlogin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Admin User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addlogin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin User</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- sidebar item end -->
          <!--  Room manager start-->
          <li class="nav-header">ROOM MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                Room Category
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Room Product
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listroom')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Rooms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addroom')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Room</p>
                </a>
              </li>
            </ul>
          </li>
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Service
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listservice')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Service</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addservice')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-servicestack"></i>
              <p>
                Room Service
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listroomservice')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addroomservice')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-street-view"></i>
              <p>
                Room Location
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listlocation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addlocation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Location</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Room manager end -->
          <!-- BOOKING manager item start -->
          <li class="nav-header">BOOKING MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                BOOKING
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('managebooking.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Booking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listbookingroom')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Booking Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('listbookingservice')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Booking Service</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- BOOKING manager item end -->
          <!-- User manager item start -->
          <li class="nav-header">USER MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                USER
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('signin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- User manager item end -->
          <!-- Banner manager item start -->
          <li class="nav-header">BANER MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                BANER
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listbanner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addbanner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Banner</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Banner manager item end -->
          <!-- Gallery manager item start -->
          <li class="nav-header">GALLERY MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                GALLERY
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('gallery.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('gallery.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Gallery</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                CATEGORY GALLERY
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categorygallery.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Category Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categorygallery.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category Gallery</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Gallery manager item end -->
          <!-- Blog manager item start -->
          <li class="nav-header">BLOG MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                BLOG
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listblog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addblog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Blog manager item end -->
          <!-- Eployee manager item start -->
          <li class="nav-header">EPLOYEE MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                EMPLOYEE
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Employee</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header">PAYMENT METHOD MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PAYMENT METHOD
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('payment.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Payment Method</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('payment.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Payment Method</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- Eployee manager item end -->
          <!-- RESTAURANT manager item start -->
          <li class="nav-header">RESTAURANT MANAGER</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                RESTAURANT
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('restaurantservice.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List RESTAURANT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('restaurantservice.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add RESTAURANT</p>
                </a>
              </li>
              
            </ul>
          </li>
          <!-- RESTAURANT manager item end -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>