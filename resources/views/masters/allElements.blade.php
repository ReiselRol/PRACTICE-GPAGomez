@extends('masters.master');
@section('title')
    @yield('title')
@endsection()
@section('extraHead')
    @yield('extraHead')
@endsection()
@section('content')
    <div class="InfoEncapsuler">
        <div class="formHeader">
            @yield('title')
        </div>
        <table class="InfoTable">
            <tr class="InfoTableTrHeader">
                <td>Name</td>
                <td>Start Date</td>
                <td>End Date</td>
            </tr>
            @yield('elements')
        </table>
    </div>
@endsection()
