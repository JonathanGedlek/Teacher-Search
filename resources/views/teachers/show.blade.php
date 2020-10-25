@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

           <h1 class="text-4x1">
               {{$teacher->name}}
           </h1>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button" onclick="window.location='{{url("teachers/".$teacher->id."/edit")}}'">Edit {{$teacher->name}}</button>
        </div>
    </main>
@endsection
