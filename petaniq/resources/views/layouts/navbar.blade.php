        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg shadow py-3 sticky-top" style="background-color: #238E68;">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="./frontend/img/Logo23.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/belipanen">Beli Hasil Panen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/jualpanen">Jual Hasil Panen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/modalin">Modalin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/konsultasi">Konsultasikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="/transaksi">Transaksi</a>
                        </li>
                    </ul>
                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                        Nama
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

{{-- <nav class="navbar navbar-expand navbar-dark bg-success">
    <div class="container py-2">
        @auth
            <div class="navbar-nav">
                <a class="nav-link" style="color: white;" href="{{ '/' }}">Home</a>
                <a class="nav-link" href="{{ '/list' }}">MyCar</a>
            </div>
            <div class="d-flex">
                <a href="{{ '/add' }}" class="btn btn-light text-black" role="button">Add Car</a>
                <div class="dropdown ms-4">
                    <button class="btn btn-light dropdown-toggle text-" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-success" href="{{ '/profile/'.auth()->user()->id }}">Profile</a></li>
                        <li>
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-nav w-100 d-flex justify-content-between">
                <a class="nav-link active" aria-current="page" href="{{ 'home' }}">Home</a>
                <a class="nav-link" href="{{ 'login' }}">Login</a>
            </div>
        @endauth
    </div>
</nav> --}}