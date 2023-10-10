<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
    @include('layouts.navbar')
    </header>

    <div>
        @yield('content')
    </div>

    <div>
        @include('layouts.footer')
    </div>
</body>
</html>
