<nav class="navbar navbar-expand-lg  px-5 py-2 align-items-center" style="background-color: #e3f2fd;">
    <div class="container-fluid d-flex justify-content-around">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ticket</a>
                </li>
            </ul>

            {{-- <div class="d-flex justify-content-center align-items-center">
                <form class="d-flex justify-content-center" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div> --}}

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>

                <li class="nav-item">
                    <a class="" href="/profile">
                        <img src="{{ url('storage/3.jpeg') }}" alt="Avatar Logo" style="width:30px; height:30px;"
                            class="rounded-circle">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
