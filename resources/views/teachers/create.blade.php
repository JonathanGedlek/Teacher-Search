@extends('layouts.app')

@section('content')
<form class="w-full max-w-lg" method="post" action="/teachers" enctype="multipart/form-data">
    @csrf

    @if (count($errors) > 0)
        <div class="mb-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <div class="w-full mt-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Full Name
            </label>

            <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('name') border border-red-500 @enderror"
                   type="text" name="name" data-lpignore="true" autocomplete="off" placeholder="John Smith"/>
        </div>
    </div>

    <div>
        <div class="w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-3" for="title">
                Title
            </label>

            <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('title') border border-red-500 @enderror"
                   type="text" name="title" data-lpignore="true" autocomplete="off" placeholder="Mr. Ms. Dr."/>
        </div>
    </div>

    <div>
        <div class="w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-3" for="email">
                Email
            </label>

            <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('email') border border-red-500 @enderror"
                   type="text" name="email" data-lpignore="true" autocomplete="off" placeholder="J.smith@gmail.com"/>
        </div>
    </div>

    <div>
        <div class="w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-3" for="phone">
                Phone
            </label>

            <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('phone') border border-red-500 @enderror"
                   type="text" name="phone" data-lpignore="true"  autocomplete="off" placeholder="Mobile/Home"/>
        </div>
    </div>

    <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-3" for="image">
            New Image
        </label>
        <div class="col-md-6">
            <input type="file" name="image" class="form-control">
        </div>
    </div>

    <div class="mt-3">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">
            Create Teacher
        </button>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button">
            <a href="/teachers">Cancel</a>
        </button>
    </div>

</form>
@endsection
