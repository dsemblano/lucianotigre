<header class="banner w-full z-50 top-0 left-0 bg-fundo shadow-md container">
    <div class="flex flex-row lg:text-2xl text-p container py-4 gap-4">
          {{-- <a class="brand" href="{{ home_url('/') }}">
            {!! $siteName !!}
          </a> --}}
        @include('partials.logo')
        @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                @include('partials.menu')
            </nav>
        @endif
    </div>
    <hr class="h-0.5 my-4 bg-gray-300 border-0">
</header>
