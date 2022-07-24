<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('includes.frontend.meta')

    <title>@yield('title') | bpSmart</title>

    @stack('before-style')

    @include('includes.frontend.style')

    @stack('after-style')

</head>

<body class="antialiased">
    <div class="relative">

        @include('includes.frontend.header')

        {{-- @include('sweetalert::alert') --}}

        @yield('content')

        @include('includes.frontend.footer')

        @stack('before-script')

        @include('includes.frontend.script')

        @stack('after-script')

        <!-- modal -->
        @include('components.modal.login')

        @include('components.modal.register')

        @include('components.modal.register-success')

    </div>
</body>

</html>
