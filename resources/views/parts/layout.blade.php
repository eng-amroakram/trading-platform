@include('parts.header')
@livewireStyles
@include('parts.navbar')
@include('parts.sidebar')
<main role="main" class="main-content">
    @yield('content')
</main>
@livewireScripts
@include('parts.footer')
