<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active': '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/user*') ? 'active': '' }}" href="/dashboard/user">
              <span data-feather="file"></span>
              User
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/modalin*') ? 'active': '' }}" href="/dashboard/product">
            <span data-feather="file"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/transaksi*') ? 'active': '' }}" href="/dashboard/transaksi">
            <span data-feather="file"></span>
            Transaksi
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('dashboard/modalin*') ? 'active': '' }}" href="/dashboard/modalin">
            <span data-feather="shopping-cart"></span>
            Modalin
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Customers
          </a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link  disabled" href="#">
            <span data-feather="bar-chart-2"></span>
            transaction
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">
            <span data-feather="layers"></span>
            Reports
          </a>
        </li> --}}
      </ul>
    </div>
  </nav>
