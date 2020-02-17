<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
        <title>@yield('page-title')</title>
    </head>
    <body>
        
        <header>
            @include('partials.navbar')    
        </header>
        
        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>

    </body>
</html>