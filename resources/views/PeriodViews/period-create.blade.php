@extends('masters.allForms', ['initialURL' => '/course/' . $courseId ."/period",
                              'edit' => false, 
                              'extraContent' =>[]])
@section('ModelSingularName')
    Period
@endsection()