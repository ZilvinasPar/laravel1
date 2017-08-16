@extends('admin.layouts.admin')

@section('content')


    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">All Group Themes</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Files</th>
                    <th>Status</th>
                    <th>Show/hide</th>
                    <th>Edit</th>
                    <th>Delete</th>


                </tr>
                </thead>
                <tbody>

                @foreach($themes->themes as $theme)

                    <tr>
                        <td>#</td>
                        <td>{{$theme->date}}</td>
                        <td>{{$theme->name}}</td>
                        <td>{{$theme->description}}</td>

                        <td>


                            @foreach ($theme->files as $file)
                                Slides: <a href="{{route('download', $file->slides)}}">Download</a><br>
                            File: <a href="{{route('download', $file->file)}}">Download</a><br><br>
                            @endforeach

                        </td>
                        <td>{{$theme->status}}</td>

                        @if($theme->status == 'show')
                            <td>
                                <form method="post" action="{{route('hide', $theme->id)}}">
                                    {{csrf_field()}}
                                <input type="hidden" name="hide" value="hidden">
                                <button href="{{route('hide', $file->id)}}"  class="btn btn-success">Hide</button>
                                </form>
                            </td>

                            @else
                            <td>

                                <form method="post" action="{{route('show', $theme->id)}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="show" value="show">
                                    <button href="{{route('show', $file->id)}}"  class="btn btn-success">Show</button>
                                </form>

                            </td>
                        @endif

                        <td><a href="{{route('edit_theme', $theme->id)}}" class="btn btn-warning">Edit</a></td>
                        <td><a href="{{route('edit_group', $theme->id)}}" class="btn btn-danger">Delete</a></td>

                    </tr>

@endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection