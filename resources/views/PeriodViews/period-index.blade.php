@extends('masters.allElements', ['elememts' => $periods, 'modelAtributes' => ['name','startDate','endDate'],
                                 'atributesHeader' => ['Name','Start Date','End Date'],
                                 'actions' => false,
                                 'exportable' => false,
                                 'viewable' => false,
                                 'deletable' => false,
                                 'editable' => false,
                                 'initialURL' => '/course/',]);
@section('ModelPluralName')
    Periods
@endsection()