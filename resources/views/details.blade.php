@extends('master')

@section('content')

    <body class="font-[Poppins]">
        <x-navbar />

        <header class="flex flex-col items-center gap-[50px] mt-[70px]">
            <div id="Headline" class="max-w-[1130px] mx-auto flex flex-col gap-4 items-center">
                <p class="w-fit text-[#A3A6AE]">{{ \Carbon\Carbon::parse($ebook->created_at)->format('d M, Y') }} • Ebook</p>
                <h1 id="Title" class="font-bold text-[46px] leading-[60px] text-center two-lines">{{ $ebook->title }}</h1>
                <div class="flex items-center justify-center gap-[70px]">
                    <a id="Author" href="#" class="w-fit h-fit">
                        <div class="flex items-center gap-3">
                            {{-- <div class="w-10 h-10 rounded-full overflow-hidden">
                                <img src="{{ asset('assets/images/photos/photo3.png') }}" class="object-cover w-full h-full"
                                    alt="avatar">
                            </div> --}}
                            <div class="flex flex-col">
                                <p class="font-semibold text-sm leading-[21px]">{{ $ebook->author }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full h-[500px] flex shrink-0 overflow-hidden">
                <img src="{{ asset('storage/' . $ebook->cover_image) }}" class="object-cover w-full h-full"
                    alt="cover thumbnail">
            </div>
        </header>

        <section id="Article-container" class="max-w-[1130px] mx-auto flex flex-col gap-20 mt-[50px]">
            <article id="Content-wrapper">
                <p>{{ $ebook->description }}</p> <!-- Deskripsi atau isi ebook -->

                <!-- Embed PDF in the page -->
                <div class="pdf-viewer mt-6">
                    <iframe src="{{ asset('storage/' . $ebook->pdf_file) }}" width="100%" height="600px"
                        style="border: none;">
                        Your browser does not support iframes.
                    </iframe>
                </div>

                <div class="mt-6 flex gap-4">
                    <!-- Download Button -->
                    <a href="{{ asset('storage/' . $ebook->pdf_file) }}" class="text-blue-500 hover:underline" download>
                        Download PDF
                    </a>

                    <!-- View in New Tab Button -->
                    <a href="{{ asset('storage/' . $ebook->pdf_file) }}" target="_blank"
                        class="text-blue-500 hover:underline">
                        View PDF in New Tab
                    </a>
                </div>
            </article>
        </section>

        <script src="js/two-lines-text.js"></script>
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
