<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.header')
    @yield('style')
</head>
<body>
    <div id="app">
        <main class="main-container">
            @yield('content')
        </main>
    </div>
    @include('includes.footer')
    @yield('script') 
</body>
</html>