@if (session()->has('name')){
    @include('layouts.customerview')
}
@else 
{
    @include('layouts.header')
}
@endif
</header>

@yield('bread-crumbs')

<main>
    @yield('main-section')
</main>

@include('layouts.footer')