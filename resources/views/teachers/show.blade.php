@extends('layouts.app')

@section('header')
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold mt-5 ml-5 py-2 px-4 rounded pl-10 pr-10" type="button" onclick="window.location='{{url("/teachers")}}'">
        Back
    </button>
@endsection

@section('content')
    <section class="flex flex-col break-words mt-4 bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
        <main class="sm:container sm:mx-auto sm:mt-5 sm:mb-5 sm:px-6 flex">
            <div class="w-full">
                <h1 class="text-2xl font-bold">
                    {{$teacher->title . $teacher->name}}
                </h1>
                <div class="mt-5">
                    <p>Email: {{$teacher->email}}</p>
                    <p>Phone: {{$teacher->phone}}</p>
                </div>

            </div>
        <div>
            <img src="{{ asset ('images/logo-hirez.png') }}" onerror="this.src='{{ asset ('images/logo-hirez.png') }}'" width="300" />
        </div>
        </main>
        <div class = "ml-3 mb-3">
            <div>
                <p>Date of Employment: {{$employed}}</p>
            </div>
            <div>
                <p>Last Updated: {{$updated}}</p>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button" onclick="window.location='{{url("teachers/".$teacher->id."/edit")}}'">
        Edit {{$teacher->name}}
    </button>
    <form class="inline" method="post" action="{{$teacher->id}}">
        @method ('DELETE')
        @csrf
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">
            Delete Teacher
        </button>
    </form>
@endsection
