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
        return view();/*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();/*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return redirect(); /*FALTA*//*RELLENAR CON LA VISTA*//*TIENE QUE LLEVAR A COURSE->INDEX*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $periods = $course->period();
        $holidays = $course->holiday();
        return view(['course' => $course, 'periods' => $periods, 'holidays' => $holidays]); /*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view(['course' => $course]); /*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect(); /*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(); /*FALTA*//*RELLENAR CON LA VISTA*/
    }
}
