@extends('masters.allElements', ['elememts' => $courses, 'modelAtributes' => ['name','startDate','endDate'], 'atributesHeader' => ['Name','Start Date','End Date']]);
@section('ModelPluralName')
    Courses
@endsection()
