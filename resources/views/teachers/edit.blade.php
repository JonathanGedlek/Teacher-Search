@extends('layouts.app')

@section('content')
    <form class="w-full max-w-lg" method="post" action="{{$teacher->path}}" enctype="multipart/form-data">


        @csrf

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Full Name
                </label>

                <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true" autocomplete="off" value="{{$teacher->name}}"/>

                @error ('name')
                <div class ="alert-message">
                    {{ message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Title
                </label>

                <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('title') border border-red-500 @enderror"
                       type="text" name="title" data-lpignore="true" autocomplete="off" value="{{$teacher->title}}"/>

                @error ('title')
                <div class ="alert-message">
                    {{ message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>

                <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('email') border border-red-500 @enderror"
                       type="text" name="email" data-lpignore="true" autocomplete="off" value="{{$teacher->email}}"/>

                @error ('email')
                <div class ="alert-message">
                    {{ message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                    Phone
                </label>

                <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('phone') border border-red-500 @enderror"
                       type="text" name="phone" data-lpignore="true"  autocomplete="off" value="{{$teacher->phone}}"/>

                @error ('phone')
                <div class ="alert-message">
                    {{ message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <input type="file" name="image" class="form-control">
            </div>



        </div>

        <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="submit">
            Update Teacher
        </button>

        <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
           <a href="/teachers">Cancel</a>
        </button>
    </form>
@endsection
