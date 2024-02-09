@extends('masters.master')
@section('title')
Holiday Creation
@endsection()

@section('content')
    <div id="Form" class="FormEncapsuler">
        <div id="FormHeader" class="formHeader">Holiday Creation</div>
        <form method="post" action="/course/<?=$courseId?>/holiday" class="fullSize">
            @csrf @method('POST')
            <table class="formTable">
                <thead>
                    <td class="formTd"><label>Holiday Name: <input type="text" name="name" id="name"  required/></label></td>
                    <td class="formTd"><label>Start Date: <input type="date" name="startDate" id="startDate" required></label></td>
                    <td class="formTd"><label>End Date: <input type="date" name="endDate" id="endDate" required></label></td>
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