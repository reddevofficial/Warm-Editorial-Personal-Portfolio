<div class="flex justify-center">
    <!-- container main content -->
    <section class="w-full max-w-[95rem] relative">
        <!-- hero -->
        <div class="sticky top-0 h-screen z-0">
            <livewire:pages.hero/>
        </div>

        <!-- container overlapping -->
        <div class="relative z-10 bg-[#FBF5E1]">
            <!-- about -->
            <livewire:pages.about/>

            <!-- services -->
            <livewire:pages.services/>

            <!-- work -->
            <livewire:pages.work/>

        </div>

        <!-- container overlapping -->
        <div class="relative bg-[#FBF5E1]">
            <!-- testimoni -->
            <div class="sticky top-0 h-[110vh] z-10">
                <livewire:pages.testimoni/>                
            </div>

            <!--  overlapping testimoni -->
            <div class="relative z-20">
                <div
                    class="
                        bg-[#FBF5E1]
                        p-28
                        sticky top-0 z-20
                    "
                    id="contact"
                >
                    <!-- contanct -->
                    <livewire:pages.contact/>
                </div>
            </div>

        </div>

    </section>
</div>