@extends('masters.allForms', ['initialURL' => "/course/" . $course->id,
                              'edit' => true,
                              'updater' => $course,
                              'extraContent' => [['Period', "/period/", $periods], ['Holiday', "/holiday/",$holidays]]])
@section('ModelSingularName')
    Course
@endsection()