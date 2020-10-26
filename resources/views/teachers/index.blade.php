@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button" onclick="window.location='{{url("/create")}}'">
                Create Teacher
            </button>

            <ul>
                @foreach($teachers as $t)
                    <li>
                        <a href="/{{$t-> path}}">{{ $t -> name }}</a>
                    </li>
                @endforeach
            </ul>


        </div>
    </main>
@endsection
