<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{

    public function home(){
        $data = [
            'name'=>'prasoon',
            'age'=>'16'
        ];
    }

    public function profile()
    {
        $data = [
            'username' => 'Prasoon',
        ];
        return view('profile')->with ($data);

    }


    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new Student();
        $student->Name = $request->name;
        $student->Address = $request->address;
        $student->Age = $request->age;
        $Image = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $Image->save('storage/image/'.$filename);
        $student->image = $filename;
        $student->save();
        return redirect('/list');

    }

    public function list(){
        $students = Student::get();
        return view ('list')->with('students',$students);
    }

    public function edit($id){
        $student = Student::where('id',$id)->first();
        return view('update')->with('student',$student);
    }

    public function update(Request $request){
        $student = Student::where('id',$request->id)->first();
        $student->name = $request->Name;
        $student->address = $request->Address;
        $student->age = $request->Age;
    }
}
