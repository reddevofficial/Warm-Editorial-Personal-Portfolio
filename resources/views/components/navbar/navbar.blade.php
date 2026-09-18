<div class="px-28 py-4 flex justify-between bg-[#FBF5E1] border-b-2 border-amber-600 w-full" >
    <!-- title -->
    <h1 class="font-bold font-display text-2xl capitalize">rina putri</h1>

    <!-- daftar menu -->
    <div class="flex gap-10 items-center">
        @foreach (['home','about','services','work','contact'] as $menu )
            <a 
            @if ($menu != 'home')
                href="#{{$menu}}"
            @else
                href="#"
            @endif
            >
                <p class="capitalize" >{{$menu}}</p>
            </a>
        @endforeach
    </div>
</div>