@extends('master')

@section('content')

    <body class="font-[Poppins]">
        <x-navbar />

        <div class="container">
            <section class="about-section">
                <h1>About</h1>
                <div class="about-content">
                    <div class="about-text">
                        <p>
                            {{ $about[0]->description }}
                        </p>
                    </div>
                    <img src="{{ asset('storage/' . $about[0]->image) }}" alt="Moderasi Beragama">
                </div>
            </section>
        </div>
    </body>
@endsection

@push('after-styles')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
@endpush

@push('after-scripts')
    <script src="js/two-lines-text.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
@endpush
