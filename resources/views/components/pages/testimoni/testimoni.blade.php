<div class="relative">
    <div class="px-28">
        <section class="grid grid-cols-2 gap-5">
            <div class="flex flex-col items-start justify-start gap-4">
                <!-- badge -->
                <p class="text-xs uppercase font-semibold tracking-wide">TESTIMONIALS</p>
                <!-- title -->
                <h2 class="text-5xl leading-14 font-bold font-display text-amber-700 mb-5">What people say.</h2>
            </div>
            <!-- garis -->
            <section class="flex flex-col items-end gap-6" >
                <div class="w-[60%] border-[1.6px] border-amber-500" ></div>
                <div class="w-[30%] border-[1.6px] border-amber-500" ></div>
            </section>
        </section>
        <section
            class="
                testimonial-section
                bg-[#FBF5E1]
                py-20
                overflow-hidden
            "
        >
            @php
                $testimonials = [
                    [
                        'quote' => 'Rina brought clarity to our ideas and delivered design that felt polished, confident, and completely on-brand.',
                        'name' => 'Maya Chen',
                        'role' => 'Founder, Aster',
                    ],
                    [
                        'quote' => 'Rina understood our vision from the start and turned it into a visual identity that felt exactly right for our brand.',
                        'name' => 'Sarah Wijaya',
                        'role' => 'Founder, Luma',
                    ],
                    [
                        'quote' => 'Working with Rina was such a great experience. She took the time to understand what we were trying to communicate, brought thoughtful ideas to the table, and translated everything into a visual direction that felt both intentional and fresh. She was open to feedback throughout the process and always managed to keep the design aligned with our goals.',
                        'name' => 'Daniel Hart',
                        'role' => 'Marketing Director, Noma',
                    ],
                    [
                        'quote' => 'Working with Rina was such a great experience. She took the time to understand what we were trying to communicate.',
                        'name' => 'Daniel Hart',
                        'role' => 'Marketing Director, Noma',
                    ],
                    [
                        'quote' => 'Working with Rina was such a great experience. She took the time to understand what we were trying to communicate.',
                        'name' => 'Daniel Hart',
                        'role' => 'Marketing Director, Noma',
                    ],
                    [
                        'quote' => 'Working with Rina was such a great experience. She took the time to understand what we were trying to communicate.',
                        'name' => 'Daniel Hart',
                        'role' => 'Marketing Director, Noma',
                    ],
                ];
            @endphp
    
    
            {{-- area slider + fade kiri kanan --}}
            <div
                class="
                    overflow-hidden
                    [mask-image:linear-gradient(to_right,transparent,black_15%,black_85%,transparent)]
                    [-webkit-mask-image:linear-gradient(to_right,transparent,black_15%,black_85%,transparent)]
                "
            >
    
                <div class="swiper testimonial-swiper">
    
                    <div class="swiper-wrapper">
    
                        @foreach ($testimonials as $item)
    
                            <article
                                class="
                                    swiper-slide
                                    w-[380px]
                                "
                            >
                                <div class="max-w-[380px]">
    
                                    {{-- Quote --}}
                                    <p
                                        class="
                                            text-stone-800
                                            text-lg
                                            leading-7
                                        "
                                    >
                                        “{{ $item['quote'] }}”
                                    </p>
            
            
                                    {{-- Author --}}
                                    <div class="mt-5">
            
                                        <p class="text-sm text-stone-700">
                                            {{ $item['name'] }}
                                        </p>
            
                                        <p class="text-sm text-stone-500">
                                            {{ $item['role'] }}
                                        </p>
            
                                    </div>
                                </div>
                            </article>
    
                        @endforeach
    
                    </div>
    
                </div>
    
            </div>
    
    
            {{-- Pagination --}}
            <div
                class="
                    testimonial-pagination
                    mt-6
                    flex
                    justify-center
                    items-center
                "
            ></div>
        </section>
        
    </div>
    <img src="{{ asset('images/bg-testi.webp') }}" 
        class="
            object-cover 
            w-full  absolute 
            -bottom-48 z-0 
            drop-shadow-2xl 
            pointer-events-none"  alt="">
</div>