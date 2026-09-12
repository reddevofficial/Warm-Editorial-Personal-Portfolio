<div
    class="
        bg-amber-50
        p-28
        sticky top-0 z-20
        h-screen
    "
    id="contact"
>

    <section class="grid grid-cols-2 gap-5 bg-amber-50">
        <div>
            <!-- container title -->
            <section class="flex flex-col items-start justify-start gap-4">
                <!-- badge -->
                <p class="text-xs uppercase font-semibold tracking-wide">contact</p>
                <!-- title -->
                <h2 class="text-5xl leading-14 font-bold font-display text-amber-700 mb-2">Let's work together.</h2>
                <!-- garis -->
                <div class="w-60 border-t-2 border-amber-500 my-1"></div>
                <!-- desc -->
                <p class="text-stone-800 w-72 my-10">Have a project in mind? Let's talk about how we can bring your ideas to life.</p>
                <!-- contact list -->
                <div class="flex flex-col space-y-6">
                    @php
                        $contact = [
                            [
                                'icon' => 'mdi:instagram',
                                'name' => 'instagram',
                                'link' => '@rinaputri.design',
                            ],
                            [
                                'icon' => 'simple-icons:behance',
                                'name' => 'behance',
                                'link' => 'behance.net/rinaputri',
                            ],
                            [
                                'icon' => 'mdi:pinterest',
                                'name' => 'pinterest',
                                'link' => 'pinterest.com/rinaputri',
                            ],
                            [
                                'icon' => 'simple-icons:gmail',
                                'name' => 'gmail',
                                'link' => 'hello@rinaputri.com',
                            ],
                        ]
                    @endphp
                    @foreach ( $contact as $contact )
                        <section class="flex gap-4 items-center">
                            <div class="shadow-xs flex justify-center items-center w-14 h-14 p-1 rounded-full bg-amber-100">
                                <iconify-icon icon="{{ $contact['icon'] }}" width="32" height="32" class="text-amber-700" />
                            </div>
                            <div>
                                <p>{{ $contact['name'] }}</p>
                                <p class="text-stone-700 text-sm">{{ $contact['link'] }}</p>
                            </div>
                        </section>                        
                    @endforeach
                </div>
            </section>

        </div>
        <!-- IMAGE -->
        <img src="{{ asset('images/contact-image.png') }}" class="object-cover rounded-2xl h-4xl" alt="contact image">
    </section>

</div>