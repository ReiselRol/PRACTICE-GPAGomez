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
        $period = Period::where(['course_id' => $course->id]);
        return view('PeriodViews.period-index', ['$period' => $period]);
    }

    public function showAllPeriod()
    {
        $period = Period::all();
        return view('PeriodViews.period-index', ['period' => $period]);
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
        $courseDate1 = $course->startDate;
        $courseDate2 = $course->endDate;
        $period = new Period($request->all());
        $date1 = $period->stateDate;
        $date2 = $period->endDate;

        if (($courseDate2 >= $date1) && ( $date1 >= $courseDate1) && ($courseDate2 >= $date1)&&( $date1 >= $courseDate1) && ($date1 <= $date2)) {
            $period->course_id = $course->id;
            $period->save();
            return redirect('/course/' . $course->id);
        }
        else{
            return redirect('/course/' . $course->id . '/create');
        }
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
    public function edit(Period $period, Course $course)
    {
        return view('PeriodViews.period.edit', ['period' => $period, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Period $period, Course $course)
    {
        $period->update($request->all());
        return redirect('course/' . $course->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period, Course $course)
    {
        $period->delete();
        return redirect('course/' . $course->id);
    }
}
