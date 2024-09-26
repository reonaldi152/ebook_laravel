@extends('master')

@section('content')

    <body class="font-[Poppins] pb-[72px]">
        <x-navbar />

        <section id="Featured" class="mt-[30px]">
            <div class="main-carousel w-full">
                @foreach ($featuredNews as $news)
                    <div class="featured-news-card relative w-full h-[550px] flex shrink-0 overflow-hidden">
                        <img src="{{ asset('storage/' . $news->thumbnail) }}"
                            class="thumbnail absolute w-full h-full object-cover" alt="{{ $news->title }}" />
                        <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10">
                        </div>
                        <div
                            class="card-detail max-w-[1130px] w-full mx-auto flex items-end justify-between pb-10 relative z-20">
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-white">Featured</p>
                                <a href="{{ $news->link }}"
                                    class="font-bold text-4xl leading-[45px] text-white two-lines hover:underline transition-all duration-300">{{ $news->title }}</a>
                                <p class="text-white">{{ \Carbon\Carbon::parse($news->published_at)->format('d M, Y') }} •
                                    {{ $news->category }}</p>
                            </div>
                            <div class="prevNextButtons flex items-center gap-4 mb-[60px]">
                                <button
                                    class="button--previous appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                    <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                                </button>
                                <button
                                    class="button--next appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 rotate-180">
                                    <img src="{{ asset('assets/images/icons/arrow.svg') }}" alt="arrow" />
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Up-to-date Section -->
        <section id="Up-to-date" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px]">
            <div class="flex justify-between items-center">
                <h2 class="font-bold text-[26px] leading-[39px]">
                    Latest Hot News <br />
                    Good for Curiousity
                </h2>
                {{-- <p
                    class="badge-orange rounded-full p-[8px_18px] bg-[#FFECE1] font-bold text-sm leading-[21px] text-[#FF6B18] w-fit">
                    UP TO DATE</p> --}}
            </div>
            <div class="grid grid-cols-3 gap-[30px]">
                @foreach ($ebooks as $ebook)
                    <a href="{{ asset('storage/' . $ebook->pdf_file) }}" class="card-news" download>
                        <div
                            class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
                            <div
                                class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
                                <img src="{{ asset('storage/' . $ebook->cover_image) }}" class="object-cover w-full h-full"
                                    alt="{{ $ebook->title }}" />
                            </div>
                            <div class="card-info flex flex-col gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px]">{{ $ebook->title }}</h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE]">By {{ $ebook->author }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

    </body>
@endsection

@push('after-styles')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
@endpush

@push('after-scripts')
    <script src="{{ asset('customjs/two-lines-text.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('customjs/carousel.js') }}"></script>
@endpush
