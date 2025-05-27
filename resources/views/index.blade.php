<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/homepage.css")}}">
</head>

<body>
    <nav
        class="navbar navbar-expand-sm navbar-light color_primary"
    >
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

   <div
    class="container p-5">
     {{-- <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
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
                    src="holder.js/900x500/auto/#777:#555/text:First slide"
                    class="w-100 d-block"
                    alt="First slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="https://images.harpersbazaar.co.id/unsafe/0x0/smart/media/body_1ff8f87fe81043029c09fb4a1b0e1ec6.jpg"
                    class="w-100 d-block"
                    alt="Second slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="holder.js/900x500/auto/#666:#444/text:Third slide"
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
    </div> --}}

    <!-- Modal trigger button -->
    <button
        type="button"
        class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#modalId"
    >
        Launch
    </button>


        <div class="row">
            <div class="col-4">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-group" role="group" data-bs-toggle="buttons">
            <label
                class="btn btn-success active"
            >
                <input
                    type="checkbox"
                    class="me-2"
                    name=""
                    id=""
                    checked
                    autocomplete="off"
                />
                Choice
            </label>
            <label
                class="btn btn-primary"
            >
                <input
                    type="checkbox"
                    class="me-2"
                    name=""
                    id=""
                    autocomplete="off"
                />
                Choice
            </label>
            <label
                class="btn btn-primary"
            >
                <input
                    type="checkbox"
                    class="me-2"
                    name=""
                    id=""
                    autocomplete="off"
                />
                Choice
            </label>
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                name=""
                id=""
                aria-describedby="emailHelpId"
                placeholder="input your email"
            />
            <small id="emailHelpId" class="form-text text-muted"
                >Help text</small
            >
        </div>


    </div>

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
   </div>



</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
</script>


</html>
