@extends('admin.layouts.admin')


@section('content')





    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">All Courses</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Create date</th>
                    <th>Edit course</th>
                    <th>Delete course</th>

                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)

                <tr>
                    <td>{{$course->count()}}</td>
                    <td>{{$course->course_name}}</td>
                    <td>{{$course->created_at}}</td>
                    <td><a href="{{route('edit_course', $course->id)}}" class="btn btn-default">Edit</a></td>
                    <td><a href="{{route('delete_course', $course->id)}}" class="btn btn-danger">Delete</a></td>

                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>


    @endsection