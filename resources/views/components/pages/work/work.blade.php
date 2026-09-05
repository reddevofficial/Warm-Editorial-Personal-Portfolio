<div class="px-28 pb-32" id="work">
    <section class="grid grid-cols-2 gap-5">
        <div class="flex flex-col items-start justify-start gap-4">
            <!-- badge -->
            <p class="text-xs uppercase font-semibold tracking-wide">work</p>
            <!-- title -->
            <h2 class="text-5xl leading-14 font-bold font-display text-amber-700 mb-5">Selected work.</h2>
        </div>
        <!-- garis -->
        <section class="flex flex-col items-end gap-6" >
            <div class="w-[30%] border-[1.6px] border-amber-500" ></div>
            <div class="w-[60%] border-[1.6px] border-amber-500" ></div>
        </section>
    </section>
    <section class="mt-10 grid grid-cols-2 gap-5">
        @php
            $works = [
                [
                    'path' => 'images/product-1.png',
                    'title' => 'Luma — Brand Identity',
                    'badge' => 'Brand Identity'
                ],
                [
                    'path' => 'images/product-2.png',
                    'title' => 'Noma — Digital Experience',
                    'badge' => 'UI/UX Design'
                ],
                [
                    'path' => 'images/product-3.png',
                    'title' => 'Mori — Visual Campaign',
                    'badge' => 'Visual Design'
                ],
                [
                    'path' => 'images/product-4.png',
                    'title' => 'Aster — Brand Identity',
                    'badge' => 'Brand Identity'
                ],
            ];
        @endphp

        @foreach ($works as $work)
            <div class="relative group overflow-hidden rounded-md shadow-md">
                <div class="relative group overflow-hidden rounded-md">
                    <img
                        src="{{ asset($work['path']) }}"
                        alt="Product {{ $work['title'] }}"
                        class="
                            w-full
                            object-cover
                            transition-transform
                            ease-in-out
                            duration-300
                            group-hover:scale-125
                            group-hover:brightness-90
                            group-hover:blur-[1px]
                            
                        "
                    >

                    <div
                        class="
                            absolute
                            inset-0
                            bg-gradient-to-t
                            from-black/80
                            via-black/20
                            group-hover:from-black/90
                            group-hover:via-black/30
                            to-transparent
                            pointer-events-none
                        "
                    ></div>
                </div>

                <div class="absolute bottom-8 left-10 w-full max-w-[35rem]">
                    <div class="flex justify-between">
                        <!-- brand name -->
                        <section class="flex flex-col space-y-1">
                            <!-- title -->
                            <h4 class="text-white font-display font-semibold text-2xl tracking-wide">{{ $work['title'] }}</h4>
                            <p class="text-stone-400 text-shadow-2xs text-sm">{{ $work['badge'] }}</p>
                        </section>
                        <!-- icon go to -->
                        <section class="flex items-center justify-center">
                            <iconify-icon
                                icon="bi:arrow-right"
                                width="36"
                                height="30"
                                class="text-white text-shadow-2xs"
                            />
                        </section>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>