@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">



        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Hello {{Auth::user()->name}}</div>

                <div class="panel-body">
                    <!-- CHECK IF ACCOUNT IS APPROVED -->
                    @if(Auth::user()->status == 'unapproved')
                    <h1 style="text-align: center;">You need to activate your account</h1>

                        @endif

                    <!-- IF APPROVED DO THIS! -->
                    @if(Auth::user()->status == 'approved')


                        <!-- IF STUDENT RETURN STUDENT INTERFACE -->
                        @if(Auth::user()->user_role == 'student' || Auth::user()->user_role == 'teacher')


                                <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                                    <div class="panel-heading">
                                        <h2 style="text-align: center;">You have joined these groups</h2>
                                        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
                                    </div>
                                    <div class="panel-body no-padding" style="display: block;">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="warning">
                                                <th>#</th>
                                                <th>Course Name</th>
                                                <th>Starting date</th>
                                                <th>Ending date</th>
                                                <th>Group Themes</th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($students->hasGroups as $group)

                                                <tr>
                                                    <td>#</td>
                                                    <td>{{$group->course_name}}</td>
                                                    <td>{{$group->start_date}}</td>
                                                    <td>{{$group->end_date}}</td>
                                                    <td><a href="{{route('themes', $group->id)}}" class="btn btn-success">View Group Themes</a></td>


                                                </tr>
@endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                        @endif

                        <!-- IF TEACHER RETURN TEACHER INTERFACE -->



                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
