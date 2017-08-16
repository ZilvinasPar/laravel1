@extends('admin.layouts.admin')


@section('content')


    <div class="grid-form">
        <div class="grid-form1">
            <h3 style="text-align: center;" id="forms-example" class="">Add new course</h3>
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Course name</label>
                    <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" placeholder="Course name">
                </div>


                <input type="submit" class="btn btn-default" value="Add Course">
            </form>
        </div>
        </div>


    @endsection