<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;
use App\Models\Course;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        return redirect('/course/' . $course->id);
    }

    public function showAll () {
        $holidays = Holiday::all();
        return view('HolidayViews.holiday-index', ['holidays' => $holidays]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('holidayViews.holiday-create', ['courseId' => $course->id]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course)
    {
        $holiday = new Holiday($request->all());
        $holiday->course_id = $course->id;
        $holiday->save();

        return redirect('/course/'.$course->id); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Holiday $holiday, Course $course)
    {
        return view('HolidayViews.holiday-show',['holiday' => $holiday, 'course' => $course]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Holiday $holiday, Course $course)
    {
        return view('HolidayViews.holiday-edit',['holiday' => $holiday, 'course' => $course]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Holiday $holiday, Course $course)
    {
        $holiday->update($request->all());
        return redirect('course/'.$course->id); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Holiday $holiday, Course $course)
    {
        $holiday->delete();
        return redirect('course/'.$course->id); 
    }
}
