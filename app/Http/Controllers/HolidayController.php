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
    public function index()
    {
        $holidays = Holiday::all();
        return view(['holidays' => $holidays]); /*FALTA*//* RELLENAR CON LA VISTA*/ 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(); /*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $holiday = Holiday::create($request->all());
        return redirect(); /*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Holiday $holiday, Course $course)
    {
        return view(['holiday' => $holiday, 'course' => $course]); /*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Holiday $holiday, Course $course)
    {
        return view(['holiday' => $holiday, 'course' => $course]); /*FALTA*//*RELLENAR CON LA VISTA*/
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Holiday $holiday, Course $course)
    {
        $holiday->update($request->all());
        return redirect(); /*FALTA*//*RELLENAR CON LA VISTA*//*LA RUTA HA DE SER TIPO RESOURCE, POR ESO EL COURSE*/
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Holiday $holiday, Course $course)
    {
        $holiday->delete();
        return redirect(); /*FALTA*//*RELLENAR CON LA VISTA*//*IGUAL QUE UPDATE*/
    }
}
