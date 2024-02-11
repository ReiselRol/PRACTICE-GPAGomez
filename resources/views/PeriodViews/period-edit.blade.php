@extends('masters.allForms', ['initialURL' => "/course/" . $course->id . "/period/" . $period->id,
                              'edit' => true,
                              'updater' => $period,
                              'extraContent' => []])
@section('ModelSingularName')
    Period
@endsection()