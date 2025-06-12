<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light color_primary">
        <div class="container-fluid ps-3 pe-5 align-items-center justify-content-between">

            {{-- LOGO --}}

            {{-- NAVBAR BAGIAN KIRI --}}
            <a class="navbar-brand" href="#">
                <img src="assets/logoCemilku.png" alt="Logo" width="130" height="75"
                    class="d-inline-block align-text-top" />
            </a>

            {{-- NAVBAR BAGIAN TENGAH --}}
            <div class="collapse navbar-collapse justify-content-center align-items-center d-flex nav-tengah"
                id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0 fs-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" href="homepage"
                            aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('custom') ? 'active' : '' }}">
                        <a class="nav-link" href="custom"> Custom</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('collections') ? 'active' : '' }}">
                        <a class="nav-link" href="collections">Collections</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('order') ? 'active' : '' }}">
                        <a class="nav-link" href="order">Order</a>
                    </li>

                </ul>
            </div>

            {{-- NAVBAR BAGIAN KANAN --}}
            <div class="container justify-content-end align-items-center d-flex gap-2">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-cart3 fs-1" style="color: #341c02;"></i>
                </a>


                <div class="dropdown_languange  dropdown d-inline-block">
                    <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img id="flag-icon" src="https://flagcdn.com/w20/id.png" alt="Indonesia" class="rounded-circle"
                            width="40" height="40" style="object-fit: fill">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li> <a class="dropdown-item" href="#" onclick="setLanguage('id')">Indonesia</a> </li>
                        <li><a class="dropdown-item" href="#" onclick="setLanguage('eng')">English</a></li>
                    </ul>

                </div>


                <div class="dropdown d-inline-block">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false"
                        style="font-size: 2.5rem; color: #341c02; padding-left:10px">
                        <i class="bi bi-person-circle"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>

                    </ul>

                </div>


            </div>

        </div>

    </nav>

    <script src="{{ asset('javascript/languange_swithcer.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>

</body>

<div>
    @yield('content')
</div>
