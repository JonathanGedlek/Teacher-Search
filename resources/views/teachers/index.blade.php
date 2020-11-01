@extends('layouts.app')

@section ('header')
    <div class="flex mt-5">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2" type="button" onclick="window.location='{{url("/create")}}'">
            Create Teacher
        </button>

        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded pl-10 pr-10" type="button" onclick="window.location='{{url("/")}}'">
            Home
        </button>
    </div>

@endsection

@section('content')

            <div class="flex flex-wrap mt-3">

                @foreach($teachers as $t)

                            <div class="w-1/4 pr-2">
                                @include ('_teacher')
                            </div>
                @endforeach
            </div>

            {{ $teachers -> links () }}
    <div>
        <form action="/teachers/search" method="get" role="search">
            @csrf
            <div>
                <input type="text" class="form-control" name="q"
                       placeholder="Search Teachers" autocomplete="off">

                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded" type="submit">
                        Search
                    </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded" type="button">
                    <a href="/teachers">clear</a>
                </button>
            </div>
        </form>
    </div>

@endsection
