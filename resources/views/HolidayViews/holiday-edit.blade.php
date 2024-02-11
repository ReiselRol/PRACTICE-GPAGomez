@extends('masters.allForms', ['initialURL' => "/course/" . $course->id . "/holiday/" . $holiday->id,
                              'edit' => true,
                              'updater' => $holiday,
                              'extraContent' => []])
@section('ModelSingularName')
    Holiday
@endsection()