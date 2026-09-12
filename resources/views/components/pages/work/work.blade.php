<div class="px-28 pb-32" id="work" 
    x-data="{ 
        showMore: false,
        modalOpen: false,
        selectedWork : null
    }">

    <section class="grid grid-cols-2 gap-5">
        <div class="flex flex-col items-start justify-start gap-4">

            <!-- badge -->
            <p class="text-xs uppercase font-semibold tracking-wide">work</p>

            <!-- title -->
            <h2 class="text-5xl leading-14 font-bold font-display text-amber-700 mb-5">
                Selected work.
            </h2>

        </div>

        <!-- garis -->
        <section class="flex flex-col items-end gap-6">
            <div class="w-[30%] border-[1.6px] border-amber-500"></div>
            <div class="w-[60%] border-[1.6px] border-amber-500"></div>
        </section>
    </section>


    <section class="mt-10 grid grid-cols-2 gap-5">

        @php
            $works = [
                [
                    'path' => 'images/product-1.png',
                    'title' => 'Luma — Brand Identity',
                    'badge' => 'Brand Identity',
                    'desc' => 'Luma is a modern lifestyle brand looking for a visual identity that feels refined, warm, and approachable.'
                ],
                [
                    'path' => 'images/product-2.png',
                    'title' => 'Noma — Digital Experience',
                    'badge' => 'UI/UX Design',
                    'desc' => 'Luma is a modern lifestyle brand looking for a visual identity that feels refined, warm, and approachable.'
                ],
                [
                    'path' => 'images/product-3.png',
                    'title' => 'Mori — Visual Campaign',
                    'badge' => 'Visual Design',
                    'desc' => 'Luma is a modern lifestyle brand looking for a visual identity that feels refined, warm, and approachable.'
                ],
                [
                    'path' => 'images/product-4.png',
                    'title' => 'Aster — Brand Identity',
                    'badge' => 'Brand Identity',
                    'desc' => 'Luma is a modern lifestyle brand looking for a visual identity that feels refined, warm, and approachable.'
                ],
                [
                    'path' => 'images/product-4.png',
                    'title' => 'Project 5',
                    'badge' => 'Brand Identity',
                    'desc' => 'Luma is a modern lifestyle brand looking for a visual identity that feels refined, warm, and approachable.'
                ],
                [
                    'path' => 'images/product-4.png',
                    'title' => 'Project 6',
                    'badge' => 'Brand Identity',
                    'desc' => 'Luma is a modern lifestyle brand looking for a visual identity that feels refined, warm, and approachable.'
                ],
            ];
        @endphp


        @foreach ($works as $work)
            <div
                @if ($loop->iteration > 4)
                    x-show="showMore"
                    x-transition
                @endif

                @click="
                    selectedWork = @js([
                        'image' => asset($work['path']),
                        'title' => $work['title'],
                        'badge' => $work['badge'],
                        'desc' => $work['desc'],
                    ]);
                    modalOpen = true;
                "

                class="
                    relative
                    group
                    overflow-hidden
                    rounded-md
                    shadow-md
                    cursor-pointer
                "
            >
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

                        <section class="flex flex-col space-y-1">
                            <h4 class="text-white font-display font-semibold text-2xl tracking-wide">
                                {{ $work['title'] }}
                            </h4>

                            <p class="text-stone-400 text-shadow-2xs text-sm">
                                {{ $work['badge'] }}
                            </p>
                        </section>

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

    {{-- MODAL --}}
    <template x-teleport="body">
        <div
            x-show="modalOpen"
            x-cloak
            @keydown.escape.window="modalOpen = false"
            class="
                fixed
                inset-0
                z-[9999]
                flex
                items-center
                justify-center
                p-5
            "
        >
            {{-- backdrop --}}
            <div
                x-show="modalOpen"
                x-transition.opacity
                @click="modalOpen = false"
                class="
                    absolute
                    inset-0
                    bg-black/70
                    backdrop-blur-sm
                "
            ></div>


            {{-- modal --}}
            <div
                x-show="modalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95 translate-y-5"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                @click.stop
                class="
                    relative
                    z-10
                    w-full
                    max-w-5xl
                    bg-amber-50
                    p-5
                    rounded-2xl
                    overflow-hidden
                    shadow-2xl
                "
            >

                {{-- close --}}
                <button
                    @click="modalOpen = false"
                    class="
                        absolute
                        top-5
                        right-5
                        z-20
                        w-10
                        h-10
                        rounded-full
                        border
                        border-amber-200
                        bg-amber-50/90
                        backdrop-blur-md
                        flex
                        justify-center
                        items-center
                        text-stone-700
                        hover:bg-amber-100
                        transition
                    "
                >
                    <iconify-icon
                        icon="lucide:x"
                        width="21"
                        height="21"
                    ></iconify-icon>
                </button>


                <div class="grid grid-cols-1 md:grid-cols-2 min-h-[520px]">

                    {{-- IMAGE --}}
                    <div class="relative overflow-hidden rounded-2xl">

                        <img
                            :src="selectedWork?.image"
                            :alt="selectedWork?.title"
                            class="
                                rounded-2xl
                                w-full
                                h-full
                                min-h-[350px]
                                md:min-h-[520px]
                                object-cover
                            "
                        >

                        {{-- sedikit overlay --}}
                        <div
                            class="
                                absolute
                                inset-0
                                bg-gradient-to-t
                                from-black/30
                                via-transparent
                                to-transparent
                                pointer-events-none
                            "
                        ></div>

                    </div>


                    {{-- CONTENT --}}
                    <div
                        class="
                            relative
                            flex
                            flex-col
                            justify-start
                            items-start
                            p-10
                        "
                    >

                        {{-- badge --}}
                        <div
                            class="
                                mb-4
                            "
                        >
                            <span
                                class="
                                    text-xs
                                    font-semibold
                                    uppercase
                                    tracking-widest
                                    text-amber-800
                                "
                                x-text="selectedWork?.badge"
                            ></span>
                        </div>


                        {{-- title --}}
                        <h3
                            class="
                                font-display
                                text-4xl
                                md:text-5xl
                                leading-tight
                                font-semibold
                                text-amber-800
                                max-w-md
                            "
                            x-text="selectedWork?.title"
                        ></h3>


                        {{-- garis --}}
                        <div class="w-20 border-t-2 border-amber-500 my-7"></div>


                        {{-- text desc --}}
                        <p class="text-stone-600 leading-7 max-w-md" x-text="selectedWork?.desc" ></p>


                        {{-- optional button --}}
                        <button
                            class="
                                mt-10
                                flex
                                items-center
                                gap-3
                                text-sm
                                font-semibold
                                uppercase
                                tracking-wider
                                text-amber-800
                                group
                            "
                        >
                            View Project

                            <iconify-icon
                                icon="bi:arrow-right"
                                width="22"
                                height="22"
                                class="
                                    transition-transform
                                    duration-300
                                    group-hover:translate-x-2
                                "
                            ></iconify-icon>
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </template>

    @if (count($works) > 4)

        <div class="flex justify-center items-center mt-8">

            <button
                @click="showMore = !showMore"
                class="
                    px-5
                    py-2
                    rounded-lg
                    border-2
                    border-stone-300
                    hover:bg-stone-100
                    transition
                "
            >

                <span x-text="showMore ? 'View Less' : 'View More'">
                    View More
                </span>

            </button>

        </div>

    @endif
</div>