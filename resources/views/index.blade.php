<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href= "{{ asset ('css/index.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm color-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page"
                            >Home
                            <span class="visually-hidden">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Dropdown</a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownId"
                        >
                            <a class="dropdown-item" href="#"
                                >Action 1</a
                            >
                            <a class="dropdown-item" href="#"
                                >Action 2</a
                            >
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input
                        class="form-control me-sm-2"
                        type="text"
                        placeholder="Search"
                    />
                    <button
                        class="btn btn-outline-success my-2 my-sm-0"
                        type="submit"
                    >
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="First slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="1"
                aria-label="Second slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="2"
                aria-label="Third slide"
            ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img
                    src="https://tse1.mm.bing.net/th?id=OIP._KWRVcKHI2mwTNWaA8sSzAHaHa&pid=Api&P=0&h=180"
                    class="w-100 d-block"
                    alt="First slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="https://tse4.mm.bing.net/th?id=OIP.KpPfhvQunJJQEGI8nqTAYwAAAA&pid=Api&P=0&h=180"
                    class="w-100 d-block"
                    alt="Second slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="https://tse2.mm.bing.net/th?id=OIP.nMehbdiEkTAB18FqpUPGfQHaH-&pid=Api&P=0&h=180"
                    class="w-100 d-block"
                    alt="Third slide"
                />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Modal trigger button -->
    <button
        type="button"
        class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#modalId"
    >
        Launch
    </button>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div
        class="modal fade"
        id="modalId"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"

        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Modal title
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">Body</div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    Accordion Item #1
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    This is the first item's accordion body.
                </div>
            </div>
        </div>

    </div>

    <div class="row bg-danger">
        <div class="col-4">
            <div class="card m-3">
                <div class="card-body">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card m-3">
                <div class="card-body">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card m-3">
                <div class="card-body">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card m-3">
                <div class="card-body">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card m-3">
                <div class="card-body">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card m-3">
                <div class="card-body">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card" aria-hidden="true">
        <img
            class="card-img-top"
            src="holder.js/100x180/"
            alt="Some text"
        />
        <div class="card-body">
            <h5
                class="card-title placeholder"
            >
                <span class="placeholder col-6">Oreo</span>
            </h5>
            <p
                class="card-text placeholder"
            >
                <span class="placeholder col-7">Good time</span>
                <span class="placeholder col-4">Kalpa</span>
                <span class="placeholder col-4">Goriorio</span>
                <span class="placeholder col-6">Hello Panda</span>
                <span class="placeholder col-8">Nextar</span>
            </p>
            <a
                href="#"
                tabindex="-1"
                class="btn btn-primary disabled placeholder col-6"
                >70.000</a
            >
        </div>
    </div>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
