@extends('master')

@section('content')

    <body class="font-[Poppins] pb-[72px]">
        <x-navbar />

        <section id="Featured" class="mt-[30px]">
            <div class="main-carousel w-full">
                @foreach ($featuredNews as $news)
                    <div
                        class="featured-news-card relative w-full h-[550px] sm:h-[450px] md:h-[500px] lg:h-[550px] flex shrink-0 overflow-hidden">
                        <img src="{{ asset('storage/' . $news->thumbnail) }}"
                            class="thumbnail absolute w-full h-full object-cover" alt="{{ $news->title }}" />
                        <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10">
                        </div>
                        <div
                            class="card-detail max-w-[1130px] w-full flex items-end justify-between pb-10 relative z-20 mx-5 lg:mx-64">
                            <div class="flex flex-col gap-[10px] max-w-full text-center md:text-left">
                                <p class="text-white">Featured</p>
                                <a href="{{ $news->link }}"
                                    class="font-bold text-2xl sm:text-3xl md:text-4xl leading-[30px] sm:leading-[35px] md:leading-[45px] text-white two-lines hover:underline transition-all duration-300">{{ $news->title }}</a>
                                <p class="text-white">{{ \Carbon\Carbon::parse($news->published_at)->format('d M, Y') }} •
                                    {{ $news->category }}</p>
                            </div>
                            <div class="prevNextButtons flex items-center gap-4 mb-[60px] hidden sm:flex">
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
        {{-- <section id="Up-to-date" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px] px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                  <h2 class="font-bold text-[26px] leading-[39px]">
                    Modul Digital<br />
                    Toleransi beragama 
                </h2>
            </div>
            <div
                class="grid grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 gap-y-5 sm:gap-y-[30px] lg:gap-y-[40px] gap-x-5 sm:gap-x-[30px] lg:gap-x-[40px]">
                @foreach ($ebooks as $ebook)
                    <a href="{{ route('ebooks.show', $ebook->id) }}" class="card-news">
                        <div
                            class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[20px] sm:p-[26px] flex flex-col gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
                            <div
                                class="thumbnail-container w-full h-[180px] sm:h-[220px] md:h-[250px] lg:h-[280px] rounded-[20px] flex shrink-0 overflow-hidden relative">
                                <img src="{{ asset('storage/' . $ebook->cover_image) }}" class="object-cover w-full h-full"
                                    alt="{{ $ebook->title }}" />
                            </div>
                            <div class="card-info flex flex-col gap-[6px]">
                                <h3 class="font-bold text-lg leading-[27px] text-center sm:text-left">{{ $ebook->title }}
                                </h3>
                                <p class="text-sm leading-[21px] text-[#A3A6AE] text-center sm:text-left">By
                                    {{ $ebook->author }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>


        </section> --}}

        <section id="Up-to-date" class="mx-2.5 lg:mx-64 mt-[70px]">
            <div class="">
                <h2 class="font-bold text-[26px] leading-[39px]">
                    Modul Digital<br />
                    Toleransi beragama
                </h2>
            </div>
            <div class="grid lg:grid-cols-3 gap-5 mt-[30px]">
                @foreach ($ebooks as $ebook)
                    <a href="{{ route('ebooks.show', $ebook->id) }}" class="card-news">
                        <div
                            class="rounded-[20px] ring-1 ring-[#EEF0F7]  p-[26px_20px] hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('customjs/two-lines-text.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('customjs/carousel.js') }}"></script>
@endpush
