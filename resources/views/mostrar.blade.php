<!DOCTYPE html>
<html>
<head>
    <title>{{ $titulo }}</title>
</head>
<body>
    <h1>Archivos en la carpeta {{ $titulo }}</h1>
    <ul>
        @forelse ($archivos as $archivo)
            <li>
                <a href="{{ url('/descargar?path=' . urlencode($archivo->getPathname())) }}">
                    {{ $archivo->getFilename() }}
                </a>
            </li>
        @empty
            <li>No hay archivos en esta carpeta.</li>
        @endforelse
    </ul>
</body>
</html>

