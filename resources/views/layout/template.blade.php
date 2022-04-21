<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ibimarine - @yield('title')</title>

{{-- Load Fonts Globally Developer --}}
<style>
/* Fonts */

/* Italic */
@font-face {
    font-family: 'Athelas';
    src: url('../fonts/Athelas-Italic.ttf') format('truetype');
    font-weight: 400;
    font-style: italic;
}
/* Regular */
@font-face {
    font-family: 'Athelas';
    src: url('../fonts/Athelas-Regular.ttf') format('truetype');
    font-weight: 400;
    font-style: normal;
}

/* Bold */
@font-face {
    font-family: 'Athelas';
    src: url('../fonts/Athelas-Bold.ttf') format('truetype');
    font-weight: 700;
    font-style: normal;
}
/* Bold Italic */
@font-face {
    font-family: 'Athelas';
    src: url('../fonts/Athelas-BoldItalic.ttf') format('truetype');
    font-weight: 700;
    font-style: italic;
}
html {
    font-family: Athelas;
}
</style>


    <!-- Font Awesone Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @yield('pre-css')
    
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <!-- Post Css -->
    @yield('post-css')

    </head>
    <body>

        
    <!-- Header -->
    @include('partials.header')
    
    <!-- Mobile Menu Overlay -->
    @include('partials.menuMobile')
    
    <!-- Menu Desktop -->
    @include('partials.menuDesktop')

    
    @yield('hero')

    <!-- Section Contact Only Desktop -->

    @include('partials.contactDesktop')

    <!-- Content -->
    @yield('content')

    @include('partials.contact')

    <!-- Footer -->
    @yield('footer')

    @yield('js')

    @yield('css')

    <!-- Show Menu -->
    <script>
        const closeMenuBtn = document.getElementById('menu_close');
        const openMenuBtn = document.getElementById('menu_open');
        const menuMobile = document.getElementById('menu_mobile');
    
        closeMenuBtn.addEventListener('click', closeMenu);
        openMenuBtn.addEventListener('click', openMenu)
    
        function closeMenu(){
            menuMobile.style.display = 'none';
        }
    
        function openMenu(){
            menuMobile.style.display = 'block';
        }
    </script>
    </body>
</html>
