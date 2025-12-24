@extends('layouts.main')

@section('content')
    <div class="grid md:grid-cols-3 items-center gap-25 p-10">
        <a href="/palettes/pastel">
            <box class="md:text-4xl bg-[#F9DFDF] rounded-md items-center flex flex-col justify-center h-60 p-6 hover:scale-105 hover:shadow-xl/30 hover:cursor-pointer hover:duration-200">
                pastel
            </box>
        </a>
        <a href="/palettes/vintage">
            <box class="md:text-4xl bg-[#41644A] rounded-md items-center flex flex-col justify-center h-60 p-6 hover:scale-105 hover:shadow-xl/30 hover:cursor-pointer hover:duration-200">
                vintage
            </box>
        </a>
        <a href="/palettes/neon">
            <box class="md:text-4xl bg-[#00CAFF] rounded-md items-center flex flex-col justify-center h-60 p-6 hover:scale-105 hover:shadow-xl/30 hover:cursor-pointer hover:duration-200">
                neon
            </box>
        </a>
    </div>

    @if($selectedPalette)
        <div class="flex items-center justify-center p-10">
            <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold">{{ $selectedPalette['name'] }}</h2>
                    <a href="/palettes" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</a>
                </div>
                <div class="space-y-3">
                    @foreach($selectedPalette['shades'] as $shade)
                        <div class="h-16 rounded-md flex items-center justify-center text-white font-semibold" style="background-color: {{ $shade }}">
                            {{ $shade }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection