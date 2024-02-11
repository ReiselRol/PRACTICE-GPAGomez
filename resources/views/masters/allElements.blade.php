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
                @if ($actions == true)
                    <td rowspan="2"> Actions </td>
                @endif
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
                @if ($actions == true)
                    @if ($index % 2 != 0) <td id ="{{'column' . $index}}" class="middleTd">
                    @else 
                        <td id ="{{'column' . $index}}">
                    @endif
                        @if ($viewable == true)
                        <a href="{{$initialURL . $element->id}}"><button class="viewButton">View</button></a><br/>
                        @endif
                        @if ($editable == true)
                            <a href="{{$initialURL . $element->id . "/edit"}}"><button class="editButton">Edit</button></a>
                        @endif
                        @if ($deletable == true)
                            <form class="unmodifiSize" method="POST" action="{{$initialURL . $element->id}}"> @csrf @method('DELETE') <button type="submit" class="deleteButton">Delete</button></form>
                        @endif
                        @if ($exportable == true)
                            <button class="exportButton">Export</button> 
                        @endif
                    </td>
                @endif
            </tr>
            @endforeach()
        </table>
        .
        @endif
    </div>
@endsection()
