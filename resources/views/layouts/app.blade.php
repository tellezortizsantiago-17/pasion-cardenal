<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasión Cardenal</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background: linear-gradient(135deg, #b71c1c, #d32f2f); color: white; padding: 20px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .header-content { display: flex; align-items: center; justify-content: center; gap: 15px; }
        .escudo { width: 55px; height: 55px; object-fit: contain; }
        header h1 { margin: 0; font-size: 28px; letter-spacing: 1px; font-weight: 700; }
        nav { margin-top: 15px; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; font-size: 15px; transition: opacity 0.2s; }
        nav a:hover { opacity: 0.8; text-decoration: underline; }
        .container { padding: 30px; max-width: 800px; margin: 30px auto; background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

    <header>
        <div class="header-content">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/58/Escudo_de_Independiente_Santa_Fe.png?utm_source=es.wikipedia.org&utm_campaign=index&utm_content=original" alt="Escudo Santa Fe" class="escudo">
            <h1>Pasión Cardenal 🦁</h1>
        </div>
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