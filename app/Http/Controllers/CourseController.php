<?php

namespace App\Http\Controllers;

use App\College;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $courses = Course::paginate(7);
        $colleges = College::all()->pluck('name', 'id');
        return view('courses.index', compact('courses', 'colleges'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del curso.',
            'teacher_name.required' => 'Es necesario ingresar el nombre del Profesor.',
            
        ];

        $rules = [
            
            'name' => 'required|min:6',
            'teacher_name' => 'required|min:5'
            
        ];

        $this->validate($request, $rules, $messages );
        

         $course = new Course;
         $course->name = $request->name;
         $course->teacher_name = $request->teacher_name;
         $course->college_id = $request->college_id;
         $course->save();
        

        if ($course) {
           
           return back()->withSuccessMessage('Se ha actualizó con éxito');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del curso.',
            'teacher_name.required' => 'Es necesario ingresar el nombre del Profesor.',
            
        ];

        $rules = [
            
            'name' => 'required|min:6',
            'teacher_name' => 'required|min:5'
            
        ];

        $this->validate($request, $rules, $messages );
        

         $course->name = $request->name;
         $course->teacher_name = $request->teacher_name;
         $course->college_id = $request->college_id;
         $course->update();
        

        if ($course) {
           
           return back()->withSuccessMessage('Se ha actualizó con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $delete = $course->delete();
        if ($delete){
            
            return back()->withSuccessMessage('Se ha eliminado con éxito');
        }
    }
}
