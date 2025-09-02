<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

Route::get('/roles', function () {
    $archivos = File::files(base_path('Roles'));
    return view('mostrar', ['archivos' => $archivos, 'titulo' => 'Roles']);
});

Route::get('/documentos', function () {
    $archivos = File::files(base_path('Documentos'));
    return view('mostrar', ['archivos' => $archivos, 'titulo' => 'Documentos']);
});

Route::get('/contenidos', function () {
    $archivos = File::files(base_path('Contenidos'));
    return view('mostrar', ['archivos' => $archivos, 'titulo' => 'Contenidos']);
});
Route::get('/descargar', function (\Illuminate\Http\Request $request) {
    $path = $request->query('path');

    if (File::exists($path)) {
        return Response::download($path);
    } else {
        abort(404, 'Archivo no encontrado');
    }
});
