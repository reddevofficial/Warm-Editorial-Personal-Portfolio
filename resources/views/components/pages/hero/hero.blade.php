<div class="flex justify-start gap-5 items-start p-28 sticky top-0 h-screen z-0" id="home">

    <section class="border-l-2 border-amber-600 p-6 flex flex-col justify-center items-start space-y-2 mt-10">
        {{-- badge --}}
        <div class="flex items-center gap-2">
            <p class="text-lg uppercase tracking-widest">creative designer</p>
            <div class="bg-amber-600 w-3 h-3 rounded-full"></div>
        </div>

        {{-- title --}}
        <h2 class="text-amber-700 text-4xl md:text-[7rem] font-bold capitalize font-display">
            rina putri
        </h2>

        {{-- desc --}}
        <div class="w-60 mt-3 text-xl text-stone-900">
            Lorem ipsum dolor sit amet consectetur. Urna odio pharetra diam amet
            at volutpat aliquet ut orci.
        </div>

        {{-- btn --}}
        <a href="#work" class="mt-4">
            <button 
            class="bg-amber-700 
            px-6 py-2 
            rounded-md
            text-white 
            flex items-center gap-3
            transition-all duration-200
            hover:bg-amber-800
            active:bg-amber-900 active:scale-95
            ">
                View My Work

                <iconify-icon
                    icon="material-symbols:arrow-forward-rounded"
                    width="20"
                    height="20"
                />
            </button>
        </a>
    </section>

    {{-- img hero --}}
    <img
        src="{{ asset('images/hero.webp') }}"
        alt="hero image"
        class="absolute right-10 top-10"
    >
</div>