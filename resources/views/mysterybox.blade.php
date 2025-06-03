<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mystery Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mysterybox.css') }}">
</head>
<body class="bg-light">

    <div class="container-fluid min-vh-100 d-flex flex-column flex-md-row">

        {{-- LEFT SIDE --}}
        <div class="left-section col-12 col-md-6 bg-white p-4 d-flex flex-column align-items-center justify-content-start">

            {{-- Back Button + Header --}}
            <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                <img src="{{ asset('Asset/mysterybox/arrow_back.png') }}" alt="Back" style="height: 24px;">
                <h2 class="fw-bold mb-0 text-center flex-grow-1">Choose your Mood</h2>
                <div style="width: 24px;"></div> {{-- Spacer untuk menjaga keseimbangan visual --}}
            </div>

            {{-- Progress Bar (mobile only) --}}
            <div class="d-md-none w-100 mb-3 progress-bar-mobile">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="step text-center d-flex flex-column align-items-center">
                        <div class="circle active">1</div>
                        <div class="label">Set Budget</div>
                    </div>
                    <div class="line_completed mx-2"></div>
                    <div class="step text-center d-flex flex-column align-items-center">
                        <div class="circle active">2</div>
                        <div class="label">Set Mood</div>
                    </div>
                    <div class="line_completed mx-2"></div>
                    <div class="step text-center d-flex flex-column align-items-center">
                        <div class="circle">3</div>
                        <div class="label">Done</div>
                    </div>
                </div>
                <p class="text-muted small mt-3 text-center">
                    Note: Mood akan menentukan warna dari snack di dalam mystery box
                </p>
            </div>

            {{-- Mystery Box Image --}}
            <div class="text-center">
                <img class="mystery_box img-fluid" src="{{ asset('Asset/mysterybox/mysterybox_hitam.png') }}" alt="Mystery Box">
            </div>
        </div>

        {{-- RIGHT SIDE --}}
        <div class="right-section col-12 col-md-6 p-4 d-flex flex-column justify-content-between">

            {{-- Progress Bar (desktop only) --}}
            <div class="d-none d-md-block mb-4">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="step text-center">
                        <div class="circle active">1</div>
                        <div class="label">Set Budget</div>
                    </div>
                    <div class="line_completed mx-2"></div>
                    <div class="step text-center">
                        <div class="circle active">2</div>
                        <div class="label">Set Mood</div>
                    </div>
                    <div class="line_completed mx-2"></div>
                    <div class="step text-center">
                        <div class="circle">3</div>
                        <div class="label">Done</div>
                    </div>
                </div>
                <p class="text-muted small mt-3 text-center">
                    Note: Mood akan menentukan warna dari snack di dalam mystery box
                </p>
            </div>

            {{-- Mood Options --}}
            <div class="mb-4">
                <div class="row g-3">
                    @php
                        $moods = [
                            ['label' => 'Romantic',   'img' => 'mysterybox_pink.png'],
                            ['label' => 'Funny',      'img' => 'mysterybox_biru.png'],
                            ['label' => 'Calm',       'img' => 'mysterybox_hijau.png'],
                            ['label' => 'Mysterious', 'img' => 'mysterybox_ungu.png'],
                            ['label' => 'Brave',      'img' => 'mysterybox_merah.png'],
                            ['label' => 'Happy',      'img' => 'mysterybox_kuning.png'],
                        ];
                    @endphp
                    @foreach($moods as $mood)
                        <div class="col-12 col-sm-6">
                            <div class="mood_box" data-img="{{ asset('Asset/mysterybox/' . $mood['img']) }}">
                                {{ $mood['label'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Next Button --}}
            <div class="text-center mb-3">
                <button class="next_button">Next</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/mysterybox.js') }}"></script>
</body>
</html>
