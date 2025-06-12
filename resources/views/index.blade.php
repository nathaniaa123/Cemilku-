<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">


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
        class="container p-3"

    >
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
                src="holder.js/900x500/auto/#777:#555/text:First slide"
                class="w-100 d-block"
                alt="First slide"
            />
        </div>
        <div class="carousel-item">
            <img
                src="data:image/jpeg;base64,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"
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

<div class="card-group">
    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
    <div class="card-body">
        <h4 class="card-title">Title</h4>
        <p class="card-text">Text</p>
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

<div class="row">
    <div class="col-4">
        <div class="card m-3">
            <div class="card mt-3 mb-2">
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



<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
    );
</script>

    </div>




</body>


</body>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
</script>

</html>
