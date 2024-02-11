<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Period;
use App\Models\Holiday;

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
        Course::create($request->all());
        return redirect('course'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $periods = Period::where(['course_id' => $course->id])->get();
        $holidays = Holiday::where(['course_id' => $course->id])->get();
        $calendar = $this->generateCalendar($course, $periods, $holidays);
        return view('CourseViews.course-show', ['course' => $course, 'periods' => $periods, 'holidays' => $holidays, 'calendar' => $calendar]); 
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

    public function generateExcel(Course $course){
        
    }

    private function generateCalendar(Course $course, $periods, $holidays) {
        $initialMonth = (int)date('m', strtotime($course->startDate));
        $initialYear = (int)date('Y', strtotime($course->startDate));

        $finishMonth = (int)date('m', strtotime($course->endDate));
        $finishYear = (int)date('Y', strtotime($course->endDate));

        $content = '<table id="AllCalendars" class="AllCalendars"><tr class="AllCalendarsTR">';
        while ($initialYear < $finishYear || ($initialYear == $finishYear && $initialMonth <= $finishMonth)) {
            
            $actualDateOfTheWhile = $initialYear . '-' .$initialMonth . '-01';
            $numberOfDays = cal_days_in_month(CAL_GREGORIAN, $initialMonth, $initialYear);
            $firstDayOfTheMonth = date('N', strtotime($actualDateOfTheWhile));
            $totalDays = 0;
            $monthName = '';
            switch ($initialMonth) {
                case 1 : $monthName = 'January'; break;
                case 2 : $monthName = 'February'; break;
                case 3 : $monthName = 'March'; break;
                case 4 : $monthName = 'April'; break;
                case 5 : $monthName = 'May'; break;
                case 6 : $monthName = 'June'; break;
                case 7 : $monthName = 'July'; break;
                case 8 : $monthName = 'August'; break;
                case 9 : $monthName = 'September'; break;
                case 10 : $monthName = 'October'; break;
                case 11 : $monthName = 'November'; break;
                case 12 : $monthName = 'December'; break;
            }
            $content .= '<td><table class="oneCalendar"><tr class="oneCalendarHeader">
            <td><img class="arrow" src="' . asset("imgs/ArrowL.png") .'" id="ArrowL"/></td>
            <td colspan="5">' . $monthName . ' - ' . $initialYear . '</td>
            <td><img class="arrow" src="' . asset("imgs/ArrowR.png") .'" id="ArrowR"/></td></tr>
            <tr class="oneCalendarHeader">
                <td class="oneCalendarHeaderTD">Monday</td>
                <td class="oneCalendarHeaderTD">Tuesday</td>
                <td class="oneCalendarHeaderTD">Wednesday</td>
                <td class="oneCalendarHeaderTD">Thursday</td>
                <td class="oneCalendarHeaderTD">Friday</td>
                <td class="oneCalendarHeaderTD">Saturday</td>
                <td class="oneCalendarHeaderTD">Sunday</td></tr>';

            for ($week = 0; $week < 5 ; $week++) {
                $content .= '<tr>';
                for ($day = 0; $day < 7; $day++) {
                    $dayContent = '';
                        if ($week == 0) {
                            if ($day < $firstDayOfTheMonth - 1) $dayContent = '';
                            else {
                                $totalDays++;
                                $dayContent = $totalDays;
                            }
                        } else if ($week == 4) {
                            if ($totalDays < $numberOfDays) {
                                $totalDays++;
                                $dayContent = $totalDays;
                            }
                            else $totalDays++;
                        } else {
                            $totalDays++;
                            $dayContent = $totalDays;
                        }
                    if ($week == 0 && $day < $firstDayOfTheMonth - 1) $content .= '<td class="oneCalendarTD unday">';
                    else if ($totalDays >= $numberOfDays + 1) $content .= '<td class="oneCalendarTD unday">';
                    else if ($day > 4) $content .= '<td class="oneCalendarTD weekend">';
                    else if ($totalDays > 0) {
                        $actualDate = $initialYear . '-' . $initialMonth . '-' . $totalDays;
                        $setted = false;
                        foreach ($holidays as $holiday) {
                            if (strtotime($actualDate) >= strtotime($holiday->startDate) && strtotime($actualDate) <= strtotime($holiday ->endDate)) {
                                $setted = true;
                                $content .= '<td class="oneCalendarTD holiday">';
                                $dayContent .= '<br/><br/>' . $holiday->name; 
                                break;
                            }
                        }
                        if ($setted == false) {
                            foreach ($periods as $period) {
                                if (strtotime($actualDate) >= strtotime($period->startDate) && strtotime($actualDate) <= strtotime($period ->endDate)) {
                                    $setted = true;
                                    $content .= '<td class="oneCalendarTD period">';
                                    $dayContent .= '<br/><br/>' . $period->name; 
                                    break;
                                }
                            }
                        }
                        if ($setted == false) $content .= '<td class="oneCalendarTD">';
                    } else $content .= '<td class="oneCalendarTD">';
                    if (!(strpos($dayContent, "<br/>") !== false)) $dayContent .= '<br/><br/><br/>';
                    $content .= $dayContent .'</td>';
                }
                $content .= '</tr>';
            }
            if ($initialMonth == 12) {
                $initialMonth = 0;
                $initialYear ++;
            } else $initialMonth ++;
            $content .= '</table></td>';
        }
        $content .= '</tr></table>';
        return $content;
    }
}
