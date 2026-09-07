<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasión Cardenal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background-color: #d32f2f; color: white; padding: 15px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .container { padding: 20px; max-width: 800px; margin: 0 auto; background: white; margin-top: 20px; border-radius: 8px; }
    </style>
</head>
<body>

    <header>
        <h1>Pasión Cardenal 🦁🇮🇩</h1>
        <nav>
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('historia') }}">Historia</a>
            <a href="{{ route('partidos') }}">Próximos Partidos</a>
        </nav>
    </header>

    <div class="container">
        @yield('contenido')
    </div>

</body>
</html>