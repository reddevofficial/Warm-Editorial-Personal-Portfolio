<div class="relative min-h-[90dvh] overflow-hidden">

    {{-- Contact --}}
    <section
        class="relative z-10 mx-auto flex w-full max-w-[95rem]
               flex-col justify-between gap-12
               px-6 pt-20 pb-32
               sm:px-10 sm:pt-24
               md:px-16
               lg:flex-row lg:gap-16 lg:px-20 lg:pt-28
               xl:px-28"
    >

        {{-- Left Content --}}
        <div class="flex flex-1 flex-col gap-12 sm:gap-16 lg:gap-24">

            {{-- Text --}}
            <div
                class="font-display text-3xl font-bold leading-tight
                       sm:text-4xl
                       md:text-5xl"
            >
                <h2>Rina Putri</h2>
                <h2>Creative Designer</h2>
            </div>

            {{-- Garis --}}
            <div class="flex flex-col items-start gap-4 sm:gap-6 lg:gap-7">
                <div
                    class="w-24 border-t-2 border-amber-500
                           sm:w-32
                           md:w-[20%]"
                ></div>

                <div
                    class="w-36 border-t-2 border-amber-500
                           sm:w-48
                           md:w-[30%]"
                ></div>
            </div>

        </div>

        {{-- Socials --}}
        <div
            class="flex justify-start
                   lg:min-w-40 lg:justify-end"
        >
            <div class="flex flex-col gap-2">
                <h5 class="mb-2 font-display text-lg font-semibold">
                    Socials
                </h5>

                @foreach(['Instagram', 'behance', 'pinterest', 'email'] as $media)
                    <p
                        class="cursor-pointer capitalize text-amber-700
                               transition-colors duration-300
                               hover:text-amber-500"
                    >
                        {{ $media }}
                    </p>
                @endforeach
            </div>
        </div>

    </section>

    {{-- Copyright --}}
    <div
        class="absolute bottom-56  z-10
               w-full  px-6"
    >
        <p class="text-center text-xs text-stone-700/75 sm:text-sm">
            © 2025 Rina Putri. All rights reserved.
        </p>
    </div>

    {{-- Footer Image --}}
    <div
        class="pointer-events-none absolute inset-x-0 bottom-0 z-0"
    >
        <img
            src="{{ asset('images/footer.webp') }}"
            alt=""
            class="h-auto w-full object-cover"
        >
    </div>

</div>