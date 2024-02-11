@extends('masters.allForms', ['initialURL' => '/course/' . $courseId ."/holiday",
                              'edit' => false,
                              'extraContent' =>[]])
@section('ModelSingularName')
    Holiday
@endsection()