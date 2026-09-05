<div class="px-28 pb-32" id="services">
    <section class="grid grid-cols-2 gap-5">
        <div class="flex flex-col items-start justify-start gap-4">
            <!-- badge -->
            <p class="text-xs uppercase font-semibold tracking-wide">services</p>
            <!-- title -->
            <h2 class="text-5xl leading-14 font-bold font-display text-amber-700 mb-5">What I can help you create.</h2>
        </div>
        <!-- garis -->
        <section class="flex flex-col items-end gap-6" >
            <div class="w-[60%] border-[1.6px] border-amber-500" ></div>
            <div class="w-[30%] border-[1.6px] border-amber-500" ></div>
        </section>
    </section>
    <section class="mt-10 grid grid-cols-1 space-y-5">
        @php
            $services = [
                [
                    'title' => 'Brand Identify',
                    'desc' => 'Building distinctive visual identities that make brands recognizable and memorable.'
                ],
                [
                    'title' => 'UI/UX Design',
                    'desc' => 'Designing intuitive digital experiences that are simple, useful, and enjoyable to use.'
                ],
                [
                    'title' => 'Visual Design',
                    'desc' => 'Creating engaging visuals that communicate ideas clearly and consistently.'
                ]
            ]
        @endphp
        @foreach ( $services as $service )
            <div class="bg-amber-100 p-5 px-10 items-center rounded-md grid grid-cols-3">
                <div class="flex items-center gap-24 col-span-2" >
                    <!-- number -->                    
                    <p class="text-4xl text-stone-500">{{ sprintf('%02d', $loop->iteration) }}</p>
                    
                    <!-- Title -->
                    <h2 class="text-4xl tracking-wide">{{ $service['title'] }}</h2>
                </div>
                <!-- desc -->
                <div class="flex justify-end">
                    <div class="w-[270px]">
                        <p>{{ $service['desc'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>