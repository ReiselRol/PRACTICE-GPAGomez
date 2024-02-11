@extends('masters.master')
@section('title')
    @yield('ModelSingularName')
@endsection()
@section('content')
@if (count($extraContent) == 0)
<div id="Form" class="FormEncapsuler">
@else
<div id="Form" class="FormEncapsuler2">
@endif
    <div id="FormHeader" class="formHeader">@yield('ModelSingularName') Creation</div>
    <form method="post" action="{{$initialURL}}" class="fullSize">
        @csrf 
        @if ($edit == false) 
            @method('POST')
        @else
            @method('PUT')
        @endif
        <table class="formTable">
            <thead>
                <td class="formTd"><label>@yield('ModelSingularName') name: 
                    @if ($edit == false) 
                        <input type="text" name="name" id="name"  required/></label></td>
                    @else
                        <input type="text" name="name" id="name"  value="{{$updater->name}}" required/></label></td>
                    @endif
                <td class="formTd"><label>@yield('ModelSingularName') start date: 
                    @if ($edit == false) 
                        <input type="date" name="startDate" id="startDate" required></label></td>
                    @else
                        <input type="date" name="startDate" id="startDate" value="{{$updater->startDate}}" required></label></td>
                    @endif
                <td class="formTd"><label>@yield('ModelSingularName') end date:
                    @if ($edit == false)  
                        <input type="date" name="endDate" id="endDate" required></label></td>
                    @else
                        <input type="date" name="endDate" id="endDate" value="{{$updater->endDate}}" required></label></td>
                    @endif
            </thead>
            <tr>
                @if ($edit == false) 
                    <td class="formTd"><button type="submit">Submit</button></td>
                @else
                    <td class="formTd"><button type="submit">Update</button></td>
                @endif
                <td class="formTd"></td>
                <td class="formTd"><button>clear</button></td>
            </tr>
        </table>
        @foreach($extraContent as $relation)
            <div>
                <div class="formrelationedHeader">Relationed {{$relation[0]}}</div>
                <table class="relationedTabel">
                    <tr class="InfoTableTrHeader">
                        <td colspan="3">Information</td>
                        <td rowspan="2">Actions</td>
                    </tr>
                    <tr class="InfoTableTrHeader">
                        <td>Name</td>
                        <td>Start date</td>
                        <td>End date</td>
                    </tr>
                    @foreach($relation[2] as $element)
                    <tr class="infoTR">
                        <td>{{$element->name}}</td>
                        <td class="middleTd">{{$element->startDate}}</td>
                        <td>{{$element->endDate}}</td>
                        <td class="middleTd">
                            <a href="{{$initialURL . $relation[1] . $element->id . "/edit"}}"><button class="editButton" type="button">Edit</button></a>
                            <form class="unmodifiSize" method="POST" action="{{$initialURL. $relation[1] . $element->id}}"> @csrf @method('DELETE') <button type="submit" class="deleteButton">Delete</button></form>
                        </td>
                    @endforeach
                    <tr>
                    <tr>
                        <td colspan="4" class="add"><a href="{{$initialURL . $relation[1] . "create"}}" class="adda">+</a></td></a>
                    </tr>
                </table>
            </div>
        @endforeach
        <br/>
        <br/>
        <br/>
        <br/>
    </form>
</div>
@endsection