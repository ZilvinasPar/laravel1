@extends('admin.layouts.admin')

@section('content')


    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">All Groups</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Group Students</th>
                    <th>Group Themes</th>
                    <th>Edit group</th>
                    <th>Delete group</th>

                </tr>
                </thead>
                <tbody>
                @foreach($groups as $group)

                    <tr>
                        <td>{{$group->count()}}</td>
                        <td>{{$group->course_name}}</td>
                        <td>{{$group->start_date}}</td>
                        <td>{{$group->end_date}}</td>
                        <td><a href="{{route('group_students', $group->id)}}" class="btn btn-warning">Students</a></td>
                        <td><a href="{{route('group_themes', $group->id)}}" class="btn btn-primary">Themes</a></td>
                        <td><a href="{{route('edit_group', $group->id)}}" class="btn btn-default">Edit</a></td>
                        <td><a href="{{route('delete_group', $group->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection