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
                <td colspan="{{ count($atributesHeader) }}"> Information </td>
                <td rowspan="2"> Actions </td>
            </tr>
            <tr class="InfoTableTrHeader">
                @foreach($atributesHeader as $atribute)
                <td>{{$atribute}}</td>
                @endforeach()
            </tr>
            @foreach($elememts as $element)
            <tr class="infoTR">
                @php $index = 0; @endphp
                @foreach($modelAtributes as $modelAtribute)
                    @if ($index % 2 != 0) <td id ="{{'column' . $index}}" class="middleTd"><?=$element[$modelAtribute]?></td>
                    @else 
                        <td id ="{{'column' . $index}}"><?=$element[$modelAtribute]?></td>
                    @endif
                    @php $index++; @endphp
                @endforeach()
                @if ($index % 2 != 0) <td id ="{{'column' . $index}}" class="middleTd">
                @else 
                    <td id ="{{'column' . $index}}">
                @endif
                    <a href="{{$initialURL . $element->id}}"><button class="viewButton">View</button></a><br/>
                    <a href="{{$initialURL . $element->id . "/edit"}}"><button class="editButton">Edit</button></a>
                    <form class="unmodifiSize" method="POST" action="{{$initialURL . $element->id}}"> @csrf @method('DELETE') <button type="submit" class="deleteButton">Delete</button></form>
                    @if ($exportable == true)
                        <button class="exportButton">Export</button> 
                    @endif
                </td>
            </tr>
            @endforeach()
        </table>
        .
        @endif
    </div>
@endsection()
