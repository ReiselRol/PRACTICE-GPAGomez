@extends('masters.allElements', ['elememts' => $courses, 'modelAtributes' => ['name','startDate','endDate'],
                                 'atributesHeader' => ['Name','Start Date','End Date'],
                                 'exportable' => true,
                                 'initialURL' => '/course/']);
@section('ModelPluralName')
    Courses
@endsection()
