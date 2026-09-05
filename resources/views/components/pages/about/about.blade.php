<div class="p-28 mt-40" id="about" >
    <section class="grid grid-cols-2 gap-5">
        <div class="flex flex-col items-start justify-start gap-4">
            <!-- badge -->
            <p class="text-xs uppercase font-semibold tracking-wide">about me</p>
            <!-- title -->
            <h2 class="w-[550px] text-5xl leading-14 font-bold font-display text-amber-700 mb-5">I design with purpose, not just aesthetics.</h2>
        </div>
        <!-- image -->
        <img src="{{ asset('images/second-image.png') }}" alt="" class="rounded-xl w-full h-48 object-cover">
    </section>
    <section class="grid grid-cols-2 gap-5" >
        <img src="{{ asset('images/about-image.png') }}" alt="" class="rounded-xl w-full h-[33rem] object-cover">
        <div class="flex flex-col justify-between" >
            <section class="flex justify-end mt-10">
                <div class="w-[75%]">
                    <p class="text-stone-900 text-xl text-start tracking-wider">Lorem ipsum dolor sit amet consectetur. Morbi pretium justo a id commodo molestie morbi. Massa blandit non ultrices ut. Purus rhoncus massa hendrerit aliquam.</p>
                </div>                
            </section>
            <section class="flex flex-col items-end gap-6" >
                <div class="w-[40%] border-[1.6px] border-amber-500" ></div>
                <div class="w-[60%] border-[1.6px] border-amber-500" ></div>
                <div class="w-[80%] border-[1.6px] border-amber-500" ></div>
            </section>
        </div>
    </section>
    <!-- experience -->
    <section class="mt-7" >
        <h2 class="font-display capitalize text-xl font-bold mb-3">Experience</h2>
        <div class="p-5 rounded-md bg-orange-50 border border-stone-300 grid grid-cols-3">
            @php
                $experience = [
                    [
                        'tahun' => '2024 - Present',
                        'nama' => 'Creative Designer',
                        'tempat' => 'Studio / Company Name'
                    ],
                    [
                        'tahun' => '2024 - Present',
                        'nama' => 'Creative Designer',
                        'tempat' => 'Studio / Company Name'
                    ],
                    [
                        'tahun' => '2024 - Present',
                        'nama' => 'Creative Designer',
                        'tempat' => 'Studio / Company Name'
                    ]
                ]   
            @endphp
            @foreach ($experience as $ex)
                {{-- Garis pemisah setiap selesai 3 item --}}
                @if ($loop->iteration > 1 && ($loop->iteration - 1) % 3 === 0)
                    <div class="col-span-3 mx-5 border-t border-stone-300"></div>
                @endif

                <section class="
                    relative
                    p-5
                    flex justify-center
                ">
                    {{-- Border kanan --}}
                    @if ($loop->iteration % 3 !== 0)
                        <div class="
                            absolute
                            right-0
                            top-5
                            bottom-5
                            border-r
                            border-stone-300
                        "></div>
                    @endif

                    <div class="flex flex-col gap-2">
                        <p>{{ $ex['tahun'] }}</p>

                        <p class="text-lg font-medium">
                            {{ $ex['nama'] }}
                        </p>

                        <p class="text-lg">
                            {{ $ex['tempat'] }}
                        </p>
                    </div>
                </section>
            @endforeach
        </div>
    </section>
    <!-- education -->
    <section class="mt-7" >
        <h2 class="font-display capitalize text-xl font-bold mb-3">Education</h2>
        <div class="
        p-5 
        rounded-md 
        bg-orange-50 
        border border-stone-300 
        grid grid-cols-4
        ">
            @php
                $Education = [
                    [
                        'tahun' => '2016 — 2020',
                        'nama' => 'Bachelor of Design',
                        'tempat' => 'University Name'
                    ],
                    [
                        'tahun' => '2016 — 2020',
                        'nama' => 'Bachelor of Design',
                        'tempat' => 'University Name'
                    ],
                    [
                        'tahun' => '2016 — 2020',
                        'nama' => 'Bachelor of Design',
                        'tempat' => 'University Name'
                    ],
                    [
                        'tahun' => '2016 — 2020',
                        'nama' => 'Bachelor of Design',
                        'tempat' => 'University Name'
                    ]
                ]   
            @endphp
            @foreach ($Education as $ex)
                {{-- Garis pemisah setiap selesai 4 item --}}
                @if ($loop->iteration > 1 && ($loop->iteration - 1) % 4 === 0)
                    <div class="col-span-3 mx-5 border-t border-stone-300"></div>
                @endif

                <section class="
                    relative
                    p-5
                    flex justify-center
                ">
                    {{-- Border kanan --}}
                    @if ($loop->iteration % 4 !== 0)
                        <div class="
                            absolute
                            right-0
                            top-5
                            bottom-5
                            border-r
                            border-stone-300
                        "></div>
                    @endif

                    <div class="flex flex-col gap-2">
                        <p>{{ $ex['tahun'] }}</p>

                        <p class="text-lg font-medium">
                            {{ $ex['nama'] }}
                        </p>

                        <p class="text-lg">
                            {{ $ex['tempat'] }}
                        </p>
                    </div>
                </section>
            @endforeach
        </div>
    </section>
</div>