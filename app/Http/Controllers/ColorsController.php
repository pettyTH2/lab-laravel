<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function getColors()
    {
        return [
            [
                'name' => 'red',
                'shades' => ['#DE7C7D', '#CC2B52', '#AF1740', '#740938']
            ],
            [
                'name' => 'green',
                'shades' => ['#F1F3E0', '#D2DCB6', '#A1BC98', '#778873']
            ],
            [
                'name' => 'blue',
                'shades' => ['#6E8CFB', '#636CCB', '#50589C', '#3C467B']
            ]
        ];
    }

    public function index(Request $request)
    {
        $colors = $this->getColors();
        $target = strtolower($request->query('color'));
        $selectedColor = collect($colors)->firstWhere('name', $target);

        return view('colors', compact('colors', 'selectedColor'));
    }
}
