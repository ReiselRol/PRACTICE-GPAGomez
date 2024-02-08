@extends('masters.master')
@section('title')
Course Creation
@endsection()
@section('content')
    <div id="Form" class="FormEncapsuler">
        <div id="FormHeader" class="formHeader">Course Creation</div>
        <form method="post" action="/course" class="fullSize">
            @csrf @method('POST')
            <table class="formTable">
                <thead>
                    <td class="formTd"><label>Course Name: <input type="text" name="name" id="name" /></label></td>
                    <td class="formTd"><label>Start Date: <input type="date" name="startDate" id="startDate"></label></td>
                    <td class="formTd"><label>End Date: <input type="date" name="endDate" id="endDate"></label></td>
                </thead>
                <tr>
                    <td class="formTd"><button type="submit">Submit</button></td>
                    <td class="formTd"></td>
                    <td class="formTd"><button>clear</button></td>
                </tr>
            </table>
        </form>
    </div>
@endsection()