@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/collections.css') }}">
@endsection

@section('content')
    {{-- SEARCH BAR --}}
    <div class="container mt-custom col-12">
        <div class="d-flex align-items-center text-center justify-content-center flex-column flex-md-row ">
            <h1 class="titleSearch d-flex justify-content-center align-items-center">CemilKu!</h1>
            <form class="d-flex" role="search">
                <input class=" search-bar form-control rounded-5" type="search" placeholder="Search Collection..."
                    aria-label="Search" />
                {{-- <button></button> --}}
            </form>
        </div>

        {{-- DIVIDER CNY --}}
        <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1" style="border-color: #52282A;">
            <span class="mx-3 fs-3" style="color: #52282A">Chinese New Year Edition</span>
            <hr class="flex-grow-1">
        </div>


        {{-- CARD DESIGN --}}
        <div class="mt-1">
            <div class="row">
                @foreach ($collection as $item)
                        <div class="col-md-3 pb-3 col-6">
                        <div class="d-flex justify-content-between">
                            <div class="card text-white bg-light p-1">
                                <img class="card-img-top p-2" src="assets/Val_Tower1.png" alt="Title" />
                                <h4 class="card-title">{{$item->name}}</h4>
                                <p class="card-subtitle">Snack {{ $item->type }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-price">{{ $item->price }}</h5>
                                    <div>
                                        <button class="btn btn-custom rounded-circle fw-bold fs-4 d-none d-sm-inline"
                                            style="width: 50px; height: 50px;">+</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-md-3 pb-3 col-6">
                    <div class="d-flex justify-content-between">
                        <div class="card text-white bg-light p-1">
                            <img class="card-img-top p-2" src="assets/Eid_Tower1.png" alt="Title" />
                            <h4 class="card-title">Ramadhan Cemilku</h4>
                            <p class="card-subtitle">Snack Tower</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-price">Rp 435.600</h5>
                                <div>
                                    <button class="btn btn-custom rounded-circle fw-bold fs-4 d-none d-sm-inline"
                                        style="width: 50px; height: 50px;">+</button>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-3 pb-3 col-6">
                    <div class="d-flex justify-content-between">
                        <div class="card text-white bg-light p-1">
                            <img class="card-img-top p-2" src="assets/cny_Tower1.png" alt="Title" />
                            <h4 class="card-title">Kionghi Cemilku</h4>
                            <p class="card-subtitle">Snack Tower</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-price">Rp 342.000</h5>
                                <div>
                                    <button class="btn btn-custom rounded-circle fw-bold fs-4 d-none d-sm-inline"
                                        style="width: 50px; height: 50px;">+</button>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-3 pb-3 col-6">
                    <div class="d-flex justify-content-between">
                        <div class="card text-white bg-light p-1">
                            <img class="card-img-top p-2" src="assets/hbd_Tower1.png" alt="Title" />
                            <h4 class="card-title">Birthday Cemilku</h4>
                            <p class="card-subtitle">Snack Tower</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-price">Rp 324.000</h5>
                                <div>
                                    <button class="btn btn-custom rounded-circle fw-bold fs-4 d-none d-sm-inline"
                                        style="width: 50px; height: 50px;">+</button>

                                </div>
                            </div>
                        </div>
                    </div>


                </div> --}}

                {{-- DIVIDER RAMADHAN --}}
                <div class="d-flex align-items-center my-4">
                    <hr class="flex-grow-1" style="border-color: #52282A;">
                    <span class="mx-3 fs-3" style="color: #52282A">Ramadhan Edition</span>
                    <hr class="flex-grow-1">
                </div>

                <div class="col-md-3 pb-3 col-6">
                    <div class="d-flex justify-content-between">
                        <div class="card text-white bg-light p-1">
                            <img class="card-img-top p-2" src="assets/hbd_Tower1.png" alt="Title" />
                            <h4 class="card-title">Birthday Cemilku</h4>
                            <p class="card-subtitle">Snack Tower</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-price">Rp 304.500</h5>
                                <div>
                                    <button class="btn btn-custom rounded-circle fw-bold fs-4 d-none d-sm-inline"
                                        style="width: 50px; height: 50px;">+</button>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>






            </div>
        </div>

    </div>
@endsection
