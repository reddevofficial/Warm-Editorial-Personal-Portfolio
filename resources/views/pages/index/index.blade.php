<div class="flex justify-center">

    <section class="w-full max-w-[95rem] relative">

        {{-- =========================
            HERO
            Diam lalu ditimpa About
        ========================== --}}
        <div class="sticky top-0 h-screen z-0">
            <livewire:pages.hero/>
        </div>


        {{-- =========================
            MAIN CONTENT
            Menimpa Hero
        ========================== --}}
        <div class="relative z-10 bg-amber-50">

            <livewire:pages.about/>

            <livewire:pages.services/>

            <livewire:pages.work/>

        </div>


        {{-- =========================
            TESTIMONI + CONTACT
            Contact menimpa Testimoni
        ========================== --}}
        <div class="relative bg-amber-50">

            {{-- Testimoni diam di belakang --}}
            <div class="sticky top-0 h-[110vh] z-10">
                <livewire:pages.testimoni/>                
            </div>


            {{-- Contact naik menimpa Testimoni --}}
            <div class="relative z-20">
                <livewire:pages.contact/>
            </div>

        </div>

    </section>

</div>