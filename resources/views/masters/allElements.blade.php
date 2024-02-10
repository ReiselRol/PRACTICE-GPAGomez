@extends('masters.master');
@section('title')
    All @yield('ModelPluralName')
@endsection()
@section('extraHead')
    @yield('extraHead')
@endsection()
@section('content')
    <div class="InfoEncapsuler">
        <div class="formHeader">
            All @yield('ModelPluralName')
        </div>
        @if (count($elememts) == 0)
            <div class="nothingHere">
                There are no @yield('ModelPluralName') already. <br/><br/>
            </div>
            <div class="sadFace">
                :´(
            </div>
        @else 
        <table class="InfoTable">
            <tr class="InfoTableTrHeader">
                @foreach($atributesHeader as $atribute)
                <td>{{$atribute}}</td>
                @endforeach()
            </tr>
            @foreach($elememts as $element)
            <tr>
                @php $index = 0; @endphp
                @foreach($modelAtributes as $modelAtribute)
                    @if ($index % 2 != 0) <td id ="{{'column' . $index}}" class="middleTd"><?=$element[$modelAtribute]?></td>
                    @else 
                        <td id ="{{'column' . $index}}"><?=$element[$modelAtribute]?></td>
                    @endif
                    @php $index++; @endphp
                @endforeach()
            </tr>
            @endforeach()
        </table>
        @endif
    </div>
@endsection()
