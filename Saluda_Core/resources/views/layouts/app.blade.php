<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALUDA - Centro Médico Familiar</title>
    
    <!-- Estilos CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Variables CSS -->
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #4f46e5;
            --accent-color: #06b6d4;
            --text-color: #334155;
            --white: #ffffff;
            --background: #f8fafc;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <div class="loader">
        <div class="loading-spinner"></div>
        <div class="loading-text">Cargando Centro Médico Familiar...</div>
    </div>

    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script type="text/javascript">
        $(window).on('load', function() {
            $(".loader").fadeOut(2000);
        });
    </script>
    
    @yield('scripts')
</body>
</html> 