<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalattesController extends Controller
{
    public function getPalettes()
    {
        return [
            [
                'name' => 'Pastel',
                'shades' => ['#FCF8F8', '#FBEFEF', '#F9DFDF', '#F5AFAF'],
            ],
            [
                'name' => 'Vintage',
                'shades' => ['#EBE1D1', '#41644A', '#0D4715', '#E9762B'],
            ],
            [
                'name' => 'Neon',
                'shades' => ['#00FFDE', '#00CAFF', '#0065F8', '#4300FF'],
            ]
        ];
    }

    public function index($name = null)
    {
        $palettes = $this->getPalettes();
        $selectedPalette = null;

        if ($name) {
            $selectedPalette = collect($palettes)->firstWhere('name', ucfirst($name));
        }

        return view('palattes', compact('palettes', 'selectedPalette'));
    }
}
