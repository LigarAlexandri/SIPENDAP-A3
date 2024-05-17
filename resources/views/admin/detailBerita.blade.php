@extends('layout.admin')

@section('container')

    <div class="flex-col">
        <div>
            <p class="">DETAIL BERITA SIPENDAP</p>
        </div>
        <div class="flex justify-center items-center w-full md:w-auto md:max-w-[1100px] h-full ml-80 mt-20 bg-white rounded-lg shadow-lg p-6">
            <div class="w-full flex flex-col">
                <div class="mt-4 mb-4">
                    <h1 class="text-2xl font-bold text-gray-00 text-center">
                        {{ $broadcastBerita->judul }}
                    </h1>
        
                    <div class="flex w-full items-center justify-center mt-4">
                        <img src="{{ url('img/' . $broadcastBerita->thumbnail) }}" class="w-full max-w-[720px] rounded-lg">
                    </div>
        
                    <div class="flex h-full items-center justify-center mt-4">
                        <p class="text-justify px-4">
                            {{ $broadcastBerita->isi_berita }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        body {
            background-image: linear-gradient(#72B944, #FFFFFF);
        }
    </style>
@endsection
