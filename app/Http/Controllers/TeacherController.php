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
        $imageName= $request->image->getClientOriginalName();

        $teacher = new Teacher();

        $teacher->name = request('name');
        $teacher->email = request('email');
        $teacher->phone = request('phone');
        $teacher->title = request('title');
        $teacher->image = $imageName;
        $teacher->save();

        $request->image->move(public_path('images/profiles'), $imageName);

        return redirect ($teacher->path);
    }


    public function show(Teacher $teacher)
    {
        $created = ($teacher->created_at);
        $employed = date('D d M Y', strtotime($created));

        $updated = ($teacher->updated_at);


        return view ('teachers.show', compact ('teacher', 'employed', 'updated'));

    }


    public function edit(Teacher $teacher)
    {
        return view ('teachers.edit', compact ('teacher'));
    }


    public function update(Request $request, Teacher $teacher)
    {
        $imageName= $request->image->getClientOriginalName();

        $teacher->name = request('name');
        $teacher->email = request('email');
        $teacher->phone = request('phone');
        $teacher->title = request('title');
        $teacher->image = $imageName;

        $request->image->move(public_path('images/profiles'), $imageName);

        $teacher -> save();

        return redirect () -> route ('index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher -> delete();

        return redirect () -> route ('index');
    }
}
