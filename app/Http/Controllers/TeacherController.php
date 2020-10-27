<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    const TEACHERS_PER_PAGE = 9;

    public function index()
    {
        $teachers = Teacher::query() ->orderBy('name', 'asc') -> paginate (self::TEACHERS_PER_PAGE);

        return view('teachers.index', ['teachers'=> $teachers]);
    }


    public function create()
    {
        return view('teachers.create');
    }


    public function store(Request $request)
    {
        $attributes = $request -> all (
            'name',
            'email',
            'phone',
            'title'
        );

        $teacher = Teacher::create ($attributes);

        return redirect ($teacher->path);
    }


    public function show(Teacher $teacher)
    {

        return view ('teachers.show', compact ('teacher'));
    }


    public function edit(Teacher $teacher)
    {
        return view ('teachers.edit', compact ('teacher'));
    }


    public function update(Request $request, Teacher $teacher)
    {
        $attributes = request() -> all ('name', 'email', 'phone', 'title');

        $teacher -> update ($attributes);

        return redirect () -> route ('index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher -> delete();

        return redirect () -> route ('index');
    }
}
