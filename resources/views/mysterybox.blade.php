<head>
    <link rel="stylesheet" href="{{ asset('css/mysterybox.css') }}">
    <title>Mystery Box</title>
</head>

<body>
    <div class="middle-line"></div>
    {{-- <h1>Mystery Box</h1>
    <p>Welcome to the Mystery Box game!</p> --}}
    <img class="mystery_black" src="{{ asset('Asset/mysterybox/mysterybox_hitam.png') }}" />
    <div class="back_button">
        <img src="{{ asset('Asset/mysterybox/arrow_back.png') }}" />
        <span class="budget_mystery">Choose your Budget</span>
    </div>

    {{-- Progress Bar --}}
    <div class="progress_bar">
        <div class="step">
            <div class="circle">1</div>
            <div class="line_completed"></div>
        </div>
        <div class="step">
            <div class="circle">2</div>
            <div class="line"></div>
        </div>
        <div class="step">
            <div class="circle">3</div>
        </div>
    </div>

    <div class="label_bar">
        <p>Set Budget</p>
        <p>Set Mood</p>
        <p>Done</p>
    </div>

    <span class="mood_title">Mood</span>
    <span class="mood_description">Note : Mood akan menentukan warna dari snack di dalam mystery box</span>

    <div class="mood_option">
        <div class="mood_column">
            <div class="mood_box">Romantic</div>
            <div class="mood_box">Funny</div>
            <div class="mood_box">Calm</div>
        </div>
        <div class="mood_column">
            <div class="mood_box">Mysterious</div>
            <div class="mood_box">Brave</div>
            <div class="mood_box">Happy</div>
        </div>
    </div>

    <span class="next_button">Next</span>
</body>
