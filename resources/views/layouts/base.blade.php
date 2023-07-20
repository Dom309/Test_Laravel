<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="d-flex flex-column justify-content-between min-vh-100">
            @include('includes.alert')
            @include('includes.header')
                <main class="flex-grow-1 py-3">
                @yield('content')
            </main>
        
            @include('includes.footer')
            </div>
        </div>

    <script>https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js</script>
</body>
</html>