@extends('admin.layouts.admin')

@section('content')


    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Add new group</h3>
            <form method="post">
                {{csrf_field()}}

                <label for="exampleInputEmail1">Select course name:</label>
                <div class="col-lg-12 form-group2 group-mail">

                    <select name="course_name">
            @foreach($course_name as $course)
                            <option value="{{$course->course_name}}">{{$course->course_name}}</option>
@endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Starting date</label>
                    <input type="text" name="starting_date" class="form-control" id="exampleInputEmail1" placeholder="Starting date">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ending date</label>
                    <input type="text" name="ending_date" class="form-control" id="exampleInputEmail1" placeholder="Ending date">
                </div>


                <input type="submit" class="btn btn-default" value="Edit Group">
            </form>
        </div>
    </div>
    @endsection