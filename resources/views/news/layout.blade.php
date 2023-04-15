<!DOCTYPE html>
<html>
<head>
    <title>Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
</head>
<body> 
    <div class="container-fluid">
        @yield('content')
    </div>
    <div class="container-fluid container-footer">
        <footer>
            <p>DESENVOLVIDO POR VITOR</p>
        </footer>
    </div>
</body>
</html>