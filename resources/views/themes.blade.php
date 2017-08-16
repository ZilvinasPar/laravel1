@extends('layouts.app')


@section('content')




    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2 style="text-align: center;">{{$themes->course_name}} - Themes</h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <table class="table table-striped">
                <thead>
                <tr class="warning">
                    <th>#</th>
                    <th>Theme Name</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Files</th>



                </tr>
                </thead>
                <tbody>


                @foreach ($themes->themes as $theme)
                    @if($theme->status == 'show')

                    <tr>
                        <td>{{$theme->id}}</td>
                        <td>{{$theme->name}}</td>
                        <td>{{$theme->date}}</td>
                        <td>{{$theme->description}}</td>
                        <td>


                            @foreach ($theme->files as $file)
                                Slides: <a href="{{route('downloading', $file->slides)}}">Download</a><br>
                                File: <a href="{{route('downloading', $file->file)}}">Download</a><br>
                            @endforeach

                        </td>


                    </tr>
                    @endif
                @endforeach

                </tbody>
            </table>
        </div>
    </div>


    @endsection