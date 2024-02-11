@extends('masters.master')
@section('title')
    @yield('ModelSingularName')
@endsection()
@section('content')
<div id="Form" class="FormEncapsuler">
    <div id="FormHeader" class="formHeader">@yield('ModelSingularName') Creation</div>
    <form method="post" action="{{$initialURL}}" class="fullSize">
        @csrf @method('POST')
        <table class="formTable">
            <thead>
                <td class="formTd"><label>@yield('ModelSingularName') name: <input type="text" name="name" id="name"  required/></label></td>
                <td class="formTd"><label>@yield('ModelSingularName') start date: <input type="date" name="startDate" id="startDate" required></label></td>
                <td class="formTd"><label>@yield('ModelSingularName') end date: <input type="date" name="endDate" id="endDate" required></label></td>
            </thead>
            <tr>
                <td class="formTd"><button type="submit">Submit</button></td>
                <td class="formTd"></td>
                <td class="formTd"><button>clear</button></td>
            </tr>
        </table>
    </form>
</div>
@endsection