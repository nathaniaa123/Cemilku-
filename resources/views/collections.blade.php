@extends('masterNav')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/collections.css') }}">

    {{-- SEARCH BAR --}}
    <div class="container mt-custom col-12">
        <div class="d-flex align-items-center">
             <h1 class="titleSearch d-flex me-5">CemilKu</h1>
                <form class="d-flex" role="search">
                    <input class=" search-bar form-control me-2 ps-4 rounded-5" type="search" placeholder="Search Collection..." aria-label="Search" />
                    {{-- <button></button> --}}
                </form>
        </div>
    </div>

    {{-- CARD DESIGN --}}
    <div class="container">
        <div class="d-flex justify-content-between">
            <div
                class="card text-white bg-primary"
            >
                <img class="card-img-top" src="assets/bannerSM.png" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>

        </div>
    </div>
@endsection
