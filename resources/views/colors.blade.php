@extends('layouts.main')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        @if($selectedColor)
        <div class="text-3xl font-bold capitalize">{{ $selectedColor['name'] }}
            <div class="flex flex-wrap justify-center mt-5">
                @foreach($selectedColor['shades'] as $shade)
                    <div class="h-96 w-64 flex items-center justify-center text-white font-semibold"
                        style="background-color: {{ $shade }}">
                        {{ $shade }}
                    </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="text-xl font-bold"> Please select a color in the URL (colors?color=red, green, blue)</div>
        @endif
    </div>
@endsection