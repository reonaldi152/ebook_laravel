<nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-[30px]">
    <div class="logo-container flex gap-[30px] items-center">
        <a href="{{ route('index') }}" class="flex shrink-0">
            <img src="{{ asset('assets/images/logos/logo-ebooks.png') }}" alt="logo" width="120" />
        </a>
        <div class="h-12 border border-[#E8EBF4]"></div>
    </div>
    <div class="flex items-center gap-[30px]">
        <a href="/"
            class="text-lg font-semibold text-[#333] hover:text-[#FF6B18] transition-all duration-300">Home</a>
        <a href="/about"
            class="text-lg font-semibold text-[#333] hover:text-[#FF6B18] transition-all duration-300">About</a>
    </div>
</nav>
