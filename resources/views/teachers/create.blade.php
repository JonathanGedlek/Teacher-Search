@extends('layouts.app')

@section('content')
<form class="w-full max-w-lg" method="post" action="/teachers">
    @csrf

    <div class="flex flex-wrap">
        <div class="w-full">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
            Full Name
        </label>

        <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('name') border border-red-500 @enderror"
               type="text" name="name" data-lpignore="true" autocomplete="off" placeholder="John Smith"/>

        @error ('name')
        <div class ="alert-message">
            {{ message }}
        </div>
        @enderror
        </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            Title
        </label>
        <div class="relative">
            <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Dr.">Dr.</option>
                <option value="Miss">Miss</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Prof.">Prof.</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4"  viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                Email
            </label>

            <input class ="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error ('email') border border-red-500 @enderror"
                   type="text" name="email" data-lpignore="true" autocomplete="off" placeholder="J.smith@gmail.com"/>

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
                   type="text" name="phone" data-lpignore="true"  autocomplete="off" placeholder="Mobile/Home"/>

            @error ('phone')
            <div class ="alert-message">
                {{ message }}
            </div>
            @enderror
        </div>
    </div>

    <div>

    </div>
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">
        Create Teacher
    </button>
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button">
        <a href="/teachers">Cancel</a>
    </button>

</form>
@endsection
