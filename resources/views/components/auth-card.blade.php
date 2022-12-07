<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
    <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure>
            {{ $logo }}
        </figure>
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>

