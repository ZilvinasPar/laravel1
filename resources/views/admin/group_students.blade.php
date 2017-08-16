@extends('admin.layouts.admin')

@section('content')

    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">Students</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone number</th>
                    <th>Edit student</th>
                    <th>Delete student</th>

                </tr>
                </thead>
                <tbody>

                    @foreach($group->students as $student)
                    <tr>
                        <td>#</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->surname}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone_number}}</td>
                        <td><a href="" class="btn btn-default">Edit</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>

                    </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection