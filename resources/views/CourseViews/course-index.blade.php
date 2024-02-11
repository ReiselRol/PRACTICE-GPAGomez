@extends('masters.allElements', ['elememts' => $courses, 'modelAtributes' => ['name','startDate','endDate'],
                                 'atributesHeader' => ['Name','Start Date','End Date'],
                                 'actions' => true,
                                 'exportable' => true,
                                 'viewable' => true,
                                 'deletable' => true,
                                 'editable' => true,
                                 'initialURL' => '/course/',]);
@section('ModelPluralName')
    Courses
@endsection()
