<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Course;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PeriodViews.period-index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {

        return view('PeriodViews.period-create', ['courseId' => $course->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course)
    {
        $period = new Period($request->all());
        $period->course_id = $course->id;
        $period->save();
        return redirect('/course/'.$course->id.'/period');
    }

    /**
     * Display the specified resource.
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Period $period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period)
    {
        //
    }
}
