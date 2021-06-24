{{-- @extends('components.header')
<section class="min-h-screen grid place-items-center bg-gray-100">
        @yield('content')
    </section>
@extends('components.footer') --}}
@extends('components.header')
<div id="app">
    {{-- <section class="min-h-screen grid place-items-center bg-gray-100">
        @yield('content')
    </section> --}}
    {{-- <example-component></example-component> --}}
    @yield('content')
</div>
@extends('components.footer')