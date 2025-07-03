@extends('layouts.app')

@section('content')
    <title>Detail</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <script src="{{ asset('js/detail.js') }}"></script>

    {{-- BACK BUTTON --}}
    <div class="d-flex w-100 justify-content-between align-items-center mt-2" style="padding-top: 20px; padding-left: 5vh;">
        <a href="/collections" id="backBtn">
            <img src="{{ asset('Asset/mysterybox/arrow_back.png') }}" alt="Back" style="height: 24px;" />
        </a>
    </div>

    <div class="container-fluid" style="height: 89%; width: 90%;">
        <div class="row align-items-start" style="color: #52282A;">
            {{-- COLLECTION IMAGE --}}
            <div class="collections_img col text-center justify-content-center">
                <img src="{{ asset('Asset/mysterybox/tower_cny_vol2.png') }}" style="border-radius: 20px; object-fit:contain; max-height: 550px;">
            </div>

            <div class="vertical-line" style="width: 1px;"></div>

            {{-- RIGHT CONTENT --}}
            <div class="col">
                <div class="subtitle">Chinese New Year</div>
                <div class="title">CemilKongsi Bouquet</div>
                <div class="price-tag">Rp 150.000</div>
                <div class="description" style="text-align: justify;">
                    Celebrate the Lunar New Year in the most practical and stylish way with the
                    CemilKongsi Tower! This exclusive snack tower is specially designed for the
                    special Lunar New Year moments, filled with a selection of favorite sweet and
                    savory snacks, beautifully arranged in a red and gold themed display — symbols
                    of luck and prosperity.
                <div class="size-label">SIZE</div>
                <div class="size-value">85,6 cm (H) x 25 cm (W)</div>

                {{-- BUTTON QUANTITY --}}
                <div class="counter-container">
                    <h6 style="font-weight:600; margin-bottom:0px;">QUANTITY</h6>
                    <div class="counter-box">
                        <button id="minus">-</button>
                        <input type="number" id="value" class="counter-value" value="1" min="1"/>
                        <button id="plus">+</button>
                    </div>
                </div>

                {{-- BUTTON ADD TO CART & BUY NOW --}}
                <div class="button-container d-flex">
                    <button class="btn btn-warning" style="color: #52282A" data-bs-toggle="modal" data-bs-target="#doneModal">
                        <img src="{{ asset('Asset/mysterybox/cart.png') }}" style="margin-right: 8px; width: 20px;">
                        Add To Cart
                    </button>
                    <a href="#" class="btn btn-warning d-flex align-items-center justify-content-center" style="color: #52282A">
                        Buy Now
                    </a>

                </div>
            </div>
        </div>
    </div>

    {{-- Pop Up Success --}}
    <div class="modal fade" id="doneModal" tabindex="-1" aria-labelledby="doneModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 p-4 text-center">
                <div class="success-icon mx-auto mb-3 mt-3">
                    <!-- Kotak hijau dengan ceklis -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64">
                        <rect width="64" height="64" rx="12" fill="#28a745"/>
                        <path stroke="#fff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" d="M18 34l10 10 18-24"/>
                    </svg>
                </div>
                <h4 class="fw-bold mb-2">Success</h4>
                <p class="mb-4">Collections has been added to cart!</p>

                <div class="d-flex justify-content-center mb-3">
                    <button type="button" class="btn btn-success rounded-pill px-4" data-bs-dismiss="modal">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
