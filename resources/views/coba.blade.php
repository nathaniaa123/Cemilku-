<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Coba</title>
    <link rel="stylesheet" href="{{ asset('css/coba.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div id="container-luar">
        <div class="d-flex">
            <div class="container d-flex flex-column justify-content-around shadow p-3 mb-5 rounded" id="container1">
                <div class="container d-flex flex-column justify-content-center align-items-center p-3">
                    <h2 class="side-link-2">User Name</h2>
                    <hr class="garis" />
                </div>
                <div class="container d-flex flex-column mb-5 align-items-center">
                    <a href="#" class="side-link side-link-2 p-2 active" data-slide-to="0">User Info</a>
                    <a href="#" class="side-link side-link-2 p-2 mt-1" data-slide-to="1">Address</a>
                    <a href="#" class="side-link side-link-2 p-2 mt-1" data-slide-to="2">FAQ</a>
                    <hr class="garis" />
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <a href="#" class="side-link side-link-2 p-2 mb-4">Log Out</a>
                </div>
            </div>

            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content modal-1-dalem">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit User Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <p>Masukkan konten formulir atau informasi untuk edit di sini.</p>
                            <!-- Tambahkan form atau apapun sesuai kebutuhan -->
                            <form>
                                <div class="mb-3">
                                    <label for="namaUser" class="form-label">Nama User</label>
                                    <input type="text" class="form-control" id="namaUser"
                                        placeholder="Masukkan nama...">
                                </div>
                                <div class="mb-3">
                                    <label for="kotaUser" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="kotaUser"
                                        placeholder="Masukkan kota...">
                                </div>
                                <div class="mb-3">
                                    <label for="negaraUser" class="form-label">Negara</label>
                                    <input type="text" class="form-control" id="negaraUser"
                                        placeholder="Masukkan negara...">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-tutup" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-simpan">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editBottomModal" tabindex="-1" aria-labelledby="editBottomModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content modal-1-dalem">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editBottomModalLabel">Edit Info Lengkap</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender">
                                        <option selected disabled>Pilih gender</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="umur" class="form-label">Umur</label>
                                    <input type="number" class="form-control" id="umur"
                                        placeholder="Masukkan umur">
                                </div>
                                <div class="mb-3">
                                    <label for="email2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email2"
                                        placeholder="Masukkan email">
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control" id="telepon"
                                        placeholder="Masukkan no. telepon">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-tutup" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-simpan">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-block shadow p-3 mb-5 rounded" id="container2">
                <div id="carousel1" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <!-- Slide 1: User Info -->
                        <div class="carousel-item active">
                            <div class="container d-flex p-4 flex-row">
                                <div class="container d-flex flex-column">
                                    <div class="d-flex flex-row align-items-center atas-profile p-3">
                                        <img src="{{ asset('orang2.jpg') }}" alt="orang"
                                            class="gambar-profile rounded-circle" />
                                        <div class="d-flex flex-column ms-3 flex-grow-1">
                                            <h1 class="nama-user mb-1">Nama User</h1>
                                            <h4 class="info-user">Semarang, Indonesia</h4>
                                        </div>
                                        <div class="ms-auto align-self-start" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            <button class="button-edit">✏️ Edit</button>
                                        </div>
                                    </div>
                                    <hr class="garis" />
                                    <div class="d-flex flex-row info-container justify-content-between p-3">
                                        <div class="d-flex flex-row flex-grow-1">
                                            <div>
                                                <h4 class="judul-info-user">Gender</h4>
                                                <h4 class="judul-info-user mt-4">Age</h4>
                                                <h4 class="judul-info-user mt-4">Email</h4>
                                                <h4 class="judul-info-user mt-4">Telephone Number</h4>
                                            </div>
                                            <div class="ms-5">
                                                <h4 class="info-user">Male</h4>
                                                <h4 class="info-user mt-4">12</h4>
                                                <h4 class="info-user mt-4">email.user@gmail.com</h4>
                                                <h4 class="info-user mt-4">08987654321</h4>
                                            </div>
                                        </div>
                                        <div class="ms-3 align-self-start">
                                            <button class="button-edit" data-bs-toggle="modal"
                                                data-bs-target="#editBottomModal">✏️ Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Address -->
                        <div class="carousel-item">
                            <div class="p-5">
                                <h2>Address</h2>
                                <div>
                                    <form class="form-inline my-2 my-lg-0">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-row cari-address">
                                                <input class="form-control mr-sm-2" type="search"
                                                    placeholder="Search Address" aria-label="Search">
                                                <button class="btn btn-outline-success ms-2 my-2 my-sm-0"
                                                    type="submit">Search</button>
                                            </div>
                                            <button class="btn bg-warning">
                                                + Add Address
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="container container-address mt-2 p-2">
                                    <div>
                                        <h6>Rumah</h6>
                                        <p>Jalan Pakuan No.3, Sentul, Bogor, Indonesia</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Slide 3: Notification -->
                        <div class="carousel-item">
                            <div class="p-5">
                                <h2>Notification</h2>
                                <p>You have 3 new messages.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const carouselElement = document.querySelector('#carousel1');
        const carousel = new bootstrap.Carousel(carouselElement, {
            interval: false,
            ride: false
        });

        const menuLinks = document.querySelectorAll('[data-slide-to]');

        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                const index = parseInt(this.getAttribute('data-slide-to'));
                carousel.to(index);

                menuLinks.forEach(el => el.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>
