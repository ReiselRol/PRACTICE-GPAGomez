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
    public function index(Course $course)
    {
        return redirect('/course/' . $course->id);
    }

    public function showAll () {
        $period = Period::all();
        return view('PeriodViews.period-index', ['periods' => $period]);
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
        return redirect('/course/' . $course->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Period $period, Course $course)
    {
        return view('PeriodViews.period-show', ['period' => $period, 'course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course, Period $period)
    {
        return view('PeriodViews.period-edit', ['period' => $period, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Course $course, Request $request, Period $period)
    {
        $period->update($request->all());
        return redirect('/course/'.$course->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period, Course $course)
    {
        $period->delete();
        return redirect('course/'.$course->id);
    }
}
