<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('CourseViews.course-index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CourseViews.course-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $isDateReal = false;
        $info = $request->all();

        $date1 = strtotime($info['startDate']);
        $date2 = strtotime($info['endDate']);

        if($date1 > $date2) $isDateReal = false;
        else $isDateReal = true;
        
        if($isDateReal){
            $course = Course::create($request->all());
            return redirect('course'); 
        }
        else{
            return redirect('/course/create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $periods = $course->period();
        $holidays = $course->holiday();
        return view('CourseViews.course-show', ['course' => $course, 'periods' => $periods, 'holidays' => $holidays]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('CourseViews.course-edit', ['course' => $course]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect('course/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('course/'); 
    }

    public function generateJson(Course $course){
        
    }
}
