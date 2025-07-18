<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index($section)
    {
        
        $availableSections = [
            'virtual-office',
            'private-office',
            'shared-office',
            'pembuatan-pt-cv',
            'paket-hemat',
        ];

        // Validasi jika section tidak ditemukan
        if ($section && !in_array($section, $availableSections)) {
            return abort(404);
        }

        return view('layanan', compact('section'));
    }
}