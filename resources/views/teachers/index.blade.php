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

            <div class="flex flex-wrap">

                @foreach($teachers as $t)

                            <div class="w-1/4 pr-2">
                                @include ('_teacher')
                            </div>


                @endforeach
            </div>

            {{ $teachers -> links () }}

@endsection
