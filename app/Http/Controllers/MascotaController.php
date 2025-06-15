<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function porTipo(Request $request)
    {
        $tipo = $request->input('tipo');
        $mascotas = Mascota::where('tipo', $tipo)->get();
        return view('mascotas.tipo', compact('mascotas', 'tipo'));
    }

    public function porEdad(Request $request)
    {
        $orden = $request->input('orden', 'asc');
        $mascotas = Mascota::orderBy('edad', $orden)->get();
        return view('mascotas.edad', compact('mascotas', 'orden'));
    }

    public function filtrar(Request $request)
    {
        $tipo = $request->input('tipo');
        $raza = $request->input('raza');
        $limite = $request->input('limite', 5);

        $mascotas = Mascota::where('tipo', $tipo)
            ->where('raza', $raza)
            ->limit($limite)
            ->get();

        return view('mascotas.filtrar', compact('mascotas', 'tipo', 'raza', 'limite'));
    }
}
