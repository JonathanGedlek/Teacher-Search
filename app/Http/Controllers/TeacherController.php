<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

use Symfony\Component\Console\Input\Input;


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

    //works similar to the index function but does so with a filter given by user in the search field
    public function search(Request $request)
    {
        $q = request('q');
        if($q != ''){
            $teachers = Teacher::where('name', 'LIKE', '%'.$q. '%' ) -> paginate(self::TEACHERS_PER_PAGE);

            return view('teachers.index', ['teachers'=> $teachers]);
        }

        else{
            return redirect('/teachers');
        }
    }


    public function store(Request $request)
    {
        request() -> validate ([
            'name' => 'required|min:2|max:32',
            'email'=> 'required|email|unique:teachers',
            'phone' => 'required|numeric|min:6',
            'title' => 'required|'
        ]);



        //created a teacher object and assigned the request parameters to them manually.
        //This is so the direct name of the image is stored in the database.
        $teacher = new Teacher();

        if ($request->image !=null){
            //grabs the name of the file that the user has uploaded
            $imageName= $request->image->getClientOriginalName();
            //puts the uploaded image within a profile folder
            $request->image->move(public_path('images/profiles'), $imageName);
            $teacher->image = $imageName;
        }

        $teacher->name = request('name');
        $teacher->email = request('email');
        $teacher->phone = request('phone');
        $teacher->title = request('title');

        $teacher->save();



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
        if($request->email!= $teacher->email){
            request() -> validate ([
                'name' => 'required|min:2|max:32',
                'email'=> 'required|email|unique:teachers',
                'phone' => 'required|numeric|min:6',
                'title' => 'required|'
            ]);
        }
        else{
            request() -> validate ([
                'name' => 'required|min:2|max:32',
                'phone' => 'required|numeric|min:6',
                'title' => 'required|'
            ]);
        }



        if ($request->image !=null){
            $imageName= $request->image->getClientOriginalName();
            $request->image->move(public_path('images/profiles'), $imageName);
            $teacher->image = $imageName;
        }

        $teacher->name = request('name');
        $teacher->email = request('email');
        $teacher->phone = request('phone');
        $teacher->title = request('title');

        $teacher -> save();

        return redirect () -> route ('index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher -> delete();

        return redirect () -> route ('index');
    }



}
